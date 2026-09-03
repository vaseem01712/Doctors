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
<?php
    $image = $post->featured_image
        ? asset('storage/' . ltrim($post->featured_image, '/'))
        : 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=1400&q=85&auto=format&fit=crop';
?>

<section class="relative overflow-hidden border-b border-slate-200/70 bg-[#f7fbff] text-navy-900">
    <div class="pointer-events-none absolute inset-0 opacity-50" style="background-image: linear-gradient(rgba(31,131,251,.06) 1px, transparent 1px), linear-gradient(90deg, rgba(31,131,251,.06) 1px, transparent 1px); background-size: 38px 38px;"></div>
    <div class="pointer-events-none absolute -left-32 top-32 h-72 w-72 rounded-full bg-primary-200/30 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-20 bottom-0 h-80 w-80 rounded-full bg-accent-200/25 blur-3xl"></div>

    <div class="container-shell relative z-10 grid items-center gap-12 pt-[12rem] pb-20 sm:pb-24 lg:grid-cols-[1.08fr_.92fr] lg:gap-16">
        <div class="max-w-3xl">
            <div class="flex items-center gap-3"><span class="hero-line"></span><span class="section-label"><?php echo e($post->category->name ?? 'MediCare Journal'); ?></span></div>
            <h1 class="mt-7 text-4xl font-extrabold leading-[1.05] tracking-[-.055em] text-navy-900 sm:text-5xl lg:text-6xl"><?php echo e($post->title); ?></h1>
            <div class="mt-7 flex flex-wrap items-center gap-3 text-sm font-semibold text-slate-500"><span>By <?php echo e($post->author); ?></span><span class="h-1 w-1 rounded-full bg-accent-500"></span><span><?php echo e($post->published_at?->format('d M Y')); ?></span><span class="h-1 w-1 rounded-full bg-accent-500"></span><span>Health insight</span></div>
        </div>
        <div class="relative">
            <div class="absolute -inset-3 rotate-3 rounded-[32px] bg-primary-100/80"></div>
            <div class="relative overflow-hidden rounded-[28px] border border-white bg-white p-2 shadow-[0_30px_80px_-35px_rgba(7,28,64,.4)]"><img src="<?php echo e($image); ?>" alt="<?php echo e($post->title); ?>" class="h-64 w-full rounded-[22px] object-cover sm:h-80"></div>
        </div>
    </div>
</section>



<article class="relative bg-white py-16 sm:py-20 lg:py-24">

    <div class="container-shell">

        <div class="grid items-start gap-14 lg:grid-cols-[minmax(0,760px)_280px] lg:justify-center">

            
            <div>

                <div class="prose prose-lg max-w-none
                    text-slate-600
                    prose-headings:font-black
                    prose-headings:tracking-[-.04em]
                    prose-headings:text-[#071c40]
                    prose-p:leading-8
                    prose-p:text-slate-600
                    prose-strong:text-[#071c40]
                    prose-a:font-bold
                    prose-a:text-primary-700
                    prose-a:no-underline
                    hover:prose-a:underline
                    prose-li:text-slate-600
                    prose-blockquote:border-primary-500
                    prose-blockquote:bg-slate-50
                    prose-blockquote:rounded-2xl
                    prose-blockquote:px-6
                    prose-blockquote:py-3">

                    <?php echo $post->content; ?>


                </div>

            </div>


            
            <aside class="hidden lg:block">

                <div class="sticky top-32">

                    <div class="h-fit overflow-hidden rounded-[26px] border border-slate-200 bg-white shadow-[0_18px_60px_rgba(7,28,64,.08)]">

                        <div class="h-1 bg-gradient-to-r from-primary-600 via-accent-400 to-primary-600"></div>

                        <div class="p-6">

                            <div class="flex items-center gap-3">

                                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-primary-50 text-primary-700">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6l4 2" />
                                        <circle cx="12" cy="12" r="9" />
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-[10px] font-black uppercase tracking-[.18em] text-primary-600">
                                        Journal
                                    </p>

                                    <p class="mt-0.5 text-sm font-bold text-[#071c40]">
                                        Health insight
                                    </p>
                                </div>

                            </div>

                            <div class="my-6 h-px bg-slate-100"></div>

                            <p class="text-sm leading-6 text-slate-500">
                                Thoughtful guidance and practical insights from the MediCare clinical team.
                            </p>

                            <a
                                href="<?php echo e(route('blog.index')); ?>"
                                class="group mt-6 inline-flex w-full items-center justify-between rounded-xl bg-[#071c40] px-4 py-3.5 text-sm font-extrabold text-white transition duration-300 hover:bg-primary-700">

                                <span>Back to insights</span>

                                <span class="transition-transform duration-300 group-hover:translate-x-1">
                                    →
                                </span>

                            </a>

                        </div>

                    </div>

                </div>

            </aside>

        </div>


        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($related->isNotEmpty()): ?>

            <div class="mt-24 border-t border-slate-200 pt-14 sm:mt-28">

                <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <span class="section-label">
                            Keep reading
                        </span>

                        <h2 class="section-heading !mt-3 !text-3xl sm:!text-4xl">
                            More from the journal.
                        </h2>

                        <p class="mt-3 max-w-xl text-sm leading-6 text-slate-500">
                            Explore more insights, guidance and healthcare perspectives from MediCare.
                        </p>

                    </div>

                    <a
                        href="<?php echo e(route('blog.index')); ?>"
                        class="hidden rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-extrabold text-primary-700 shadow-sm transition hover:border-primary-200 hover:bg-primary-50 sm:inline-flex">
                        View all insights →
                    </a>

                </div>


                <div class="mt-9 grid gap-7 sm:grid-cols-2 lg:grid-cols-3">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if (isset($component)) { $__componentOriginalef84dbe2113ee1aa06beffddb73fe07d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef84dbe2113ee1aa06beffddb73fe07d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blog-card','data' => ['post' => $r]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blog-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($r)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef84dbe2113ee1aa06beffddb73fe07d)): ?>
<?php $attributes = $__attributesOriginalef84dbe2113ee1aa06beffddb73fe07d; ?>
<?php unset($__attributesOriginalef84dbe2113ee1aa06beffddb73fe07d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef84dbe2113ee1aa06beffddb73fe07d)): ?>
<?php $component = $__componentOriginalef84dbe2113ee1aa06beffddb73fe07d; ?>
<?php unset($__componentOriginalef84dbe2113ee1aa06beffddb73fe07d); ?>
<?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>

            </div>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>

</article>


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
<?php /**PATH C:\ITprojects\New folder\resources\views\blog\show.blade.php ENDPATH**/ ?>