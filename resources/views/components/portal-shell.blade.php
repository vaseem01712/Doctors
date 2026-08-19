@props(['title' => 'Portal', 'eyebrow' => 'SECURE PORTAL'])

<x-layouts.app :seo-title="$title . ' — MediCare'">
    <div class="min-h-screen bg-[#f5f8fc] py-6 sm:py-8">
        <div class="container-shell grid gap-6 lg:grid-cols-[240px_1fr]">
            <aside class="hidden rounded-[28px] border border-slate-200 bg-white p-3 shadow-sm lg:block">
                @if(auth()->user()->isDoctor())
                    <p class="px-3 pb-2 pt-2 text-[10px] font-extrabold uppercase tracking-[.18em] text-slate-400">Doctor Portal</p>
                    <nav class="space-y-1">
                        <a href="{{ route('doctor.dashboard') }}" class="portal-nav {{ request()->routeIs('doctor.dashboard') ? 'active' : '' }}">Overview</a>
                        <a href="{{ route('doctor.appointments') }}" class="portal-nav {{ request()->routeIs('doctor.appointments') ? 'active' : '' }}">Appointments</a>
                        <a href="{{ route('doctor.patients') }}" class="portal-nav {{ request()->routeIs('doctor.patients*') ? 'active' : '' }}">Patients</a>
                        <a href="{{ route('doctor.reports') }}" class="portal-nav {{ request()->routeIs('doctor.reports*') ? 'active' : '' }}">Medical Reports</a>
                        <a href="{{ route('doctor.profile') }}" class="portal-nav {{ request()->routeIs('doctor.profile*') ? 'active' : '' }}">Profile</a>
                    </nav>
                @else
                    <p class="px-3 pb-2 pt-2 text-[10px] font-extrabold uppercase tracking-[.18em] text-slate-400">Patient Portal</p>
                    <nav class="space-y-1">
                        <a href="{{ route('dashboard') }}" class="portal-nav {{ request()->routeIs('dashboard') ? 'active' : '' }}">Overview</a>
                        <a href="{{ route('appointments.create') }}" class="portal-nav">Book Appointment</a>
                        <a href="{{ route('patient.reports') }}" class="portal-nav {{ request()->routeIs('patient.reports') ? 'active' : '' }}">Medical Reports</a>
                        <a href="{{ route('patient.notifications') }}" class="portal-nav {{ request()->routeIs('patient.notifications') ? 'active' : '' }}">Notifications</a>
                    </nav>
                @endif
            </aside>

            <main>
                @if(session('success'))
                    <div class="mb-5 rounded-2xl border border-emerald-100 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700">{{ session('success') }}</div>
                @endif
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.app>
