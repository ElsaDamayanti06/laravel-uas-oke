@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('jadwal.index') }}" class="btn btn-secondary">
            Kembali</a>
    </div>
    <form action="{{ route('jadwal.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Dosen</label>
            <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId"
                placeholder="Posisi" value="{{ $data->judul }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control form-control-sm" name="name" id="name"
                aria-describedby="helpId" placeholder="Mata Kuliah" value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Kelas</label>
            <input type="text" class="form-control form-control-sm" name="info1" id="info1"
                aria-describedby="helpId" placeholder="Kelas" value="{{ $data->info1 }}">
        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Hari</label>
            <input type="text" class="form-control form-control-sm" name="info2" id="info2"
                aria-describedby="helpId" placeholder="Hari" value="{{ Session::get('info2') }}">
        </div>
        <div class="mb-3">
            <label for="info3" class="form-label">Jam Mulai</label>
            <input type="text" class="form-control form-control-sm" name="info3" id="info3"
                aria-describedby="helpId" placeholder="Jam Mulai" value="{{ Session::get('info3') }}">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai"
                        placeholder="dd/mm/yy" value="{{ $data->tgl_mulai_indo }}"></div>
                {{-- <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir"
                        placeholder="dd/mm/yy" value="{{ $data->tgl_akhir }}"></div>
            </div> --}}
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control summernote" rows="5" name="isi">{{ Session::get('isi') }}</textarea>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
