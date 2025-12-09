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
        <img src="https://img.freepik.com/free-vector/healthcare-medical-concept-illustration_114360-2276.jpg" 
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
    </div>
</section>



{{-- ICON FEATURES --}}
<section class="mb-16">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Mengapa Perlu Screening?</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Card 1 --}}
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100 text-center">
            <div class="text-teal-600 mb-3">
                <!-- Icon Health -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8c-1.657 0-3 1.343-3 3 0 3 3 5 3 5s3-2 3-5c0-1.657-1.343-3-3-3z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 2C6.477 2 2 6.477 2 12h2a8 8 0 1116 0h2c0-5.523-4.477-10-10-10z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Deteksi Dini</h3>
            <p class="text-gray-600 text-sm">
                Anemia sering tidak disadari hingga sudah mengganggu aktivitas harian.
            </p>
        </div>

        {{-- Card 2 --}}
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100 text-center">
            <div class="text-teal-600 mb-3">
                <!-- Icon Nutrition -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6l4 2m6-2c0 6.627-5.373 12-12 12S0 20.627 0 14 5.373 2 12 2s12 5.373 12 12z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Panduan Nutrisi</h3>
            <p class="text-gray-600 text-sm">
                Ketahui makanan apa yang meningkatkan kadar hemoglobin Anda.
            </p>
        </div>

        {{-- Card 3 --}}
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition border border-gray-100 text-center">
            <div class="text-teal-600 mb-3">
                <!-- Icon Heart Health -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Menjaga Kesehatan</h3>
            <p class="text-gray-600 text-sm">
                Screening membantu Anda mengetahui apakah tubuh butuh perhatian lebih.
            </p>
        </div>

    </div>
</section>


{{-- CTA SECTION --}}
<section class="text-center mb-16">
    <h2 class="text-2xl font-bold text-gray-800 mb-3">Siap mulai screening?</h2>
    <p class="text-gray-600 mb-5">Jawab beberapa pertanyaan untuk mengetahui potensi anemia Anda.</p>

    <a href="{{ route('screening.create') }}" 
       class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-3 rounded-lg font-semibold shadow transition">
        Mulai Screening
    </a>
</section>

@endsection