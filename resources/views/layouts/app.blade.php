<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Anemia Screening</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
  <nav class="bg-white shadow">
    <div class="max-w-4xl mx-auto px-4 py-4 flex justify-between">
      <a href="{{ route('home') }}" class="text-xl font-bold text-red-600">AnemiaCare</a>
      <div class="space-x-4">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('screening.create') }}">Screening Anemia</a>
        <a href="{{ route('feedback') }}">Saran & Masukkan</a>
      </div>
    </div>
  </nav>

  <main class="max-w-4xl mx-auto p-6">
    @if(session('success'))
      <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">{{ session('success') }}</div>
    @endif

    @yield('content')
  </main>

  <footer class="text-center text-sm text-gray-500 py-6">
    &copy; {{ date('Y') }} AnemiaCare
  </footer>
</body>
</html>