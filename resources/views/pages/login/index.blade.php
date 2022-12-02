@extends('layouts.app')

@section('title', 'Masuk')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Masuk</h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <div class="lg:w-1/4 space-y-2">
            <div class="w-full border rounded-lg">
                <form class="m-0" action="{{ route('login.perform') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-4">
                            <div class="col-span-6 sm:col-span-6">
                                <label class="block text-xs font-semibold">Email atau Username</label>
                                <input type="text" name="username" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-lg sm:text-xs" />
                                @if ($errors->has('username'))
                                    <label class="block mt-2 text-gray-600 text-xs font-semibold">{{ $errors->first('username')}}</label>
                                @endif
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label class="block text-xs font-semibold">Password</label>
                                <input type="password" name="password" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-lg sm:text-xs" />
                                @if ($errors->has('password'))
                                    <label class="block mt-2 text-gray-600 text-xs font-semibold">{{ $errors->first('password')}}</label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        {{-- <a href="/" class="ml-1 inline-flex items-center justify-center border bg-white hover:text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-semibold">
                            Login dengan Google
                        </a> --}}
                        <button type="submit" class="inline-flex items-center justify-center border bg-white hover:text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-semibold">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="mt-4 text-xs font-medium">
                Belum punya akun?
                <a href="{{ route('register.perform') }}" class="hover:text-rose-600">
                    Daftar
                </a>
            </div>
        </div>
    </div>
</main>
@endsection
