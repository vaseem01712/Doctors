<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['service']));

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

foreach (array_filter((['service']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $title = strtolower($service->title);
    $serviceImages = [
        'consult' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=85&auto=format&fit=crop',
        'dental' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?w=900&q=85&auto=format&fit=crop',
        'surgery' => 'https://images.unsplash.com/photo-1551076805-e1869033e561?w=900&q=85&auto=format&fit=crop',
        'check' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=900&q=85&auto=format&fit=crop',
        'therapy' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&q=85&auto=format&fit=crop',
    ];
    $matchedImage = collect($serviceImages)->first(fn ($url, $key) => str_contains($title, $key));
    $image = $service->image ? asset('storage/' . ltrim($service->image, '/')) : ($matchedImage ?: 'https://images.unsplash.com/photo-1584982751601-97dcc096659c?w=900&q=85&auto=format&fit=crop');
?>
<div class="group overflow-hidden rounded-[28px] border border-slate-200/80 bg-white shadow-[0_18px_55px_-32px_rgba(7,28,64,.35)] transition duration-500 hover:-translate-y-1 hover:border-primary-200 hover:shadow-[0_28px_70px_-32px_rgba(7,28,64,.42)]">
    <div class="relative h-48 overflow-hidden bg-primary-50">
        <img src="<?php echo e($image); ?>" alt="<?php echo e($service->title); ?>" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 via-transparent to-transparent"></div>
        <div class="absolute bottom-4 left-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-white/90 text-primary-600 shadow-lg backdrop-blur">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 5h10a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2z" />
        </svg>
        </div>
    </div>
    <div class="p-6"><h3 class="text-lg font-extrabold text-navy-900"><?php echo e($service->title); ?></h3><p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500"><?php echo e($service->short_description); ?></p><a href="<?php echo e(route('services.show', $service)); ?>" class="mt-5 inline-flex items-center gap-2 text-sm font-extrabold text-primary-700 transition group-hover:translate-x-1">Learn more →</a></div>
</div>
<?php /**PATH C:\ITprojects\New folder\resources\views/components/service-card.blade.php ENDPATH**/ ?>