<x-layouts.app>
    <section class="mx-auto max-w-7xl px-6 py-16">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="flex flex-col gap-6 sm:flex-row">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($doctor->name) }}&background=1f83fb&color=fff&size=200"
                         class="h-40 w-40 rounded-3xl object-cover" alt="{{ $doctor->name }}">
                    <div>
                        <h1 class="text-3xl font-bold text-navy-900">{{ $doctor->name }}</h1>
                        <p class="mt-1 text-primary-600">{{ $doctor->specialty->name ?? '' }}</p>
                        <p class="mt-2 text-sm text-slate-500">{{ $doctor->experience_years }}+ years &middot; ⭐ {{ $doctor->rating }} &middot; ₹{{ $doctor->consultation_fee }} consultation</p>
                        <p class="mt-1 text-sm text-slate-500">{{ $doctor->education }}</p>
                    </div>
                </div>

                <h2 class="mt-10 text-xl font-bold text-navy-900">Biography</h2>
                <p class="mt-2 text-slate-500">{{ $doctor->biography }}</p>

                @if ($doctor->certifications)
                    <h2 class="mt-8 text-xl font-bold text-navy-900">Certifications</h2>
                    <ul class="mt-2 list-disc pl-5 text-slate-500">
                        @foreach ($doctor->certifications as $c) <li>{{ $c }}</li> @endforeach
                    </ul>
                @endif

                @if ($doctor->languages)
                    <p class="mt-6 text-sm text-slate-500">Languages: {{ implode(', ', $doctor->languages) }}</p>
                @endif

                @if ($related->isNotEmpty())
                    <h2 class="mt-14 text-xl font-bold text-navy-900">Related Doctors</h2>
                    <div class="mt-6 grid gap-6 sm:grid-cols-3">
                        @foreach ($related as $r)
                            <x-doctor-card :doctor="$r" />
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Booking widget --}}
            <div x-data="{
                    date: new Date().toISOString().split('T')[0],
                    slots: [],
                    selected: '',
                    loading: false,
                    async fetchSlots() {
                        this.loading = true; this.selected = '';
                        const res = await fetch(`{{ route('doctors.slots', $doctor) }}?date=${this.date}`);
                        const data = await res.json();
                        this.slots = data.slots; this.loading = false;
                    }
                 }" x-init="fetchSlots()" class="premium-card h-fit">
                <h3 class="text-lg font-bold text-navy-900">Book Appointment</h3>
                <form action="{{ route('appointments.store') }}" method="POST" class="mt-4 space-y-4">
                    @csrf
                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    <input type="hidden" name="specialty_id" value="{{ $doctor->specialty_id }}">

                    <label class="block text-sm font-medium text-slate-600">Date</label>
                    <input type="date" name="appointment_date" x-model="date" @change="fetchSlots()" min="{{ now()->toDateString() }}" class="input-field">

                    <label class="block text-sm font-medium text-slate-600">Available Slots</label>
                    <div class="grid grid-cols-3 gap-2" x-show="!loading">
                        <template x-for="slot in slots" :key="slot">
                            <button type="button" @click="selected = slot"
                                    :class="selected === slot ? 'bg-primary-600 text-white' : 'bg-primary-50 text-primary-700'"
                                    class="rounded-lg px-2 py-2 text-sm font-medium" x-text="slot"></button>
                        </template>
                        <p x-show="slots.length === 0" class="col-span-3 text-sm text-slate-400">No slots available</p>
                    </div>
                    <x-loader x-show="loading" />
                    <input type="hidden" name="appointment_time" x-model="selected">

                    <input type="text" name="patient_name" required placeholder="Full name" class="input-field">
                    <input type="email" name="patient_email" required placeholder="Email" class="input-field">
                    <input type="text" name="patient_phone" placeholder="Phone" class="input-field">
                    <textarea name="message" placeholder="Message (optional)" class="input-field" rows="3"></textarea>

                    <button type="submit" class="btn-primary w-full justify-center" :disabled="!selected">Confirm Appointment</button>
                </form>
            </div>
        </div>
    </section>
</x-layouts.app>
