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
  <section class="relative mt-[123px] min-h-[calc(100vh-78px)] overflow-hidden bg-[radial-gradient(circle_at_top,_rgba(31,131,251,0.12),_transparent_32%),linear-gradient(180deg,#f7fbff_0%,#ffffff_100%)] px-5 py-16">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(20,184,189,0.10),transparent_30%),radial-gradient(circle_at_80%_10%,rgba(31,131,251,0.12),transparent_28%)]"></div>
    <div class="relative mx-auto max-w-5xl overflow-hidden rounded-[38px] border border-white/80 bg-white/80 shadow-[0_35px_120px_-42px_rgba(7,28,64,.45)] backdrop-blur-xl lg:grid lg:grid-cols-[1.05fr_.95fr]">
      <div class="relative overflow-hidden bg-[linear-gradient(135deg,#071c40_0%,#0f4f96_62%,#0d7180_100%)] p-8 text-white sm:p-10 lg:flex lg:flex-col lg:justify-center">
        <div class="relative z-10">
          <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-[11px] font-extrabold uppercase tracking-[.18em] text-accent-300">Patient portal</span>
          <h1 class="mt-6 text-3xl font-black leading-tight tracking-[-0.05em] sm:mt-8 sm:text-4xl">Your care, all in one place.</h1>
          <p class="mt-4 max-w-md text-sm leading-7 text-white/70 sm:mt-5 sm:text-base">Manage appointments, view medical reports and stay connected with your care team from one secure, calm workspace.</p>
          <div class="mt-6 grid gap-3 sm:mt-10 sm:space-y-4">
            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-3"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-primary-500/20 text-sm font-black text-accent-300">✓</span><span class="text-sm text-white/85">Your health information stays protected</span></div>
            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-3"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-cyan-500/20 text-sm font-black text-cyan-300">✓</span><span class="text-sm text-white/85">Appointments and reports in one place</span></div>
          </div>
        </div>
        <div class="relative z-10 mt-8 overflow-hidden rounded-[24px] border border-white/20 bg-white/10 p-1 shadow-[0_20px_50px_-28px_rgba(0,0,0,.55)]">
          <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?w=1200&q=85&auto=format&fit=crop" alt="Patient speaking with a healthcare professional" class="h-40 w-full rounded-[20px] object-cover opacity-90 sm:h-44">
        </div>
      </div>
      <div class="p-7 sm:p-10 lg:p-12">
        <div class="mx-auto max-w-md">
          <p class="text-sm font-extrabold uppercase tracking-[.18em] text-primary-600">MediCare patient access</p>
          <h2 class="mt-3 text-4xl font-black tracking-[-0.05em] text-navy-900">Sign in</h2>
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
<?php /**PATH C:\ITprojects\New folder\resources\views\auth\login.blade.php ENDPATH**/ ?>