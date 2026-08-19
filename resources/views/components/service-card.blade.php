@props(['service'])
<div class="card group">
    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-50 text-primary-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 5h10a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2z" />
        </svg>
    </div>
    <h3 class="mt-4 text-lg font-bold text-navy-900">{{ $service->title }}</h3>
    <p class="mt-2 text-sm text-slate-500">{{ $service->short_description }}</p>
    <a href="{{ route('services.show', $service) }}" class="mt-4 inline-flex items-center gap-1 font-semibold text-primary-600 group-hover:gap-2 transition-all">
        Learn More <span aria-hidden="true">→</span>
    </a>
</div>
