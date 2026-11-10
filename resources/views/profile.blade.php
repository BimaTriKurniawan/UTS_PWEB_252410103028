@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<h2>Profile</h2>

<div class="kartu">
    <p><strong>Nama GWEH:</strong> {{ $username }}</p>
    <p><strong>My Impian Film:</strong> {{ $jumlahFilm }}</p>
    <p><strong>Fav Genre:</strong> {{ $genreFavorit }}</p>
</div>
@endsection
