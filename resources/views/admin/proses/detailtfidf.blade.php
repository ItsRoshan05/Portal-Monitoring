@extends('layouts.admin.main')

@section('headingheader')
Detail Data CSV
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Data CSV</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>term</th>
                                    <td>{{ $row['Term'] }}</td>
                                </tr>
                                <tr>
                                    <th>tf</th>
                                    <td>{{ $row['tf'] }}</td>
                                </tr>
                                <tr>
                                    <th>df</th>
                                    <td>{{ $row['df'] }}</td>
                                </tr>
                                <tr>
                                    <th>idf</th>
                                    <td>{{ $row['idf'] }}</td>
                                </tr>
                                <tr>
                                    <th>tfidf</th>
                                    <td>{{ $row['tfidf'] }}</td>
                                </tr>
                                <tr>
                                    <th>Sentiment</th>
                                    <td>{{ $row['sentiment'] }}</td>
                                </tr>


                            </tbody>
                        </table>
                        <a href="{{ route('metode.tfidf') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
