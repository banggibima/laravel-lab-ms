@extends('layouts.app')

@section('title', 'Dasbor')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Dasbor</h1>
    </div>
</header>
<main>
    <div class="max-w-9xl mx-auto mb-8 px-4">
        <div class="lg:w-3/4 px-4 sm:px-0">
            <dl class="grid grid-cols-1 gap-2 sm:grid-cols-2 lg:grid-cols-4">
                <div class="relative pt-5 px-4 pb-12 sm:pt-6 sm:px-6 border rounded-lg overflow-hidden">
                    <dt>
                        <p class="text-xs font-semibold truncate text-gray-600">Anggota</p>
                    </dt>
                    <dd class="pb-4 flex items-baseline sm:pb-7">
                        <p class="text-3xl font-bold">{{ $members->count() }}</p>
                        <div class="absolute bottom-0 inset-x-0 border-t bg-rose-50 px-4 py-4 sm:px-6">
                            <div class="text-xs">
                                <a
                                    href="{{ route('member.index') }}"
                                    class="font-semibold text-rose-600"
                                >
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative pt-5 px-4 pb-12 sm:pt-6 sm:px-6 border rounded-lg overflow-hidden">
                    <dt>
                        <p class="text-xs font-semibold truncate text-gray-600">Petugas</p>
                    </dt>
                    <dd class="pb-4 flex items-baseline sm:pb-7">
                        <p class="text-3xl font-bold">{{ $staff->count() }}</p>
                        <div class="absolute bottom-0 inset-x-0 border-t bg-rose-50 px-4 py-4 sm:px-6">
                            <div class="text-xs">
                                <a
                                    href="{{ route('staff.index') }}"
                                    class="font-semibold text-rose-600"
                                >
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative pt-5 px-4 pb-12 sm:pt-6 sm:px-6 border rounded-lg overflow-hidden">
                    <dt>
                        <p class="text-xs font-semibold truncate text-gray-600">Alat</p>
                    </dt>
                    <dd class="pb-4 flex items-baseline sm:pb-7">
                        <p class="text-3xl font-bold">{{ $tools->count() }}</p>
                        <div class="absolute bottom-0 inset-x-0 border-t bg-rose-50 px-4 py-4 sm:px-6">
                            <div class="text-xs">
                                <a
                                    href="{{ route('tool.index') }}"
                                    class="font-semibold text-rose-600"
                                >
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </dd>
                </div>
                <div class="relative pt-5 px-4 pb-12 sm:pt-6 sm:px-6 border rounded-lg overflow-hidden">
                    <dt>
                        <p class="text-xs font-semibold truncate text-gray-600">Transaksi</p>
                    </dt>
                    <dd class="pb-4 flex items-baseline sm:pb-7">
                        <p class="text-3xl font-bold">{{ $transactions->count() }}</p>
                        <div class="absolute bottom-0 inset-x-0 border-t bg-rose-50 px-4 py-4 sm:px-6">
                            <div class="text-xs">
                                <a
                                    href="{{ route('transaction.index') }}"
                                    class="font-semibold text-rose-600"
                                >
                                    Lihat
                                </a>
                            </div>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</main>
@endsection
