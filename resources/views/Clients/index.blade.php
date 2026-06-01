@extends('layouts.app')

@section('content')

<!-- HEADER -->
<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            Data Client
        </h1>

        <p class="text-gray-500 mt-1">
            Management client dan masa sewa virtual office
        </p>

    </div>

    <!-- BUTTON -->
    <a href="/clients/create"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow">

        + Tambah Client

    </a>

</div>

<!-- FILTER -->
<div class="bg-white p-5 rounded-2xl shadow mb-6">

    <div class="flex gap-4">

        <!-- SEARCH -->
        <input
            type="text"
            placeholder="Cari client..."
            class="flex-1 border border-gray-300 rounded-xl px-4 py-3"
        >

        <!-- FILTER -->
        <select class="border border-gray-300 rounded-xl px-4 py-3">

            <option>Semua Status</option>
            <option>Aktif</option>
            <option>Akan Expired</option>
            <option>Expired</option>

        </select>

    </div>

</div>

<!-- TABLE -->
<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <!-- HEAD -->
        <thead class="bg-gray-100">

            <tr class="text-left text-gray-600">

                <th class="p-4">No</th>
<th class="p-4">Nama Client</th>
<th class="p-4">Jenis Perusahaan</th>
<th class="p-4">Email</th>
<th class="p-4">No Telepon</th>
<th class="p-4">Tanggal Berakhir</th>
<th class="p-4">Sisa Hari</th>
<th class="p-4">Status</th>
<th class="p-4">Aksi</th>

            </tr>

        </thead>

        <!-- BODY -->
        <tbody>

            @foreach($clients as $client)

            <tr class="border-t hover:bg-gray-50 transition">

                <td class="p-4">
                    {{ $loop->iteration }}
                </td>

                <td class="p-4 font-semibold text-gray-700">
                    {{ $client->client_name }}
                </td>

                <td class="p-4">
                    {{ $client->company_type }}
                </td>

                <td class="p-4">{{ $client->email }}</td>

<td class="p-4">{{ $client->phone }}</td>

<td class="p-4">
    {{ $client->end_date ?? '-' }}
</td>

<td class="p-4">
    {{ $client->remaining_days }} Hari
</td>

                <!-- STATUS -->
                <td class="p-4">

    @if($client->status == 'Aktif')

        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
            Aktif
        </span>

    @elseif($client->status == 'Akan Expired')

        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
            Akan Expired
        </span>

    @else

        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
            Expired
        </span>

    @endif

</td>
                <!-- ACTION -->
                <td class="p-4">

    <div class="flex gap-2">

        <!-- DETAIL -->
        <a href="{{ route('clients.show', $client->id) }}"
           class="bg-blue-100 text-blue-600 px-3 py-1 rounded-lg text-sm">

            Detail

        </a>

        <!-- EDIT -->
        <a href="{{ route('clients.edit', $client->id) }}"
   class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-lg text-sm">

    Edit

        </a>

        <!-- DELETE -->
        <form action="{{ route('clients.destroy', $client->id) }}"
              method="POST">

            @csrf
            @method('DELETE')

            <button type="submit"
                    onclick="return confirm('Yakin hapus client?')"
                    class="bg-red-100 text-red-600 px-3 py-1 rounded-lg text-sm">

                Delete

            </button>

        </form>

    </div>

</td>


            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection