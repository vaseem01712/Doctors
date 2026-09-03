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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['eyebrow' => 'Care pathways','title' => 'Healthcare designed around you.','description' => 'From everyday wellness to specialist treatment, find the expertise and support you need in one place.','image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1100&q=85&auto=format&fit=crop','imageAlt' => 'Healthcare professional speaking with a patient']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Care pathways','title' => 'Healthcare designed around you.','description' => 'From everyday wellness to specialist treatment, find the expertise and support you need in one place.','image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1100&q=85&auto=format&fit=crop','image-alt' => 'Healthcare professional speaking with a patient']); ?>
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
    <section class="mx-auto max-w-7xl px-6 py-16">
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginale804957ecdb153e8c822de5ed47a4ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale804957ecdb153e8c822de5ed47a4ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.service-card','data' => ['service' => $service]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['service' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($service)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $attributes = $__attributesOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__attributesOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale804957ecdb153e8c822de5ed47a4ace)): ?>
<?php $component = $__componentOriginale804957ecdb153e8c822de5ed47a4ace; ?>
<?php unset($__componentOriginale804957ecdb153e8c822de5ed47a4ace); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <div class="mt-10"><?php echo e($services->links()); ?></div>
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
<?php /**PATH C:\ITprojects\New folder\resources\views/services/index.blade.php ENDPATH**/ ?>