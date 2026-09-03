<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['specialty']));

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

foreach (array_filter((['specialty']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $name = strtolower($specialty->name);
    $specialtyImages = [
        'heart' => 'https://images.unsplash.com/photo-1628348070889-cb656235b4eb?w=900&q=85&auto=format&fit=crop',
        'skin' => 'https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=900&q=85&auto=format&fit=crop',
        'child' => 'https://images.unsplash.com/photo-1638202993928-7d113b8a6b3d?w=900&q=85&auto=format&fit=crop',
        'neuro' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=900&q=85&auto=format&fit=crop',
        'dental' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?w=900&q=85&auto=format&fit=crop',
    ];
    $matchedImage = collect($specialtyImages)->first(fn ($url, $key) => str_contains($name, $key));
    $image = $specialty->image ? asset('storage/' . ltrim($specialty->image, '/')) : ($matchedImage ?: 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=900&q=85&auto=format&fit=crop');
?>
<a href="<?php echo e(route('specialties.show', $specialty)); ?>" class="group block overflow-hidden rounded-[28px] border border-slate-200/80 bg-white shadow-[0_18px_55px_-32px_rgba(7,28,64,.35)] transition duration-500 hover:-translate-y-1 hover:border-primary-200 hover:shadow-[0_28px_70px_-32px_rgba(7,28,64,.42)]">
    <div class="relative h-44 overflow-hidden bg-accent-50">
        <img src="<?php echo e($image); ?>" alt="<?php echo e($specialty->name); ?>" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/55 via-transparent to-transparent"></div>
        <div class="absolute bottom-4 left-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-white/90 text-accent-600 shadow-lg backdrop-blur">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
        </div>
    </div>
    <div class="p-6"><h3 class="text-lg font-extrabold text-navy-900"><?php echo e($specialty->name); ?></h3><p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500"><?php echo e($specialty->description); ?></p><span class="mt-5 inline-flex items-center gap-2 text-sm font-extrabold text-primary-700 transition group-hover:translate-x-1">Explore specialty →</span></div>
</a>
<?php /**PATH C:\ITprojects\New folder\resources\views/components/specialty-card.blade.php ENDPATH**/ ?>