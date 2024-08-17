

@extends('layouts.admin.main')

@section('headingheader')
Predicted
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Predicted List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th> <!-- Tambahkan kolom judul -->
                                        <th>Target</th>
                                        <th>Proses</th>
                                        <th>Sentiment</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th> <!-- Tambahkan kolom judul -->
                                        <th>Target</th>
                                        <th>Proses</th>
                                        <th>Sentiment</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($predictedItems as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->spiderRaw->judul ?? 'Tidak ada judul' }}
                                            <td>{{ $item->spiderRaw->user_target ?? 'Tidak ada judul' }}
                                            
                                        </td>
                                            <!-- Ambil judul dari relasi -->
                                            <td>{{ $item->proses }}</td>
                                            <td>{{ $item->sentiment }}</td>
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
        max-width: 100px;
        /* Adjust this value to your needs */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Optional: Add some padding to the cells for better visibility */
    table td,
    table th {
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
