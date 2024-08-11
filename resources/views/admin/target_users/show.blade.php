@extends('layouts.admin.main')

@section('headingheader')
View Target User
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">View Target User</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $TargetUser->id }}</p>
                        <p><strong>User Target:</strong> {{ $TargetUser->user_target }}</p>
                        <a href="{{ route('target_users.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
