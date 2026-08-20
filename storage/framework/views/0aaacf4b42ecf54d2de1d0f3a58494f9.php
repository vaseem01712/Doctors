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
<section class="min-h-[calc(100vh-78px)] bg-[radial-gradient(circle_at_10%_10%,rgba(31,131,251,.12),transparent_35%),linear-gradient(180deg,#f7fbff,#fff)] px-5 py-16">
 <div class="mx-auto grid max-w-5xl overflow-hidden rounded-[36px] border border-white bg-white shadow-[0_30px_100px_-45px_rgba(7,28,64,.45)] lg:grid-cols-2">
  <div class="hidden bg-navy-900 p-12 text-white lg:block">
   <span class="section-label !border-white/10 !bg-white/10 !text-white">DOCTOR PORTAL</span>
   <h1 class="mt-8 text-5xl font-extrabold leading-tight">Your secure clinical workspace.</h1>
   <p class="mt-5 leading-7 text-white/65">Manage authorized patients, appointments, medical records and reports from one protected workspace.</p>
  </div>
  <div class="p-7 sm:p-10 lg:p-12">
   <p class="text-sm font-extrabold uppercase tracking-[.16em] text-primary-600">Doctor Login</p>
   <h2 class="mt-2 text-3xl font-extrabold text-navy-900">Welcome back, Doctor</h2>
   <p class="mt-2 text-sm text-slate-500">Sign in with credentials provided by the administrator.</p>
   <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?><div class="mt-5 rounded-2xl bg-emerald-50 p-3 text-sm font-semibold text-emerald-700"><?php echo e(session('success')); ?></div><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
   <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?><div class="mt-5 rounded-2xl bg-red-50 p-3 text-sm font-semibold text-red-700"><?php echo e($errors->first()); ?></div><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
   <form method="POST" action="<?php echo e(route('doctor.login.store')); ?>" class="mt-7 space-y-5">
    <?php echo csrf_field(); ?>
    <div><label class="mb-2 block text-sm font-bold text-slate-700">Email</label><input name="email" type="email" value="<?php echo e(old('email')); ?>" required autofocus class="input-field"></div>
    <div><label class="mb-2 block text-sm font-bold text-slate-700">Password</label><input name="password" type="password" required class="input-field"></div>
    <div class="flex items-center justify-between text-sm"><label class="flex gap-2 text-slate-500"><input name="remember" type="checkbox"> Remember me</label><a class="font-bold text-primary-700" href="<?php echo e(route('password.forgot','doctor')); ?>">Forgot password?</a></div>
    <button class="btn-primary w-full">Sign in securely</button>
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
<?php /**PATH C:\ITprojects\New folder\resources\views/doctor/auth/login.blade.php ENDPATH**/ ?>