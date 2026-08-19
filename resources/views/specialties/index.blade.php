<x-layouts.app>
    <section class="mx-auto max-w-7xl px-6 py-16">
        <x-section-heading label="Specialties" centered>All Specialties</x-section-heading>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($specialties as $specialty)
                <x-specialty-card :specialty="$specialty" />
            @endforeach
        </div>
        <div class="mt-10">{{ $specialties->links() }}</div>
    </section>
</x-layouts.app>
