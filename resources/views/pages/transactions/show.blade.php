@extends('layouts.app')

@section('title', 'Transaksi')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Info Transaksi</h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pb-6 px-4">
        <div class="space-y-3">
            <div class="sm:flex-none space-x-1">
                <a href="{{ route('transaction.index') }}" class="inline-flex items-center justify-center border hover:text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-semibold">Kembali</a>
            </div>
            <div class="lg:w-1/2 mt-4">
                <div class="md:grid md:grid-cols-6 md:gap-6">
                    <div class="md:mt-0 md:col-span-6">
                        <div class="overflow-hidden overflow-x-auto border rounded-lg">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2">
                                    <div class="sm:col-span-1">
                                        <p class="text-xs font-semibold">Alat</p>
                                        <p class="mt-2 text-xs">{{ $transaction->tool }}</p>
                                    </div>
                                    <div class="sm:col-span-1">
                                        <p class="text-xs font-semibold">Anggota</p>
                                        <p class="mt-2 text-xs">{{ $transaction->member }}</p>
                                    </div>
                                    <div class="sm:col-span-1">
                                        <p class="text-xs font-semibold">Petugas</p>
                                        <p class="mt-2 text-xs">{{ $transaction->staff }}</p>
                                    </div>
                                    <div class="sm:col-span-1">
                                        <p class="text-xs font-semibold">Status</p>
                                        <p class="mt-2 text-xs {{ $transaction->status === "Dalam Peminjaman"
                                            ? "text-sky-600"
                                            : "text-rose-600" }}">{{ $transaction->status === "Dalam Peminjaman"
                                            ? "Dalam Peminjaman"
                                            : "Sudah Kembali" }}</p>
                                    </div>
                                    <div class="sm:col-span-1">
                                        <p class="text-xs font-semibold">Tanggal Pinjam</p>
                                        <p class="mt-2 text-xs">{{ $transaction->borrow_date }}</p>
                                    </div>
                                    <div class="sm:col-span-1">
                                        <p class="text-xs font-semibold">Tanggal Kembali</p>
                                        <p class="mt-2 text-xs">{{ $transaction->return_date }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
