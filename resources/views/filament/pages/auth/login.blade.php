<x-filament-panels::page.simple>
    <div class="flex min-h-[calc(100vh-8rem)] items-center justify-center px-4 py-10">
        <div class="w-full max-w-md overflow-hidden rounded-[30px] border border-slate-200/80 bg-white/80 shadow-[0_35px_120px_-42px_rgba(7,28,64,.45)] backdrop-blur-xl">
            <div class="bg-gradient-to-r from-navy-900 via-[#102b52] to-primary-700 px-6 py-6 text-center text-white">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-2xl font-black text-accent-300 shadow-lg shadow-white/10">
                    +
                </div>
                <div class="mt-4 text-2xl font-black tracking-[-0.04em]">MediCare Admin</div>
            </div>

            <div class="px-6 py-6 sm:px-8">
                <div class="mb-6 text-center">
                    <h2 class="text-3xl font-black tracking-[-0.05em] text-navy-900">Sign in</h2>
                </div>

                {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE, scopes: $this->getRenderHookScopes()) }}

                <x-filament-panels::form id="form" wire:submit="authenticate">
                    {{ $this->form }}

                    <x-filament-panels::form.actions
                        :actions="$this->getCachedFormActions()"
                        :full-width="$this->hasFullWidthFormActions()"
                    />
                </x-filament-panels::form>

                {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_AFTER, scopes: $this->getRenderHookScopes()) }}
            </div>
        </div>
    </div>
</x-filament-panels::page.simple>
