<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Anemia Screening</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
  <nav class="sticky top-0 z-50 bg-white/80 shadow border-b border-gray-200 transition-all duration-300"
  style="backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);">
    <div class="px-24 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-12">
        <a href="{{ route('home') }}" class="text-xl font-bold text-red-600">HemaCheck</a>  
        <div class="space-x-4">
          <a href="{{ route('home') }}">Beranda</a>
          <a href="{{ route('screening.create') }}">Screening</a>
          <a href="{{ route('feedback') }}">Saran & Masukkan</a>
        </div>
      </div>
      <div class="flex items-center space-x-2">
          <img src="{{ asset('img/umi.png') }}" alt="Universitas Muslim Indonesia" class="h-10">
          <img src="{{asset('img/kemenkes.png')}}" alt="Kementrian Kesehatan" class="h-10">
        </div>
    </div>
  </nav>

  <main class="px-24 py-8">
    @if(session('success'))
      <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">{{ session('success') }}</div>
    @endif

    @yield('content')
  </main>

  <footer class="bg-gray-900 text-gray-300 mt-8">
    <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2">

        {{-- Identitas --}}
        <div>
            <h3 class="text-xl font-bold text-white mb-3">HemaCheck</h3>
            <p class="text-sm leading-relaxed">
                Platform edukasi dan screening anemia berbasis web untuk membantu
                masyarakat mengenali risiko anemia secara mandiri.
            </p>
        </div>

        {{-- Alamat Kampus --}}
        <div>
            <h4 class="text-lg font-semibold text-white mb-3">Alamat Kampus</h4>
            <p class="text-sm leading-relaxed">
                Universitas Muslim Indonesia<br>
                Jl. Urip Sumoharjo No. KM.5 Panaikang, Kota Makassar
            </p>
        </div>
    </div>

    <div class="border-t border-gray-700 text-center py-4 text-sm text-gray-400">
        © {{ date('Y') }} HemaCheck — Universitas Muslim Indonesia
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 900,
      easing: 'ease-out-cubic',
      once: true
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
        const counter = document.getElementById("whoCounter");
        let started = false;

        const animateCounter = () => {
            const target = parseFloat(counter.dataset.target);
            let current = 0;
            const increment = target / 60;

            const update = () => {
                current += increment;
                if (current < target) {
                    counter.innerText = current.toFixed(1);
                    requestAnimationFrame(update);
                } else {
                    counter.innerText = target;
                }
            };
            update();
        };

        window.addEventListener("scroll", () => {
            const rect = counter.getBoundingClientRect();
            if (!started && rect.top < window.innerHeight) {
                started = true;
                animateCounter();
            }
        });
    });
    </script>

</body>
</html>