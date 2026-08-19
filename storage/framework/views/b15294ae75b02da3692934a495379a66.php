<?php if (isset($component)) { $__componentOriginalc0848eaf28452caa8d672e14d7fde2bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc0848eaf28452caa8d672e14d7fde2bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.portal-shell','data' => ['title' => 'Select Patient for Report']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('portal-shell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Select Patient for Report']); ?>
<div class="mb-7"><span class="section-label">UPLOAD MEDICAL REPORT</span><h1 class="section-heading !mt-3 !text-4xl">Choose a patient</h1><p class="mt-3 text-slate-500">Only patients with an appointment with you can receive a report.</p></div>

<div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
 <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <article class="soft-panel p-6"><p class="text-lg font-extrabold text-navy-900"><?php echo e($patient->name); ?></p><p class="mt-1 text-sm text-slate-500"><?php echo e($patient->email); ?></p><p class="mt-1 text-sm text-slate-500"><?php echo e($patient->phone ?: 'No phone number'); ?></p><a href="<?php echo e(route('doctor.reports.create', $patient)); ?>" class="btn-primary mt-5 w-full">Upload Report</a></article>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <div class="soft-panel p-12 text-center md:col-span-2 xl:col-span-3"><p class="text-lg font-extrabold text-navy-900">No patients available</p><p class="mt-2 text-sm text-slate-500">A patient appears here after they book an appointment with you.</p></div>
 <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc0848eaf28452caa8d672e14d7fde2bc)): ?>
<?php $attributes = $__attributesOriginalc0848eaf28452caa8d672e14d7fde2bc; ?>
<?php unset($__attributesOriginalc0848eaf28452caa8d672e14d7fde2bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0848eaf28452caa8d672e14d7fde2bc)): ?>
<?php $component = $__componentOriginalc0848eaf28452caa8d672e14d7fde2bc; ?>
<?php unset($__componentOriginalc0848eaf28452caa8d672e14d7fde2bc); ?>
<?php endif; ?>
<?php /**PATH C:\ITprojects\New folder\resources\views/doctor/reports/select-patient.blade.php ENDPATH**/ ?>