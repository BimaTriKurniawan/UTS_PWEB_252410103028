@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2>Yahooo kawan, {{ $username }}!</h2>
<p>Ini adalah jumlah film mu selama ini</p>

<div class="grid">
    <div class="kartu"><h3>{{ $total }}</h3><p>Total film</p></div>
    <div class="kartu"><h3>{{ $sudah }}</h3><p>Sudah ditonton</p></div>
    <div class="kartu"><h3>{{ $belum }}</h3><p>Belum ditonton</p></div>
</div>
@endsection
