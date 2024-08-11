@extends('layouts.admin.main')

@section('headingheader')
Add Target User
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Target User</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('target_users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="user_target">User Target</label>
                                <input type="text" name="user_target" id="user_target" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
