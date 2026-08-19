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
    <section class="mx-auto max-w-7xl px-6 py-16">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="flex flex-col gap-6 sm:flex-row">
                    <img src="https://ui-avatars.com/api/?name=<?php echo e(urlencode($doctor->name)); ?>&background=1f83fb&color=fff&size=200"
                         class="h-40 w-40 rounded-3xl object-cover" alt="<?php echo e($doctor->name); ?>">
                    <div>
                        <h1 class="text-3xl font-bold text-navy-900"><?php echo e($doctor->name); ?></h1>
                        <p class="mt-1 text-primary-600"><?php echo e($doctor->specialty->name ?? ''); ?></p>
                        <p class="mt-2 text-sm text-slate-500"><?php echo e($doctor->experience_years); ?>+ years &middot; ⭐ <?php echo e($doctor->rating); ?> &middot; ₹<?php echo e($doctor->consultation_fee); ?> consultation</p>
                        <p class="mt-1 text-sm text-slate-500"><?php echo e($doctor->education); ?></p>
                    </div>
                </div>

                <h2 class="mt-10 text-xl font-bold text-navy-900">Biography</h2>
                <p class="mt-2 text-slate-500"><?php echo e($doctor->biography); ?></p>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($doctor->certifications): ?>
                    <h2 class="mt-8 text-xl font-bold text-navy-900">Certifications</h2>
                    <ul class="mt-2 list-disc pl-5 text-slate-500">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $doctor->certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <li><?php echo e($c); ?></li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($doctor->languages): ?>
                    <p class="mt-6 text-sm text-slate-500">Languages: <?php echo e(implode(', ', $doctor->languages)); ?></p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($related->isNotEmpty()): ?>
                    <h2 class="mt-14 text-xl font-bold text-navy-900">Related Doctors</h2>
                    <div class="mt-6 grid gap-6 sm:grid-cols-3">
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
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <div x-data="{
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
                 }" x-init="fetchSlots()" class="premium-card h-fit">
                <h3 class="text-lg font-bold text-navy-900">Book Appointment</h3>
                <form action="<?php echo e(route('appointments.store')); ?>" method="POST" class="mt-4 space-y-4">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="doctor_id" value="<?php echo e($doctor->id); ?>">
                    <input type="hidden" name="specialty_id" value="<?php echo e($doctor->specialty_id); ?>">

                    <label class="block text-sm font-medium text-slate-600">Date</label>
                    <input type="date" name="appointment_date" x-model="date" @change="fetchSlots()" min="<?php echo e(now()->toDateString()); ?>" class="input-field">

                    <label class="block text-sm font-medium text-slate-600">Available Slots</label>
                    <div class="grid grid-cols-3 gap-2" x-show="!loading">
                        <template x-for="slot in slots" :key="slot">
                            <button type="button" @click="selected = slot"
                                    :class="selected === slot ? 'bg-primary-600 text-white' : 'bg-primary-50 text-primary-700'"
                                    class="rounded-lg px-2 py-2 text-sm font-medium" x-text="slot"></button>
                        </template>
                        <p x-show="slots.length === 0" class="col-span-3 text-sm text-slate-400">No slots available</p>
                    </div>
                    <?php if (isset($component)) { $__componentOriginald5d051f243b37508d39f8ce3d92a5684 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5d051f243b37508d39f8ce3d92a5684 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loader','data' => ['xShow' => 'loading']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'loading']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5d051f243b37508d39f8ce3d92a5684)): ?>
<?php $attributes = $__attributesOriginald5d051f243b37508d39f8ce3d92a5684; ?>
<?php unset($__attributesOriginald5d051f243b37508d39f8ce3d92a5684); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5d051f243b37508d39f8ce3d92a5684)): ?>
<?php $component = $__componentOriginald5d051f243b37508d39f8ce3d92a5684; ?>
<?php unset($__componentOriginald5d051f243b37508d39f8ce3d92a5684); ?>
<?php endif; ?>
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
<?php /**PATH C:\ITprojects\New folder\resources\views/doctors/show.blade.php ENDPATH**/ ?>