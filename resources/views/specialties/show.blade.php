<x-layouts.app>
    <x-page-hero eyebrow="Specialty" title="{{ $specialty->name }}" description="{{ $specialty->description }}" centered />
    <section class="mx-auto max-w-7xl px-6 py-16">
        <h2 class="text-xl font-bold text-navy-900">Doctors</h2>
        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($specialty->doctors as $doctor)
                <x-doctor-card :doctor="$doctor" />
            @empty
                <p class="text-slate-500">No doctors found for this specialty yet.</p>
            @endforelse
        </div>

        <h2 class="mt-14 text-xl font-bold text-navy-900">Services</h2>
        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($specialty->services as $service)
                <x-service-card :service="$service" />
            @empty
                <p class="text-slate-500">No services found for this specialty yet.</p>
            @endforelse
        </div>

        <x-button :href="route('appointments.create')" class="mt-14">Book Appointment</x-button>
    </section>
</x-layouts.app>
