@props(['doctor'])
@php
    $fallbackImages = [
        'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=700&q=85&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=700&q=85&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=700&q=85&auto=format&fit=crop',
    ];
    $specialty = strtolower($doctor->specialty->name ?? '');
    $specialtyImages = [
        'cardiology' => 'https://images.unsplash.com/photo-1628348070889-cb656235b4eb?w=700&q=85&auto=format&fit=crop',
        'dermatology' => 'https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=700&q=85&auto=format&fit=crop',
        'pediatrics' => 'https://images.unsplash.com/photo-1638202993928-7d113b8a6b3d?w=700&q=85&auto=format&fit=crop',
        'neurology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=700&q=85&auto=format&fit=crop',
    ];
    $matchedImage = collect($specialtyImages)->first(fn ($url, $key) => str_contains($specialty, $key));
    $image = $doctor->photo ? asset('storage/' . ltrim($doctor->photo, '/')) : ($matchedImage ?: $fallbackImages[$doctor->id % count($fallbackImages)]);
@endphp
<div class="group overflow-hidden rounded-[28px] border border-slate-200/80 bg-white shadow-[0_18px_60px_-35px_rgba(7,28,64,.35)] transition duration-500 hover:-translate-y-1 hover:border-primary-200 hover:shadow-[0_28px_75px_-35px_rgba(7,28,64,.42)]">
    <div class="relative h-64 overflow-hidden bg-primary-50">
        <img src="{{ $image }}" alt="{{ $doctor->name }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/60 via-transparent to-transparent"></div>
        <span class="absolute left-4 top-4 rounded-full border border-white/50 bg-white/90 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-[.14em] text-navy-900 backdrop-blur">Available</span>
        <span class="absolute bottom-4 right-4 rounded-full bg-navy-900/80 px-3 py-1.5 text-xs font-extrabold text-accent-300 backdrop-blur">★ {{ $doctor->rating ?? '5.0' }}</span>
    </div>
    <div class="p-6">
        <h3 class="text-lg font-extrabold text-navy-900">{{ $doctor->name }}</h3>
        <p class="mt-1 text-sm font-bold text-primary-600">{{ $doctor->specialty->name ?? 'Specialist' }}</p>
        <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4"><span class="text-xs font-semibold text-slate-400">{{ $doctor->experience_years ?? '0' }}+ years experience</span><a href="{{ route('doctors.show', $doctor) }}" class="text-sm font-extrabold text-primary-700 transition group-hover:translate-x-1">View profile →</a></div>
    </div>
</div>
