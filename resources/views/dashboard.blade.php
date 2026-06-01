@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-8">
    Dashboard
</h1>

<div class="grid grid-cols-4 gap-6">

    <!-- CARD -->
    <div class="bg-white p-6 rounded-2xl shadow">

        <p class="text-gray-500">
            Total Clients
        </p>

        <h2 class="text-4xl font-bold text-blue-600 mt-3">
            {{ $totalClients }}
        </h2>

    </div>

    <!-- CARD -->
    <div class="bg-white p-6 rounded-2xl shadow">

        <p class="text-gray-500">
            Total Documents
        </p>

        <h2 class="text-4xl font-bold text-green-600 mt-3">
            {{ $totalDocuments }}
        </h2>

    </div>

    <!-- CARD -->
    <div class="bg-white p-6 rounded-2xl shadow">

        <p class="text-gray-500">
            Virtual Office Active
        </p>

        <h2 class="text-4xl font-bold text-purple-600 mt-3">
            32
        </h2>

    </div>

    <!-- CARD -->
    <div class="bg-white p-6 rounded-2xl shadow">

        <p class="text-gray-500">
            Akan Expired
        </p>

        <h2 class="text-4xl font-bold text-red-500 mt-3">
            8
        </h2>

    </div>

</div>

<!-- SECTION 2 -->
<div class="grid grid-cols-2 gap-6 mt-8">

    <!-- STATUS VO -->
    <div class="bg-white p-6 rounded-2xl shadow">

        <div class="flex justify-between items-center mb-6">

            <h2 class="text-xl font-semibold">
                Status Virtual Office
            </h2>

            <button class="text-sm text-blue-600">
                Lihat Semua
            </button>

        </div>

        <!-- STATUS -->
        <div class="space-y-4">

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-3">

                    <div class="w-4 h-4 rounded-full bg-green-500"></div>

                    <p>Aktif</p>

                </div>

                <p class="font-semibold">
                    32
                </p>

            </div>

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-3">

                    <div class="w-4 h-4 rounded-full bg-yellow-500"></div>

                    <p>Akan Expired</p>

                </div>

                <p class="font-semibold">
                    8
                </p>

            </div>

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-3">

                    <div class="w-4 h-4 rounded-full bg-red-500"></div>

                    <p>Expired</p>

                </div>

                <p class="font-semibold">
                    5
                </p>

            </div>

        </div>

    </div>

    <!-- REMINDER -->
    <div class="bg-white p-6 rounded-2xl shadow">

        <div class="flex justify-between items-center mb-6">

            <h2 class="text-xl font-semibold">
                Reminder Masa Sewa
            </h2>

            <button class="text-sm text-blue-600">
                Lihat Semua
            </button>

        </div>

        <!-- TABLE -->
        <div class="space-y-4">

            <!-- ROW -->
            <div class="flex justify-between border-b pb-3">

                <div>

                    <p class="font-semibold">
                        PT Maju Bersama
                    </p>

                    <p class="text-sm text-gray-500">
                        Berakhir 20 Mei 2026
                    </p>

                </div>

                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">

                    7 Hari

                </span>

            </div>

            <!-- ROW -->
            <div class="flex justify-between border-b pb-3">

                <div>

                    <p class="font-semibold">
                        CV Sejahtera
                    </p>

                    <p class="text-sm text-gray-500">
                        Berakhir 22 Mei 2026
                    </p>

                </div>

                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">

                    9 Hari

                </span>

            </div>

            <!-- ROW -->
            <div class="flex justify-between">

                <div>

                    <p class="font-semibold">
                        PT Sukses Selalu
                    </p>

                    <p class="text-sm text-gray-500">
                        Berakhir 24 Mei 2026
                    </p>

                </div>

                <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">

                    Expired

                </span>

            </div>

        </div>

    </div>

</div>

<!-- RECENT DOCUMENTS -->
<div class="bg-white p-6 rounded-2xl shadow mt-8">

    <div class="flex justify-between items-center mb-6">

        <h2 class="text-xl font-semibold">
            Dokumen Terbaru
        </h2>

        <button class="text-blue-600 text-sm">
            Lihat Semua
        </button>

    </div>

    <!-- TABLE -->
    <table class="w-full">

        <thead>

            <tr class="text-left border-b">

                <th class="pb-3">Dokumen</th>
                <th class="pb-3">Client</th>
                <th class="pb-3">Kategori</th>
                <th class="pb-3">Tanggal</th>

            </tr>

        </thead>

        <tbody>

            <tr class="border-b">

                <td class="py-4">
                    Akta Pendirian
                </td>

                <td>
                    PT Tunas Indonesia Raya
                </td>

                <td>
                    Legalitas
                </td>

                <td>
                    20 Mei 2026
                </td>

            </tr>

            <tr class="border-b">

                <td class="py-4">
                    NPWP
                </td>

                <td>
                    CV Sejahtera
                </td>

                <td>
                    Pajak
                </td>

                <td>
                    18 Mei 2026
                </td>

            </tr>

            <tr>

                <td class="py-4">
                    SIUP
                </td>

                <td>
                    PT Sukses Selalu
                </td>

                <td>
                    Perizinan
                </td>

                <td>
                    16 Mei 2026
                </td>

            </tr>

        </tbody>

    </table>

</div>

@endsection