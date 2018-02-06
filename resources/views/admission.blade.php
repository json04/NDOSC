@extends('layouts.app')

@section('content')
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-signup" style="margin-top: 20px;">
						<div class="content">
							<h3 align="center"><strong>Admission Form</strong></h3>
							<div class="col-md-5">
								<h4><strong>Personal Information</strong></h4>
								<p><strong>Name:</strong> {{$patients->firstname}} {{$patients->middlename}} {{$patients->lastname}} &emsp; <strong>Age:</strong> {{$patients->age}} &emsp; <strong>Sex:</strong> {{$patients->sex}} &emsp;</p>
								<p><strong>Address: </strong>Address: {{$patients->address}}</p>
								<h4><strong>Impression</strong></h4>
								<p>{!! $assessments->assessment !!}</p>
							</div>
							<div class="col-md-7">
								<h4><strong>Admission</strong></h4>
								<form action="/admissionPrint/{{$dates->id}}" method="post" novalidate>
									{{ csrf_field() }}
									<ul>
										<li>Please admit patient under my service PC.</li>
										<li>Secure consent for admission and management.</li>
										<li><input type="text" name="data1" style="width: 100mm;" placeholder="First Input"></li>
										<li>VS &emsp;<input type="text" name="data2" style="width: 91mm;" placeholder="Second Input">
										</li>
										<li>Work up:<textarea class="form-control" placeholder="Type your information here" name="data3" rows="5" required></textarea></li>
										<li>IVF:&nbsp; <input type="text" name="data4" style="width: 91mm;" placeholder="Fourth Input" required></li>
										<li>Meds:<textarea class="form-control" placeholder="Type your information here" name="data5" rows="5" required></textarea></li>
										<li>Other Concerns:<textarea class="form-control" placeholder="Type your information here" name="data6" rows="5" required></textarea></li>
										<li><strong>Refer Accordingly</strong></li>
									</ul>	
									<button class="btn btn-default btn-md" type="submit">GENERATE</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection