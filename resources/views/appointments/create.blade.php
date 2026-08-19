<x-layouts.app>

    {{-- =========================================================
        HERO
    ========================================================== --}}
    <div class="page-hero relative isolate overflow-hidden">
        <div class="absolute -left-24 top-10 -z-10 h-64 w-64 rounded-full bg-primary-200/30 blur-3xl"></div>
        <div class="absolute -right-24 top-0 -z-10 h-72 w-72 rounded-full bg-accent-200/25 blur-3xl"></div>

        <div class="container-shell relative py-14 sm:py-16 lg:py-20">

            <x-section-heading
                label="Appointment"
                centered
            >
                Book Your Appointment
            </x-section-heading>

            <p class="section-copy mx-auto text-center">
                Pick a specialty and doctor, choose a slot that works for you,
                and we'll confirm within minutes.
            </p>

        </div>

    </div>


    {{-- =========================================================
        APPOINTMENT SECTION
    ========================================================== --}}
    <section class="container-shell relative -mt-6 pb-20 sm:pb-24">

        <div
            class="mx-auto grid max-w-6xl gap-6 lg:grid-cols-[1.45fr_.9fr] lg:items-start lg:gap-8"
        >

            {{-- =================================================
                FORM CARD
            ================================================== --}}
            <div class="card !p-6 sm:!p-8">

                <div class="mb-7 flex items-start gap-4 border-b border-slate-100 pb-6">
                    <div class="icon-tile bg-primary-50 text-lg">&#128197;</div>
                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[.16em] text-primary-600">Secure booking</p>
                        <h2 class="mt-1 text-xl font-extrabold tracking-tight text-navy-900">Appointment details</h2>
                        <p class="mt-1 text-sm leading-6 text-slate-500">Choose your specialist and preferred time. We will confirm the slot shortly.</p>
                    </div>
                </div>

                {{-- Validation Errors --}}
                @if ($errors->any())

                    <x-alert
                        type="error"
                        class="mb-6"
                    >

                        <ul class="list-disc space-y-1 pl-5">

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </x-alert>

                @endif


                {{-- =============================================
                    APPOINTMENT FORM
                ============================================== --}}
                <form
                    action="{{ route('appointments.store') }}"
                    method="POST"
                    class="grid gap-5 sm:grid-cols-2"
                    x-data="appointmentForm(@js($doctors->map(fn ($doctor) => ['id' => $doctor->id, 'name' => $doctor->name, 'specialty_id' => $doctor->specialty_id])->values()), @js(old('specialty_id', $selectedSpecialty ?? '')), @js(old('doctor_id')))"
                >

                    @csrf


                    {{-- =========================================
                        SPECIALTY
                    ========================================== --}}
                    <div>

                        <label
                            for="specialty_id"
                            class="label"
                        >
                            Specialty
                        </label>


                        <select
                            name="specialty_id"
                            id="specialty_id"
                            class="input-field"
                            required
                            x-model="specialtyId"
                            @change="onSpecialtyChange"
                        >

                            <option value="">
                                Choose Specialty
                            </option>


                            @foreach ($specialties as $specialty)

                                <option
                                    value="{{ $specialty->id }}"
                                    @selected(
                                        old(
                                            'specialty_id',
                                            $selectedSpecialty ?? ''
                                        ) == $specialty->id
                                    )
                                >
                                    {{ $specialty->name }}
                                </option>

                            @endforeach

                        </select>


                        <p
                            class="mt-2 text-xs text-slate-400"
                            id="specialty-help"
                        >
                            Select a specialty to see available doctors.
                        </p>

                    </div>


                    {{-- =========================================
                        DOCTOR
                    ========================================== --}}
                    <div>

                        <label
                            for="doctor_id"
                            class="label"
                        >
                            Doctor
                        </label>


                        <select
                            name="doctor_id"
                            id="doctor_id"
                            class="input-field"
                            required
                            x-model="doctorId"
                            :disabled="!specialtyId"
                        >

                            <option value="" x-text="specialtyId ? (filteredDoctors.length ? 'Choose Doctor' : 'No Doctors Available') : 'Choose Specialty First'"></option>
                            <template x-for="doctor in filteredDoctors" :key="doctor.id">
                                <option :value="doctor.id" x-text="doctor.name"></option>
                            </template>

                        </select>


                        <p class="mt-2 text-xs text-slate-400" x-show="!specialtyId">Please select a specialty first.</p>
                        <p class="mt-2 text-xs text-red-500" x-show="specialtyId && !filteredDoctors.length">No doctors are available for this specialty.</p>

                    </div>


                    {{-- =========================================
                        SERVICE
                    ========================================== --}}
                    <div class="sm:col-span-2">

                        <label
                            for="service_id"
                            class="label"
                        >
                            Service

                            <span class="font-normal text-slate-400">
                                (optional)
                            </span>

                        </label>


                        <select
                            name="service_id"
                            id="service_id"
                            class="input-field"
                        >

                            <option value="">
                                Choose Service
                            </option>


                            @foreach ($services as $service)

                                <option
                                    value="{{ $service->id }}"
                                    @selected(
                                        old('service_id') == $service->id
                                    )
                                >
                                    {{ $service->title }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- =========================================
                        DATE
                    ========================================== --}}
                    <div>

                        <label
                            for="appointment_date"
                            class="label"
                        >
                            Preferred Date
                        </label>


                        <input
                            type="date"
                            name="appointment_date"
                            id="appointment_date"
                            min="{{ now()->toDateString() }}"
                            value="{{ old('appointment_date') }}"
                            required
                            class="input-field"
                        >

                    </div>


                    {{-- =========================================
                        TIME
                    ========================================== --}}
                    <div>

                        <label
                            for="appointment_time"
                            class="label"
                        >
                            Preferred Time
                        </label>


                        <input
                            type="time"
                            name="appointment_time"
                            id="appointment_time"
                            value="{{ old('appointment_time') }}"
                            required
                            class="input-field"
                        >

                    </div>


                    {{-- =========================================
                        FULL NAME
                    ========================================== --}}
                    <div>

                        <label
                            for="patient_name"
                            class="label"
                        >
                            Full Name
                        </label>


                        <input
                            type="text"
                            name="patient_name"
                            id="patient_name"
                            placeholder="Your full name"
                            value="{{ old('patient_name') }}"
                            required
                            class="input-field"
                        >

                    </div>


                    {{-- =========================================
                        EMAIL
                    ========================================== --}}
                    <div>

                        <label
                            for="patient_email"
                            class="label"
                        >
                            Email
                        </label>


                        <input
                            type="email"
                            name="patient_email"
                            id="patient_email"
                            placeholder="you@example.com"
                            value="{{ old('patient_email') }}"
                            required
                            class="input-field"
                        >

                    </div>


                    {{-- =========================================
                        PHONE
                    ========================================== --}}
                    <div>

                        <label
                            for="patient_phone"
                            class="label"
                        >
                            Phone

                            <span class="font-normal text-slate-400">
                                (optional)
                            </span>

                        </label>


                        <input
                            type="text"
                            name="patient_phone"
                            id="patient_phone"
                            placeholder="Phone number"
                            value="{{ old('patient_phone') }}"
                            class="input-field"
                        >

                    </div>


                    {{-- =========================================
                        MESSAGE
                    ========================================== --}}
                    <div class="sm:col-span-2">

                        <label
                            for="message"
                            class="label"
                        >
                            Message

                            <span class="font-normal text-slate-400">
                                (optional)
                            </span>

                        </label>


                        <textarea
                            name="message"
                            id="message"
                            placeholder="Tell us briefly what this appointment is about"
                            class="input-field"
                            rows="4"
                        >{{ old('message') }}</textarea>

                    </div>


                    {{-- =========================================
                        SUBMIT BUTTON
                    ========================================== --}}
                    <button
                        type="submit"
                        class="btn-primary sm:col-span-2 justify-center"
                    >
                        Confirm Appointment
                    </button>

                </form>

            </div>


            {{-- =================================================
                RIGHT SIDEBAR
            ================================================== --}}
            <aside class="space-y-5 lg:pt-2">


                {{-- What happens next --}}
                <div class="soft-panel border border-primary-100/80 p-7">

                    <div class="icon-tile bg-primary-50 text-lg">&#128197;</div>


                    <h3
                        class="mt-4 text-lg font-extrabold text-navy-900"
                    >
                        What happens next
                    </h3>


                    <ul
                        class="mt-4 space-y-3 text-sm text-slate-500"
                    >

                        <li class="flex gap-2">

                            <span
                                class="eyebrow-dot mt-1.5"
                            ></span>

                            <span>
                                We confirm your slot with the doctor's schedule.
                            </span>

                        </li>


                        <li class="flex gap-2">

                            <span
                                class="eyebrow-dot mt-1.5"
                            ></span>

                            <span>
                                You'll get an instant email confirmation.
                            </span>

                        </li>


                        <li class="flex gap-2">

                            <span
                                class="eyebrow-dot mt-1.5"
                            ></span>

                            <span>
                                Reschedule or manage it anytime from your dashboard.
                            </span>

                        </li>

                    </ul>

                </div>


                {{-- Need Help --}}
                <div class="soft-panel bg-[linear-gradient(135deg,#ffffff_0%,#f0f7ff_100%)] p-7">

                    <h3
                        class="text-lg font-extrabold text-navy-900"
                    >
                        Need help booking?
                    </h3>


                    <p class="mt-2 text-sm text-slate-500">
                        Call our care team and we'll book it for you.
                    </p>


                    <a
                        href="{{ route('contact') }}"
                        class="card-link mt-4"
                    >
                        Contact us →
                    </a>

                </div>

            </aside>

        </div>

    </section>


</x-layouts.app>
