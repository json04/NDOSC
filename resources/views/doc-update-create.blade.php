@extends('layouts.app')

@section('content')
	<div class="main">
		<div class="table-responsive">
			<div class="container" id="container-doc-update">
				<div class="row">
					<div class="col-md-12">
						@include('flash::message')
						<h1 align="center"><strong>Personal Information</strong></h1>
						<table class="mdl-data-table" cellspacing="0" width="100%">
        					<thead>
        						<tr>
        							<th>Last Name</th>
        							<th>First Name</th>
        							<th>Middle Name</th>
        							<th>Age</th>
        							<th>Sex</th>
        							<th>Civil Status</th>
        						</tr>
        					</thead>
        					<tbody align="center">
        						<tr>
        							<td>{{ $retrieves->lastname }}</td>
			                        <td>{{ $retrieves->firstname }}</td>
			                        <td>{{ $retrieves->middlename }}</td>
			                        <td>{{ $retrieves->age }}</td>
			                        <td>{{ $retrieves->sex }}</td>
			                        <td>{{ $retrieves->civilstatus }}</td>
        						</tr>
        					</tbody>
    					</table>
						<br>
    					<table class="mdl-data-table" cellspacing="0" width="100%">
        					<thead>
        						<tr>
        							<th>Address</th>
        							<th>Contact</th>
        							<th>Occupation</th>
        							<th>Consultation Date</th>
        						</tr>
        					</thead>
        					<tbody align="center">
        						<tr>
        							<td>{{ $retrieves->address }}</td>
			                        <td>{{ $retrieves->contact }}</td>
			                        <td>{{ $retrieves->occupation }}</td>
			                        <td><strong>{{ $dates->date }}</strong></td>
        						</tr>
        					</tbody>
    					</table>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-12" align="center">
					<h3 class="title">Clinical Information</h3>
					<br>
				</div>
				<div class="col-md-6">
					<div class="card card-signup">
						<div class="content">
							<h5 class="title">Subjective</h5>
							<p>{!! $subjectives->subjective !!}</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card card-signup">
						<div class="content">
							<h5 class="title">Objective</h5>
							<p>{!! $objectives->objective !!}</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card card-signup">
						<div class="content">
							<h5 class="title">Assessment</h5>
							<p>{!! $assessments->assessment !!}</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card card-signup">
						<div class="content">
							<h5 class="title">Plan</h5>
							<p>{!! $plans->plan !!}</p>
						</div>
					</div>
				</div>
				<div class="col-md-12" align="center">
					<h5 class="title">IMAGES</h5>
				</div>
				<div class="col-md-12 table-responsive">
				@if($images)
					@foreach($images as $image)
						<div class="col-lg-4 col-lg-offset-1 col-md-5" style="margin: 20px;">
							<div class="card-image">
								<img class="img img-raised" src="/uploads/{{ $image->image }}" alt="" width="400" height="300">
							</div>
						</div>
                    @endforeach
				@else
                    <h5>No Image</h5>
                @endif
                </div>
			</div>
		</div>
		<br>
		<!-- SOAP Container -->
		<h3 align="center">Follow-up Consultation</h3>
		<div class="container">
			<form action="/patientupdate/{{ $retrieves->id }}" enctype="multipart/form-data" method="post" id="form-id">
			{{ csrf_field() }}
				<!-- Hidden Area -->
				<div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="patients_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>

	            <div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="photos_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>

	            <div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="subjectives_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>

	            <div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="objectives_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>

	            <div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="assessments_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>

	            <div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="plans_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>

	            <div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="dates_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>
				<!-- End Hidden Area -->

				<div class="row">
					<div class="col-lg-3 col-md-4 col-xs-8" align="center">
						<div class="card card-signup" align="center">
							<div class="content">
								<h5 align="left" class="title">Consultation Date</h5>
								<input type="date" name="date" class="form-control" required/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card card-signup">
							<div class="content">
								<h5 class="title">Subjective Complain</h5>
								<textarea class="form-control" placeholder="Type your information here" name="subjective" rows="10"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card card-signup">
							<div class="content">
								<h5 class="title" align="left">Objective or Findings</h5>
								<textarea class="form-control" placeholder="Type your information here" name="objective" rows="10"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card card-signup">
							<div class="content">
								<h5 class="title" align="left">Assessment</h5>
								<textarea class="form-control" placeholder="Type your information here" name="assessment" rows="10"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card card-signup">
							<div class="content">
								<h5 class="title" align="left">Plan</h5>
								<textarea class="form-control" placeholder="Type your information here" name="plan" rows="10"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-12" align="center">
						<h5 class="title">IMAGES</h5>
						<button class="btn btn-default btn-sm" id="add_field_button">Add image</button>
					</div>
					<div class="col-lg-12 col-lg-offset-0 col-md-6 col-md-offset-3" align="center">
						<div class="input_fields_wrap">
							
							
						</div>
					</div>
					<div class="col-md-12" align="center">
						<button class="btn btn-default" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<!-- End of SOAP Container -->
		<br>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		
		$('.datepicker').datepicker({
			weekStart:1
		});

	</script>
	<script type="text/javascript">
			$(document).ready(function() {
			    var max_fields      = 9; //maximum input boxes allowed
			    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
			    var add_button      = $("#add_field_button"); //Add button ID
			    
			    var x = 1; //initlal text box count
			    $(add_button).click(function(e){ //on add input button click
			        e.preventDefault();
			        if(x < max_fields){ //max input box allowed
			            x++; //text box increment
			            $(wrapper).append('<div class="fileinput fileinput-new text-center" data-provides="fileinput"><div class="fileinput-new thumbnail img-raised" style="max-width:400px; max-height:250px;"><img src="../img/image_placeholder.jpg" alt="..."></div><div class="fileinput-preview fileinput-exists thumbnail img-raised" style="max-width:400px; max-height:250px;"></div><div><span class="btn btn-round btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="images[]" multiple></span></div><a href="#" class="btn btn-round btn-default" id="remove_field">Remove</a></div>&nbsp&nbsp&nbsp&nbsp'); //add input box
			        }
			    });
			    
			    $(wrapper).on("click","#remove_field", function(e){ //user click on remove text
			        e.preventDefault(); $(this).parent('div').remove(); x--;
			    })
			});
	</script>
	<script type="text/javascript">
	$(function(){
	     $("#submit-id").click(function () {
	       $("#submit-id").attr("disabled", true);
	       $('#form-id').submit();
	     });
	   });
	</script>
@endsection