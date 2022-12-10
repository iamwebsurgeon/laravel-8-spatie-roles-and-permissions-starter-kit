@extends('layouts.app')


@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Update User
                        </div>
                        <div class="card-body">
                            @can('show-user')
                                <a href="{{route('users.index')}}" class="btn btn-dark mb-3">View All</a>
                            @endcan

                            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Name</label>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Email</label>
                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Password</label>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Confirm Password</label>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">User Role</label>
                                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

                                </div>
                                @can('update-user')
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dark mt-3 px-5">Save</button>
                                    </div>
                                @endcan

                            </div>
                            {!! Form::close() !!}

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>





                </div>
            </div>






        </div>
    </div>
@endsection
