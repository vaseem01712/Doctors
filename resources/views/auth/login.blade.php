<x-layouts.app>
  <section class="relative mt-[123px] min-h-[calc(100vh-78px)] overflow-hidden bg-[radial-gradient(circle_at_top,_rgba(31,131,251,0.12),_transparent_32%),linear-gradient(180deg,#f7fbff_0%,#ffffff_100%)] px-5 py-16">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(20,184,189,0.10),transparent_30%),radial-gradient(circle_at_80%_10%,rgba(31,131,251,0.12),transparent_28%)]"></div>
    <div class="relative mx-auto max-w-5xl overflow-hidden rounded-[38px] border border-white/80 bg-white/80 shadow-[0_35px_120px_-42px_rgba(7,28,64,.45)] backdrop-blur-xl lg:grid lg:grid-cols-[1.05fr_.95fr]">
      <div class="relative overflow-hidden bg-[linear-gradient(135deg,#071c40_0%,#0f4f96_62%,#0d7180_100%)] p-8 text-white sm:p-10 lg:flex lg:flex-col lg:justify-center">
        <div class="pointer-events-none absolute inset-0 bg-[linear-gradient(120deg,transparent_20%,rgba(20,184,189,.18),transparent_70%)]"></div>
        <div class="relative z-10">
          <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-[11px] font-extrabold uppercase tracking-[.18em] text-accent-300">Patient portal</span>
          <h1 class="mt-6 text-3xl font-black leading-tight tracking-[-0.05em] sm:mt-8 sm:text-4xl">Your care, all in one place.</h1>
          <p class="mt-4 max-w-md text-sm leading-7 text-white/70 sm:mt-5 sm:text-base">Manage appointments, view medical reports and stay connected with your care team from one secure, calm workspace.</p>
          <div class="mt-6 grid gap-3 sm:mt-10 sm:space-y-4">
            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-3"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-primary-500/20 text-sm font-black text-accent-300">✓</span><span class="text-sm text-white/85">Your health information stays protected</span></div>
            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-3"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-cyan-500/20 text-sm font-black text-cyan-300">✓</span><span class="text-sm text-white/85">Appointments and reports in one place</span></div>
          </div>
        </div>
      </div>
      <div class="p-7 sm:p-10 lg:p-12">
        <div class="mx-auto max-w-md">
          <p class="text-sm font-extrabold uppercase tracking-[.18em] text-primary-600">MediCare patient access</p>
          <h2 class="mt-3 text-4xl font-black tracking-[-0.05em] text-navy-900">Sign in</h2>
        <form method="POST" action="{{ route('login.store') }}" class="mt-6 space-y-5">
          @csrf
          <div>
            <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus class="input-field w-full">
            @error('email') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
          </div>
          <div>
            <label for="password" class="mb-2 block text-sm font-bold text-slate-700">Password</label>
            <input id="password" name="password" type="password" required class="input-field w-full">
          </div>
          <label class="flex items-center gap-2 text-sm text-slate-600"><input name="remember" type="checkbox"> Remember me</label>
          <button type="submit" class="btn-primary w-full">Sign in</button>
          <div class="flex justify-between text-sm"><a class="font-bold text-primary-700" href="{{ route('password.forgot','patient') }}">Forgot password?</a><a class="font-bold text-slate-600" href="{{ route('doctor.login') }}">Doctor Login →</a></div>
        </form>
        </div>
      </div>
    </div>
  </section>
</x-layouts.app>
