@extends('layouts.app')

@section('content')
	<div class="main">
		<div class="table-responsive">
			<div class="container" id="container-doc-update">
				<div class="row">
					<div class="col-md-12">
						<h3 class="title" align="center">Personal Information</h3>
						<table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        					<thead style="background: white;">
        						<tr>
        							<th>Last Name</th>
        							<th>First Name</th>
        							<th>Middle Name</th>
        							<th>Age</th>
        							<th>Sex</th>
        							<th>Civil Status</th>
        						</tr>
        					</thead>
        					<tbody align="left">
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
    					<table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        					<thead style="background: white;">
        						<tr>
        							<th>Address</th>
        							<th>Contact</th>
        							<th>Occupation</th>
        						</tr>
        					</thead>
        					<tbody align="left">
        						<tr>
        							<td>{{ $retrieves->address }}</td>
			                        <td>{{ $retrieves->contact }}</td>
			                        <td>{{ $retrieves->occupation }}</td>
        						</tr>
        					</tbody>
    					</table>
					</div>
				</div>
			</div>
		</div>
		<br>
		<!-- SOAP Container -->
		<h3 class="title" align="center">New Consultation</h3>
		<div class="container">
			<form action="/proceed/{{ $retrieves->id }}" enctype="multipart/form-data" method="post" id="form-id">
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

	             <div class="form-group" hidden>
	              <label for="inputModel" class="col-lg-2 control-label">Patients ID</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputEmail" name="photos_id" value="{{ $retrieves->id }}">
	              </div>
	            </div>
				<!-- End Hidden Area -->

				<div class="row">
					<div class="col-lg-3 col-md-4 col-xs-8" align="center">
						<div class="card card-signup" align="center">
							<div class="content">
								<h5 align="left" class="title">Consultation Date</h5>
								<input class="form-control" type="date" name="date" required/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card card-signup">
							<div class="content">
								<h5 class="title">Subjective</h5>
								<textarea class="form-control" id="subjectiveText" placeholder="Type your information here" name="subjective" rows="10"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card card-signup">
							<div class="content">
								<h5 class="title" align="left">Objective</h5>
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
			        console.log('test');	
			    });
			    
			    $(wrapper).on("click","#remove_field", function(e){ //user click on remove text
			        e.preventDefault(); $(this).parent('div').remove(); x--;
			    })
			});
	</script>

	{{-- <script type="text/javascript">
		$("#add_field_button").ready(function(){
			console.log('test');
		});
	</script> --}}

	<script type="text/javascript">
		$("subjectiveText").ready(function(){
			var convert = this.val;
			convert.replace('text', 'text');
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