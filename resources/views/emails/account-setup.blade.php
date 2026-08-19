@extends('emails.layout')
@section('content')
<h1 style="margin:0 0 10px;font-size:28px">Welcome, {{ $user->name }}</h1>
<p style="line-height:1.7;color:#59697e">Your {{ $portalLabel }} account is ready. Your login ID is <strong>{{ $user->email }}</strong>.</p>
<p style="line-height:1.7;color:#59697e">For security, an administrator never sends a password by email. Use the secure, time-limited link below to create your own password.</p>
<p style="margin:28px 0"><a href="{{ $setupUrl }}" style="display:inline-block;background:#1f83fb;color:#fff;text-decoration:none;padding:14px 22px;border-radius:10px;font-weight:700">Set Your Password</a></p>
<p style="line-height:1.7;color:#59697e">After setting your password, <a href="{{ $loginUrl }}" style="color:#1f83fb;font-weight:700">sign in to the {{ $portalLabel }}</a>.</p>
<p style="font-size:13px;color:#7a8798">This link expires in 60 minutes. If you did not expect this email, you can safely ignore it.</p>
@endsection
