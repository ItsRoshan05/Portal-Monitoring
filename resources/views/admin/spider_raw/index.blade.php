@extends('layouts.admin.main')

@section('headingheader')
Spider Raw Management
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Spider Raw List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Link</th>
                                        <th>Penulis</th>
                                        <th>Target</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Link</th>
                                        <th>Penulis</th>
                                        <th>Target</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($spiders as $spider)
                                    <tr>
                                        <td class="text-truncate">{{ $spider->judul }}</td>
                                        <td class="text-truncate"><a href="{{ $spider->link }}" target="_blank">{{ $spider->link }}</a></td>
                                        <td class="text-truncate">{{ $spider->penulis }}</td>
                                        <td>{{ $spider->user_target }}</td>
                        
                                        <td>
                                            <a href="{{ route('spider_raw.show', $spider->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('spider_raw.edit', $spider->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('spider_raw.destroy', $spider->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
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
