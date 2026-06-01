@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto">

    <!-- HEADER -->
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-gray-800">
            Edit Client
        </h1>

        <p class="text-gray-500 mt-1">
            Update informasi client
        </p>

    </div>

    <!-- FORM -->
    <div class="bg-white p-8 rounded-2xl shadow">

        <form action="{{ route('clients.update', $client->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <!-- CLIENT NAME -->
            <div class="mb-5">

                <label class="block mb-2 font-medium">
                    Nama Client
                </label>

                <input
                    type="text"
                    name="client_name"
                    value="{{ $client->client_name }}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3"
                >

            </div>

            <!-- COMPANY TYPE -->
            <div class="mb-5">

                <label class="block mb-2 font-medium">
                    Jenis Perusahaan
                </label>

                <input
                    type="text"
                    name="company_type"
                    value="{{ $client->company_type }}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3"
                >

            </div>

            <!-- PHONE -->
            <div class="mb-5">

                <label class="block mb-2 font-medium">
                    No Telepon
                </label>

                <input
                    type="text"
                    name="phone"
                    value="{{ $client->phone }}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3"
                >

            </div>

            <!-- ADDRESS -->
            <div class="mb-6">

                <label class="block mb-2 font-medium">
                    Alamat
                </label>

                <textarea
                    name="address"
                    rows="4"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3"
                >{{ $client->address }}</textarea>

            </div>

            <!-- BUTTON -->
            <div class="flex justify-end gap-3">

                <a href="/clients"
                   class="bg-gray-200 hover:bg-gray-300 px-5 py-3 rounded-xl">

                    Batal

                </a>

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow">

                    Update Client

                </button>

            </div>

        </form>

    </div>

</div>

@endsection