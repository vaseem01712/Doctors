@props(['post'])
@php
    $fallbackImages = [
        'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=900&q=85&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=85&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1551076805-e1869033e561?w=900&q=85&auto=format&fit=crop',
    ];
    $image = $post->featured_image ? asset('storage/' . ltrim($post->featured_image, '/')) : $fallbackImages[$post->id % count($fallbackImages)];
@endphp
<a href="{{ route('blog.show', $post) }}" class="group block overflow-hidden rounded-[28px] border border-slate-200/80 bg-white shadow-[0_18px_55px_-32px_rgba(7,28,64,.35)] transition duration-500 hover:-translate-y-1 hover:shadow-[0_28px_70px_-32px_rgba(7,28,64,.42)]">
    <div class="relative h-56 overflow-hidden bg-primary-100">
        <img src="{{ $image }}" alt="{{ $post->title }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/55 via-transparent to-transparent"></div>
        <span class="absolute bottom-4 left-4 rounded-full border border-white/30 bg-navy-900/55 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-[.16em] text-white backdrop-blur">{{ $post->category->name ?? 'Health insight' }}</span>
    </div>
    <div class="p-6">
        <div class="flex items-center gap-2 text-xs font-bold text-slate-400"><span>{{ $post->published_at?->format('d M Y') ?? 'Latest insight' }}</span><span class="h-1 w-1 rounded-full bg-accent-500"></span><span>By {{ $post->author }}</span></div>
        <h3 class="mt-3 text-xl font-extrabold leading-tight tracking-[-.03em] text-navy-900 transition group-hover:text-primary-600">{{ $post->title }}</h3>
        <p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-500">{{ $post->excerpt }}</p>
        <span class="mt-5 inline-flex items-center gap-2 text-sm font-extrabold text-primary-700">Read article <span class="transition group-hover:translate-x-1">→</span></span>
    </div>
</a>
