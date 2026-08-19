<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['doctor']));

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

foreach (array_filter((['doctor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div class="card group overflow-hidden">
    <div class="relative overflow-hidden rounded-2xl bg-primary-50">
        <img src="https://ui-avatars.com/api/?name=<?php echo e(urlencode($doctor->name)); ?>&background=1f83fb&color=fff&size=300"
             alt="<?php echo e($doctor->name); ?>" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105">
    </div>
    <div class="mt-4">
        <h3 class="text-lg font-bold text-navy-900"><?php echo e($doctor->name); ?></h3>
        <p class="text-sm text-primary-600"><?php echo e($doctor->specialty->name ?? ''); ?></p>
        <p class="mt-1 text-sm text-slate-500"><?php echo e($doctor->experience_years); ?>+ years experience &middot; ⭐ <?php echo e($doctor->rating); ?></p>
        <a href="<?php echo e(route('doctors.show', $doctor)); ?>" class="mt-4 inline-flex items-center gap-1 font-semibold text-primary-600 group-hover:gap-2 transition-all">
            View Profile <span aria-hidden="true">→</span>
        </a>
    </div>
</div>
<?php /**PATH C:\ITprojects\New folder\resources\views/components/doctor-card.blade.php ENDPATH**/ ?>