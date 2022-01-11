@extends('layouts.app')


@section('content')
    <div class="page-wrapper">
        <div class="page-content">
<div class="row justify-content-center">
    <div class="col-lg-9 margin-tb">
        <div class="card">
            <div class="card-header">Show Role</div>
            <div class="card-body">
                @can('show role')
                    <a class="btn btn-dark mb-3" href="{{ route('roles.index') }}"> Back</a>
                @endcan
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <span class="badge bg-success">{{ $v->name }},</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



        </div>
    </div>
@endsection