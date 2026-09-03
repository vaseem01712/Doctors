<x-layouts.app>
    @php
        $image = $service->image
            ? asset('storage/' . ltrim($service->image, '/'))
            : 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1200&q=85&auto=format&fit=crop';
    @endphp

    <section class="relative overflow-hidden border-b border-slate-200/70 bg-[#f7fbff] text-navy-900">
        <div class="pointer-events-none absolute inset-0 opacity-50" style="background-image: linear-gradient(rgba(31,131,251,.06) 1px, transparent 1px), linear-gradient(90deg, rgba(31,131,251,.06) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="container-shell relative z-10 grid items-center gap-12 pt-[12rem] pb-20 sm:pb-24 lg:grid-cols-[1fr_.8fr]">
            <div class="max-w-2xl">
                <div class="flex items-center gap-3"><span class="hero-line"></span><span class="section-label">Care pathway</span></div>
                <h1 class="mt-7 text-5xl font-extrabold leading-[.98] tracking-[-.065em] text-navy-900 sm:text-6xl">{{ $service->title }}</h1>
                <p class="mt-6 max-w-xl text-base leading-8 text-slate-500 sm:text-lg">{{ $service->description ?: $service->short_description }}</p>
                @if($service->price)<p class="mt-7 text-xl font-extrabold text-primary-600">From ₹{{ $service->price }}</p>@endif
            </div>
            <div class="relative"><div class="absolute -inset-4 rotate-3 rounded-[36px] bg-primary-100/70"></div><div class="relative overflow-hidden rounded-[30px] border border-white bg-white p-2 shadow-[0_30px_80px_-35px_rgba(7,28,64,.38)]"><img src="{{ $image }}" alt="{{ $service->title }}" class="h-64 w-full rounded-[22px] object-cover sm:h-80"></div></div>
        </div>
    </section>

    <section class="mx-auto max-w-4xl px-6 py-16 sm:py-20">
        <div class="prose max-w-none text-slate-600">{!! nl2br(e($service->description)) !!}</div>
        <x-button :href="route('appointments.create')" class="mt-10">Book This Service</x-button>
        @if ($related->isNotEmpty())
            <h2 class="mt-16 text-xl font-bold text-navy-900">Related Services</h2>
            <div class="mt-6 grid gap-6 sm:grid-cols-3">@foreach ($related as $r)<x-service-card :service="$r" />@endforeach</div>
        @endif
    </section>
</x-layouts.app>
