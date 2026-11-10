<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function dataFilm()
    {
        return [
            ['judul' => 'Interstellar', 'genre' => 'Sci-Fi', 'tahun' => 2014, 'status' => 'Sudah ditonton'],
            ['judul' => 'Parasite', 'genre' => 'Thriller', 'tahun' => 2019, 'status' => 'Belum ditonton'],
            ['judul' => 'Spirited Away', 'genre' => 'Animasi', 'tahun' => 2001, 'status' => 'Belum ditonton'],
            ['judul' => 'Godzilla', 'genre' => 'Action', 'tahun' => 2014, 'status' => 'Sudah ditonton'],
            ['judul' => 'Dune', 'genre' => 'Sci-Fi', 'tahun' => 2021, 'status' => 'Belum ditonton'],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
        ]);

        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login');
        }

        $film = $this->dataFilm();
        $total = count($film);
        $sudah = count(array_filter($film, fn($f) => $f['status'] === 'Sudah ditonton'));

        return view('dashboard', [
            'username' => $username,
            'total' => $total,
            'sudah' => $sudah,
            'belum' => $total - $sudah,
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login');
        }

        return view('pengelolaan', [
            'username' => $username,
            'film' => $this->dataFilm(),
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login');
        }

        return view('profile', [
            'username' => $username,
            'jumlahFilm' => count($this->dataFilm()),
            'genreFavorit' => 'action',
        ]);
    }
}
