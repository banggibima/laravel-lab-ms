<nav>
    <div class="mx-auto max-w-9xl px-4">
        <div class="flex h-2 lg:h-16 md:h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="flex items-baseline space-x-2">
                        <a href="{{ route('home.index') }}" class="{{ (request()->routeIs('home.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} border px-3 py-2 rounded-lg text-xs font-semibold">Beranda</a>
                        @auth
                            <a href="{{ route('dashboard.index') }}" class="{{ (request()->routeIs('dashboard.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} border px-3 py-2 rounded-lg text-xs font-semibold">Dasbor</a>
                        @endauth
                        <a href="{{ route('about.index') }}" class="{{ (request()->routeIs('about.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} border px-3 py-2 rounded-lg text-xs font-semibold">Tentang Aplikasi</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="flex items-baseline space-x-2">
                        @guest
                            <a href="{{ route('login.show') }}" class="{{ (request()->routeIs('login.show')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} border px-3 py-2 rounded-lg text-xs font-semibold">Masuk</a>
                            <a href="{{ route('register.show') }}" class="{{ (request()->routeIs('register.show')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} border px-3 py-2 rounded-lg text-xs font-semibold">Daftar</a>
                        @endguest
                        @auth
                            <a href="{{ route('profile.index') }}" class="{{ (request()->routeIs('profile.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} border px-3 py-2 rounded-lg text-xs font-semibold">{{ auth()->user()->email }}</a>
                            <a href="{{ route('logout.perform') }}" class="{{ (request()->routeIs('logout.perform')) ? 'text-gray-600 bg-gray-50' : 'hover:text-gray-600 hover:bg-gray-50' }} border px-3 py-2 rounded-lg text-xs font-semibold">Keluar</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-2 px-4 pt-2 pb-3 sm:px-3">
            <a href="{{ route('home.index') }}" class="{{ (request()->routeIs('home.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} block border px-3 py-2 rounded-lg text-xs font-semibold">Beranda</a>
            @auth
                <a href="{{ route('dashboard.index') }}" class="{{ (request()->routeIs('dashboard.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} block border px-3 py-2 rounded-lg text-xs font-semibold">Dasbor</a>
            @endauth
            <a href="{{ route('about.index') }}" class="{{ (request()->routeIs('about.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} block border px-3 py-2 rounded-lg text-xs font-semibold">Tentang Aplikasi</a>
            @guest
                <a href="{{ route('login.show') }}" class="{{ (request()->routeIs('login.show')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} block border px-3 py-2 rounded-lg text-xs font-semibold">Masuk</a>
                <a href="{{ route('register.show') }}" class="{{ (request()->routeIs('register.show')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} block border px-3 py-2 rounded-lg text-xs font-semibold">Daftar</a>
            @endguest
            @auth
                <a href="{{ route('profile.index') }}" class="{{ (request()->routeIs('profile.index')) ? 'text-rose-600 bg-rose-50' : 'hover:text-rose-600 hover:bg-rose-50' }} block border px-3 py-2 rounded-lg text-xs font-semibold">{{ auth()->user()->email }}</a>
                <a href="{{ route('logout.perform') }}" class="{{ (request()->routeIs('logout.perform')) ? 'text-gray-600 bg-gray-50' : 'hover:text-gray-600 hover:bg-gray-50' }} block border px-3 py-2 rounded-lg text-xs font-semibold">Keluar</a>
            @endauth
        </div>
    </div>
</nav>
