@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">Screening Risiko Anemia</h1>

<form action="{{ route('screening.store') }}" method="POST"
      class="bg-white p-8 rounded-xl shadow border border-gray-100">
    @csrf

    {{-- IDENTITAS RESPONDEN --}}
    <h2 class="text-xl font-semibold mb-4">Identitas Responden</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
        <input type="text" name="name" placeholder="Nama (opsional)"
               class="border p-3 rounded">

        <select name="gender" class="border p-3 rounded">
            <option value="">Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <input type="number" name="age" placeholder="Umur"
               class="border p-3 rounded">

        <input type="text" name="occupation" placeholder="Pekerjaan"
               class="border p-3 rounded">

        <input type="text" name="education" placeholder="Pendidikan Terakhir"
               class="border p-3 rounded">

        <input type="number" step="0.1" name="weight" placeholder="Berat Badan (kg)"
               class="border p-3 rounded">

        <input type="number" step="0.1" name="height" placeholder="Tinggi Badan (cm)"
               class="border p-3 rounded">
    </div>

    {{-- PERTANYAAN SCREENING --}}
    <h2 class="text-xl font-semibold mb-6">Pertanyaan Screening</h2>

    {{-- TEMPLATE OPSI --}}
    @php
        function opsi($name, $texts) {
            foreach ($texts as $value => $text) {
                echo "
                <label class='flex items-center gap-3 py-2 cursor-pointer'>
                    <input type='radio' name='{$name}' value='{$value}' required class='scale-125'>
                    <span>{$text}</span>
                </label>";
            }
        }
    @endphp

    {{-- Q1 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            1. Apakah Anda mengalami demam, batuk, pilek, atau gejala infeksi dalam 14 hari terakhir?
        </p>
        @php opsi('q1', [
            0 => 'Tidak ada gejala',
            1 => 'Gejala ringan (1–2 gejala)',
            2 => 'Gejala jelas (lebih dari 2 gejala)'
        ]) @endphp
    </div>

    {{-- Q2 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            2. Apakah Anda sering merasa lemas atau mudah lelah?
        </p>
        @php opsi('q2', [
            0 => 'Tidak pernah',
            1 => 'Kadang-kadang',
            2 => 'Sering dan terasa mengganggu aktivitas'
        ]) @endphp
    </div>

    {{-- Q3 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            3. Apakah Anda sering pusing saat berdiri atau beraktivitas ringan?
        </p>
        @php opsi('q3', [
            0 => 'Tidak pernah',
            1 => 'Sesekali',
            2 => 'Sering atau hampir setiap hari'
        ]) @endphp
    </div>

    {{-- Q4 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            4. Berapa kali Anda mengonsumsi sayur dan protein dalam 1 minggu terakhir?
        </p>
        @php opsi('q4', [
            0 => 'Lebih dari 5 hari dalam seminggu',
            1 => '3–4 hari dalam seminggu',
            2 => 'Kurang dari 2 hari dalam seminggu'
        ]) @endphp
    </div>

    {{-- Q5 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            5. Apakah Anda rutin mengonsumsi suplemen atau tablet tambah darah?
        </p>
        @php opsi('q5', [
            0 => 'Rutin',
            1 => 'Kadang-kadang',
            2 => 'Tidak pernah'
        ]) @endphp
    </div>

    {{-- Q6 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            6. Apakah Anda merokok atau sering terpapar asap rokok?
        </p>
        @php opsi('q6', [
            0 => 'Tidak',
            1 => 'Terpapar sesekali',
            2 => 'Merokok atau sering terpapar'
        ]) @endphp
    </div>

    {{-- Q7 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            7. Apakah Anda sering stres, cemas, atau mengalami gangguan tidur?
        </p>
        @php opsi('q7', [
            0 => 'Tidak pernah',
            1 => 'Kadang-kadang',
            2 => 'Sering dan mengganggu aktivitas'
        ]) @endphp
    </div>

    {{-- Q8 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            8. Apakah Anda mengonsumsi minuman manis atau minuman energi lebih dari dua kali dalam seminggu?
        </p>
        @php opsi('q8', [
            0 => 'Tidak pernah atau jarang',
            1 => '1–2 kali dalam seminggu',
            2 => 'Lebih dari 2 kali dalam seminggu'
        ]) @endphp
    </div>

    {{-- Q9 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            9. Apakah Anda memiliki penyakit kronis (asma, hipertensi, diabetes, dan lain-lain)?
        </p>
        @php opsi('q9', [
            0 => 'Tidak ada',
            1 => 'Ada dan terkontrol',
            2 => 'Ada dan tidak terkontrol'
        ]) @endphp
    </div>

    {{-- Q10 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            10. Apakah kulit, bibir, atau telapak tangan Anda tampak pucat?
        </p>
        @php opsi('q10', [
            0 => 'Tidak',
            1 => 'Sedikit pucat',
            2 => 'Sangat pucat'
        ]) @endphp
    </div>

    {{-- Q11 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            11. Apakah Anda mengalami jantung berdebar?
        </p>
        @php opsi('q11', [
            0 => 'Tidak',
            1 => 'Kadang-kadang',
            2 => 'Sering'
        ]) @endphp
    </div>

    {{-- Q12 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            12. Apakah ada riwayat anemia dalam keluarga?
        </p>
        @php opsi('q12', [
            0 => 'Tidak ada',
            1 => 'Ada tetapi tidak pasti',
            2 => 'Ada dan sudah pasti'
        ]) @endphp
    </div>

    {{-- Q13 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            13. Apakah Anda pernah menerima transfusi darah?
        </p>
        @php opsi('q13', [
            0 => 'Tidak pernah',
            1 => 'Pernah satu kali',
            2 => 'Pernah lebih dari satu kali'
        ]) @endphp
    </div>

    {{-- Q14 --}}
    <div class="mb-6">
        <p class="font-medium text-lg mb-2">
            14. Seberapa sering Anda mengonsumsi minuman berkafein seperti kopi atau teh?
        </p>
        @php opsi('q14', [
            0 => 'Kurang dari satu gelas per hari',
            1 => 'Satu sampai dua gelas per hari',
            2 => 'Lebih dari dua gelas per hari'
        ]) @endphp
    </div>

    {{-- Q15 --}}
    <div class="mb-8">
        <p class="font-medium text-lg mb-2">
            15. Apakah Anda pernah didiagnosis mengalami kekurangan gizi seperti zinc, folat, atau vitamin B12?
        </p>
        @php opsi('q15', [
            0 => 'Tidak pernah',
            1 => 'Tidak yakin',
            2 => 'Pernah'
        ]) @endphp
    </div>

    <button type="submit"
        class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-semibold transition hover:scale-105 shadow">
        Kirim Screening
    </button>

</form>

@endsection