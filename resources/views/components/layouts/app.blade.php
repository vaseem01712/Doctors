
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $seoTitle ?? 'MediCare — Premium Healthcare' }}</title>
  <meta name="description" content="{{ $seoDescription ?? 'Expert doctors, modern technology and compassionate healthcare in one premium experience.' }}">
  <link rel="canonical" href="{{ url()->current() }}">
  <meta property="og:title" content="{{ $seoTitle ?? 'MediCare — Premium Healthcare' }}">
  <meta property="og:description" content="{{ $seoDescription ?? 'Expert doctors, modern technology and compassionate healthcare.' }}">
  <meta name="theme-color" content="#071c40">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  @if (file_exists(public_path('build/manifest.json')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @else
    <style>[x-cloak] { display: none !important; }</style>
  @endif
</head>
<body class="font-sans">
  <x-header />
  <main>{{ $slot }}</main>
  <x-footer />
</body>
</html>
