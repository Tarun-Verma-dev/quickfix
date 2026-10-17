@php
    $currentPage = request()->route()?->getName();
@endphp

<nav class="sticky top-0 z-50 border-b border-blue-100 bg-white/90 backdrop-blur-md">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

        {{-- QuickFix Logo --}}
        <a href="{{ url('/') }}"
           class="flex items-center gap-2 text-2xl font-extrabold tracking-tight text-[#10213f]">
            <span class="text-3xl text-blue-600">✦</span>
            QuickFix
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden items-center gap-8 md:flex">

            <a href="{{ url('/') }}"
               class="font-semibold transition hover:text-blue-600
               {{ request()->is('/') ? 'text-blue-600' : 'text-slate-600' }}">
                Home
            </a>

            <a href="{{ route('services.index') }}"
               class="font-semibold transition hover:text-blue-600
               {{ $currentPage === 'services.index' ? 'text-blue-600' : 'text-slate-600' }}">
                Services
            </a>

            <a href="{{ route('booking.create') }}"
               class="font-semibold transition hover:text-blue-600
               {{ $currentPage === 'booking.create' ? 'text-blue-600' : 'text-slate-600' }}">
                Book a Service
            </a>

            @auth
                <a href="{{ route('booking.create') }}"
                   class="font-semibold text-slate-600 transition hover:text-blue-600">
                    My Bookings
                </a>

                <span class="text-sm font-medium text-slate-500">
                    Hi, {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="rounded-xl border border-slate-200 px-4 py-2 font-semibold text-slate-700 transition hover:border-blue-200 hover:text-blue-600">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-slate-600 transition hover:text-blue-600">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="rounded-xl bg-blue-600 px-5 py-2.5 font-bold text-white shadow-sm transition hover:bg-blue-700">
                    Get Started
                </a>
            @endauth
        </div>

        {{-- Mobile Navigation --}}
        <details class="relative md:hidden">
            <summary class="cursor-pointer list-none rounded-xl border border-slate-200 px-4 py-2 font-semibold text-slate-700">
                ☰ Menu
            </summary>

            <div class="absolute right-0 top-14 z-50 w-56 space-y-1 rounded-2xl border border-slate-100 bg-white p-3 shadow-xl">

                <a href="{{ url('/') }}"
                   class="block rounded-lg px-4 py-3 font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Home
                </a>

                <a href="{{ route('services.index') }}"
                   class="block rounded-lg px-4 py-3 font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Services
                </a>

                <a href="{{ route('booking.create') }}"
                   class="block rounded-lg px-4 py-3 font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                    Book a Service
                </a>

                @auth
                    <a href="{{ route('booking.create') }}"
                       class="block rounded-lg px-4 py-3 font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                        My Bookings
                    </a>

                    <div class="border-t border-slate-100 px-4 py-3 text-sm text-slate-500">
                        Hi, {{ Auth::user()->name }}
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="w-full rounded-lg px-4 py-3 text-left font-semibold text-red-600 hover:bg-red-50">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="block rounded-lg px-4 py-3 font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-600">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="block rounded-lg bg-blue-600 px-4 py-3 text-center font-bold text-white hover:bg-blue-700">
                        Get Started
                    </a>
                @endauth
            </div>
        </details>

    </div>
</nav>
