<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function create() {
        return view('tambahresep',[
            'title' => 'Tambah Resep'
            // 'reseps' => Resep::all()
        ]);
    }

    public function show(Resep $reseps) {
        return view('detailresep', [
            'title' => 'Detail Resep',
            'resep' => $reseps
        ]);
    }
}
