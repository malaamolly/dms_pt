<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Document;

class DashboardController extends Controller
{
    public function index()
    {
        // hitung total client
        $totalClients = Client::count();

        // hitung total document
        $totalDocuments = Document::count();

        return view('dashboard', compact(
            'totalClients',
            'totalDocuments'
        ));
    }
}