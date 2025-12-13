@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Hasil Screening</h1>

<div class="bg-white p-6 rounded shadow">
  <p><strong>Nama:</strong> {{ $screening->respondent->name ?? '-' }}</p>
  <p><strong>Total Skor:</strong> {{ $screening->total_score }}</p>
  <p><strong>Kategori Risiko:</strong> <span class="font-semibold">{{ $screening->kategori }}</span></p>

  <div class="mt-4">
    @if($screening->kategori === 'Rendah')
      <p>Kondisi cukup baik. Lanjutkan perilaku sehat.</p>
    @elseif($screening->kategori === 'Sedang')
      <p>Ada faktor risiko, perlu pemantauan. Pertimbangkan perubahan pola makan dan cek berkala.</p>
    @else
      <p>Risiko tinggi. Disarankan konsultasi ke tenaga kesehatan dan pemeriksaan darah (Hb).</p>
    @endif
  </div>
</div>

<a href="{{ route('screening.create') }}" class="inline-block mt-4 text-sm text-blue-600">Isi screening lain</a>
@endsection
