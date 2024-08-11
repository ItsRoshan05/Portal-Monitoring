@extends('layouts.admin.main')

@section('headingheader')
User Details
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <input type="text" class="form-control" id="level" value="{{ $user->level }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="created_at">Created At</label>
                                    <input type="text" class="form-control" id="created_at" value="{{ $user->created_at->format('d M Y H:i:s') }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="updated_at">Updated At</label>
                                    <input type="text" class="form-control" id="updated_at" value="{{ $user->updated_at->format('d M Y H:i:s') }}" readonly>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit User</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
