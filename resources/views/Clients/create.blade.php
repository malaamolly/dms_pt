@extends('layouts.app')

@section('content')

<div class="bg-white rounded-2xl shadow p-8">

    <h1 class="text-3xl font-bold text-gray-800 mb-2">
        Tambah Client
    </h1>

    <p class="text-gray-500 mb-8">
        Tambahkan data client dan masa sewa virtual office
    </p>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 gap-6">

            <div>
                <label class="block mb-2 font-medium">
                    Nama Client
                </label>

                <input
                    type="text"
                    name="client_name"
                    class="w-full border rounded-xl px-4 py-3"
                    required
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    Jenis Perusahaan
                </label>

                <input
                    type="text"
                    name="company_type"
                    class="w-full border rounded-xl px-4 py-3"
                    required
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="w-full border rounded-xl px-4 py-3"
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    No Telepon
                </label>

                <input
                    type="text"
                    name="phone"
                    class="w-full border rounded-xl px-4 py-3"
                >
            </div>

            <div>
                <label class="block mb-2 font-medium">
                    Alamat
                </label>

                <textarea
                    name="address"
                    rows="4"
                    class="w-full border rounded-xl px-4 py-3"
                ></textarea>
            </div>

            <div class="grid grid-cols-2 gap-6">

                <div>
                    <label class="block mb-2 font-medium">
                        Tanggal Mulai Sewa
                    </label>

                    <input
                        type="date"
                        name="start_date"
                        class="w-full border rounded-xl px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block mb-2 font-medium">
                        Tanggal Berakhir Sewa
                    </label>

                    <input
                        type="date"
                        name="end_date"
                        class="w-full border rounded-xl px-4 py-3"
                    >
                </div>

            </div>

            <div class="flex justify-between mt-4">

                <a href="{{ route('clients.index') }}"
                   class="bg-gray-500 text-white px-5 py-3 rounded-xl">

                    Kembali

                </a>

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl">

                    Simpan Client

                </button>

            </div>

        </div>

    </form>

</div>

@endsection