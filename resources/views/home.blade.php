@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="bg-gradient-to-r from-teal-50 to-blue-50 rounded-xl p-10 shadow-md mb-10 flex flex-col md:flex-row items-center gap-10">
    
    <div class="flex-1">
        <h1 class="text-4xl font-extrabold text-teal-700 leading-tight">
            Cek Risiko Anemia Anda<br>
            Dengan Cepat dan Mudah
        </h1>

        <p class="text-gray-600 mt-4 text-lg">
            Anemia adalah kondisi ketika tubuh kekurangan sel 
            darah merah atau hemoglobin sehingga oksigen tidak 
            tersalurkan dengan optimal. Banyak orang tidak menyadari 
            bahwa mereka memiliki anemia, padahal gejalanya dapat 
            memengaruhi aktivitas harian.
        </p>

        <a href="{{ route('screening.create') }}" 
           class="inline-block mt-6 bg-red-600 hover:bg-red-700 transition text-white px-6 py-3 rounded-lg font-semibold shadow">
            Mulai Screening Sekarang
        </a>
    </div>

    <div class="flex-1 flex justify-center">
        <img src="{{ asset('img/ilustrasi.png') }}" 
             alt="Health Illustration" 
             class="w-80 drop-shadow-md">
    </div>

</section>

{{-- INFORMASI ANEMIA --}}
<section class="mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Apa itu Anemia?</h2>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <p class="text-gray-700 leading-relaxed">
            Menurut World Health Organization (WHO), anemia adalah 
            kondisi ketika kadar hemoglobin berada di bawah batas 
            normal berdasarkan usia dan jenis kelamin. Kekurangan 
            hemoglobin menyebabkan distribusi oksigen ke jaringan 
            menurun.
        </p>
        <img src="{{ asset('img/dataanemia.png') }}" alt="Data Anemia">
        <p class="text-gray-700 leading-relaxed">
            Menurut World Health Organization (WHO) edisi 2025, anemia tetap menjadi masalah kesehatan global: diperkirakan 30.7% wanita usia 15-49 tahun menderita anemia.
        </p>
    </div>
</section>

{{-- ICON FEATURES --}}
<section class="mb-16">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Penyebab Umum Anemia</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- CARD 1 — Kekurangan Zat Besi --}}
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100">
            <div class="text-red-600 mb-3 text-center">
                <img src="img/zat besi.png" alt="Zat Besi" class="h-16 w-16 mx-auto">
            </div>

            <h3 class="font-semibold text-lg mb-3 text-center">Kekurangan Zat Besi</h3>

            <p class="text-gray-600 text-sm leading-relaxed text-center">
                Penyebab anemia paling sering terjadi. Tubuh tidak dapat memproduksi hemoglobin secara optimal jika kekurangan zat besi.
            </p>
        </div>

        {{-- CARD 2 — Kekurangan Vitamin B12 / Folat --}}
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100">
            <div class="text-blue-600 mb-3 text-center">
                <img src="img/vitamin b12.png" alt="Vitamin B12" class="h-16 w-18 mx-auto">
            </div>

            <h3 class="font-semibold text-lg mb-3 text-center">Kekurangan Vitamin B12 atau Folat</h3>

            <p class="text-gray-600 text-sm leading-relaxed text-center">
                Kekurangan vitamin B12 atau folat menghambat proses pembentukan sel darah merah dan dapat menyebabkan anemia megaloblastik.
            </p>
        </div>

        {{-- CARD 3 — Kehilangan Darah --}}
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100">
            <div class="text-purple-600 mb-3 text-center">
                <img src="img/darah.png" alt="Kehilangan Darah" class="h-16 w-14 mx-auto">
            </div>

            <h3 class="font-semibold text-lg mb-3 text-center">Kehilangan Darah</h3>

            <p class="text-gray-600 text-sm leading-relaxed text-center">
                Kehilangan darah akibat menstruasi berat atau perdarahan internal dapat menurunkan kadar hemoglobin secara signifikan.
            </p>
        </div>

        <div class="md:col-span-3 flex justify-center gap-6 px-32">
            {{-- CARD 4 — Penyakit Kronis --}}
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100 md:col-span-1">
                <div class="text-green-600 mb-3 text-center">
                    <img src="img/ginjal.png" alt="Gagal Ginjal" class="h-16 w-16 mx-auto">
                </div>
    
                <h3 class="font-semibold text-lg mb-3 text-center">Penyakit Kronis</h3>
    
                <p class="text-gray-600 text-sm leading-relaxed text-center">
                    Penyakit seperti gagal ginjal, peradangan kronis, atau gangguan autoimun dapat menurunkan produksi sel darah merah.
                </p>
            </div>
    
            {{-- CARD 5 — Infeksi / Kelainan Genetik --}}
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100 md:col-span-1">
                <div class="text-yellow-600 mb-3 text-center">
                    <img src="img/infeksi.png" alt="Infeksi" class="h-16 w-18 mx-auto">
                </div>
    
                <h3 class="font-semibold text-lg mb-3 text-center">Infeksi atau Kelainan Genetik</h3>
    
                <p class="text-gray-600 text-sm leading-relaxed text-center">
                    Beberapa infeksi atau kelainan darah genetik dapat mengurangi umur sel darah merah atau mengganggu produksinya.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- PENCEGAHAN ANEMIA (VERTICAL STEPS) --}}
<section class="mb-20">
    <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Pencegahan Anemia</h2>

    <div class="max-w-3xl mx-auto space-y-10">

        {{-- STEP 1 --}}
        <div class="flex items-start gap-5">
            <div class="flex flex-col items-center">
                <div class="w-12 h-12 bg-green-600 text-white flex items-center justify-center rounded-full shadow">
                    1
                </div>
                <div class="w-1 h-full bg-green-300 mt-2"></div>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-teal-700">Prioritaskan Zat Besi</h3>
                <p class="text-gray-700 mt-2 leading-relaxed">
                    Konsumsi daging merah, ayam, ikan, sayuran hijau gelap, dan kacang-kacangan  
                    untuk mendukung produksi hemoglobin secara optimal.
                </p>
            </div>
        </div>

        {{-- STEP 2 --}}
        <div class="flex items-start gap-5">
            <div class="flex flex-col items-center">
                <div class="w-12 h-12 bg-yellow-500 text-white flex items-center justify-center rounded-full shadow">
                    2
                </div>
                <div class="w-1 h-full bg-yellow-300 mt-2"></div>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-orange-600">Sertakan Vitamin C</h3>
                <p class="text-gray-700 mt-2 leading-relaxed">
                    Jeruk, stroberi, dan paprika dapat meningkatkan penyerapan zat besi  
                    saat dikonsumsi bersamaan dengan makanan sumber zat besi.
                </p>
            </div>
        </div>

        {{-- STEP 3 --}}
        <div class="flex items-start gap-5">
            <div class="flex flex-col items-center">
                <div class="w-12 h-12 bg-blue-600 text-white flex items-center justify-center rounded-full shadow">
                    3
                </div>
                <div class="w-1 h-full bg-blue-300 mt-2"></div>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-blue-700">Pastikan B12 & Folat</h3>
                <p class="text-gray-700 mt-2 leading-relaxed">
                    Vitamin B12 berasal dari produk hewani dan folat dari sayuran hijau.  
                    Keduanya sangat penting dalam proses pembentukan sel darah merah sehat.
                </p>
            </div>
        </div>

        {{-- STEP 4 --}}
        <div class="flex items-start gap-5">
            <div class="flex flex-col items-center">
                <div class="w-12 h-12 bg-purple-600 text-white flex items-center justify-center rounded-full shadow">
                    4
                </div>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-purple-700">Cek Rutin</h3>
                <p class="text-gray-700 mt-2 leading-relaxed">
                    Lakukan pemeriksaan darah secara berkala, terutama jika Anda berisiko.  
                    Hindari penggunaan suplemen tanpa pengawasan dokter.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- CTA SECTION --}}
<section class="text-center mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-3">Siap mulai screening?</h2>
    <p class="text-gray-600 mb-5">Jawab beberapa pertanyaan untuk mengetahui potensi anemia Anda.</p>

    <a href="{{ route('screening.create') }}" 
       class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-semibold shadow transition">
        Mulai Screening
    </a>
</section>


@endsection