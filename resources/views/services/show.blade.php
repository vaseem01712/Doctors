<x-layouts.app>
    <x-page-hero eyebrow="Care pathway" title="{{ $service->title }}" description="{{ $service->description }}" centered :meta="$service->price ? 'From ₹' . $service->price : null" />
        <x-page-hero eyebrow="Care pathway" title="{{ $service->title }}" description="{{ $service->description }}" centered :meta="$service->price ? 'From ₹' . $service->price : null" />
    <section class="mx-auto max-w-4xl px-6 py-16">
        <div class="prose max-w-none text-slate-600">{!! nl2br(e($service->description)) !!}</div>
        <x-button :href="route('appointments.create')" class="mt-10">Book This Service</x-button>

        @if ($related->isNotEmpty())
            <h2 class="mt-16 text-xl font-bold text-navy-900">Related Services</h2>
            <div class="mt-6 grid gap-6 sm:grid-cols-3">
                @foreach ($related as $r) <x-service-card :service="$r" /> @endforeach
            </div>
        @endif
    </section>
</x-layouts.app>
