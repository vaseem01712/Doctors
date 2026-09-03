<x-layouts.app>
    <x-page-hero eyebrow="The MediCare journal" title="Health insights for living well." description="Clear, considered guidance from our doctors and care team, made for real life." image="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=1100&q=85&auto=format&fit=crop" image-alt="Doctor reviewing health information" />
    <section class="mx-auto max-w-7xl px-6 py-16">
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-blog-card :post="$post" />
            @endforeach
        </div>
        <div class="mt-10">{{ $posts->links() }}</div>
    </section>
</x-layouts.app>
