@extends('layouts.app')

@section('content')
<div class="page-header header-filter" id="index-header">
    <div class="container" id="container-header-index">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <form action="{{ url('/login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="card card-signup">
                        <div class="content">
                            <h3 align="center">Login</h3>
                            <hr>
                            <div class="col-sm-4 col-sm-offset-2">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="input-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                    @if($errors->has('username'))
                                    <strong>{{ $errors->first('username') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    @if($errors->has('password'))
                                    <strong>{{ $errors->first('password') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-8 col-sm-offset-2" style="padding-bottom: 20px; padding-top: 10px;" align="center">
                                <button class="btn btn-default" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
