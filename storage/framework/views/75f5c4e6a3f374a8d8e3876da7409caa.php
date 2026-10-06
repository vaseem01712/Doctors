<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name',
    'label',
    'href',
    'active' => false,
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
    'name',
    'label',
    'href',
    'active' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div
    class="relative"
    @mouseenter="clearTimeout(megaLeaveTimer); activeMega = <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?>"
    @mouseleave="megaLeaveTimer = setTimeout(() => { if (activeMega === <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?>) activeMega = null }, 140)"
    @focusin="clearTimeout(megaLeaveTimer); activeMega = <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?>"
    @focusout="if (!$el.contains($event.relatedTarget)) { megaLeaveTimer = setTimeout(() => { if (activeMega === <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?>) activeMega = null }, 140) }"
>
    <a
        href="<?php echo e($href); ?>"
        class="group/trigger relative inline-flex items-center gap-1.5 whitespace-nowrap rounded-full px-4 py-2.5 text-sm font-bold transition duration-300 hover:bg-white/70"
        :class="activeMega === <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?> ? 'bg-white/80 text-primary-700 shadow-sm shadow-primary-100/50' : ''"
        aria-haspopup="true"
        :aria-expanded="activeMega === <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?> ? 'true' : 'false'"
    >
        <span class="<?php echo e($active ? 'text-primary-700' : 'text-slate-600 group-hover/trigger:text-navy-900'); ?>">
            <?php echo e($label); ?>

        </span>

        <svg
            class="h-3.5 w-3.5 shrink-0 text-slate-400 transition duration-300 group-hover/trigger:text-primary-600"
            :class="activeMega === <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?> ? 'rotate-180 text-primary-600' : ''"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
        >
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd" />
        </svg>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($active): ?>
            <span class="absolute bottom-1.5 left-1/2 h-1 w-1 -translate-x-1/2 rounded-full bg-primary-600"></span>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </a>

    <div
        x-show="activeMega === <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?>"
        x-cloak
        x-transition:enter="transition ease-[cubic-bezier(.22,1,.36,1)] duration-300"
        x-transition:enter-start="opacity-0 translate-y-3 scale-[0.985]"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-2 scale-[0.99]"
        class="mega-menu-anchor pointer-events-none absolute left-1/2 top-full z-[60] w-[min(940px,calc(100vw-2.5rem))] -translate-x-1/2 pt-3"
        :class="activeMega === <?php echo \Illuminate\Support\Js::from($name)->toHtml() ?> ? 'pointer-events-auto' : ''"
    >
        <div class="mega-menu-panel">
            <?php echo e($slot); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\ITprojects\Hospital-website-main\resources\views/components/nav-mega-item.blade.php ENDPATH**/ ?>