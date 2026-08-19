
<x-layouts.app>
  <section class="relative overflow-hidden bg-white">
    <div class="absolute inset-0 grid-glow opacity-50"></div>
    <div class="absolute -left-40 top-0 h-96 w-96 rounded-full bg-primary-200/30 blur-3xl"></div>
    <div class="absolute right-0 top-20 h-80 w-80 rounded-full bg-accent-300/20 blur-3xl"></div>

    <div class="container-shell relative grid items-center gap-12 pb-20 pt-12 lg:grid-cols-[1.02fr_.98fr] lg:pb-24 lg:pt-20">
      <div x-data="{show:false}" x-init="setTimeout(()=>show=true,80)" x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-6">
        <div class="section-label"><span class="eyebrow-dot"></span> Trusted by 50,000+ patients</div>
        <h1 class="mt-6 max-w-3xl text-balance text-5xl font-extrabold leading-[.98] tracking-[-.055em] text-navy-900 sm:text-6xl lg:text-[76px]">
          Exceptional care, <span class="text-primary-600">designed around you.</span>
        </h1>
        <p class="mt-6 max-w-xl text-lg leading-8 text-slate-500">Connect with trusted specialists, book appointments in minutes and experience a smarter standard of healthcare — online or in person.</p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="{{ route('appointments.create') }}" class="btn-primary px-7 py-4">Book an appointment <span class="text-lg">↗</span></a>
          <a href="{{ route('doctors.index') }}" class="btn-secondary px-7 py-4">Find a specialist</a>
        </div>
        <div class="mt-9 flex flex-wrap items-center gap-6 text-sm font-bold text-slate-600">
          <div class="flex -space-x-2">
            <img class="h-9 w-9 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80&q=80" alt="">
            <img class="h-9 w-9 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&q=80" alt="">
            <img class="h-9 w-9 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&q=80" alt="">
          </div>
          <span><strong class="text-navy-900">4.9/5</strong> patient rating</span>
          <span class="hidden h-5 w-px bg-slate-200 sm:block"></span>
          <span>24/7 care support</span>
        </div>
      </div>

      <div class="relative min-h-[540px]" x-data="{ready:false}" x-init="setTimeout(()=>ready=true,180)" x-show="ready" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 scale-95">
        <div class="absolute inset-x-10 top-8 bottom-0 rounded-[42px] bg-gradient-to-br from-primary-100 via-white to-accent-100 shadow-[0_35px_100px_-45px_rgba(15,99,224,.45)]"></div>
        <div class="absolute right-0 top-0 h-24 w-24 rounded-full border border-primary-200 bg-white/80 backdrop-blur-xl"></div>
        <div class="absolute bottom-4 left-2 h-32 w-32 rounded-full bg-accent-200/40 blur-2xl"></div>

        <div class="absolute left-8 top-12 z-10 rounded-2xl border border-white/80 bg-white/90 p-4 shadow-xl backdrop-blur-xl animate-float">
          <div class="flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-accent-50 text-accent-600">✓</span>
            <div><p class="text-xs font-bold text-slate-400">Availability</p><p class="text-sm font-extrabold text-navy-900">Doctors online now</p></div>
          </div>
        </div>

        <div class="absolute bottom-12 right-0 z-20 rounded-2xl border border-white/80 bg-white/95 p-4 shadow-2xl backdrop-blur-xl animate-float-slow">
          <p class="text-xs font-bold text-slate-400">Patient satisfaction</p>
          <div class="mt-2 flex items-center gap-3">
            <span class="text-2xl font-extrabold text-navy-900">98%</span>
            <span class="rounded-full bg-accent-50 px-2 py-1 text-xs font-bold text-accent-600">Excellent</span>
          </div>
        </div>

        <div class="absolute inset-x-14 bottom-0 top-16 overflow-hidden rounded-[36px]">
          <img src="https://images.unsplash.com/photo-1550831107-1553da8c8464?w=1000&q=85&auto=format&fit=crop" alt="Doctor providing compassionate care" class="h-full w-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-navy-900/30 via-transparent to-white/10"></div>
        </div>

        <div class="absolute bottom-24 left-0 z-20 flex items-center gap-3 rounded-2xl border border-white/70 bg-navy-900/95 px-4 py-3 text-white shadow-2xl backdrop-blur-xl">
          <span class="flex h-9 w-9 items-center justify-center rounded-full bg-accent-400 text-navy-900">+</span>
          <div><p class="text-[10px] uppercase tracking-widest text-white/50">Care network</p><p class="text-sm font-bold">250+ specialists</p></div>
        </div>
      </div>
    </div>

    <div class="container-shell relative -mb-8">
      <form action="{{ route('doctors.index') }}" class="grid gap-3 rounded-[28px] border border-slate-100 bg-white p-3 shadow-[0_28px_80px_-35px_rgba(7,28,64,.35)] md:grid-cols-[1.2fr_1fr_1fr_auto]">
        <div class="flex items-center gap-3 rounded-2xl bg-slate-50 px-4">
          <span class="text-primary-600">⌕</span>
          <input name="name" class="w-full bg-transparent py-3 text-sm font-semibold outline-none" placeholder="Search doctor or keyword">
        </div>
        <select name="specialty" class="input-field border-0 bg-slate-50">
          <option value="">All specialties</option>
          @foreach ($specialties as $s)<option value="{{ $s->slug }}">{{ $s->name }}</option>@endforeach
        </select>
        <input name="location" class="input-field border-0 bg-slate-50" placeholder="Location">
        <button class="btn-primary">Find a doctor <span>↗</span></button>
      </form>
    </div>
  </section>

  <section class="section bg-white pt-32">
    <div class="container-shell">
      <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
        <div><span class="section-label">Specialties</span><h2 class="section-heading max-w-2xl">Care for every stage of your health.</h2></div>
        <a href="{{ route('specialties.index') }}" class="btn-ghost">Explore all specialties →</a>
      </div>
      <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($specialties as $specialty)
          <a href="{{ route('specialties.show',$specialty) }}" class="premium-card group p-6">
            <div class="icon-tile group-hover:bg-primary-600 group-hover:text-white"><span class="text-xl">✦</span></div>
            <h3 class="mt-5 text-lg font-extrabold text-navy-900">{{ $specialty->name }}</h3>
            <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-500">{{ $specialty->description ?? 'Personalized specialist care built around your needs.' }}</p>
            <div class="mt-5 text-sm font-extrabold text-primary-700">Explore specialty <span class="transition group-hover:ml-1">→</span></div>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section bg-slate-50">
    <div class="container-shell grid items-center gap-14 lg:grid-cols-[.9fr_1.1fr]">
      <div class="relative">
        <div class="absolute -left-5 -top-5 h-28 w-28 rounded-full bg-primary-100 blur-2xl"></div>
        <div class="relative overflow-hidden rounded-[38px]">
          <img src="https://images.unsplash.com/photo-1584982751601-97dcc096659c?w=1000&q=85&auto=format&fit=crop" class="h-[560px] w-full object-cover" alt="Modern medical care">
          <div class="absolute bottom-5 left-5 right-5 rounded-3xl border border-white/30 bg-navy-900/85 p-5 text-white backdrop-blur-xl">
            <div class="flex items-center justify-between"><span class="text-sm font-bold text-white/70">Care quality</span><span class="text-sm font-extrabold text-accent-400">98% satisfaction</span></div>
            <div class="mt-3 h-2 rounded-full bg-white/10"><div class="h-2 w-[98%] rounded-full bg-accent-400"></div></div>
          </div>
        </div>
      </div>
      <div>
        <span class="section-label">Why MediCare</span>
        <h2 class="section-heading text-balance">A calmer, smarter way to take care of your health.</h2>
        <p class="section-copy">From your first search to your follow-up, every part of the experience is designed to remove friction and put trusted care within reach.</p>
        <div class="mt-9 grid gap-4 sm:grid-cols-2">
          @foreach ([['01','Human-first care','Specialists who listen, explain and treat you as a person.'],['02','Modern medicine','Technology and evidence-led care working together.'],['03','Simple access','Find availability, book and manage appointments in minutes.'],['04','Always connected','Support when you need it, wherever you are.']] as $feature)
            <div class="premium-card p-5">
              <span class="text-xs font-extrabold tracking-widest text-primary-600">{{ $feature[0] }}</span>
              <h3 class="mt-3 font-extrabold text-navy-900">{{ $feature[1] }}</h3>
              <p class="mt-2 text-sm leading-6 text-slate-500">{{ $feature[2] }}</p>
            </div>
          @endforeach
        </div>
        <a href="{{ route('services.index') }}" class="btn-primary mt-8">Discover our care model ↗</a>
      </div>
    </div>
  </section>

  <section class="section bg-navy-900 text-white">
    <div class="container-shell">
      <div class="flex flex-col justify-between gap-8 md:flex-row md:items-end">
        <div><span class="section-label border-white/10 bg-white/10 text-accent-400">Our services</span><h2 class="mt-4 max-w-2xl text-3xl font-extrabold tracking-tight sm:text-5xl">Everything you need, under one roof.</h2></div>
        <a href="{{ route('services.index') }}" class="btn-secondary">View all services →</a>
      </div>
      <div class="mt-12 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($services as $service)
          <a href="{{ route('services.show',$service) }}" class="group rounded-[28px] border border-white/10 bg-white/[.055] p-7 transition duration-500 hover:-translate-y-1 hover:bg-white/[.09]">
            <div class="flex items-start justify-between"><span class="icon-tile bg-white/10 text-accent-400 group-hover:bg-accent-400 group-hover:text-navy-900">✦</span><span class="text-xl text-white/30 transition group-hover:text-accent-400">↗</span></div>
            <h3 class="mt-8 text-xl font-extrabold">{{ $service->title }}</h3>
            <p class="mt-3 text-sm leading-6 text-slate-400">{{ $service->short_description }}</p>
            <div class="mt-6 text-sm font-extrabold text-accent-400">Learn more</div>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section bg-white">
    <div class="container-shell">
      <div class="mx-auto max-w-3xl text-center"><span class="section-label">How it works</span><h2 class="section-heading">From search to care in four simple steps.</h2><p class="section-copy mx-auto">No complicated process. Just a clear path to the right specialist.</p></div>
      <div class="relative mt-16 grid gap-5 lg:grid-cols-4">
        <div class="absolute left-[12%] right-[12%] top-8 hidden h-px bg-slate-200 lg:block"></div>
        @foreach ([['01','Choose a specialty','Tell us what kind of care you need.'],['02','Pick your doctor','Compare trusted specialists and profiles.'],['03','Choose a time','See real availability and select a slot.'],['04','Start your care','Confirm your appointment and you’re done.']] as $step)
          <div class="relative text-center">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full border-8 border-white bg-primary-600 text-sm font-extrabold text-white shadow-lg shadow-primary-600/20">{{ $step[0] }}</div>
            <h3 class="mt-6 font-extrabold text-navy-900">{{ $step[1] }}</h3>
            <p class="mx-auto mt-2 max-w-[230px] text-sm leading-6 text-slate-500">{{ $step[2] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section bg-slate-50">
    <div class="container-shell">
      <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
        <div><span class="section-label">Specialists</span><h2 class="section-heading">Meet the people behind exceptional care.</h2></div>
        <a href="{{ route('doctors.index') }}" class="btn-ghost">Meet all doctors →</a>
      </div>
      <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($doctors as $doctor)
          <a href="{{ route('doctors.show',$doctor) }}" class="premium-card group overflow-hidden">
            <div class="relative h-72 overflow-hidden bg-primary-50">
              <img src="https://ui-avatars.com/api/?name={{ urlencode($doctor->name) }}&background=0b1f3a&color=fff&size=700&bold=true" alt="{{ $doctor->name }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
              <div class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1.5 text-xs font-extrabold text-navy-900 backdrop-blur">Available</div>
              <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between rounded-2xl bg-navy-900/85 px-4 py-3 text-white backdrop-blur">
                <span class="text-xs font-bold text-white/60">Rating</span><span class="font-extrabold">★ {{ $doctor->rating }}</span>
              </div>
            </div>
            <div class="p-5">
              <h3 class="text-lg font-extrabold text-navy-900">{{ $doctor->name }}</h3>
              <p class="mt-1 text-sm font-bold text-primary-600">{{ $doctor->specialty->name ?? 'Specialist' }}</p>
              <p class="mt-3 text-xs font-semibold text-slate-400">{{ $doctor->experience_years }}+ years experience</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section bg-white">
    <div class="container-shell">
      <div class="mx-auto max-w-3xl text-center"><span class="section-label">Patient stories</span><h2 class="section-heading">Care that feels personal.</h2></div>
      <div class="mt-12 grid gap-5 lg:grid-cols-3">
        @forelse ($testimonials as $testimonial)
          <div class="premium-card p-7">
            <div class="flex gap-1 text-accent-500">★★★★★</div>
            <p class="mt-6 text-lg font-semibold leading-8 text-navy-900">“{{ $testimonial->content ?? $testimonial->message ?? 'The entire experience felt thoughtful, simple and genuinely caring.' }}”</p>
            <div class="mt-8 flex items-center gap-3">
              <div class="flex h-11 w-11 items-center justify-center rounded-full bg-primary-100 font-extrabold text-primary-700">{{ strtoupper(substr($testimonial->name ?? 'P',0,1)) }}</div>
              <div><p class="text-sm font-extrabold text-navy-900">{{ $testimonial->name ?? 'Patient' }}</p><p class="text-xs text-slate-400">Verified patient</p></div>
            </div>
          </div>
        @empty
          @foreach (['“The booking experience was incredibly simple and the doctor was excellent.”','“Beautiful clinic experience, thoughtful staff and genuinely modern care.”','“I finally found a healthcare experience that feels designed for people.”'] as $quote)
            <div class="premium-card p-7"><div class="text-accent-500">★★★★★</div><p class="mt-6 text-lg font-semibold leading-8 text-navy-900">{{ $quote }}</p><div class="mt-8 text-sm font-extrabold text-slate-500">Verified patient</div></div>
          @endforeach
        @endforelse
      </div>
    </div>
  </section>

  <section class="section bg-slate-50" x-data="{open:null}">
    <div class="container-shell grid gap-14 lg:grid-cols-[.8fr_1.2fr]">
      <div><span class="section-label">FAQ</span><h2 class="section-heading">Questions, answered clearly.</h2><p class="section-copy">Everything you need to know before your first appointment.</p><a href="{{ route('contact') }}" class="btn-secondary mt-8">Talk to our team</a></div>
      <div class="space-y-3">
        @foreach (($faqs ?? collect()) as $i => $faq)
          <div class="rounded-2xl border border-slate-200 bg-white">
            <button @click="open=open==={{$i}}?null:{{$i}}" class="flex w-full items-center justify-between p-5 text-left font-extrabold text-navy-900"><span>{{ $faq->question }}</span><span class="text-xl text-primary-600" x-text="open==={{$i}}?'−':'+'"></span></button>
            <div x-show="open==={{$i}}" x-collapse x-cloak class="px-5 pb-5 text-sm leading-7 text-slate-500">{{ $faq->answer }}</div>
          </div>
        @endforeach
        @if(($faqs ?? collect())->count() === 0)
          @foreach ([['How do I book an appointment?','Choose a specialty, select a doctor, pick an available time and confirm your appointment online.'],['Can I consult online?','Yes. Eligible specialists can provide tele-health consultations through the appointment flow.'],['Can I change my appointment?','Contact our support team or use your patient dashboard to manage upcoming appointments.'],['Do you offer urgent care?','Our care team can guide you to the right service based on your needs and availability.']] as $i=>$item)
            <div class="rounded-2xl border border-slate-200 bg-white">
              <button @click="open=open==={{$i}}?null:{{$i}}" class="flex w-full items-center justify-between p-5 text-left font-extrabold text-navy-900"><span>{{ $item[0] }}</span><span class="text-xl text-primary-600" x-text="open==={{$i}}?'−':'+'"></span></button>
              <div x-show="open==={{$i}}" x-transition x-cloak class="px-5 pb-5 text-sm leading-7 text-slate-500">{{ $item[1] }}</div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </section>

  <section class="section bg-white">
    <div class="container-shell">
      <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end"><div><span class="section-label">Health insights</span><h2 class="section-heading">Ideas for a healthier life.</h2></div><a href="{{ route('blog.index') }}" class="btn-ghost">Read all insights →</a></div>
      <div class="mt-12 grid gap-5 lg:grid-cols-3">
        @foreach ($posts as $post)
          <a href="{{ route('blog.show',$post) }}" class="premium-card group overflow-hidden">
            <div class="h-56 overflow-hidden bg-primary-50"><img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=900&q=80&auto=format&fit=crop" alt="{{ $post->title }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105"></div>
            <div class="p-6"><span class="text-xs font-extrabold uppercase tracking-widest text-primary-600">{{ $post->category->name ?? 'Health' }}</span><h3 class="mt-3 text-xl font-extrabold leading-snug text-navy-900">{{ $post->title }}</h3><p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-500">{{ $post->excerpt }}</p><div class="mt-5 text-sm font-extrabold text-primary-700">Read article →</div></div>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="relative overflow-hidden bg-navy-900 py-20 text-white">
    <div class="absolute right-0 top-0 h-96 w-96 rounded-full bg-primary-600/20 blur-3xl"></div>
    <div class="container-shell relative flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
      <div><span class="section-label border-white/10 bg-white/10 text-accent-400">Your next step</span><h2 class="mt-5 max-w-2xl text-3xl font-extrabold tracking-tight sm:text-5xl">The right care is closer than you think.</h2><p class="mt-4 max-w-xl text-slate-400">Find a specialist, check availability and take the next step with confidence.</p></div>
      <a href="{{ route('appointments.create') }}" class="btn-primary shrink-0 bg-accent-500 text-navy-900 hover:bg-accent-400">Book your appointment ↗</a>
    </div>
  </section>
</x-layouts.app>
