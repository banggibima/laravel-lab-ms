@extends('layouts.app')

@section('title', 'Transaksi')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Daftar Transaksi</h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pb-6 px-4">
        <div class="space-y-3">
            <div class="sm:flex-none space-x-1">
                <a href="{{ route('transaction.create') }}" class="m-0 inline-flex items-center justify-center border hover:text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-semibold">Tambah Data</a>
            </div>
            <div class="lg:w-1/2 mt-4">
                <div class="md:grid md:grid-cols-6 md:gap-6">
                    <div class="md:mt-0 md:col-span-6">
                        <div class="overflow-hidden overflow-x-auto border rounded-lg">
                            <table class="min-w-full divide-y">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-4 py-2 text-left text-xs font-semibold">Kode</th>
                                        <th scope="col" class="px-4 py-2 text-left text-xs font-semibold">Nama Alat</th>
                                        <th scope="col" class="px-4 py-2 text-left text-xs font-semibold">Nama Anggota</th>
                                        <th scope="col" class="px-4 py-2 text-left text-xs font-semibold">Status</th>
                                        <th scope="col" class="px-4 py-2 text-left text-xs font-semibold">Tanggal Kembali</th>
                                        <th scope="col" class="px-4 py-2 text-left text-xs font-semibold">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-zinc-200 bg-white">
                                    @foreach ($transactions as $data)
                                        @isset($data)
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 text-xs">{{ $data->id }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 text-xs">{{ $data->tool }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 text-xs">{{ $data->member }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 text-xs">{{ $data->status }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 text-xs">{{ $data->return_date }}</td>
                                                <td class="whitespace-nowrap px-4 py-2 text-xs">
                                                    <form class="m-0" action="{{ route('transaction.destroy', $data->id) }}" method="POST">
                                                        <a href="{{ route('transaction.show', $data->id) }}" class="hover:text-rose-600 font-semibold">Info</a>
                                                        <a href="{{ route('transaction.edit', $data->id) }}" class="ml-1 hover:text-rose-600 font-semibold">Ubah</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Apa kamu yakin?')" class="ml-1 hover:text-gray-600 font-semibold">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endisset
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
