@extends('layouts.admin.main')

@section('headingheader')
Data Xtest
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Xtest</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Sentiment</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                         <th>Judul</th>
                                        <th>Sentiment</th>

                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($data as $index => $row)
                                    <tr>
                                        <td class="text-truncate">{{ $row['judul'] }}</td>
                                        <td class="text-truncate">{{ $row['sentiment'] }}</td>
                                        <td>
                                            <a href="{{ route('csv.showDetailxtrain', $index) }}" class="btn btn-info btn-sm">View</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    .text-truncate {
        max-width: 100px; /* Adjust this value to your needs */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    /* Optional: Add some padding to the cells for better visibility */
    table td, table th {
        padding: 8px 12px;
    }
</style>
@endsection

@section('js')
<script>
$(document).ready(function () {
    $("#basic-datatables").DataTable();
});
</script>
@endsection
