@extends('layouts.app')

@section('content')
<div class="page-header header-filter" id="register-header">
    <div class="container" id="container-header-register">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <form action="{{ url('/register') }}" method="post">
                    {{ csrf_field() }}
                    <div class="card card-signup">
                        <div class="content">
                            <h3 align="center">Registration</h3>
                            <hr>
                            <div class="col-sm-8 col-sm-offset-2" style="text-align: center;">
                                <div class="input-group">
                                    <select class="select form-control" name="account_types_id" required>
                                      <option disabled selected>Choose Account Type</option>
                                      <option value="1">Administrator</option>
                                      <option value="2">Standard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-sm-offset-2">
                                <div class="form-group label-floating">
                                    <label class="control-label">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4 col-sm-offset-2">
                                <div class="form-group label-floating">
                                    <label class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-8 col-sm-offset-2" style="padding-bottom: 20px; padding-top: 10px;" align="center">
                                <button class="btn btn-default" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
