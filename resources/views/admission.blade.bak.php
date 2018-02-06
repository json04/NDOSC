@extends('layouts.app')

@section('content')
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="card card-signup" style="margin-top: 20px;">
						<div class="content" style="margin: 1in;">
							<div class="row">
								<form action="/admissionPrint/{{$dates->id}}" method="post">
								{{ csrf_field() }}
									<p style="margin-bottom: 0px;">Name: {{$patients->firstname}} {{$patients->middlename}} {{$patients->lastname}} &emsp; Age: {{$patients->age}}&nbsp Sex: {{$patients->sex}} &emsp; Address: {{$patients->address}}</p>
									<p>Date: {{$dates->date}}</p>
									<br>
									<p>ADMITTING NOTE</p>
									<br>
									<p>IMPRESSION: {!! $assessments->assessment !!}</p><br>
									<ul>
										<li>Please admit patient under my service PC.</li>
										<li>Secure consent for admission and management.</li>
										<li><input type="text" name="data1"></li><br>
										<li>VS <input type="text" name="data2"></li>
										<li>Work up:
										<div class="field_wrapper3">
										    <div>
										    	<ul>
										    		<li><input type="text" name="data3[]" value="" style="width: 20em;" />
										        <a href="javascript:void(0);" class="btn btn-sm btn-default" id="add_button3" title="Add field">add more input</a></li>
										        </ul>
										    </div>
										</div>
										</li><br>
										<li>IVF: <input type="text" name="data4"></li>
										<li>Meds:
										<div class="field_wrapper5">
									    <div>
									    	<ul>
									    		<li><input type="text" name="data5[]" value="" style="width: 20em;" />
									        <a href="javascript:void(0);" class="btn btn-sm btn-default" id="add_button5" title="Add field">add more input</a></li>
									        </ul>
									    </div>
										</div>
										</li>
										<li>For co-management and clearance c/o <input type="text" name="data6">.</li>
										<div class="field_wrapper7">
										    <div>
										    	<li><input type="text" name="data7[]" value="" style="width: 20em;" />
										        <a href="javascript:void(0);" class="btn btn-sm btn-default" id="add_button7" title="Add field">add more input</a></li>
										    </div>
										</div>
									</ul>
									<br>
									<p>Thank you!</p><br><br>
									<p style="margin-bottom: 0px;">________________________</p>
									<p style="margin-bottom: 0px;"> <strong>Jeremiah R. Morales, MD, FPOA</strong></p>
									<p style="margin-bottom: 0px;">License No. 103836</p>
									<p>Orthopaedic-Spine Surgery</p>
									<div class="col-md-12" align="center">
										<button class="btn btn-default btn-md" type="submit">PRINT</button>
									</div>
								</form>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
		    var maxField = 10; //Input fields increment limitation
		    var addButton = $('#add_button3'); //Add button selector
		    var wrapper = $('.field_wrapper3'); //Input field wrapper
		    var fieldHTML = '<ul><li><input type="text" name="data3[]" value="" style="width: 20em;"/><a href="javascript:void(0);" class="btn btn-sm btn-default" id="remove_button3" title="Remove field">Remove</a></li></ul>'; //New input field html 
		    var x = 1; //Initial field counter is 1
		    $(addButton).click(function(){ //Once add button is clicked
		        if(x < maxField){ //Check maximum number of input fields
		            x++; //Increment field counter
		            $(wrapper).append(fieldHTML); // Add field html
		        }
		    });
		    $(wrapper).on('click', '#remove_button3', function(e){ //Once remove button is clicked
		        e.preventDefault();
		        $(this).parent('').remove(); //Remove field html
		        x--; //Decrement field counter
		    });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
		    var maxField = 10; //Input fields increment limitation
		    var addButton = $('#add_button5'); //Add button selector
		    var wrapper = $('.field_wrapper5'); //Input field wrapper
		    var fieldHTML = '<ul><li><input type="text" name="data5[]" value="" style="width: 20em;"/><a href="javascript:void(0);" class="btn btn-sm btn-default" id="remove_button5" title="Remove field">Remove</a></li></ul>'; //New input field html 
		    var x = 1; //Initial field counter is 1
		    $(addButton).click(function(){ //Once add button is clicked
		        if(x < maxField){ //Check maximum number of input fields
		            x++; //Increment field counter
		            $(wrapper).append(fieldHTML); // Add field html
		        }
		    });
		    $(wrapper).on('click', '#remove_button5', function(e){ //Once remove button is clicked
		        e.preventDefault();
		        $(this).parent('').remove(); //Remove field html
		        x--; //Decrement field counter
		    });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
		    var maxField = 10; //Input fields increment limitation
		    var addButton = $('#add_button7'); //Add button selector
		    var wrapper = $('.field_wrapper7'); //Input field wrapper
		    var fieldHTML = '<li><input type="text" name="data7[]" value="" style="width: 20em;"/><a href="javascript:void(0);" class="btn btn-sm btn-default" id="remove_button7" title="Remove field">Remove</a></li>'; //New input field html 
		    var x = 1; //Initial field counter is 1
		    $(addButton).click(function(){ //Once add button is clicked
		        if(x < maxField){ //Check maximum number of input fields
		            x++; //Increment field counter
		            $(wrapper).append(fieldHTML); // Add field html
		        }
		    });
		    $(wrapper).on('click', '#remove_button7', function(e){ //Once remove button is clicked
		        e.preventDefault();
		        $(this).parent('').remove(); //Remove field html
		        x--; //Decrement field counter
		    });
		});
	</script>
@endsection