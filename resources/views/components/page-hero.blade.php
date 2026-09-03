@props([
    'eyebrow' => 'MediCare',
    'title',
    'description' => null,
    'image' => null,
    'imageAlt' => '',
    'centered' => false,
    'meta' => null,
])

<section class="page-hero page-hero-premium">
    <div class="page-hero-grid"></div>
    <div class="page-hero-orb page-hero-orb-primary"></div>
    <div class="page-hero-orb page-hero-orb-accent"></div>

    <div class="container-shell relative z-10 py-16 sm:py-20 lg:py-24">
        <div class="{{ $image ? 'grid items-center gap-12 lg:grid-cols-[1.05fr_.95fr]' : '' }}">
            <div class="{{ $centered && ! $image ? 'mx-auto text-center' : '' }} max-w-3xl">
                <div class="flex items-center gap-3 {{ $centered && ! $image ? 'justify-center' : '' }}">
                    <span class="hero-line"></span>
                    <span class="section-label">{{ $eyebrow }}</span>
                </div>
                <h1 class="mt-6 text-4xl font-extrabold leading-[1.04] tracking-[-.055em] text-navy-900 sm:text-5xl lg:text-[64px]">{{ $title }}</h1>
                @if($description)
                    <p class="mt-6 max-w-2xl text-base leading-8 text-slate-500 sm:text-lg {{ $centered && ! $image ? 'mx-auto' : '' }}">{{ $description }}</p>
                @endif
                @if($meta)
                    <div class="mt-7 flex flex-wrap items-center gap-3 text-sm font-bold text-slate-500">{{ $meta }}</div>
                @endif
            </div>

            @if($image)
                <div class="hero-visual">
                    <div class="hero-visual-frame"></div>
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" class="relative h-72 w-full rounded-[28px] object-cover shadow-[0_30px_80px_-32px_rgba(7,28,64,.5)] sm:h-80">
                    <div class="hero-visual-badge"><span class="eyebrow-dot"></span><span>Care, considered</span></div>
                </div>
            @endif
        </div>
    </div>
</section>
