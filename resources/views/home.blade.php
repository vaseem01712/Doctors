<x-layouts.app>

    {{-- =========================
        ULTRA PREMIUM HERO
    ========================== --}}
    <section class="relative isolate overflow-hidden mt-[-95px] bg-[#f7fbff]">

        {{-- Background --}}
        <div class="pointer-events-none absolute inset-0">
            <div
                class="absolute inset-0 opacity-[0.30]"
                style="background-image: radial-gradient(#0f63e0 1px, transparent 1px); background-size: 30px 30px;"
            ></div>

            <div class="absolute -left-40 top-0 h-[500px] w-[500px] rounded-full bg-blue-400/20 blur-[120px]"></div>
            <div class="absolute right-0 top-20 h-[450px] w-[450px] rounded-full bg-cyan-300/20 blur-[120px]"></div>
        </div>

        <div class="container-shell relative grid items-center gap-16 pb-28 pt-16 lg:grid-cols-[1fr_.9fr] lg:pb-36 lg:pt-24">

            {{-- Hero Content --}}
            <div>

                <div class="inline-flex items-center gap-3 rounded-full border border-blue-100 bg-white/80 px-4 py-2 text-sm font-bold text-primary-600 shadow-lg shadow-blue-100/40 backdrop-blur-xl">

                    <span class="relative flex h-2.5 w-2.5">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-green-500"></span>
                    </span>

                    Trusted healthcare experience
                </div>

                <h1 class="mt-8 max-w-4xl text-5xl font-black leading-[0.95] tracking-[-0.06em] text-navy-900 sm:text-6xl lg:text-[82px]">

                    Healthcare that

                    <span class="relative inline-block text-primary-600">
                        feels personal.

                        <svg
                            class="absolute -bottom-3 left-0 w-full"
                            viewBox="0 0 300 20"
                            fill="none"
                        >
                            <path
                                d="M5 15 C80 2 210 2 295 15"
                                stroke="currentColor"
                                stroke-width="4"
                                stroke-linecap="round"
                            />
                        </svg>
                    </span>

                </h1>

                <p class="mt-8 max-w-xl text-lg leading-8 text-slate-500 lg:text-xl">
                    Find exceptional specialists, book appointments effortlessly
                    and experience a better standard of modern healthcare.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">

                    <a
                        href="{{ route('appointments.create') }}"
                        class="group inline-flex items-center gap-3 rounded-2xl bg-primary-600 px-7 py-4 font-bold text-white shadow-xl shadow-primary-600/30 transition duration-300 hover:-translate-y-1 hover:bg-primary-700 hover:shadow-2xl"
                    >
                        Book appointment

                        <span class="transition duration-300 group-hover:translate-x-1 group-hover:-translate-y-1">
                            ↗
                        </span>
                    </a>

                    <a
                        href="{{ route('doctors.index') }}"
                        class="inline-flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-7 py-4 font-bold text-navy-900 shadow-lg shadow-slate-200/40 transition duration-300 hover:-translate-y-1 hover:border-primary-200 hover:shadow-xl"
                    >
                        Explore specialists

                        <span>→</span>
                    </a>

                </div>

                {{-- Trust --}}
                <div class="mt-12 flex flex-wrap items-center gap-6">

                    <div class="flex -space-x-3">

                        <img
                            class="h-11 w-11 rounded-full border-2 border-white object-cover"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&q=80"
                            alt="Patient"
                        >

                        <img
                            class="h-11 w-11 rounded-full border-2 border-white object-cover"
                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&q=80"
                            alt="Patient"
                        >

                        <img
                            class="h-11 w-11 rounded-full border-2 border-white object-cover"
                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&q=80"
                            alt="Patient"
                        >

                    </div>

                    <div>
                        <div class="flex items-center gap-1 text-amber-400">
                            ★★★★★
                        </div>

                        <p class="mt-1 text-sm font-bold text-navy-900">
                            Trusted by our patients
                        </p>
                    </div>

                    <div class="hidden h-10 w-px bg-slate-200 sm:block"></div>

                    <div>
                        <p class="text-2xl font-black text-navy-900">
                            250+
                        </p>

                        <p class="text-xs font-semibold text-slate-400">
                            Expert specialists
                        </p>
                    </div>

                </div>

            </div>

            {{-- HERO IMAGE --}}
            <div class="relative min-h-[600px]">

                <div class="absolute inset-10 rounded-[48px] bg-gradient-to-br from-primary-100 via-white to-cyan-100 blur-sm"></div>

                <div class="absolute inset-x-8 bottom-0 top-8 overflow-hidden rounded-[42px] border border-white/70 bg-white shadow-[0_40px_100px_-35px_rgba(15,99,224,.45)]">

                    <img
                        src="https://images.unsplash.com/photo-1550831107-1553da8c8464?w=1200&q=90&auto=format&fit=crop"
                        alt="Modern healthcare"
                        class="h-full w-full object-cover"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-navy-900/50 via-transparent to-white/10"></div>

                </div>

                <div class="absolute left-0 top-16 rounded-3xl border border-white/80 bg-white/90 p-5 shadow-2xl backdrop-blur-xl">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-50 text-xl text-green-600">
                            ✓
                        </div>

                        <div>
                            <p class="text-xs font-bold text-slate-400">
                                Live availability
                            </p>

                            <p class="mt-1 font-extrabold text-navy-900">
                                Doctors online now
                            </p>
                        </div>

                    </div>

                </div>

                <div class="absolute bottom-14 right-0 rounded-3xl border border-white/70 bg-white/95 p-5 shadow-2xl backdrop-blur-xl">

                    <p class="text-xs font-bold text-slate-400">
                        Patient satisfaction
                    </p>

                    <div class="mt-2 flex items-end gap-3">

                        <span class="text-4xl font-black text-navy-900">
                            98%
                        </span>

                        <span class="mb-1 rounded-full bg-green-50 px-3 py-1 text-xs font-bold text-green-600">
                            Excellent
                        </span>

                    </div>

                </div>

            </div>

        </div>

        {{-- SEARCH --}}
        <div class="container-shell relative mb-12">

            <form
                action="{{ route('doctors.index') }}"
                class="grid gap-3 rounded-[32px] border border-white bg-white/90 p-4 shadow-[0_30px_100px_-30px_rgba(15,40,90,.25)] backdrop-blur-xl md:grid-cols-[1.2fr_1fr_1fr_auto]"
            >

                <div class="flex items-center gap-4 rounded-2xl bg-slate-50 px-5">

                    <span class="text-xl text-primary-600">⌕</span>

                    <input
                        type="text"
                        name="name"
                        class="w-full bg-transparent py-4 text-sm font-semibold outline-none"
                        placeholder="Search doctor..."
                    >

                </div>

                <select
                    name="specialty"
                    class="rounded-2xl border-0 bg-slate-50 px-5 py-4 text-sm font-semibold outline-none"
                >
                    <option value="">All specialties</option>

                    @foreach($specialties ?? [] as $specialty)
                        <option value="{{ $specialty->slug }}">
                            {{ $specialty->name }}
                        </option>
                    @endforeach

                </select>

                <input
                    type="text"
                    name="location"
                    class="rounded-2xl border-0 bg-slate-50 px-5 py-4 text-sm font-semibold outline-none"
                    placeholder="Your location"
                >

                <button
                    type="submit"
                    class="rounded-2xl bg-primary-600 px-7 py-4 font-bold text-white shadow-lg shadow-primary-600/25 transition hover:-translate-y-0.5 hover:bg-primary-700"
                >
                    Find doctor ↗
                </button>

            </form>

        </div>

    </section>

    {{-- =========================
        SPECIALTIES
    ========================== --}}
    <section class="bg-white pb-28 pt-36">

        <div class="container-shell">

            <div class="flex flex-col justify-between gap-8 md:flex-row md:items-end">

                <div>

                    <span class="section-label">
                        EXPLORE SPECIALTIES
                    </span>

                    <h2 class="mt-5 max-w-2xl text-4xl font-black tracking-[-0.04em] text-navy-900 sm:text-5xl">

                        Expert care for every

                        <span class="text-primary-600">
                            health journey.
                        </span>

                    </h2>

                </div>

                <a
                    href="{{ route('specialties.index') }}"
                    class="group inline-flex items-center gap-2 font-bold text-primary-600"
                >
                    Explore all specialties

                    <span class="transition group-hover:translate-x-2">
                        →
                    </span>
                </a>

            </div>

            <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                @foreach($specialties ?? [] as $specialty)

                    <a
                        href="{{ route('specialties.show', $specialty) }}"
                        class="group relative overflow-hidden rounded-[30px] border border-slate-100 bg-white p-7 shadow-sm transition duration-500 hover:-translate-y-2 hover:border-primary-100 hover:shadow-[0_30px_70px_-30px_rgba(15,99,224,.3)]"
                    >

                        <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-primary-100/50 blur-2xl transition duration-500 group-hover:scale-150"></div>

                        <div class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-50 text-2xl text-primary-600 transition duration-500 group-hover:rotate-6 group-hover:bg-primary-600 group-hover:text-white">
                            ✦
                        </div>

                        <h3 class="relative mt-7 text-xl font-extrabold text-navy-900">
                            {{ $specialty->name }}
                        </h3>

                        <p class="relative mt-3 line-clamp-2 text-sm leading-6 text-slate-500">
                            {{ $specialty->description ?? 'Personalized healthcare designed around your individual needs.' }}
                        </p>

                        <div class="relative mt-7 flex items-center justify-between text-sm font-bold text-primary-600">

                            Explore care

                            <span class="text-lg transition duration-300 group-hover:translate-x-2">
                                →
                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

        </div>

    </section>

    {{-- =========================
        WHY MEDICARE
    ========================== --}}
    <section class="relative overflow-hidden bg-slate-50 py-28">

        <div class="absolute left-0 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-100/40 blur-[100px]"></div>

        <div class="container-shell relative grid items-center gap-16 lg:grid-cols-[.9fr_1.1fr]">

            <div class="relative">

                <div class="overflow-hidden rounded-[42px] shadow-2xl">

                    <img
                        src="https://images.unsplash.com/photo-1584982751601-97dcc096659c?w=1200&q=90&auto=format&fit=crop"
                        alt="Modern medical care"
                        class="h-[580px] w-full object-cover"
                    >

                </div>

                <div class="absolute bottom-6 left-6 right-6 rounded-[28px] border border-white/20 bg-navy-900/90 p-6 text-white backdrop-blur-xl">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm text-white/60">
                                Patient satisfaction
                            </p>

                            <p class="mt-1 text-3xl font-black">
                                98%
                            </p>
                        </div>

                        <div class="text-right">

                            <p class="text-sm font-bold text-accent-400">
                                Exceptional care
                            </p>

                            <p class="mt-2 text-xs text-white/50">
                                Trusted healthcare experience
                            </p>

                        </div>

                    </div>

                    <div class="mt-5 h-2 overflow-hidden rounded-full bg-white/10">
                        <div class="h-full w-[98%] rounded-full bg-accent-400"></div>
                    </div>

                </div>

            </div>

            <div>

                <span class="section-label">
                    WHY MEDICARE
                </span>

                <h2 class="mt-5 max-w-2xl text-4xl font-black tracking-[-0.04em] text-navy-900 sm:text-5xl">

                    A smarter way to

                    <span class="text-primary-600">
                        experience healthcare.
                    </span>

                </h2>

                <p class="mt-6 max-w-xl text-lg leading-8 text-slate-500">
                    Every part of your healthcare journey is designed to feel
                    simpler, faster and more personal.
                </p>

                <div class="mt-10 grid gap-4 sm:grid-cols-2">

                    @foreach([
                        ['01','Human-first care','Specialists who listen and understand your needs.'],
                        ['02','Modern medicine','Technology and evidence-led healthcare together.'],
                        ['03','Simple access','Find, book and manage appointments effortlessly.'],
                        ['04','Always connected','Support whenever and wherever you need it.']
                    ] as $feature)

                        <div class="group rounded-[26px] border border-slate-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-primary-100 hover:shadow-xl">

                            <span class="text-xs font-black tracking-[0.2em] text-primary-600">
                                {{ $feature[0] }}
                            </span>

                            <h3 class="mt-4 text-lg font-extrabold text-navy-900">
                                {{ $feature[1] }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                {{ $feature[2] }}
                            </p>

                        </div>

                    @endforeach

                </div>

                <a
                    href="{{ route('services.index') }}"
                    class="mt-10 inline-flex items-center gap-3 rounded-2xl bg-navy-900 px-7 py-4 font-bold text-white transition hover:-translate-y-1 hover:bg-primary-600"
                >
                    Discover our care
                    <span>↗</span>
                </a>

            </div>

        </div>

    </section>

    {{-- =========================
        SERVICES
    ========================== --}}
    <section class="relative overflow-hidden bg-navy-900 py-28 text-white">

        <div
            class="absolute inset-0 opacity-30"
            style="background-image: radial-gradient(rgba(255,255,255,.15) 1px, transparent 1px); background-size: 30px 30px;"
        ></div>

        <div class="container-shell relative">

            <div class="flex flex-col justify-between gap-8 md:flex-row md:items-end">

                <div>

                    <span class="inline-flex rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-bold tracking-widest text-accent-400">
                        OUR SERVICES
                    </span>

                    <h2 class="mt-6 max-w-2xl text-4xl font-black tracking-[-0.04em] sm:text-5xl">

                        Everything you need.

                        <span class="text-accent-400">
                            All in one place.
                        </span>

                    </h2>

                </div>

                <a
                    href="{{ route('services.index') }}"
                    class="rounded-2xl border border-white/15 bg-white/5 px-6 py-3 font-bold transition hover:bg-white/10"
                >
                    View all services →
                </a>

            </div>

            <div class="mt-16 grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                @foreach($services ?? [] as $service)

                    <a
                        href="{{ route('services.show', $service) }}"
                        class="group relative overflow-hidden rounded-[32px] border border-white/10 bg-white/[0.04] p-8 backdrop-blur-sm transition duration-500 hover:-translate-y-2 hover:border-accent-400/40 hover:bg-white/[0.08]"
                    >

                        <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-primary-500/10 blur-3xl transition group-hover:scale-150"></div>

                        <div class="relative flex items-start justify-between">

                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-2xl text-accent-400 transition group-hover:bg-accent-400 group-hover:text-navy-900">
                                ✦
                            </div>

                            <span class="text-2xl text-white/30 transition group-hover:text-accent-400">
                                ↗
                            </span>

                        </div>

                        <h3 class="relative mt-10 text-2xl font-extrabold">
                            {{ $service->title }}
                        </h3>

                        <p class="relative mt-4 text-sm leading-7 text-slate-400">
                            {{ $service->short_description ?? '' }}
                        </p>

                        <div class="relative mt-8 font-bold text-accent-400">
                            Learn more →
                        </div>

                    </a>

                @endforeach

            </div>

        </div>

    </section>

    {{-- =========================
        HOW IT WORKS
    ========================== --}}
    <section class="bg-white py-32">

        <div class="container-shell">

            <div class="mx-auto max-w-3xl text-center">

                <span class="section-label">
                    HOW IT WORKS
                </span>

                <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] text-navy-900 sm:text-5xl">

                    Healthcare made

                    <span class="text-primary-600">
                        beautifully simple.
                    </span>

                </h2>

            </div>

            <div class="relative mt-20 grid gap-8 lg:grid-cols-4">

                <div class="absolute left-[12%] right-[12%] top-10 hidden h-px bg-gradient-to-r from-transparent via-primary-200 to-transparent lg:block"></div>

                @foreach([
                    ['01','Choose a specialty','Tell us what kind of care you need.'],
                    ['02','Pick your doctor','Compare trusted specialists and profiles.'],
                    ['03','Choose a time','Select the appointment time that works for you.'],
                    ['04','Start your care','Confirm your appointment and you are ready.']
                ] as $step)

                    <div class="relative text-center">

                        <div class="relative z-10 mx-auto flex h-20 w-20 items-center justify-center rounded-[28px] bg-white text-lg font-black text-primary-600 shadow-[0_20px_50px_-20px_rgba(15,99,224,.35)] ring-1 ring-primary-100">
                            {{ $step[0] }}
                        </div>

                        <h3 class="mt-8 text-xl font-extrabold text-navy-900">
                            {{ $step[1] }}
                        </h3>

                        <p class="mx-auto mt-3 max-w-[240px] text-sm leading-6 text-slate-500">
                            {{ $step[2] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- =========================
        DOCTORS
    ========================== --}}
    <section class="bg-slate-50 py-28">

        <div class="container-shell">

            <div class="flex flex-col justify-between gap-8 md:flex-row md:items-end">

                <div>

                    <span class="section-label">
                        OUR SPECIALISTS
                    </span>

                    <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] text-navy-900 sm:text-5xl">

                        Meet the experts behind

                        <span class="text-primary-600">
                            exceptional care.
                        </span>

                    </h2>

                </div>

                <a
                    href="{{ route('doctors.index') }}"
                    class="font-bold text-primary-600"
                >
                    View all doctors →
                </a>

            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                @foreach($doctors ?? [] as $doctor)

                    <a
                        href="{{ route('doctors.show', $doctor) }}"
                        class="group overflow-hidden rounded-[32px] bg-white shadow-sm transition duration-500 hover:-translate-y-2 hover:shadow-[0_30px_70px_-25px_rgba(15,99,224,.25)]"
                    >

                        <div class="relative h-80 overflow-hidden bg-primary-50">

                            <img
                                src="https://ui-avatars.com/api/?name={{ urlencode($doctor->name) }}&background=0b1f3a&color=fff&size=700&bold=true"
                                alt="{{ $doctor->name }}"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-110"
                            >

                            <div class="absolute left-5 top-5 rounded-full bg-white/90 px-3 py-1.5 text-xs font-bold text-navy-900 backdrop-blur">
                                Available
                            </div>

                            <div class="absolute bottom-5 left-5 right-5 flex items-center justify-between rounded-2xl bg-navy-900/90 px-4 py-3 text-white backdrop-blur-xl">

                                <span class="text-xs text-white/60">
                                    Patient rating
                                </span>

                                <span class="font-black text-accent-400">
                                    ★ {{ $doctor->rating ?? '5.0' }}
                                </span>

                            </div>

                        </div>

                        <div class="p-6">

                            <h3 class="text-xl font-extrabold text-navy-900">
                                {{ $doctor->name }}
                            </h3>

                            <p class="mt-2 text-sm font-bold text-primary-600">
                                {{ $doctor->specialty->name ?? 'Specialist' }}
                            </p>

                            <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">

                                <span class="text-xs font-semibold text-slate-400">
                                    {{ $doctor->experience_years ?? '0' }}+ years experience
                                </span>

                                <span class="text-primary-600">
                                    →
                                </span>

                            </div>

                        </div>

                    </a>

                @endforeach

            </div>

        </div>

    </section>

    {{-- =========================
        TESTIMONIALS
    ========================== --}}
    <section class="bg-white py-28">

        <div class="container-shell">

            <div class="mx-auto max-w-3xl text-center">

                <span class="section-label">
                    PATIENT STORIES
                </span>

                <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] text-navy-900 sm:text-5xl">

                    Care people

                    <span class="text-primary-600">
                        genuinely remember.
                    </span>

                </h2>

            </div>

            <div class="mt-16 grid gap-6 lg:grid-cols-3">

                @forelse($testimonials ?? [] as $testimonial)

                    <div class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                        <div class="flex gap-1 text-amber-400">
                            ★★★★★
                        </div>

                        <p class="mt-7 text-lg font-semibold leading-8 text-navy-900">
                            “{{ $testimonial->content ?? $testimonial->message ?? 'Great healthcare experience.' }}”
                        </p>

                        <div class="mt-10 flex items-center gap-4">

                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 font-black text-primary-600">
                                {{ strtoupper(substr($testimonial->name ?? 'P', 0, 1)) }}
                            </div>

                            <div>

                                <p class="font-extrabold text-navy-900">
                                    {{ $testimonial->name ?? 'Patient' }}
                                </p>

                                <p class="text-xs text-slate-400">
                                    Verified patient
                                </p>

                            </div>

                        </div>

                    </div>

                @empty

                    @foreach([
                        'The booking experience was incredibly simple and the doctor was excellent.',
                        'Beautiful clinic experience, thoughtful staff and genuinely modern care.',
                        'I finally found a healthcare experience that feels designed for people.'
                    ] as $quote)

                        <div class="rounded-[32px] border border-slate-100 bg-white p-8 shadow-sm">

                            <div class="text-amber-400">
                                ★★★★★
                            </div>

                            <p class="mt-7 text-lg font-semibold leading-8 text-navy-900">
                                “{{ $quote }}”
                            </p>

                            <p class="mt-10 text-sm font-bold text-slate-500">
                                Verified patient
                            </p>

                        </div>

                    @endforeach

                @endforelse

            </div>

        </div>

    </section>

    {{-- =========================
        FAQ
    ========================== --}}
    <section
        class="bg-slate-50 py-28"
        x-data="{ open: null }"
    >

        <div class="container-shell grid gap-16 lg:grid-cols-[.8fr_1.2fr]">

            <div>

                <span class="section-label">
                    FAQ
                </span>

                <h2 class="mt-5 text-4xl font-black tracking-[-0.04em] text-navy-900 sm:text-5xl">

                    Questions,

                    <span class="text-primary-600">
                        answered clearly.
                    </span>

                </h2>

                <p class="mt-6 max-w-md text-lg leading-8 text-slate-500">
                    Everything you need to know before booking your appointment.
                </p>

                <a
                    href="{{ route('appointments.create') }}"
                    class="mt-9 inline-flex rounded-2xl bg-navy-900 px-6 py-4 font-bold text-white transition hover:bg-primary-600"
                >
                    Book appointment →
                </a>

            </div>

            <div class="space-y-4">

                @forelse(($faqs ?? collect()) as $i => $faq)

                    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white transition hover:border-primary-100">

                        <button
                            type="button"
                            @click="open = open === {{ $i }} ? null : {{ $i }}"
                            class="flex w-full items-center justify-between gap-6 p-6 text-left font-extrabold text-navy-900"
                        >

                            <span>
                                {{ $faq->question }}
                            </span>

                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-primary-50 text-xl text-primary-600"
                                x-text="open === {{ $i }} ? '−' : '+'"
                            ></span>

                        </button>

                        <div
                            x-show="open === {{ $i }}"
                            x-transition
                            x-cloak
                            class="px-6 pb-6 text-sm leading-7 text-slate-500"
                        >
                            {{ $faq->answer }}
                        </div>

                    </div>

                @empty

                    @foreach([
                        ['How do I book an appointment?', 'Choose a specialty, select your doctor, pick an available time and confirm your appointment online.'],
                        ['Can I consult online?', 'Yes. Eligible specialists can provide online consultations through the appointment process.'],
                        ['Can I change my appointment?', 'You can manage your upcoming appointment through your patient dashboard or contact support.'],
                        ['Do you offer urgent care?', 'Our care team can guide you to the most suitable service based on your needs.']
                    ] as $i => $faq)

                        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white">

                            <button
                                type="button"
                                @click="open = open === {{ $i }} ? null : {{ $i }}"
                                class="flex w-full items-center justify-between gap-6 p-6 text-left font-extrabold text-navy-900"
                            >

                                <span>
                                    {{ $faq[0] }}
                                </span>

                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-primary-50 text-xl text-primary-600"
                                    x-text="open === {{ $i }} ? '−' : '+'"
                                ></span>

                            </button>

                            <div
                                x-show="open === {{ $i }}"
                                x-transition
                                x-cloak
                                class="px-6 pb-6 text-sm leading-7 text-slate-500"
                            >
                                {{ $faq[1] }}
                            </div>

                        </div>

                    @endforeach

                @endforelse

            </div>

        </div>

    </section>

    {{-- =========================
        FINAL PREMIUM CTA
    ========================== --}}
    <section class="relative isolate overflow-hidden bg-navy-900 py-28 text-white">

        <div class="absolute inset-0">

            <div class="absolute left-1/2 top-1/2 h-[600px] w-[600px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-600/20 blur-[150px]"></div>

            <div class="absolute -left-20 bottom-0 h-80 w-80 rounded-full bg-accent-400/10 blur-[100px]"></div>

        </div>

        <div class="container-shell relative">

            <div class="mx-auto max-w-4xl text-center">

                <span class="inline-flex rounded-full border border-white/10 bg-white/5 px-5 py-2 text-xs font-bold tracking-[0.2em] text-accent-400">
                    YOUR NEXT STEP
                </span>

                <h2 class="mt-8 text-5xl font-black tracking-[-0.05em] sm:text-6xl lg:text-7xl">

                    Better healthcare

                    <span class="block text-accent-400">
                        starts here.
                    </span>

                </h2>

                <p class="mx-auto mt-7 max-w-2xl text-lg leading-8 text-slate-400">
                    Find the right specialist, choose the right time and take
                    the next step towards better health.
                </p>

                <div class="mt-12 flex flex-wrap justify-center gap-4">

                    <a
                        href="{{ route('appointments.create') }}"
                        class="group inline-flex items-center gap-3 rounded-2xl bg-accent-400 px-8 py-5 font-black text-navy-900 shadow-2xl shadow-black/20 transition hover:-translate-y-1 hover:scale-[1.02]"
                    >

                        Book your appointment

                        <span class="transition group-hover:translate-x-1 group-hover:-translate-y-1">
                            ↗
                        </span>

                    </a>

                    <a
                        href="{{ route('doctors.index') }}"
                        class="rounded-2xl border border-white/15 bg-white/5 px-8 py-5 font-bold text-white transition hover:bg-white/10"
                    >
                        Find a specialist
                    </a>

                </div>

                <div class="mt-12 flex flex-wrap justify-center gap-8 text-sm text-white/50">

                    <span>✓ Easy booking</span>
                    <span>✓ Trusted specialists</span>
                    <span>✓ Secure healthcare</span>

                </div>

            </div>

        </div>

    </section>

</x-layouts.app>