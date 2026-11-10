@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="kartu kartu-login">
    <h2>Masuk yak brooo</h2>
    <p>Masukkan username untuk melihat list film yang ingin ditonton.</p>

    <form action="{{ route('login.proses') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Kamu mau dipanggil apa">
        @error('username')
            <small class="error">{{ $message }}</small>
        @enderror

        <button type="submit" class="btn">Masuk</button>
    </form>
</div>
@endsection
