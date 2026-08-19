<x-layouts.app>
    <section class="bg-primary-50/50 py-14">
        <div class="mx-auto max-w-7xl px-6">
            <x-section-heading label="Doctors" centered>Find Your Doctor</x-section-heading>

            <form class="mt-8 grid gap-4 rounded-[28px] border border-slate-100 bg-white p-7 shadow-soft sm:grid-cols-4">
                <input type="text" name="name" value="{{ request('name') }}" placeholder="Doctor name" class="input-field">
                <select name="specialty" class="input-field">
                    <option value="">All Specialties</option>
                    @foreach ($specialties as $s)
                        <option value="{{ $s->slug }}" @selected(request('specialty') === $s->slug)>{{ $s->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="location" value="{{ request('location') }}" placeholder="Location" class="input-field">
                <button type="submit" class="btn-primary justify-center">Search</button>
            </form>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16">
        @if ($doctors->isEmpty())
            <div class="py-20 text-center text-slate-500">
                <p class="text-xl font-semibold text-navy-900">No doctors found</p>
                <p class="mt-2">Try adjusting your search filters.</p>
            </div>
        @else
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($doctors as $doctor)
                    <x-doctor-card :doctor="$doctor" />
                @endforeach
            </div>
            <div class="mt-10">{{ $doctors->links() }}</div>
        @endif
    </section>
</x-layouts.app>
