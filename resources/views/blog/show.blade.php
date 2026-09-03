<x-layouts.app>
    <x-page-hero eyebrow="{{ $post->category->name ?? 'MediCare journal' }}" title="{{ $post->title }}" meta="By {{ $post->author }} · {{ $post->published_at?->format('d M Y') }}" />
    <article class="mx-auto max-w-3xl px-6 py-16">
        <div class="prose mt-8 max-w-none text-slate-600">{!! $post->content !!}</div>

        @if ($related->isNotEmpty())
            <h2 class="mt-16 text-xl font-bold text-navy-900">Related Articles</h2>
            <div class="mt-6 grid gap-6 sm:grid-cols-3">
                @foreach ($related as $r) <x-blog-card :post="$r" /> @endforeach
            </div>
        @endif
    </article>
</x-layouts.app>
