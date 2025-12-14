@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto px-10">

    <h1 class="text-2xl font-bold mb-6 text-center" data-aos="fade-down">
        Hasil Screening Risiko Anemia
    </h1>

    {{-- KOTAK HASIL --}}
    <div class="p-8 rounded-xl shadow border text-center
                @if($background === 'green') bg-green-100
                @elseif($background === 'yellow') bg-yellow-100
                @else bg-red-100
                @endif" data-aos="fade-down" data-aos-delay="100">

        <div class="mb-4">
            <span class="inline-block px-6 py-2 rounded-full text-white
                @if($color === 'green') bg-green-600
                @elseif($color === 'yellow') bg-yellow-500
                @else bg-red-600
                @endif
            ">
                Risiko {{ $risk }}
            </span>
        </div>

        <p class="text-lg font-semibold mb-2">
            {{ $message }}
        </p>

        <p class="text-gray-600">
            {{ $advice }}
        </p>
    </div>

    {{-- RINGKASAN RESPONDEN --}}
    <div class="bg-white p-6 rounded-xl shadow border mt-8" data-aos="fade-down" data-aos-delay="200">
        <h2 class="text-xl font-semibold mb-4">Ringkasan Responden</h2>

        <ul class="space-y-2 text-gray-700">
            <li><strong>Nama:</strong> {{ $screening->respondent->name }}</li>
            <li><strong>Jenis Kelamin:</strong> {{ $screening->respondent->gender }}</li>
            <li><strong>Umur:</strong> {{ $screening->respondent->age }} tahun</li>

            @if($screening->respondent->occupation)
                <li><strong>Pekerjaan:</strong> {{ $screening->respondent->occupation }}</li>
            @endif

            @if($screening->respondent->education)
                <li><strong>Pendidikan Terakhir:</strong> {{ $screening->respondent->education }}</li>
            @endif
        </ul>
    </div>

    {{-- CATATAN PENTING --}}
    <div class="mt-8 bg-blue-50 border border-blue-200 p-5 rounded-xl">
        <p class="text-blue-800 text-sm">
            ⚠️ <strong>Catatan:</strong>  
            Hasil ini bersifat <em>skrining awal</em> dan bukan diagnosis medis.
            Untuk kepastian, silakan lakukan pemeriksaan darah (Hb) di fasilitas kesehatan.
        </p>
    </div>

    {{-- TOMBOL AKSI --}}
    <div class="text-center mt-10 space-x-4">
        <a href="{{ route('screening.identity') }}"
           class="bg-gray-200 px-6 py-3 rounded-lg font-semibold">
            Screening Ulang
        </a>

        <a href="{{ route('home') }}"
           class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold">
            Kembali ke Beranda
        </a>
    </div>

</div>

@endsection