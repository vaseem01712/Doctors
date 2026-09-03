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
    <?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['eyebrow' => 'Contact us','title' => 'How can we help you today?','description' => 'Whether you need a specialist consultation, a quick health question, or support with your appointment, our care team is ready to assist.','centered' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Contact us','title' => 'How can we help you today?','description' => 'Whether you need a specialist consultation, a quick health question, or support with your appointment, our care team is ready to assist.','centered' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d931d4f11b4d2850df99e991db1dca)): ?>
<?php $attributes = $__attributesOriginala9d931d4f11b4d2850df99e991db1dca; ?>
<?php unset($__attributesOriginala9d931d4f11b4d2850df99e991db1dca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d931d4f11b4d2850df99e991db1dca)): ?>
<?php $component = $__componentOriginala9d931d4f11b4d2850df99e991db1dca; ?>
<?php unset($__componentOriginala9d931d4f11b4d2850df99e991db1dca); ?>
<?php endif; ?>

    <section class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'success','class' => 'mb-8']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success','class' => 'mb-8']); ?><?php echo e(session('success')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="grid gap-8 lg:grid-cols-[1.15fr_.85fr]">
            <div class="premium-card overflow-hidden">
                <div class="bg-gradient-to-br from-navy-900 via-primary-700 to-blue-500 p-8 text-white">
                    <p class="text-sm font-bold uppercase tracking-[0.22em] text-blue-100">Book & speak to our team</p>
                    <h2 class="mt-4 text-3xl font-black tracking-[-0.05em]">Speak with a care specialist</h2>
                    <p class="mt-4 max-w-md text-blue-50/90">
                        We’re here to help you find the right doctor, answer treatment questions, and assist with scheduling.
                    </p>
                </div>

                <div class="grid gap-5 p-8 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-slate-400">Call us</p>
                        <p class="mt-3 text-lg font-extrabold text-navy-900">+91 98765 43210</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-slate-400">Email</p>
                        <p class="mt-3 text-lg font-extrabold text-navy-900">vaseemkhan@gmail.com</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-slate-400">Location</p>
                        <p class="mt-3 text-lg font-extrabold text-navy-900">123 Health Street, City</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-slate-400">Hours</p>
                        <p class="mt-3 text-lg font-extrabold text-navy-900">Mon–Sat • 9AM–8PM</p>
                    </div>
                </div>

                <div class="px-8 pb-8">
                    <div class="overflow-hidden rounded-[24px] border border-slate-200 bg-gradient-to-br from-slate-100 to-white">
                        <img
                            src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1200&q=80"
                            alt="Healthcare support team"
                            class="h-64 w-full object-cover"
                        >
                    </div>
                </div>
            </div>

            <div class="premium-card p-6 sm:p-8">
                <div class="mb-6">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-primary-600">Send a message</p>
                    <h3 class="mt-2 text-2xl font-black tracking-[-0.04em] text-navy-900">Let’s start with your query</h3>
                </div>

                <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="label">Full name</label>
                            <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Your name" required class="input-field">
                        </div>
                        <div>
                            <label for="email" class="label">Email address</label>
                            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="you@example.com" required class="input-field">
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label for="phone" class="label">Phone</label>
                            <input id="phone" type="text" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="+91 98765 43210" class="input-field">
                        </div>
                        <div>
                            <label for="subject" class="label">Subject</label>
                            <input id="subject" type="text" name="subject" value="<?php echo e(old('subject')); ?>" placeholder="How can we help?" class="input-field">
                        </div>
                    </div>

                    <div>
                        <label for="message" class="label">Message</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Tell us about your concern or appointment request..." class="input-field resize-none"><?php echo e(old('message')); ?></textarea>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
                        <div class="rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            <ul class="list-disc space-y-1 pl-5">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </ul>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <button type="submit" class="btn-primary w-full justify-center">Send message</button>
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
<?php /**PATH C:\ITprojects\New folder\resources\views/contact.blade.php ENDPATH**/ ?>