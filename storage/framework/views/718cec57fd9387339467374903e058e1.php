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
    <section class="page-hero">
        <div class="container-shell py-20">
            <div class="grid items-center gap-10 lg:grid-cols-[1.2fr_.8fr]">
                <div>
                    <span class="section-label">Doctor profile</span>
                    <h1 class="section-heading mt-6"><?php echo e($doctor->name); ?></h1>
                    <p class="mt-4 text-lg font-semibold text-primary-600"><?php echo e($doctor->specialty->name ?? 'General Care'); ?></p>
                    <div class="mt-5 flex flex-wrap items-center gap-4 text-sm text-slate-500">
                        <span class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1.5 shadow-sm">
                            <span class="text-amber-400">★</span> <?php echo e($doctor->rating ?? 4.9); ?> rating
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1.5 shadow-sm">
                            <?php echo e($doctor->experience_years ?? 10); ?>+ years experience
                        </span>
                        <span class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1.5 shadow-sm">
                            ₹<?php echo e(number_format((float) ($doctor->consultation_fee ?? 0), 2)); ?> consultation
                        </span>
                    </div>
                    <p class="mt-6 max-w-xl text-base leading-8 text-slate-600">
                        <?php echo e($doctor->biography ?: 'Highly experienced physician dedicated to delivering compassionate, evidence-based care with a focus on long-term patient outcomes.'); ?>

                    </p>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 rounded-[32px] bg-gradient-to-br from-primary-200 via-cyan-100 to-transparent blur-2xl"></div>
                    <div class="relative overflow-hidden rounded-[32px] border border-white/80 bg-white p-4 shadow-[0_30px_100px_-45px_rgba(15,99,224,.45)]">
                        <img
                            src="<?php echo e($doctor->photo ?: 'https://ui-avatars.com/api/?name=' . urlencode($doctor->name) . '&background=1f83fb&color=fff&size=600'); ?>"
                            alt="<?php echo e($doctor->name); ?>"
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
                        <p><?php echo e($doctor->biography ?: 'The doctor combines clinical excellence with a human-centered care philosophy, ensuring comfort, clarity, and trust at every step of the patient journey.'); ?></p>
                        <p><?php echo e($doctor->education ?: 'Board-certified clinical expertise with a strong focus on diagnostics, preventive care, and personalized treatment planning.'); ?></p>
                    </div>
                </div>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($doctor->certifications)): ?>
                    <div class="premium-card p-7 sm:p-8">
                        <h2 class="text-2xl font-black tracking-[-0.04em] text-navy-900">Certifications</h2>
                        <ul class="mt-5 space-y-3">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $doctor->certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex items-start gap-3 text-slate-600">
                                    <span class="mt-1.5 flex h-6 w-6 items-center justify-center rounded-full bg-primary-50 text-xs font-bold text-primary-700">✓</span>
                                    <span><?php echo e($c); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($doctor->languages)): ?>
                    <div class="premium-card p-7 sm:p-8">
                        <h2 class="text-2xl font-black tracking-[-0.04em] text-navy-900">Languages</h2>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $doctor->languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="rounded-full border border-slate-200 bg-slate-50 px-3 py-1.5 text-sm font-semibold text-slate-700"><?php echo e($language); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div class="premium-card h-fit p-6 sm:p-8" x-data="{
                    date: new Date().toISOString().split('T')[0],
                    slots: [],
                    selected: '',
                    loading: false,
                    async fetchSlots() {
                        this.loading = true; this.selected = '';
                        const res = await fetch(`<?php echo e(route('doctors.slots', $doctor)); ?>?date=${this.date}`);
                        const data = await res.json();
                        this.slots = data.slots; this.loading = false;
                    }
                 }" x-init="fetchSlots()">
                <div class="mb-6">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">Book appointment</p>
                    <h3 class="mt-2 text-2xl font-black tracking-[-0.04em] text-navy-900">Select a time</h3>
                </div>

                <form action="<?php echo e(route('appointments.store')); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="doctor_id" value="<?php echo e($doctor->id); ?>">
                    <input type="hidden" name="specialty_id" value="<?php echo e($doctor->specialty_id); ?>">

                    <div>
                        <label class="mb-2 block text-sm font-bold text-slate-700">Date</label>
                        <input type="date" name="appointment_date" x-model="date" @change="fetchSlots()" min="<?php echo e(now()->toDateString()); ?>" class="input-field">
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

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($related->isNotEmpty()): ?>
            <div class="mt-16">
                <div class="mb-8 flex items-end justify-between gap-4">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">Related specialists</p>
                        <h2 class="mt-2 text-3xl font-black tracking-[-0.05em] text-navy-900">More doctors you may like</h2>
                    </div>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc8c26a79d00a9d9b08e3c59fe1077d40 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8c26a79d00a9d9b08e3c59fe1077d40 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.doctor-card','data' => ['doctor' => $r]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('doctor-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['doctor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($r)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8c26a79d00a9d9b08e3c59fe1077d40)): ?>
<?php $attributes = $__attributesOriginalc8c26a79d00a9d9b08e3c59fe1077d40; ?>
<?php unset($__attributesOriginalc8c26a79d00a9d9b08e3c59fe1077d40); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8c26a79d00a9d9b08e3c59fe1077d40)): ?>
<?php $component = $__componentOriginalc8c26a79d00a9d9b08e3c59fe1077d40; ?>
<?php unset($__componentOriginalc8c26a79d00a9d9b08e3c59fe1077d40); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH C:\ITprojects\Hospital-website-main\resources\views/doctors/show.blade.php ENDPATH**/ ?>