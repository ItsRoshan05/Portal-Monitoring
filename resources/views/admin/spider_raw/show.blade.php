@extends('layouts.admin.main')

@section('headingheader')
Detail Spider Raw
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Detail Spider Raw</h4>
                        <a href="{{ route('spider_raw.edit', $spiderRaw->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul"><strong>Judul:</strong></label>
                                    <p>{{ $spiderRaw->judul }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="link"><strong>Link:</strong></label>
                                    <p><a href="{{ $spiderRaw->link }}" target="_blank">{{ $spiderRaw->link }}</a></p>
                                </div>
                                <div class="form-group">
                                    <label for="penulis"><strong>Penulis:</strong></label>
                                    <p>{{ $spiderRaw->penulis }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="editor"><strong>Editor:</strong></label>
                                    <p>{{ $spiderRaw->editor }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="user_target"><strong>User Target:</strong></label>
                                    <p>{{ $spiderRaw->user_target }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="proses"><strong>Proses:</strong></label>
                                    <p>{{ $spiderRaw->proses }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="sentiment"><strong>Sentiment:</strong></label>
                                    <p>{{ $spiderRaw->sentiment }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="isi"><strong>Isi:</strong></label>
                                    <p>{{ $spiderRaw->isi }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('spider_raw.index') }}" class="btn btn-secondary">Back</a>
                            <form action="{{ route('spider_raw.destroy', $spiderRaw->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .card-header {
        background-color: #f8f9fa;
    }
    .form-group p {
        margin-bottom: 0;
    }
    .btn {
        font-size: 14px;
        padding: 8px 16px;
    }
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }
    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>
@endsection
