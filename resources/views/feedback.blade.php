@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Saran & Masukkan</h1>
<form action="{{ route('feedback.store') }}" method="post" class="bg-white p-6 rounded shadow">
  @csrf
  <div class="mb-4">
    <label for="name" class="block text-gray-700 mb-2">Nama (opsional)</label>
    <input type="text" name="name" id="name" class="w-full border p-2 rounded" placeholder="Masukkan nama Anda">
  </div>
    <div class="mb-4">
        <label for="message" class="block text-gray-700 mb-2">Masukan atau Saran</label>
        <textarea name="message" id="message" required class="w-full border p-2 rounded" placeholder="Tulis masukan atau saran Anda di sini"></textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Kirim</button>
</form>
@endsection