<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screening;
use App\models\Respondent;

class ScreeningController extends Controller
{
    public function create(){
        return view('screening.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Laki-Laki,Perempuan',
            'age' => 'nullable|integer|min:0|max:120',
            // validate q1..q15 numeric 0-2
        ]);

        for ($i=1; $i<=15; $i++) {
            $request->validate(["q$i" => 'required|integer|min:0|max:2']);
        }

        $resp = Respondent::create([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'occupation' => $request->input('occupation'),
            'education' => $request->input('education'),
            'weight' => $request->input('weight'),
            'height' => $request->input('height'),
        ]);

        $total = 0;
        $data = ['respondent_id' => $resp->id];
        for ($i=1; $i<=15; $i++) {
            $val = (int) $request->input("q$i", 0);
            $data["q$i"] = $val;
            $total += $val;
        }

        if ($total <= 6) $kategori = 'Rendah';
        elseif ($total <= 13) $kategori = 'Sedang';
        else $kategori = 'Tinggi';

        $data['total_score'] = $total;
        $data['kategori'] = $kategori;

        $screening = Screening::create($data);

        // redirect ke halaman hasil (atau tampilkan langsung)
        return redirect()->route('screening.result', $screening->id);
    }

    public function result(Screening $screening){
        return view('screening.result', compact('screening'));
    }
}
