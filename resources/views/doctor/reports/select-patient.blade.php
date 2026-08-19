<x-portal-shell title="Select Patient for Report">
<div class="mb-7"><span class="section-label">UPLOAD MEDICAL REPORT</span><h1 class="section-heading !mt-3 !text-4xl">Choose a patient</h1><p class="mt-3 text-slate-500">Only patients with an appointment with you can receive a report.</p></div>

<div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
 @forelse($patients as $patient)
  <article class="soft-panel p-6"><p class="text-lg font-extrabold text-navy-900">{{ $patient->name }}</p><p class="mt-1 text-sm text-slate-500">{{ $patient->email }}</p><p class="mt-1 text-sm text-slate-500">{{ $patient->phone ?: 'No phone number' }}</p><a href="{{ route('doctor.reports.create', $patient) }}" class="btn-primary mt-5 w-full">Upload Report</a></article>
 @empty
  <div class="soft-panel p-12 text-center md:col-span-2 xl:col-span-3"><p class="text-lg font-extrabold text-navy-900">No patients available</p><p class="mt-2 text-sm text-slate-500">A patient appears here after they book an appointment with you.</p></div>
 @endforelse
</div>
</x-portal-shell>
