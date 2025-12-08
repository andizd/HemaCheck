@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-3">Selamat datang di Screening Anemia</h1>

<div class="bg-white p-6 rounded shadow">
  <h2 class="text-xl font-semibold mb-2">Apa itu Anemia?</h2>
  <p>Anemia adalah kondisi ketika tubuh kekurangan sel darah merah atau hemoglobin sehingga oksigen tidak tersalurkan dengan optimal.</p>

  <h3 class="mt-4 font-semibold">Pencegahan</h3>
  <ul class="list-disc ml-5">
    <li>Prioritaskan makanan kaya zat besi (daging, sayuran hijau)</li>
    <li>Gabungkan dengan sumber vitamin C</li>
    <li>Periksa darah secara rutin jika berisiko</li>
  </ul>

  <a href="{{ route('screening.create') }}" class="inline-block mt-4 bg-red-600 text-white px-4 py-2 rounded">Mulai Screening</a>
</div>
@endsection