
<header x-data="{open:false, scrolled:false}" x-init="window.addEventListener('scroll',()=>scrolled=window.scrollY>18)"
        class="sticky top-0 z-50 transition-all duration-300"
        :class="scrolled ? 'border-b border-slate-200/70 bg-white/90 shadow-[0_12px_40px_-25px_rgba(7,28,64,.35)] backdrop-blur-xl' : 'bg-transparent'">
  <div class="container-shell flex h-[78px] items-center justify-between">
    <a href="{{ route('home') }}" class="group flex items-center gap-3">
      <span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-navy-900 text-white shadow-lg shadow-navy-900/15">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
      </span>
      <span class="text-xl font-extrabold tracking-tight text-navy-900">Medi<span class="text-primary-600">Care</span></span>
    </a>

    <nav class="hidden items-center gap-1 lg:flex">
      <a href="{{ route('home') }}" class="rounded-full px-4 py-2.5 text-sm font-bold {{ request()->routeIs('home') ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50 hover:text-primary-700' }}">Home</a>
      <a href="{{ route('doctors.index') }}" class="rounded-full px-4 py-2.5 text-sm font-bold {{ request()->routeIs('doctors.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50 hover:text-primary-700' }}">Doctors</a>
      <a href="{{ route('services.index') }}" class="rounded-full px-4 py-2.5 text-sm font-bold {{ request()->routeIs('services.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50 hover:text-primary-700' }}">Services</a>
      <a href="{{ route('specialties.index') }}" class="rounded-full px-4 py-2.5 text-sm font-bold {{ request()->routeIs('specialties.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50 hover:text-primary-700' }}">Specialties</a>
      <a href="{{ route('blog.index') }}" class="rounded-full px-4 py-2.5 text-sm font-bold {{ request()->routeIs('blog.*') ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50 hover:text-primary-700' }}">Insights</a>
      <a href="{{ route('contact') }}" class="rounded-full px-4 py-2.5 text-sm font-bold {{ request()->routeIs('contact') ? 'bg-primary-50 text-primary-700' : 'text-slate-600 hover:bg-slate-50 hover:text-primary-700' }}">Contact</a>
    </nav>

    <div class="hidden items-center gap-2 lg:flex">
      @auth
        <a href="{{ auth()->user()->isDoctor() ? route('doctor.dashboard') : route('dashboard') }}" class="btn-ghost">Dashboard</a>
      @else
        <a href="{{ route('login') }}" class="btn-ghost">Patient Login</a>
        <a href="{{ route('doctor.login') }}" class="btn-secondary !px-4 !py-2.5">Doctor Login</a>
      @endauth
      <a href="{{ route('appointments.create') }}" class="btn-primary">Book Appointment <span>↗</span></a>
    </div>

    <button @click="open=!open" class="flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white text-navy-900 lg:hidden" aria-label="Open menu">
      <svg x-show="!open" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
      <svg x-show="open" x-cloak class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-width="2" d="M6 6l12 12M18 6L6 18"/></svg>
    </button>
  </div>

  <div x-show="open" x-cloak x-transition class="border-t border-slate-100 bg-white px-5 pb-6 pt-4 lg:hidden">
    <nav class="container-shell flex flex-col gap-2">
      <a href="{{ route('home') }}" class="rounded-2xl px-4 py-3 font-bold hover:bg-slate-50">Home</a>
      <a href="{{ route('doctors.index') }}" class="rounded-2xl px-4 py-3 font-bold hover:bg-slate-50">Doctors</a>
      <a href="{{ route('services.index') }}" class="rounded-2xl px-4 py-3 font-bold hover:bg-slate-50">Services</a>
      <a href="{{ route('specialties.index') }}" class="rounded-2xl px-4 py-3 font-bold hover:bg-slate-50">Specialties</a>
      <a href="{{ route('blog.index') }}" class="rounded-2xl px-4 py-3 font-bold hover:bg-slate-50">Insights</a>
      <a href="{{ route('contact') }}" class="rounded-2xl px-4 py-3 font-bold hover:bg-slate-50">Contact</a>
      @guest<a href="{{ route('doctor.login') }}" class="rounded-2xl px-4 py-3 font-bold hover:bg-slate-50">Doctor Login</a>@endguest
      <a href="{{ route('appointments.create') }}" class="btn-primary mt-2">Book Appointment <span>↗</span></a>
    </nav>
  </div>
</header>
