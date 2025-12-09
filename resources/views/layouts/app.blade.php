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
    <div class="px-12 py-8 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="{{ asset('img/umi.png') }}" alt="Universitas Muslim Indonesia" class="h-10">
        <img src="{{asset('img/kemenkes.png')}}" alt="Kementrian Kesehatan" class="h-10">
        <a href="{{ route('home') }}" class="text-xl font-bold text-red-600">HemaCheck</a>
      </div>
      <div class="space-x-4">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('screening.create') }}">Screening</a>
        <a href="{{ route('feedback') }}">Saran & Masukkan</a>
      </div>
    </div>
  </nav>

  <main class="px-12 py-8">
    @if(session('success'))
      <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">{{ session('success') }}</div>
    @endif

    @yield('content')
  </main>

  <footer class="text-center text-sm text-gray-500 py-6">
    &copy; {{ date('Y') }} HemaCheck. All rights reserved.
  </footer>
</body>
</html>