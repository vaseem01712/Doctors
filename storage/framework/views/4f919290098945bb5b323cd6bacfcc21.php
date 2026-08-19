<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Portal', 'eyebrow' => 'SECURE PORTAL']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title' => 'Portal', 'eyebrow' => 'SECURE PORTAL']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['seoTitle' => $title . ' — MediCare']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['seo-title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title . ' — MediCare')]); ?>
    <div class="min-h-screen bg-[#f5f8fc] py-6 sm:py-8">
        <div class="container-shell grid gap-6 lg:grid-cols-[240px_1fr]">
            <aside class="hidden rounded-[28px] border border-slate-200 bg-white p-3 shadow-sm lg:block">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->isDoctor()): ?>
                    <p class="px-3 pb-2 pt-2 text-[10px] font-extrabold uppercase tracking-[.18em] text-slate-400">Doctor Portal</p>
                    <nav class="space-y-1">
                        <a href="<?php echo e(route('doctor.dashboard')); ?>" class="portal-nav <?php echo e(request()->routeIs('doctor.dashboard') ? 'active' : ''); ?>">Overview</a>
                        <a href="<?php echo e(route('doctor.appointments')); ?>" class="portal-nav <?php echo e(request()->routeIs('doctor.appointments') ? 'active' : ''); ?>">Appointments</a>
                        <a href="<?php echo e(route('doctor.patients')); ?>" class="portal-nav <?php echo e(request()->routeIs('doctor.patients*') ? 'active' : ''); ?>">Patients</a>
                        <a href="<?php echo e(route('doctor.reports')); ?>" class="portal-nav <?php echo e(request()->routeIs('doctor.reports*') ? 'active' : ''); ?>">Medical Reports</a>
                        <a href="<?php echo e(route('doctor.profile')); ?>" class="portal-nav <?php echo e(request()->routeIs('doctor.profile*') ? 'active' : ''); ?>">Profile</a>
                    </nav>
                <?php else: ?>
                    <p class="px-3 pb-2 pt-2 text-[10px] font-extrabold uppercase tracking-[.18em] text-slate-400">Patient Portal</p>
                    <nav class="space-y-1">
                        <a href="<?php echo e(route('dashboard')); ?>" class="portal-nav <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">Overview</a>
                        <a href="<?php echo e(route('appointments.create')); ?>" class="portal-nav">Book Appointment</a>
                        <a href="<?php echo e(route('patient.reports')); ?>" class="portal-nav <?php echo e(request()->routeIs('patient.reports') ? 'active' : ''); ?>">Medical Reports</a>
                        <a href="<?php echo e(route('patient.notifications')); ?>" class="portal-nav <?php echo e(request()->routeIs('patient.notifications') ? 'active' : ''); ?>">Notifications</a>
                    </nav>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </aside>

            <main>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
                    <div class="mb-5 rounded-2xl border border-emerald-100 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700"><?php echo e(session('success')); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php echo e($slot); ?>

            </main>
        </div>
    </div>
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
<?php /**PATH C:\ITprojects\New folder\resources\views/components/portal-shell.blade.php ENDPATH**/ ?>