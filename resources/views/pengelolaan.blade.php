@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<h2>Daftar Film</h2>

<div class="tabel-wrap">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Tahun</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($film as $i => $f)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $f['judul'] }}</td>
                    <td>{{ $f['genre'] }}</td>
                    <td>{{ $f['tahun'] }}</td>
                    <td>{{ $f['status'] }}</td>
                    <td><button class="btn btn-kecil" onclick="bukaDetail({{ $i }})">Detail</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<x-modal id="modalDetail" judul="Detail Film">
    <p><strong>Judul:</strong> <span id="d-judul"></span></p>
    <p><strong>Genre:</strong> <span id="d-genre"></span></p>
    <p><strong>Tahun:</strong> <span id="d-tahun"></span></p>
    <p><strong>Status:</strong> <span id="d-status"></span></p>
</x-modal>

<script>
    const daftarFilm = @json($film);

    function bukaDetail(i) {
        const f = daftarFilm[i];
        document.getElementById('d-judul').textContent = f.judul;
        document.getElementById('d-genre').textContent = f.genre;
        document.getElementById('d-tahun').textContent = f.tahun;
        document.getElementById('d-status').textContent = f.status;
        document.getElementById('modalDetail').classList.add('buka');
    }

    function tutupModal(id) {
        document.getElementById(id).classList.remove('buka');
    }
</script>
@endsection
