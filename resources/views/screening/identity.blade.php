@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6" data-aos="fade-right">Identitas Responden</h1>

<form action="{{ route('screening.storeIdentity') }}" method="POST"
      class="bg-white p-8 rounded-xl shadow border" data-aos="fade-up">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <input type="text" name="name" placeholder="Nama" required class="border p-3 rounded">

        <select name="gender" required class="border p-3 rounded">
            <option value="">Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <input type="number" name="age" required placeholder="Umur" class="border p-3 rounded">

        <input type="text" name="occupation" placeholder="Pekerjaan" required class="border p-3 rounded">

        <input type="text" name="education" placeholder="Pendidikan Terakhir" required class="border p-3 rounded">
        
        <input type="number" step="0.1" name="weight"
            placeholder="Berat Badan (kg)"
            class="border p-3 rounded" required>

        <input type="number" step="0.1" name="height"
            placeholder="Tinggi Badan (cm)"
            class="border p-3 rounded" required>
    </div>

    <button class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold">
        Lanjutkan ke Pertanyaan →
    </button>
</form>
@endsection