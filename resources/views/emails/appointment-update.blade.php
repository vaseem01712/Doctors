@extends('emails.layout')

@section('content')
@php($labels = ['approved' => 'Appointment approved', 'declined' => 'Appointment request declined', 'cancelled' => 'Appointment cancelled', 'rescheduled' => 'Appointment rescheduled'])
<h1 style="margin:0 0 10px;font-size:28px">{{ $labels[$event] }}</h1>
<p style="line-height:1.7;color:#59697e">Hi {{ $appointment->patient_name }}, Dr. {{ $appointment->doctor->name }} has {{ $event === 'approved' ? 'approved' : ($event === 'rescheduled' ? 'rescheduled' : ($event === 'cancelled' ? 'cancelled' : 'declined')) }} your appointment.</p>
<div style="margin:24px 0;padding:18px;border:1px solid #e5eaf1;border-radius:14px"><b>Doctor:</b> {{ $appointment->doctor->name }}<br><b>Date:</b> {{ $appointment->appointment_date->format('d M Y') }}<br><b>Time:</b> {{ substr($appointment->appointment_time, 0, 5) }}<br><b>Status:</b> {{ $event === 'rescheduled' ? 'Rescheduled' : ucfirst($appointment->status) }}</div>
@if(in_array($event, ['approved', 'rescheduled'], true))
<p style="line-height:1.7;color:#59697e">Please arrive a few minutes before your appointment time so your visit can begin on time.</p>
@else
<p style="line-height:1.7;color:#59697e">For assistance or to discuss another appointment time, please contact the doctor.</p>
@endif
@php($doctorPhone = $appointment->doctor->phone ?: $appointment->doctor->user?->phone)
@if($doctorPhone)<p style="line-height:1.7;color:#59697e"><b>Doctor contact:</b> {{ $doctorPhone }}</p>@endif
<p><a href="{{ route('dashboard') }}" style="display:inline-block;background:#1f83fb;color:#fff;text-decoration:none;padding:14px 22px;border-radius:10px;font-weight:700">Open Dashboard</a></p>
@endsection
