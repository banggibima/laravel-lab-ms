@extends('layouts.app')

@section('title', 'Petugas')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Tambah Petugas</h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pb-6 px-4">
        <div class="space-y-3">
            <div class="sm:flex-none space-x-1">
                <a href="{{ route('staff.index') }}" class="inline-flex items-center justify-center border hover:text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-semibold">Kembali</a>
            </div>
            <div class="lg:w-1/2 mt-4">
                <div class="md:grid md:grid-cols-6 md:gap-6">
                    <div class="md:mt-0 md:col-span-6">
                        <div class="overflow-hidden overflow-x-auto border rounded-lg">
                            <form class="m-0" action="{{ route('staff.store') }}" method="POST">
                                @csrf
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-4">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-xs font-semibold">Nama</label>
                                            <input type="text" name="name" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-lg text-xs" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-xs font-semibold">Jabatan</label>
                                            <input type="text" name="position" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-lg text-xs" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-xs font-semibold">No Telp</label>
                                            <input type="text" name="telephone" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-lg text-xs" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-xs font-semibold">Alamat</label>
                                            <input type="text" name="address" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-lg text-xs" />
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-t text-right sm:px-6">
                                    <button type="submit" class="inline-flex items-center justify-center border bg-white hover:text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-medium">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
