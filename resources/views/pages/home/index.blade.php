@extends('layouts.app')

@section('title', 'Beranda')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">
            Beranda
        </h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <div class="lg:w-3/4 space-y-2">
            <div class="bg-rose-50 rounded-lg border overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-16 lg:py-16 lg:pr-0 xl:py-20 xl:px-20">
                    <div class="lg:self-center">
                        <h2 class="text-3xl font-bold sm:text-4xl">
                            <span class="block">
                                Selamat Datang
                            </span>
                        </h2>
                        <h6 class="text-sm font-medium">
                            di Sistem Manajemen Laboratorium
                        </h6>
                        <p class="mt-4 text-xs font-medium">
                            Aplikasi ini akan memudahkan kita dalam mengatur, mengelola
                            dan alat laboratorium yang sedang digunakan.
                        </p>
                        <a
                            href="{{ route('dashboard.index') }}"
                            class="mt-8 bg-white rounded-lg border px-4 py-2 inline-flex items-center text-xs font-semibold hover:text-rose-600"
                        >
                            Mulai
                        </a>
                    </div>
                </div>
                <div class="-mt-6 aspect-w-5 aspect-h-3 md:aspect-w-2 md:aspect-h-1">
                    <img
                        class="transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-16 lg:translate-y-20"
                        src="{{ asset('images/dashboard-preview.png') }}"
                        alt="App screenshot"
                    />
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
