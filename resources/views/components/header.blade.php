<header
    x-data="{ open: false, scrolled: false }"
    x-init="
        const updateScroll = () => scrolled = window.scrollY > 20;
        updateScroll();
        window.addEventListener('scroll', updateScroll);
    "
    class="sticky top-0 z-50 px-3 pt-3 transition-all duration-500 sm:px-5"
>
    {{-- Floating Premium Navbar --}}
    <div
        class="mx-auto max-w-[1440px] transition-all duration-500"
        :class="
            scrolled
                ? 'rounded-[24px] border border-slate-200/80 bg-white/85 shadow-[0_20px_70px_-25px_rgba(15,40,90,.25)] backdrop-blur-2xl'
                : 'rounded-[24px] border border-transparent bg-white/45 backdrop-blur-xl'
        "
    >

        <div class="container-shell flex h-[76px] items-center justify-between gap-4">

            {{-- LOGO --}}
            <a
                href="{{ route('home') }}"
                class="group relative flex shrink-0 items-center gap-3"
            >

                <div class="relative">

                    {{-- Glow --}}
                    <div class="absolute inset-0 scale-125 rounded-2xl bg-primary-500/20 blur-xl opacity-0 transition duration-500 group-hover:opacity-100"></div>

                    {{-- Logo Icon --}}
                    <span class="relative flex h-11 w-11 items-center justify-center overflow-hidden rounded-2xl bg-gradient-to-br from-primary-500 via-primary-600 to-blue-800 text-white shadow-[0_12px_30px_-8px_rgba(15,99,224,.65)] transition duration-300 group-hover:-translate-y-1 group-hover:rotate-3">

                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M12 5v14M5 12h14"/>
                        </svg>

                        <span class="absolute -right-2 -top-2 h-5 w-5 rounded-full bg-cyan-300/70 blur-md"></span>

                    </span>

                </div>

                <div class="leading-none">

                    <div class="flex items-center gap-1">

                        <span class="whitespace-nowrap text-xl font-black tracking-[-0.05em] text-navy-900">
                            Medi<span class="text-primary-600">Care</span>
                        </span>

                        <span class="hidden h-1.5 w-1.5 rounded-full bg-green-500 sm:block"></span>

                    </div>

                    <span class="mt-1 block whitespace-nowrap text-[9px] font-extrabold uppercase tracking-[0.22em] text-slate-400">
                        Modern Healthcare
                    </span>

                </div>

            </a>


            {{-- DESKTOP NAVIGATION --}}
            <nav class="hidden items-center gap-1 xl:flex">

                <a
                    href="{{ route('home') }}"
                    class="group relative whitespace-nowrap rounded-full px-4 py-2.5 text-sm font-bold transition"
                >
                    <span
                        class="{{ request()->routeIs('home') ? 'text-primary-700' : 'text-slate-600 group-hover:text-navy-900' }}"
                    >
                        Home
                    </span>

                    @if(request()->routeIs('home'))
                        <span class="absolute bottom-1.5 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-primary-600"></span>
                    @endif

                </a>


                <a
                    href="{{ route('doctors.index') }}"
                    class="group relative whitespace-nowrap rounded-full px-4 py-2.5 text-sm font-bold transition hover:bg-white/70"
                >
                    <span class="{{ request()->routeIs('doctors.*') ? 'text-primary-700' : 'text-slate-600 group-hover:text-navy-900' }}">
                        Doctors
                    </span>

                    @if(request()->routeIs('doctors.*'))
                        <span class="absolute bottom-1.5 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-primary-600"></span>
                    @endif
                </a>


                <a
                    href="{{ route('services.index') }}"
                    class="group relative whitespace-nowrap rounded-full px-4 py-2.5 text-sm font-bold transition hover:bg-white/70"
                >
                    <span class="{{ request()->routeIs('services.*') ? 'text-primary-700' : 'text-slate-600 group-hover:text-navy-900' }}">
                        Services
                    </span>

                    @if(request()->routeIs('services.*'))
                        <span class="absolute bottom-1.5 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-primary-600"></span>
                    @endif
                </a>


                <a
                    href="{{ route('specialties.index') }}"
                    class="group relative whitespace-nowrap rounded-full px-4 py-2.5 text-sm font-bold transition hover:bg-white/70"
                >
                    <span class="{{ request()->routeIs('specialties.*') ? 'text-primary-700' : 'text-slate-600 group-hover:text-navy-900' }}">
                        Specialties
                    </span>

                    @if(request()->routeIs('specialties.*'))
                        <span class="absolute bottom-1.5 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-primary-600"></span>
                    @endif
                </a>


                <a
                    href="{{ route('blog.index') }}"
                    class="group relative whitespace-nowrap rounded-full px-4 py-2.5 text-sm font-bold transition hover:bg-white/70"
                >
                    <span class="{{ request()->routeIs('blog.*') ? 'text-primary-700' : 'text-slate-600 group-hover:text-navy-900' }}">
                        Insights
                    </span>

                    @if(request()->routeIs('blog.*'))
                        <span class="absolute bottom-1.5 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-primary-600"></span>
                    @endif
                </a>


                <a
                    href="{{ route('contact') }}"
                    class="group relative whitespace-nowrap rounded-full px-4 py-2.5 text-sm font-bold transition hover:bg-white/70"
                >
                    <span class="{{ request()->routeIs('contact') ? 'text-primary-700' : 'text-slate-600 group-hover:text-navy-900' }}">
                        Contact
                    </span>

                    @if(request()->routeIs('contact'))
                        <span class="absolute bottom-1.5 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-primary-600"></span>
                    @endif
                </a>

            </nav>


            {{-- RIGHT ACTIONS --}}
            <div class="hidden items-center gap-2.5 xl:flex">

                @auth

                    {{-- Dashboard --}}
                    <a
                        href="{{ auth()->user()->isDoctor() ? route('doctor.dashboard') : route('dashboard') }}"
                        class="inline-flex items-center gap-2 whitespace-nowrap rounded-xl px-4 py-2.5 text-sm font-bold text-slate-600 transition hover:bg-slate-100 hover:text-navy-900"
                    >

                        <svg
                            class="h-4 w-4 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                        </svg>

                        Dashboard

                    </a>

                @else

                    {{-- Patient Login --}}
                    <a
                        href="{{ route('login') }}"
                        class="inline-flex shrink-0 items-center gap-2 whitespace-nowrap rounded-xl px-3.5 py-2.5 text-sm font-bold text-slate-600 transition hover:bg-white hover:text-primary-700"
                    >
                        Patient Login
                    </a>


                    {{-- Doctor Login --}}
                    <a
                        href="{{ route('doctor.login') }}"
                        class="inline-flex shrink-0 items-center gap-2 whitespace-nowrap rounded-xl border border-slate-200 bg-white/80 px-3.5 py-2.5 text-sm font-bold text-navy-900 shadow-sm transition hover:-translate-y-0.5 hover:border-primary-200 hover:shadow-lg"
                    >

                        <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-md bg-primary-50 text-[10px] text-primary-600">
                            +
                        </span>

                        Doctor

                    </a>

                @endauth


                {{-- Appointment CTA --}}
                <a
                    href="{{ route('appointments.create') }}"
                    class="group relative ml-1 inline-flex shrink-0 items-center gap-3 overflow-hidden whitespace-nowrap rounded-2xl bg-navy-900 px-5 py-3 text-sm font-bold text-white shadow-[0_14px_35px_-10px_rgba(7,28,64,.5)] transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_20px_45px_-12px_rgba(15,99,224,.45)]"
                >

                    <span class="absolute inset-0 bg-gradient-to-r from-primary-600 via-primary-500 to-cyan-500 opacity-0 transition duration-500 group-hover:opacity-100"></span>

                    <span class="relative">
                        Book Appointment
                    </span>

                    <span class="relative flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white/15 transition duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5">
                        ↗
                    </span>

                </a>

            </div>


            {{-- MOBILE BUTTON --}}
            <button
                @click="open = !open"
                class="relative flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-slate-200/80 bg-white/90 text-navy-900 shadow-lg shadow-slate-200/40 transition hover:border-primary-200 hover:text-primary-600 xl:hidden"
                aria-label="Open navigation"
            >

                <svg
                    x-show="!open"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2.3"
                    stroke-linecap="round"
                >
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>


                <svg
                    x-show="open"
                    x-cloak
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2.3"
                    stroke-linecap="round"
                >
                    <path d="M6 6l12 12M18 6L6 18"/>
                </svg>

            </button>

        </div>


        {{-- MOBILE MENU --}}
        <div
            x-show="open"
            x-cloak
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="border-t border-slate-100 bg-white/95 px-4 pb-5 pt-4 backdrop-blur-2xl xl:hidden"
        >

            <nav class="grid gap-2">

                <a
                    href="{{ route('home') }}"
                    class="flex items-center justify-between rounded-2xl px-5 py-3.5 font-bold transition {{ request()->routeIs('home') ? 'bg-primary-50 text-primary-700' : 'text-slate-700 hover:bg-slate-50' }}"
                >
                    Home
                    <span>→</span>
                </a>


                <a
                    href="{{ route('doctors.index') }}"
                    class="flex items-center justify-between rounded-2xl px-5 py-3.5 font-bold transition {{ request()->routeIs('doctors.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-700 hover:bg-slate-50' }}"
                >
                    Doctors
                    <span>→</span>
                </a>


                <a
                    href="{{ route('services.index') }}"
                    class="flex items-center justify-between rounded-2xl px-5 py-3.5 font-bold transition {{ request()->routeIs('services.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-700 hover:bg-slate-50' }}"
                >
                    Services
                    <span>→</span>
                </a>


                <a
                    href="{{ route('specialties.index') }}"
                    class="flex items-center justify-between rounded-2xl px-5 py-3.5 font-bold transition {{ request()->routeIs('specialties.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-700 hover:bg-slate-50' }}"
                >
                    Specialties
                    <span>→</span>
                </a>


                <a
                    href="{{ route('blog.index') }}"
                    class="flex items-center justify-between rounded-2xl px-5 py-3.5 font-bold transition {{ request()->routeIs('blog.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-700 hover:bg-slate-50' }}"
                >
                    Insights
                    <span>→</span>
                </a>


                <a
                    href="{{ route('contact') }}"
                    class="flex items-center justify-between rounded-2xl px-5 py-3.5 font-bold transition {{ request()->routeIs('contact') ? 'bg-primary-50 text-primary-700' : 'text-slate-700 hover:bg-slate-50' }}"
                >
                    Contact
                    <span>→</span>
                </a>

            </nav>


            <div class="mt-5 grid gap-3 border-t border-slate-100 pt-5">

                @guest

                    <div class="grid grid-cols-2 gap-3">

                        <a
                            href="{{ route('login') }}"
                            class="flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-4 py-3.5 text-sm font-bold text-navy-900"
                        >
                            Patient Login
                        </a>

                        <a
                            href="{{ route('doctor.login') }}"
                            class="flex items-center justify-center rounded-2xl bg-primary-50 px-4 py-3.5 text-sm font-bold text-primary-700"
                        >
                            Doctor Login
                        </a>

                    </div>

                @else

                    <a
                        href="{{ auth()->user()->isDoctor() ? route('doctor.dashboard') : route('dashboard') }}"
                        class="flex items-center justify-center rounded-2xl bg-slate-100 px-5 py-3.5 font-bold text-navy-900"
                    >
                        Open Dashboard
                    </a>

                @endauth


                <a
                    href="{{ route('appointments.create') }}"
                    class="flex items-center justify-center gap-3 rounded-2xl bg-gradient-to-r from-primary-600 to-blue-700 px-5 py-4 font-bold text-white shadow-xl shadow-primary-600/25"
                >
                    Book Appointment

                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-white/15">
                        ↗
                    </span>

                </a>

            </div>

        </div>

    </div>
</header>