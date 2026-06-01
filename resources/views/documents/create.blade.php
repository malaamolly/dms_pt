@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-gray-800">
            Upload Dokumen
        </h1>

        <p class="text-gray-500">
            Upload dokumen client dan atur masa berlaku
        </p>

    </div>

    <!-- FORM -->
    <div class="bg-white rounded-2xl shadow p-8">

        <form
            action="{{ route('documents.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6">

            @csrf

            <!-- CLIENT -->
            <div>

                <label class="block mb-2 font-medium">
                    Pilih Client
                </label>

                <select
                    name="client_id"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3">

                    <option value="">-- Pilih Client --</option>

                    @foreach($clients as $client)

                        <option value="{{ $client->id }}">

                            {{ $client->client_name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <!-- TITLE -->
            <div>

                <label class="block mb-2 font-medium">
                    Judul Dokumen
                </label>

                <input
                    type="text"
                    name="title"
                    placeholder="Masukkan judul dokumen"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3">

            </div>

            <!-- FILE -->
            <div>

                <label class="block mb-2 font-medium">
                    Upload PDF
                </label>

                <input
                    type="file"
                    name="file"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3">

            </div>

            

            </div>

            <!-- EXPIRED -->
            <div>

                <label class="block mb-2 font-medium">
                    Tanggal Expired
                </label>

                <input
                    type="date"
                    name="expired_date"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3">

            </div>

            <!-- BUTTON -->
            <div class="flex justify-end">

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow">

                    Simpan Dokumen

                </button>

            </div>

        </form>

    </div>

</div>

@endsection