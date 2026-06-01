@extends('layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            Detail Client
        </h1>

        <p class="text-gray-500">
            Informasi lengkap client dan virtual office
        </p>

    </div>

    <a href="#"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-3 rounded-xl shadow">

        Edit Client

    </a>

</div>

<!-- GRID -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- INFORMASI CLIENT -->
    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-6">
            Informasi Client
        </h2>

        <div class="space-y-4">

            <div>
                <p class="text-gray-500 text-sm">Nama Client</p>
                <p class="font-semibold">
                    {{ $client->client_name }}
                </p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">Jenis Perusahaan</p>
                <p class="font-semibold">
                    {{ $client->company_type }}
                </p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">No Telepon</p>
                <p class="font-semibold">
                    {{ $client->phone }}
                </p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">Alamat</p>
                <p class="font-semibold">
                    {{ $client->address }}
                </p>
            </div>

        </div>

    </div>

    <!-- MASA SEWA -->
    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-6">
            Masa Sewa Virtual Office
        </h2>

        <div class="space-y-5">

            <div>
                <p class="text-gray-500 text-sm">
                    Tanggal Mulai
                </p>

                <p class="font-semibold">
                    20 Mei 2024
                </p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">
                    Tanggal Berakhir
                </p>

                <p class="font-semibold">
                    20 Mei 2026
                </p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">
                    Sisa Hari
                </p>

                <p class="font-semibold text-green-600">
                    365 Hari
                </p>
            </div>

            <!-- STATUS -->
            <div>

                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">

                    Aktif

                </span>

            </div>

            <!-- PROGRESS -->
            <div>

                <div class="flex justify-between text-sm mb-2">

                    <span>Progress Masa Sewa</span>
                    <span>50%</span>

                </div>

                <div class="w-full bg-gray-200 rounded-full h-3">

                    <div class="bg-blue-600 h-3 rounded-full w-1/2"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- SUMMARY -->
    <div class="bg-white rounded-2xl shadow p-6">

        <h2 class="text-xl font-bold mb-6">
            Ringkasan Dokumen
        </h2>

        <div class="space-y-5">

            <div class="flex justify-between">

                <span>Total Dokumen</span>
                <span class="font-bold">12</span>

            </div>

            <div class="flex justify-between">

                <span>Dokumen Aktif</span>
                <span class="font-bold text-green-600">10</span>

            </div>

            <div class="flex justify-between">

                <span>Dokumen Expired</span>
                <span class="font-bold text-red-600">2</span>

            </div>

            <div class="flex justify-between">

                <span>Kategori Dokumen</span>
                <span class="font-bold">5</span>

            </div>

            <!-- BUTTON -->
            <button
                class="w-full mt-6 bg-gray-100 hover:bg-gray-200 py-3 rounded-xl font-semibold">

                Lihat Semua Dokumen

            </button>

        </div>

    </div>

</div>

@endsection