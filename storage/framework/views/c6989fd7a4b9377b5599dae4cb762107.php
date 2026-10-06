<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'eyebrow',
    'title',
    'description',
    'href',
    'cta' => 'View all',
    'accent' => 'primary',
]));

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

foreach (array_filter(([
    'eyebrow',
    'title',
    'description',
    'href',
    'cta' => 'View all',
    'accent' => 'primary',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $variant = match ($accent) {
        'accent' => 'mega-menu-feature--accent',
        'navy' => 'mega-menu-feature--navy',
        default => 'mega-menu-feature--primary',
    };
?>

<aside class="mega-menu-feature <?php echo e($variant); ?>">
    <div class="relative flex h-full flex-col justify-between p-7 sm:p-8">
        <div>
            <span class="mega-menu-eyebrow"><?php echo e($eyebrow); ?></span>
            <h3 class="mega-menu-feature-title"><?php echo e($title); ?></h3>
            <p class="mega-menu-feature-copy"><?php echo e($description); ?></p>
        </div>

        <a href="<?php echo e($href); ?>" class="mega-menu-feature-cta">
            <span><?php echo e($cta); ?></span>
            <span class="mega-menu-feature-cta-icon" aria-hidden="true">↗</span>
        </a>
    </div>
</aside>
<?php /**PATH C:\ITprojects\Hospital-website-main\resources\views/components/mega-menu-feature.blade.php ENDPATH**/ ?>