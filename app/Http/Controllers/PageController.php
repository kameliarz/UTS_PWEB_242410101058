<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function prosesLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        if(!$username){
            return back()->with('error', 'Username wajib diisi');
        }

        if(!$password){
            return back()->with('error', 'Password wajib diisi');
        }

        session(['username' => $username]);

        return redirect('/dashboard');
    }

    public function dashboard(){
        if (!session('username')) {
            return redirect('/');
        }

        return view('dashboard');
    }

    public function pengelolaan(){
        if (!session('username')) {
            return redirect('/');
        }

        $menu = [
            [
                'nama' => 'Nasi Gila',
                'kategori' => 'Makanan',
                'harga' => 10000,
                'stok' => 15,
            ],
            [
                'nama' => 'Es Teh',
                'kategori' => 'Minuman',
                'harga' => 4000,
                'stok' => 30,
            ],
            [
                'nama' => 'Mie Ayam',
                'kategori' => 'Makanan',
                'harga' => 12000,
                'stok' => 10,
            ],
            [
                'nama' => 'Bakso',
                'kategori' => 'Makanan',
                'harga' => 12000,
                'stok' => 14,
            ],
            [
                'nama' => 'Nasi Rawon',
                'kategori' => 'Makanan',
                'harga' => 11000,
                'stok' => 18,
            ],
            [
                'nama' => 'Tahu Kocek',
                'kategori' => 'Snack',
                'harga' => 5000,
                'stok' => 50,
            ],
            [
                'nama' => 'Jus Mangga',
                'kategori' => 'Minuman',
                'harga' => 7000,
                'stok' => 33,
            ],
            [
                'nama' => 'Ayam Geprek',
                'kategori' => 'Makanan',
                'harga' => 12000,
                'stok' => 47,
            ],
        ];

        return view('pengelolaan', compact('menu'));
    }

    public function info(){
        if (!session('username')) {
            return redirect('/');
        }

        return view('info');
    }

    public function profile(){
        if (!session('username')) {
            return redirect('/');
        }

        return view('profile');
    }


    public function logout(){
        session()->forget('username');
        return redirect('/');
    }
}
