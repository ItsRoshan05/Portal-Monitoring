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
                                    <th>Judul</th>
                                    <td>{{ $row['judul'] }}</td>
                                </tr>
                                <tr>
                                    <th>Aktual</th>
                                    <td>{{ $row['actual'] }}</td>
                                </tr>
                                <tr>
                                    <th>Predicted</th>
                                    <td>{{ $row['sentiment'] }}</td>
                                </tr>


                            </tbody>
                        </table>
                        <a href="{{ route('csv.showxtest') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
