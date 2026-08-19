<x-layouts.app>
    <section class="mx-auto max-w-6xl px-6 py-16">
        <x-section-heading label="Contact" centered>Get in Touch</x-section-heading>

        @if (session('success'))
            <x-alert type="success" class="mt-6">{{ session('success') }}</x-alert>
        @endif

        <div class="mt-10 grid gap-10 lg:grid-cols-2">
            <div class="premium-card">
                <p class="text-slate-500">123 Health Street, City</p>
                <p class="mt-2 text-slate-500">+91 98765 43210</p>
                <p class="mt-2 text-slate-500">hello@medicare.test</p>
                <p class="mt-2 text-slate-500">Mon–Sat: 9AM–8PM</p>
                <div class="mt-6 aspect-video rounded-2xl bg-primary-50"></div>
            </div>
            <form action="{{ route('contact.store') }}" method="POST" class="premium-card space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Name" required class="input-field">
                <input type="email" name="email" placeholder="Email" required class="input-field">
                <input type="text" name="phone" placeholder="Phone" class="input-field">
                <input type="text" name="subject" placeholder="Subject" class="input-field">
                <textarea name="message" placeholder="Message" required class="input-field" rows="5"></textarea>
                <button type="submit" class="btn-primary w-full justify-center">Send Message</button>
            </form>
        </div>
    </section>
</x-layouts.app>
