@extends('layouts.app')

@section('title', 'Daftar')

@include('includes.navbar')

@section('content')
<header>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <h1 class="text-3xl font-bold tracking-tight">Daftar</h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-9xl pt-2 pb-6 px-4">
        <div class="lg:w-1/4 space-y-2">
            <div class="w-full border rounded-lg">
                <form class="m-0" action="{{ route('register.perform') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-4">
                            <div class="col-span-6 sm:col-span-6">
                                <label class="block text-xs font-semibold">Nama</label>
                                <input type="text" name="name" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-md sm:text-xs" />
                                @if ($errors->has('name'))
                                    <label class="block mt-2 text-gray-600 text-xs font-semibold">{{ $errors->first('name')}}</label>
                                @endif
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label class="block text-xs font-semibold">Username</label>
                                <input type="text" name="username" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-md sm:text-xs" />
                                @if ($errors->has('username'))
                                    <label class="block mt-2 text-gray-600 text-xs font-semibold">{{ $errors->first('username')}}</label>
                                @endif
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label class="block text-xs font-semibold">Email</label>
                                <input type="email" name="email" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-md sm:text-xs" />
                                @if ($errors->has('email'))
                                    <label class="block mt-2 text-gray-600 text-xs font-semibold">{{ $errors->first('email')}}</label>
                                @endif
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label class="block text-xs font-semibold">Password</label>
                                <input type="password" name="password" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-md sm:text-xs" />
                                @if ($errors->has('password'))
                                    <label class="block mt-2 text-gray-600 text-xs font-semibold">{{ $errors->first('password')}}</label>
                                @endif
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label class="block text-xs font-semibold">Ulangi Password</label>
                                <input type="password" name="password_confirmation" class="mt-1 block w-full border-gray-100 focus:ring-gray-100 focus:ring-transparent focus:border-gray-100 rounded-md sm:text-xs" />
                                @if ($errors->has('password_confirmation'))
                                    <label class="block mt-2 text-gray-600 text-xs font-semibold">{{ $errors->first('password_confirmation')}}</label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex items-center justify-center border bg-white hover:text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-medium">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="mt-4 text-xs font-semibold">
                Sudah punya akun?
                <a href="{{ route('login.perform') }}" class="hover:text-rose-600">
                    Masuk
                </a>
            </div>
        </div>
    </div>
</main>
@endsection
