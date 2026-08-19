
<footer class="relative overflow-hidden bg-navy-900 text-slate-300">
  <div class="absolute inset-0 grid-glow opacity-20"></div>
  <div class="container-shell relative py-16 lg:py-20">
    <div class="mb-14 flex flex-col justify-between gap-8 rounded-[32px] border border-white/10 bg-white/[.04] p-7 sm:p-9 lg:flex-row lg:items-center">
      <div>
        <span class="section-label border-white/10 bg-white/10 text-accent-400">Stay informed</span>
        <h3 class="mt-4 text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Better health starts with better information.</h3>
        <p class="mt-2 max-w-xl text-sm leading-6 text-slate-400">Get practical health insights, clinic updates and appointment reminders in your inbox.</p>
      </div>
      <form action="{{ route('newsletter.store') }}" method="POST" class="flex w-full max-w-md gap-2">
        @csrf
        <input name="email" type="email" required placeholder="Your email address" class="min-w-0 flex-1 rounded-full border border-white/10 bg-white/10 px-5 py-3.5 text-sm text-white outline-none placeholder:text-slate-500 focus:border-accent-400">
        <button class="rounded-full bg-accent-500 px-5 py-3.5 text-sm font-extrabold text-navy-900 transition hover:bg-accent-400">Subscribe</button>
      </form>
    </div>

    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-[1.5fr_1fr_1fr_1.2fr]">
      <div>
        <div class="flex items-center gap-3 text-2xl font-extrabold text-white">
          <span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-white text-navy-900">+</span>
          Medi<span class="text-accent-400">Care</span>
        </div>
        <p class="mt-5 max-w-sm text-sm leading-7 text-slate-400">A modern healthcare experience connecting patients with trusted specialists, thoughtful care and smarter technology.</p>
        <div class="mt-6 flex gap-2">
          <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 hover:bg-white/10">in</a>
          <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 hover:bg-white/10">f</a>
          <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 hover:bg-white/10">x</a>
        </div>
      </div>
      <div>
        <h4 class="font-extrabold text-white">Explore</h4>
        <ul class="mt-5 space-y-3 text-sm text-slate-400">
          <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
          <li><a href="{{ route('doctors.index') }}" class="hover:text-white">Find a Doctor</a></li>
          <li><a href="{{ route('services.index') }}" class="hover:text-white">Services</a></li>
          <li><a href="{{ route('specialties.index') }}" class="hover:text-white">Specialties</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-extrabold text-white">Company</h4>
        <ul class="mt-5 space-y-3 text-sm text-slate-400">
          <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
          <li><a href="{{ route('blog.index') }}" class="hover:text-white">Health Insights</a></li>
          <li><a href="{{ route('appointments.create') }}" class="hover:text-white">Appointments</a></li>
          <li><a href="{{ route('login') }}" class="hover:text-white">Patient Login</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-extrabold text-white">Visit us</h4>
        <ul class="mt-5 space-y-4 text-sm text-slate-400">
          <li>123 Health Avenue, New Delhi</li>
          <li>+91 98765 43210</li>
          <li>hello@medicare.test</li>
          <li>Mon–Sat · 9:00 AM–8:00 PM</li>
        </ul>
      </div>
    </div>

    <div class="mt-14 flex flex-col justify-between gap-4 border-t border-white/10 pt-6 text-xs text-slate-500 sm:flex-row">
      <p>© {{ date('Y') }} MediCare. All rights reserved.</p>
      <div class="flex gap-5"><a href="#" class="hover:text-white">Privacy</a><a href="#" class="hover:text-white">Terms</a><a href="#" class="hover:text-white">Cookies</a></div>
    </div>
  </div>
</footer>
