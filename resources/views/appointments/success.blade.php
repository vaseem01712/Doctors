<x-layouts.app>
    <div class="page-hero">
        <div class="container-shell relative py-24 sm:py-28">
            <div class="card mx-auto max-w-xl text-center">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-accent-50 text-4xl text-accent-600 animate-pulse-soft">✓</div>
                <h1 class="section-heading mt-6">Appointment Requested!</h1>
                <p class="mt-3 text-slate-500">
                    Your appointment on <strong class="text-navy-900">{{ $appointment->appointment_date->format('d M Y') }}</strong> at <strong class="text-navy-900">{{ $appointment->appointment_time }}</strong> is currently <span class="section-label">{{ ucfirst($appointment->status) }}</span>.
                    We've sent a confirmation email — we'll follow up shortly to finalize the details.
                </p>
                <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                    <x-button :href="route('home')">Back to Home</x-button>
                    <a href="{{ route('appointments.create') }}" class="btn-secondary">Book Another</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
