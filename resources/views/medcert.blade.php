@extends('layouts.app')

@section('content')
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="card card-signup" style="margin-top: 20px;">
						<div class="content" style="margin: 1in;">
							<form action="/medcertprint/{{$dates->id}}" method="post">
								{{ csrf_field() }}
								<h3 align="center" class="title">MEDICAL CERTIFICATE FORM</h3>
								<p align="center" class="description">Fill the required information below.</p>
								
								<p>This to certify that <b>{{$patients->firstname}} {{$patients->middlename}} {{$patients->lastname}}</b>, {{$patients->age}} years old, {{$patients->sex}}, {{$patients->civilstatus}}, and a resident of {{$patients->address}}, was <u>examined/treated</u> in this clinic on <input type="text" name="date" placeholder="date of consultation"> with the following findings</p><br>

								<h5>IMPRESSION/DIAGNOSTICS:</h5>
								<ul>
									<li>{{$assessments->assessment}}</li>
								</ul><br>
								<h5>PROCEDURE DONE:</h5>
								<input type="text" placeholder="procedure" name="procedure">
								<br>
								<h5>RECOMMENDATION:</h5>
								<input type="text" placeholder="recommendation" name="recommendation">
								<div class="button-submit" align="center">
									<button type="submit" class="btn btn-default btn-md">PRINT</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection