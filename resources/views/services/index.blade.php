<x-layouts.app>
    <x-page-hero eyebrow="Care pathways" title="Healthcare designed around you." description="From everyday wellness to specialist treatment, find the expertise and support you need in one place." image="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1100&q=85&auto=format&fit=crop" image-alt="Healthcare professional speaking with a patient" />
    <section class="mx-auto max-w-7xl px-6 py-16">
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($services as $service)
                <x-service-card :service="$service" />
            @endforeach
        </div>
        <div class="mt-10">{{ $services->links() }}</div>
    </section>
</x-layouts.app>
