<x-layouts.app>
    <x-page-hero eyebrow="Doctor portal" title="A more connected way to care." description="Sign in to manage your clinical workspace, appointments and patient care from one secure place." centered />
    <section class="relative min-h-[calc(100vh-78px)] overflow-hidden bg-[radial-gradient(circle_at_top,_rgba(31,131,251,0.12),_transparent_32%),linear-gradient(180deg,#f7fbff_0%,#ffffff_100%)] px-5 py-16">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(20,184,189,0.10),transparent_30%),radial-gradient(circle_at_80%_10%,rgba(31,131,251,0.12),transparent_28%)]"></div>

        <div class="relative mx-auto max-w-5xl overflow-hidden rounded-[38px] border border-white/80 bg-white/80 shadow-[0_35px_120px_-42px_rgba(7,28,64,.45)] backdrop-blur-xl lg:grid lg:grid-cols-[1.05fr_.95fr]">
            <div class="relative hidden overflow-hidden bg-[linear-gradient(135deg,#071c40_0%,#0f4f96_62%,#0d7180_100%)] p-10 text-white lg:flex lg:flex-col lg:justify-center">
                <div class="pointer-events-none absolute inset-0 bg-[linear-gradient(120deg,transparent_20%,rgba(20,184,189,.18),transparent_70%)]"></div>
                <div class="relative z-10">
                <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-[11px] font-extrabold uppercase tracking-[.18em] text-accent-300">Doctor portal</span>
                <h1 class="mt-8 text-4xl font-black leading-tight tracking-[-0.05em]">Your secure clinical workspace.</h1>
                <p class="mt-5 max-w-md text-base leading-7 text-white/70">
                    Manage authorized patients, appointments, medical records and reports from one secure, modern care dashboard.
                </p>

                <div class="mt-10 space-y-4">
                    <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-primary-500/20 text-sm font-black text-accent-300">✓</span>
                        <span class="text-sm text-white/85">Patient records protected and organized</span>
                    </div>
                    <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-3">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-cyan-500/20 text-sm font-black text-cyan-300">✓</span>
                        <span class="text-sm text-white/85">Appointments and reports in one place</span>
                    </div>
                </div>
                </div>
            </div>

            <div class="p-7 sm:p-10 lg:p-12">
                <div class="mx-auto max-w-md">
                    <p class="text-sm font-extrabold uppercase tracking-[.18em] text-primary-600">MediCare Admin</p>
                    <h2 class="mt-3 text-4xl font-black tracking-[-0.05em] text-navy-900">Sign in</h2>

                    @if(session('success'))
                        <div class="mt-5 rounded-2xl bg-emerald-50 p-3 text-sm font-semibold text-emerald-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mt-5 rounded-2xl border border-red-200 bg-red-50 p-3 text-sm font-semibold text-red-700">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('doctor.login.store') }}" class="mt-7 space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Email address</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus class="input-field w-full" placeholder="admin@example.com">
                        </div>

                        <div>
                            <label for="password" class="mb-2 block text-sm font-bold text-slate-700">Password</label>
                            <div class="relative">
                                <input id="password" name="password" type="password" required class="input-field w-full pr-12" placeholder="Enter password">
                                <span class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-slate-400">◌</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4 text-sm">
                            <label class="flex items-center gap-2 text-slate-600">
                                <input name="remember" type="checkbox" class="h-4 w-4 rounded border-slate-300 text-primary-600 focus:ring-primary-500">
                                <span>Remember me</span>
                            </label>

                            <a class="font-bold text-primary-700 hover:text-primary-800" href="{{ route('password.forgot', 'doctor') }}">Forgot password?</a>
                        </div>

                        <button type="submit" class="btn-primary w-full justify-center">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
