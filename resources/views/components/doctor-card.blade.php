@props(['doctor'])
<div class="card group overflow-hidden">
    <div class="relative overflow-hidden rounded-2xl bg-primary-50">
        <img src="https://ui-avatars.com/api/?name={{ urlencode($doctor->name) }}&background=1f83fb&color=fff&size=300"
             alt="{{ $doctor->name }}" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105">
    </div>
    <div class="mt-4">
        <h3 class="text-lg font-bold text-navy-900">{{ $doctor->name }}</h3>
        <p class="text-sm text-primary-600">{{ $doctor->specialty->name ?? '' }}</p>
        <p class="mt-1 text-sm text-slate-500">{{ $doctor->experience_years }}+ years experience &middot; ⭐ {{ $doctor->rating }}</p>
        <a href="{{ route('doctors.show', $doctor) }}" class="mt-4 inline-flex items-center gap-1 font-semibold text-primary-600 group-hover:gap-2 transition-all">
            View Profile <span aria-hidden="true">→</span>
        </a>
    </div>
</div>
