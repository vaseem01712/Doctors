<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'eyebrow' => 'MediCare',
    'title',
    'description' => null,
    'image' => null,
    'imageAlt' => '',
    'centered' => false,
    'meta' => null,
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
    'eyebrow' => 'MediCare',
    'title',
    'description' => null,
    'image' => null,
    'imageAlt' => '',
    'centered' => false,
    'meta' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<section class="page-hero page-hero-premium">
    <div class="page-hero-grid"></div>
    <div class="page-hero-orb page-hero-orb-primary"></div>
    <div class="page-hero-orb page-hero-orb-accent"></div>

    <div class="container-shell relative z-10 py-16 sm:py-20 lg:py-24">
        <div class="<?php echo e($image ? 'grid items-center gap-12 lg:grid-cols-[1.05fr_.95fr]' : ''); ?>">
            <div class="<?php echo e($centered && ! $image ? 'mx-auto text-center' : ''); ?> max-w-3xl">
                <div class="flex items-center gap-3 <?php echo e($centered && ! $image ? 'justify-center' : ''); ?>">
                    <span class="hero-line"></span>
                    <span class="section-label"><?php echo e($eyebrow); ?></span>
                </div>
                <h1 class="mt-6 text-4xl font-extrabold leading-[1.04] tracking-[-.055em] text-navy-900 sm:text-5xl lg:text-[64px]"><?php echo e($title); ?></h1>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($description): ?>
                    <p class="mt-6 max-w-2xl text-base leading-8 text-slate-500 sm:text-lg <?php echo e($centered && ! $image ? 'mx-auto' : ''); ?>"><?php echo e($description); ?></p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($meta): ?>
                    <div class="mt-7 flex flex-wrap items-center gap-3 text-sm font-bold text-slate-500"><?php echo e($meta); ?></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($image): ?>
                <div class="hero-visual">
                    <div class="hero-visual-frame"></div>
                    <img src="<?php echo e($image); ?>" alt="<?php echo e($imageAlt); ?>" class="relative h-72 w-full rounded-[28px] object-cover shadow-[0_30px_80px_-32px_rgba(7,28,64,.5)] sm:h-80">
                    <div class="hero-visual-badge"><span class="eyebrow-dot"></span><span>Care, considered</span></div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\ITprojects\New folder\resources\views/components/page-hero.blade.php ENDPATH**/ ?>