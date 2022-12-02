@extends('layouts.app')

@section('title', 'Profil')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Profil</h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pb-6 px-4">
        <div class="lg:w-1/4">
            <div class="w-full border rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-4">
                        <div class="col-span-6 sm:col-span-6">
                            <p class="text-xs font-semibold">Nama</p>
                            <p class="mt-1 text-xs">{{ auth()->user()->name }}</p>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <p class="text-xs font-semibold">Username</p>
                            <p class="mt-1 text-xs">{{ auth()->user()->username }}</p>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <p class="text-xs font-semibold">Email</p>
                            <p class="mt-1 text-xs">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
