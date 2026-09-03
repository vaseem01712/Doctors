<x-layouts.app>
    <section class="page-hero">
        <div class="container-shell py-20">
            <div class="grid items-center gap-10 lg:grid-cols-[1.2fr_.8fr]">
                <div>
                    <span class="section-label">Doctor profile</span>
                    <h1 class="section-heading mt-6">{{ $doctor->name }}</h1>
                    <p class="mt-4 text-lg font-semibold text-primary-600">{{ $doctor->specialty->name ?? 'General Care' }}</p>
                    <div class="mt-5 flex flex-wrap items-center gap-4 text-sm text-slate-500">
                        <span class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1.5 shadow-sm">
                            <span class="text-amber-400">★</span> {{ $doctor->rating ?? 4.9 }} rating
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1.5 shadow-sm">
                            {{ $doctor->experience_years ?? 10 }}+ years experience
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1.5 shadow-sm">
                            ₹{{ number_format((float) ($doctor->consultation_fee ?? 0), 2) }} consultation
                        </span>
                    </div>
                    <p class="mt-6 max-w-xl text-base leading-8 text-slate-600">
                        {{ $doctor->biography ?: 'Highly experienced physician dedicated to delivering compassionate, evidence-based care with a focus on long-term patient outcomes.' }}
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 rounded-[32px] bg-gradient-to-br from-primary-200 via-cyan-100 to-transparent blur-2xl"></div>
                    <div class="relative overflow-hidden rounded-[32px] border border-white/80 bg-white p-4 shadow-[0_30px_100px_-45px_rgba(15,99,224,.45)]">
                        <img
                            src="{{ $doctor->photo ?: 'https://ui-avatars.com/api/?name=' . urlencode($doctor->name) . '&background=1f83fb&color=fff&size=600' }}"
                            alt="{{ $doctor->name }}"
                            class="h-[420px] w-full rounded-[24px] object-cover"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[1.1fr_.9fr]">
            <div class="space-y-8">
                <div class="premium-card p-7 sm:p-8">
                    <h2 class="text-2xl font-black tracking-[-0.04em] text-navy-900">About the doctor</h2>
                    <div class="mt-5 space-y-4 text-slate-600">
                        <p>{{ $doctor->biography ?: 'The doctor combines clinical excellence with a human-centered care philosophy, ensuring comfort, clarity, and trust at every step of the patient journey.' }}</p>
                        <p>{{ $doctor->education ?: 'Board-certified clinical expertise with a strong focus on diagnostics, preventive care, and personalized treatment planning.' }}</p>
                    </div>
                </div>

                @if (!empty($doctor->certifications))
                    <div class="premium-card p-7 sm:p-8">
                        <h2 class="text-2xl font-black tracking-[-0.04em] text-navy-900">Certifications</h2>
                        <ul class="mt-5 space-y-3">
                            @foreach ($doctor->certifications as $c)
                                <li class="flex items-start gap-3 text-slate-600">
                                    <span class="mt-1.5 flex h-6 w-6 items-center justify-center rounded-full bg-primary-50 text-xs font-bold text-primary-700">✓</span>
                                    <span>{{ $c }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (!empty($doctor->languages))
                    <div class="premium-card p-7 sm:p-8">
                        <h2 class="text-2xl font-black tracking-[-0.04em] text-navy-900">Languages</h2>
                        <div class="mt-5 flex flex-wrap gap-2">
                            @foreach ($doctor->languages as $language)
                                <span class="rounded-full border border-slate-200 bg-slate-50 px-3 py-1.5 text-sm font-semibold text-slate-700">{{ $language }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <div class="premium-card h-fit p-6 sm:p-8" x-data="{
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
                 }" x-init="fetchSlots()">
                <div class="mb-6">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">Book appointment</p>
                    <h3 class="mt-2 text-2xl font-black tracking-[-0.04em] text-navy-900">Select a time</h3>
                </div>

                <form action="{{ route('appointments.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    <input type="hidden" name="specialty_id" value="{{ $doctor->specialty_id }}">

                    <div>
                        <label class="mb-2 block text-sm font-bold text-slate-700">Date</label>
                        <input type="date" name="appointment_date" x-model="date" @change="fetchSlots()" min="{{ now()->toDateString() }}" class="input-field">
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-bold text-slate-700">Available slots</label>
                        <div class="grid grid-cols-3 gap-2" x-show="!loading">
                            <template x-for="slot in slots" :key="slot">
                                <button type="button" @click="selected = slot"
                                        :class="selected === slot ? 'bg-primary-600 text-white' : 'bg-primary-50 text-primary-700'"
                                        class="rounded-xl px-2 py-2.5 text-sm font-bold transition" x-text="slot"></button>
                            </template>
                            <p x-show="slots.length === 0" class="col-span-3 text-sm text-slate-400">No slots available</p>
                        </div>
                        <div x-show="loading" x-cloak class="mt-3 rounded-2xl border border-slate-200 bg-slate-50 p-3 text-sm text-slate-500">Loading slots...</div>
                    </div>

                    <input type="hidden" name="appointment_time" x-model="selected">

                    <div class="space-y-4 pt-2">
                        <input type="text" name="patient_name" required placeholder="Full name" class="input-field">
                        <input type="email" name="patient_email" required placeholder="Email" class="input-field">
                        <input type="text" name="patient_phone" placeholder="Phone" class="input-field">
                        <textarea name="message" placeholder="Message (optional)" class="input-field" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full justify-center" :disabled="!selected">Confirm appointment</button>
                </form>
            </div>
        </div>

        @if ($related->isNotEmpty())
            <div class="mt-16">
                <div class="mb-8 flex items-end justify-between gap-4">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">Related specialists</p>
                        <h2 class="mt-2 text-3xl font-black tracking-[-0.05em] text-navy-900">More doctors you may like</h2>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach ($related as $r)
                        <x-doctor-card :doctor="$r" />
                    @endforeach
                </div>
            </div>
        @endif
    </section>
</x-layouts.app>
