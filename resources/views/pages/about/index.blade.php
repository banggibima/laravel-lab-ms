@extends('layouts.app')

@section('title', 'Tentang')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Tentang Aplikasi</h1>
        
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pb-6 px-4">
        <div class="sm:w-1/2 space-y-4">
            <p class="text-xs">
                Sebagai bagian dari pelajaran ini, kita akan menggunakan banyak
                ide dan keterampilan yang telah kita pelajari sejauh ini untuk
                membangun aplikasi ini. Kita sudah mencoba membuat versi yang
                sangat sederhana dari aplikasi semacam ini di sini.
            </p>
            <p class="text-xs">
                Aplikasi ini memudahkan kita dalam mengatur, mengelola
                alat laboratorium yang sedang digunakan.
            </p>
        </div>
    </div>
</main>
@endsection
