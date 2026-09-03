<x-layouts.app>
    <x-page-hero eyebrow="The MediCare journal" title="Health insights for living well." description="Clear, considered guidance from our doctors and care team, made for real life." image="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=1100&q=85&auto=format&fit=crop" image-alt="Doctor reviewing health information" />
    <section class="bg-white py-16 sm:py-20">
        <div class="container-shell">
            <div class="mb-10 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div><span class="section-label">Latest thinking</span><h2 class="section-heading !mt-3 !text-3xl lg:!text-4xl">Ideas for a healthier life.</h2></div>
                <p class="max-w-sm text-sm leading-6 text-slate-500">Practical perspectives, clinical knowledge and calm guidance from the MediCare team.</p>
            </div>
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-blog-card :post="$post" />
            @endforeach
        </div>
        <div class="mt-12">{{ $posts->links() }}</div>
        </div>
    </section>
</x-layouts.app>
