<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ResepController extends Controller
{
    public function create(User $users) {
        return view('tambahresep',[
            'title' => 'Tambah Resep',
            'user' => $users
        ]);
    }

    public function store(Request $request) {
        // dd($request->all());
        // dd($request->except('_token', 'submit'));
        Resep::create($request->except(['_token', 'submit']));
        return redirect('/home');
    }

    public function show(Resep $reseps) {
        return view('detailresep', [
            'title' => 'Detail Resep',
            'resep' => $reseps
        ]);
    }
}
