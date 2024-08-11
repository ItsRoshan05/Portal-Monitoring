@extends('layouts.admin.main')

@section('headingheader')
Target Users
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Target Users Management</h4>
                        <a href="{{ route('target_users.create') }}" class="btn btn-primary">Add Target User</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Target</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Target</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($targets as $target)
                                    <tr>
                                        <td>{{ $target->id }}</td>
                                        <td>{{ $target->user_target }}</td>
                                        <td>
                                            <a href="{{ route('target_users.show', $target->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('target_users.edit', $target->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('target_users.destroy', $target->id) }}" method="POST" style="display:inline;">
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

@section('js')
<script>
$(document).ready(function () {
    $("#basic-datatables").DataTable({
        "paging": true,
        "searching": true,
        "ordering": true
    });
});
</script>
@endsection
