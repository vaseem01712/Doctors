<x-layouts.app>
    <section class="relative overflow-hidden border-b border-slate-200/70 bg-[#f7fbff] text-navy-900">
        <div class="pointer-events-none absolute inset-0 opacity-50" style="background-image: linear-gradient(rgba(31,131,251,.06) 1px, transparent 1px), linear-gradient(90deg, rgba(31,131,251,.06) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="pointer-events-none absolute -left-24 top-24 h-64 w-64 rounded-full bg-primary-200/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-20 -top-20 h-80 w-80 rounded-full bg-accent-200/30 blur-3xl"></div>
        <div class="container-shell relative z-10 grid items-center gap-12 pt-[12rem] pb-20 sm:pb-24 lg:grid-cols-[1fr_.7fr] lg:gap-20">
            <div class="max-w-2xl">
                <div class="flex items-center gap-3"><span class="hero-line"></span><span class="section-label">Support, made simple</span></div>
                <h1 class="mt-7 text-5xl font-extrabold leading-[.98] tracking-[-.065em] text-navy-900 sm:text-6xl lg:text-[76px]">Questions, <span class="text-primary-600">answered clearly.</span></h1>
                <p class="mt-7 max-w-xl text-base leading-8 text-slate-500 sm:text-lg">Everything you need to know before booking your appointment, meeting your doctor or using your secure patient portal.</p>
            </div>
            {{-- <div class="relative mx-auto w-full max-w-sm">
                <div class="absolute -inset-4 rotate-3 rounded-[36px] bg-primary-100/70"></div>
                <div class="relative rounded-[30px] border border-white bg-white/90 p-7 shadow-[0_30px_80px_-35px_rgba(7,28,64,.38)] backdrop-blur-xl sm:p-8">
                    <div class="flex items-center justify-between"><div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-600 text-2xl font-black text-white shadow-lg shadow-primary-600/25">?</div><span class="rounded-full bg-accent-50 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-[.15em] text-accent-700">24/7 clarity</span></div>
                    <p class="mt-7 text-xs font-extrabold uppercase tracking-[.18em] text-primary-600">MediCare support</p>
                    <p class="mt-3 text-2xl font-extrabold leading-tight tracking-[-.04em] text-navy-900">The right answer is closer than you think.</p>
                    <div class="mt-7 flex items-center gap-2 text-sm font-bold text-slate-500"><span class="eyebrow-dot"></span><span>Clear guidance, whenever you need it</span></div>
                </div>
            </div> --}}
        </div>
    </section>

    <section class="bg-white py-16 sm:py-24" x-data="{ open: 0 }">
        <div class="container-shell grid gap-12 lg:grid-cols-[.72fr_1.28fr] lg:gap-20">
            <div class="lg:sticky lg:top-32 lg:self-start">
                <span class="section-label">Knowledge centre</span>
                <h2 class="mt-5 text-3xl font-extrabold leading-tight tracking-[-.045em] text-navy-900 sm:text-4xl">Let’s make healthcare feel simpler.</h2>
                <p class="mt-5 max-w-sm text-base leading-7 text-slate-500">Browse the answers our care team hears most often. Still need help?</p>
                <a href="{{ route('contact') }}" class="btn-primary mt-7">Talk to our care team <span>↗</span></a>
                <div class="mt-10 flex items-center gap-3 border-t border-slate-100 pt-5"><span class="flex h-10 w-10 items-center justify-center rounded-xl bg-accent-50 text-accent-600">✓</span><div><p class="text-sm font-extrabold text-navy-900">Trusted guidance</p><p class="mt-0.5 text-xs text-slate-400">From our care specialists</p></div></div>
            </div>

            <div class="space-y-4">
                @foreach([
                    ['How do I book an appointment?', 'Choose a specialty, select your doctor, pick an available time and confirm your appointment online.'],
                    ['Can I consult online?', 'Yes. Eligible specialists can provide online consultations through the appointment process.'],
                    ['Can I change my appointment?', 'You can manage your upcoming appointment through your patient dashboard or contact support.'],
                    ['Do you offer urgent care?', 'Our care team can guide you to the most suitable service based on your needs.'],
                    ['How do I find the right specialist?', 'Use our doctor search and specialty filters to compare profiles, expertise and availability.'],
                    ['Is my information secure?', 'We follow secure application practices and protect access through authenticated patient accounts.'],
                ] as $i => $faq)
                    <div class="group overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-[0_12px_35px_-28px_rgba(7,28,64,.35)] transition duration-300" :class="open === {{ $i }} ? 'border-primary-200 shadow-[0_20px_50px_-30px_rgba(15,99,224,.25)]' : 'hover:-translate-y-0.5 hover:border-primary-100 hover:shadow-[0_18px_45px_-30px_rgba(7,28,64,.22)]'">
                        <button type="button" @click="open = open === {{ $i }} ? null : {{ $i }}" class="flex w-full items-center justify-between gap-6 px-6 py-5 text-left sm:px-7 sm:py-6">
                            <span class="flex items-center gap-4"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-xs font-black text-primary-600 transition group-hover:bg-primary-600 group-hover:text-white" :class="open === {{ $i }} ? 'bg-primary-600 text-white' : ''">0{{ $i + 1 }}</span><span class="text-base font-extrabold text-navy-900 sm:text-lg">{{ $faq[0] }}</span></span>
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-primary-50 text-xl font-medium text-primary-600 transition" :class="open === {{ $i }} ? 'rotate-45 bg-primary-600 text-white' : ''">+</span>
                        </button>
                        <div x-show="open === {{ $i }}" x-transition x-cloak class="border-t border-slate-100 px-6 pb-6 pl-[4.5rem] text-sm leading-7 text-slate-500 sm:px-7 sm:pl-[5.75rem]">{{ $faq[1] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
