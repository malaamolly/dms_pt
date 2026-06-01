@extends('layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            Data Dokumen
        </h1>

        <p class="text-gray-500">
            Management dokumen perusahaan
        </p>

    </div>

    <a href="/documents/create"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow">

        + Upload Dokumen

    </a>

</div>

<!-- FILTER -->
<div class="bg-white p-6 rounded-2xl shadow mb-6">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

        <!-- SEARCH -->
        <input
            type="text"
            placeholder="Cari dokumen..."
            class="border border-gray-300 rounded-xl px-4 py-3"
        >

        <!-- CLIENT -->
        <select class="border border-gray-300 rounded-xl px-4 py-3">

            <option>Semua Client</option>

        </select>

        <!-- STATUS -->
        <select class="border border-gray-300 rounded-xl px-4 py-3">

            <option>Semua Status</option>

        </select>

        <!-- RESET -->
        <button
            class="bg-gray-100 hover:bg-gray-200 rounded-xl px-4 py-3">

            Reset Filter

        </button>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <!-- HEAD -->
        <thead class="bg-gray-50">

            <tr class="text-left text-gray-600">

                <th class="p-5">No</th>
                <th class="p-5">Judul Dokumen</th>
                <th class="p-5">Client</th>
                <th class="p-5">Status</th>
                <th class="p-5">Expired</th>
                <th class="p-5">Aksi</th>

            </tr>

        </thead>

        <!-- BODY -->
        <tbody>

            @foreach($documents as $document)

            <tr class="border-t hover:bg-gray-50">

                <td class="p-5">
                    {{ $loop->iteration }}
                </td>

                <td class="p-5 font-medium">
                    {{ $document->title }}
                </td>

                <td class="p-5">
                    {{ $document->client->client_name ?? '-' }}
                </td>

                <td class="p-5">

                    @if($document->status == 'Aktif')

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                            Aktif

                        </span>

                    @elseif($document->status == 'Expired')

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">

                            Expired

                        </span>

                    @else

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">

                            Warning

                        </span>

                    @endif

                </td>

                <td class="p-5">
                    {{ $document->expired_date }}
                </td>

                <!-- ACTION -->
                <td class="p-5">

                    <div class="flex gap-2">

                        <!-- VIEW -->
                        <a href="{{ route('documents.view', $document->id) }}"
                        target="_blank"
                           class="bg-blue-100 text-blue-700 px-3 py-1 rounded-lg text-sm">

                            View

                        </a>

                        <!-- DOWNLOAD -->
                        <a href="{{ route('documents.download', $document->id) }}"
                           target="_blank"
                           class="bg-blue-100 text-blue-700 px-3 py-1 rounded-lg text-sm">
                            Download

                        </a>

                    </div>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection