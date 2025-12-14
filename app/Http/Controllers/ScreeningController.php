<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screening;
use App\models\Respondent;
use Google\Client;
use Google\Service\Sheets as GoogleSheets;
use Revolution\Google\Sheets\Facades\Sheets;

class ScreeningController extends Controller
{
    public function identity(){
        return view('screening.identity');
    }

    public function storeIdentity(Request $request)
    {
        $request->validate([
            'gender' => 'required',
            'age' => 'required|numeric',
        ]);

        session(['respondent' => $request->all()]);

        return redirect()->route('screening.questions');
    }

    public function questions()
    {
        if (!session()->has('respondent')) {
            return redirect()->route('screening.identity');
        }

        return view('screening.questions');
    }

    public function store(Request $request)
    {
        
        $respondentData = session('respondent');

        if (!$respondentData) {
            return redirect()
                ->route('screening.identity')
                ->with('error', 'Silakan isi identitas terlebih dahulu.');
        }
        // simpan ke tabel respondents
        $respondent = Respondent::create([
            'name' => $respondentData['name'] ?? null,
            'gender' => $respondentData['gender'],
            'age' => $respondentData['age'],
            'occupation' => $respondentData['occupation'] ?? null,
            'education' => $respondentData['education'] ?? null,
            'weight' => $respondentData['weight'] ?? null,
            'height' => $respondentData['height'] ?? null,
        ]);

        // simpan jawaban screening
        $screening = Screening::create([
            'respondent_id' => $respondent->id,
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
            'q9' => $request->q9,
            'q10' => $request->q10,
            'q11' => $request->q11,
            'q12' => $request->q12,
            'q13' => $request->q13,
            'q14' => $request->q14,
            'q15' => $request->q15,
        ]);

        $totalScore =
            $screening->q1 + $screening->q2 + $screening->q3 +
            $screening->q4 + $screening->q5 + $screening->q6 +
            $screening->q7 + $screening->q8 + $screening->q9 +
            $screening->q10 + $screening->q11 + $screening->q12 +
            $screening->q13 + $screening->q14 + $screening->q15;

        $risk = $totalScore <= 10 ? 'Rendah' : ($totalScore <= 20 ? 'Sedang' : 'Tinggi');

        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/credentials.json'));
        $client->setScopes([GoogleSheets::SPREADSHEETS]);
        $client->useApplicationDefaultCredentials();

        $service = new GoogleSheets($client);

        // 🔥 INI KUNCI UTAMA
        Sheets::setService($service);

        Sheets::spreadsheet('18Jr9KC1WevkxbSOlU9rMPQppvjP__h_SW54ZXomhIh8')
            ->sheet('Sheet1')
            ->append([
                [
                    now()->format('Y-m-d H:i'),
                    $respondent->name,
                    $respondent->gender,
                    $respondent->age,
                    $respondent->weight,
                    $respondent->height,
                    $totalScore,
                    $risk,
                    $screening->q1,
                    $screening->q2,
                    $screening->q3,
                    $screening->q4,
                    $screening->q5,
                    $screening->q6,
                    $screening->q7,
                    $screening->q8,
                    $screening->q9,
                    $screening->q10,
                    $screening->q11,
                    $screening->q12,
                    $screening->q13,
                    $screening->q14,
                    $screening->q15,
                ]
            ]);

        session()->forget('respondent');

        return redirect()->route('screening.result', $screening->id);
    }

    public function result(Screening $screening)
    {
        // hitung total skor
        $totalScore =
            $screening->q1 + $screening->q2 + $screening->q3 +
            $screening->q4 + $screening->q5 + $screening->q6 +
            $screening->q7 + $screening->q8 + $screening->q9 +
            $screening->q10 + $screening->q11 + $screening->q12 +
            $screening->q13 + $screening->q14 + $screening->q15;

        // klasifikasi risiko (bisa disesuaikan)
        if ($totalScore <= 6) {
            $risk = 'Rendah';
            $color = 'green';
            $message = 'Kondisi cukup baik, lanjutkan perilaku sehat.';
            $advice = 'Tetap jaga pola makan sehat dan lakukan pemeriksaan rutin.';
            $background = 'green';
        } elseif ($totalScore >= 7 && $totalScore <= 13) {
            $risk = 'Sedang';
            $color = 'yellow';
            $message = 'Ada faktor risiko, perlu pemantauan.';
            $advice = 'Perhatikan asupan zat besi dan vitamin, serta pertimbangkan konsultasi tenaga kesehatan.';
            $background = 'yellow';
        } else {
            $risk = 'Tinggi';
            $color = 'red';
            $message = 'Risiko anemia Anda tergolong tinggi.';
            $advice = 'Sangat disarankan untuk memeriksakan diri ke fasilitas kesehatan terdekat.';
            $background = 'red';
        }

        return view('screening.result', compact(
            'screening',
            'totalScore',
            'risk',
            'color',
            'message',
            'advice',
            'background'
        ));
    }

}
