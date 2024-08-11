@extends('layouts.admin.main')

@section('headingheader')
Edit Target User
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Target User</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('target_users.update', $TargetUser->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="user_target">User Target</label>
                                <input type="text" name="user_target" id="user_target" class="form-control" value="{{ $TargetUser->user_target }}" required>
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
