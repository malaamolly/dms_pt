<?php

namespace App\Http\Controllers;
use carbon\carbon;
use App\Models\Client;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    // tampil data dokumen
    public function index()
{
    $documents = Document::with('client')->get();

    return view('documents.index', compact('documents'));
}

    // halaman upload
    public function create()
    {
        $clients = Client::all();

        return view('documents.create', compact('clients'));
    }

    // simpan dokumen
    public function store(Request $request)
{
    $request->validate([

        'client_id' => 'required',
        'title' => 'required',
        'file' => 'required|mimes:pdf',
        'expired_date' => 'required',

    ]);

    $expiredDate = Carbon::parse($request->expired_date);

    $status = 'Aktif';

    if ($expiredDate->isPast()) {

        $status = 'Expired';

    }
    elseif (now()->diffInDays($expiredDate, false) <= 7) {

        $status = 'Warning';

    }

    // upload file
    $filePath = $request->file('file')
        ->store('documents', 'public');

    Document::create([

        'client_id' => $request->client_id,
        'title' => $request->title,
        'file_path' => $filePath,
        'status' => $status,
        'expired_date' => $request->expired_date,

    ]);

    return redirect()->route('documents.index')
        ->with('success', 'Dokumen berhasil diupload');
}public function view($id)
{
    $document = Document::findOrFail($id);

    return response()->file(
        storage_path('app/public/' . $document->file_path)
    );
}

public function download($id)
{
    $document = Document::findOrFail($id);

    return response()->download(
        storage_path('app/public/' . $document->file_path)
    );
}


}

