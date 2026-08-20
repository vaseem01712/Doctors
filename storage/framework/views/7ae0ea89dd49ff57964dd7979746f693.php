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
  <section class="section bg-slate-50">
    <div class="container-shell max-w-md">
      <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
        <h1 class="text-2xl font-extrabold text-navy-900">Sign in</h1>
        <form method="POST" action="<?php echo e(route('login.store')); ?>" class="mt-6 space-y-5">
          <?php echo csrf_field(); ?>
          <div>
            <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Email</label>
            <input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" required autofocus class="input-field w-full">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </div>
          <div>
            <label for="password" class="mb-2 block text-sm font-bold text-slate-700">Password</label>
            <input id="password" name="password" type="password" required class="input-field w-full">
          </div>
          <label class="flex items-center gap-2 text-sm text-slate-600"><input name="remember" type="checkbox"> Remember me</label>
          <button type="submit" class="btn-primary w-full">Sign in</button>
          <div class="flex justify-between text-sm"><a class="font-bold text-primary-700" href="<?php echo e(route('password.forgot','patient')); ?>">Forgot password?</a><a class="font-bold text-slate-600" href="<?php echo e(route('doctor.login')); ?>">Doctor Login →</a></div>
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
<?php /**PATH C:\ITprojects\New folder\resources\views/auth/login.blade.php ENDPATH**/ ?>