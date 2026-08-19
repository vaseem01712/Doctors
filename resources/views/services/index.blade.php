<x-layouts.app>
    <section class="mx-auto max-w-7xl px-6 py-16">
        <x-section-heading label="Services" centered>Our Healthcare Services</x-section-heading>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <x-service-card :service="$service" />
            @endforeach
        </div>
        <div class="mt-10">{{ $services->links() }}</div>
    </section>
</x-layouts.app>
