<x-layouts.app>
  <section class="section bg-slate-50">
    <div class="container-shell max-w-md">
      <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
        <h1 class="text-2xl font-extrabold text-navy-900">Sign in</h1>
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
  </section>
</x-layouts.app>
