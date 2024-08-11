@extends('layouts.admin.main')

@section('headingheader')
Edit Spider Raw
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Spider Raw</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('spider_raw.update', $spiderRaw->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" value="{{ $spiderRaw->judul }}" required>
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="url" name="link" id="link" class="form-control" value="{{ $spiderRaw->link }}" required>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <textarea name="isi" id="isi" class="form-control" required>{{ $spiderRaw->isi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" name="penulis" id="penulis" class="form-control" value="{{ $spiderRaw->penulis }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editor">Editor</label>
                                <input type="text" name="editor" id="editor" class="form-control" value="{{ $spiderRaw->editor }}" required>
                            </div>
                            <div class="form-group">
                                <label for="user_target">User Target</label>
                                <input type="text" name="user_target" id="user_target" class="form-control" value="{{ $spiderRaw->user_target }}" required>
                            </div>
                            <div class="form-group">
                                <label for="proses">Proses</label>
                                <input type="text" name="proses" id="proses" class="form-control" value="{{ $spiderRaw->proses }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sentiment">Sentiment</label>
                                <input type="text" name="sentiment" id="sentiment" class="form-control" value="{{ $spiderRaw->sentiment }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
