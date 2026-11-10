@props(['id', 'judul'])

<div class="modal" id="{{ $id }}">
    <div class="modal-isi">
        <div class="modal-kepala">
            <h3>{{ $judul }}</h3>
            <button type="button" class="tutup" onclick="tutupModal('{{ $id }}')">&times;</button>
        </div>
        <div class="modal-badan">
            {{ $slot }}
        </div>
    </div>
</div>
