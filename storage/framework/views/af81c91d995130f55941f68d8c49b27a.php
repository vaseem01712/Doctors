<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    
    <div class="page-hero relative isolate overflow-hidden">
        <div class="absolute -left-24 top-10 -z-10 h-64 w-64 rounded-full bg-primary-200/30 blur-3xl"></div>
        <div class="absolute -right-24 top-0 -z-10 h-72 w-72 rounded-full bg-accent-200/25 blur-3xl"></div>

        <div class="container-shell relative py-14 sm:py-16 lg:py-20">

            <?php if (isset($component)) { $__componentOriginal755230460fd16c04121658d92fbf99f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal755230460fd16c04121658d92fbf99f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section-heading','data' => ['label' => 'Appointment','centered' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Appointment','centered' => true]); ?>
                Book Your Appointment
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal755230460fd16c04121658d92fbf99f7)): ?>
<?php $attributes = $__attributesOriginal755230460fd16c04121658d92fbf99f7; ?>
<?php unset($__attributesOriginal755230460fd16c04121658d92fbf99f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal755230460fd16c04121658d92fbf99f7)): ?>
<?php $component = $__componentOriginal755230460fd16c04121658d92fbf99f7; ?>
<?php unset($__componentOriginal755230460fd16c04121658d92fbf99f7); ?>
<?php endif; ?>

            <p class="section-copy mx-auto text-center">
                Pick a specialty and doctor, choose a slot that works for you,
                and we'll confirm within minutes.
            </p>

        </div>

    </div>


    
    <section class="container-shell relative -mt-6 pb-20 sm:pb-24">

        <div
            class="mx-auto grid max-w-6xl gap-6 lg:grid-cols-[1.45fr_.9fr] lg:items-start lg:gap-8"
        >

            
            <div class="card !p-6 sm:!p-8">

                <div class="mb-7 flex items-start gap-4 border-b border-slate-100 pb-6">
                    <div class="icon-tile bg-primary-50 text-lg">&#128197;</div>
                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[.16em] text-primary-600">Secure booking</p>
                        <h2 class="mt-1 text-xl font-extrabold tracking-tight text-navy-900">Appointment details</h2>
                        <p class="mt-1 text-sm leading-6 text-slate-500">Choose your specialist and preferred time. We will confirm the slot shortly.</p>
                    </div>
                </div>

                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>

                    <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'error','class' => 'mb-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'error','class' => 'mb-6']); ?>

                        <ul class="list-disc space-y-1 pl-5">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li>
                                    <?php echo e($error); ?>

                                </li>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </ul>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                
                <form
                    action="<?php echo e(route('appointments.store')); ?>"
                    method="POST"
                    class="grid gap-5 sm:grid-cols-2"
                    x-data="appointmentForm(<?php echo \Illuminate\Support\Js::from($doctors->map(fn ($doctor) => ['id' => $doctor->id, 'name' => $doctor->name, 'specialty_id' => $doctor->specialty_id])->values())->toHtml() ?>, <?php echo \Illuminate\Support\Js::from(old('specialty_id', $selectedSpecialty ?? ''))->toHtml() ?>, <?php echo \Illuminate\Support\Js::from(old('doctor_id'))->toHtml() ?>)"
                >

                    <?php echo csrf_field(); ?>


                    
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


                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option
                                    value="<?php echo e($specialty->id); ?>"
                                    <?php if(
                                        old(
                                            'specialty_id',
                                            $selectedSpecialty ?? ''
                                        ) == $specialty->id
                                    ): echo 'selected'; endif; ?>
                                >
                                    <?php echo e($specialty->name); ?>

                                </option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </select>


                        <p
                            class="mt-2 text-xs text-slate-400"
                            id="specialty-help"
                        >
                            Select a specialty to see available doctors.
                        </p>

                    </div>


                    
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


                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option
                                    value="<?php echo e($service->id); ?>"
                                    <?php if(
                                        old('service_id') == $service->id
                                    ): echo 'selected'; endif; ?>
                                >
                                    <?php echo e($service->title); ?>

                                </option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </select>

                    </div>


                    
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
                            min="<?php echo e(now()->toDateString()); ?>"
                            value="<?php echo e(old('appointment_date')); ?>"
                            required
                            class="input-field"
                        >

                    </div>


                    
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
                            value="<?php echo e(old('appointment_time')); ?>"
                            required
                            class="input-field"
                        >

                    </div>


                    
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
                            value="<?php echo e(old('patient_name')); ?>"
                            required
                            class="input-field"
                        >

                    </div>


                    
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
                            value="<?php echo e(old('patient_email')); ?>"
                            required
                            class="input-field"
                        >

                    </div>


                    
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
                            value="<?php echo e(old('patient_phone')); ?>"
                            class="input-field"
                        >

                    </div>


                    
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
                        ><?php echo e(old('message')); ?></textarea>

                    </div>


                    
                    <button
                        type="submit"
                        class="btn-primary sm:col-span-2 justify-center"
                    >
                        Confirm Appointment
                    </button>

                </form>

            </div>


            
            <aside class="space-y-5 lg:pt-2">


                
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
                        href="<?php echo e(route('contact')); ?>"
                        class="card-link mt-4"
                    >
                        Contact us →
                    </a>

                </div>

            </aside>

        </div>

    </section>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\ITprojects\New folder\resources\views/appointments/create.blade.php ENDPATH**/ ?>