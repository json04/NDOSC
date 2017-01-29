@extends('layouts.app')

@section('content')
<div class="main">
    <div class="container" id="container-home">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @include('flash::message')
                <form action="/create" method="post" id="form-id">
                    {{ csrf_field() }}
                    <div class="card card-signup">
                        <div class="content">
                        <h3 class="title" align="center">Personal Information</h3>
                            <hr>
                            <div class="col-sm-3 col-sm-offset-2">
                                <div class="form-group label-floating">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">First Name</label>
                                    <input type="text" name="firstname" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Middle Name  (Optional)</label>
                                    <input type="text" name="middlename" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3 col-sm-offset-2">
                                <div class="form-group label-floating">
                                    <label class="control-label">Age</label>
                                    <input type="text" name="age" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <select class="select form-control" name="sex" required>
                                  <option disabled selected>Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="select form-control" name="civilstatus" required>
                                  <option disabled selected>Civil Status</option>
                                  <option value="Child">Child</option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Separated">Separated</option>
                                  <option value="Divorced">Divorced</option>
                                  <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-sm-offset-2">
                                <div class="form-group label-floating">
                                    <label class="control-label">Address</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Contact Number</label>
                                    <input type="text" name="contact" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Occupation</label>
                                    <input type="text" name="occupation" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-8 col-sm-offset-2" style="padding-bottom: 20px; padding-top: 10px;" align="center">
                                <button class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<!-- <script type="text/javascript">
   $(function(){
     $(".btn").click(function () {
       $(".btn").attr("disabled", true);
       $('#form-id').submit();
     });
   });
</script> -->

<script>
$('div.alert').not('.alert-important').delay(10000).fadeOut(350);
</script>
@endsection