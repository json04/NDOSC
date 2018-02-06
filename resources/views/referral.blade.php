@extends('layouts.app')

@section('content')
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="card card-signup" style="margin-top: 20px;">
						<div class="content" style="margin: 1in;">
							<div class="row">
								<form action="/referralPrint/{{$dates->id}}" method="post">
								{{ csrf_field() }}
									<p style="margin-bottom: 0px;">Name: {{$patients->firstname}} {{$patients->middlename}} {{$patients->lastname}} &emsp; Age: {{$patients->age}}&nbsp Sex: {{$patients->sex}} &emsp; Address: {{$patients->address}}</p>
									<p>Date: {{$dates->date}}</p>
									<br>
									<p>REFERRAL NOTE</p>
									<br>
									<p>Dear Dr.&nbsp<input class="form-input" type="text" name="name" size="10">,</p><br>
									<p>​Referring to you above patient with the following clinical information:</p><br>
									<p style="margin-bottom: 0px;">SUBJECTIVE:</p>
									{!!$subjectives->subjective!!}</<br>
									<p style="margin-bottom: 0px;">OBJECTIVE:</p>
									{!!$objectives->objective!!}</<br>
									<p style="margin-bottom: 0px;">ASSESSMENT:</p>
									{!!$assessments->assessment!!}</<br>
									<p style="margin-bottom: 0px;">PLAN:</p>
									{!!$plans->plan!!}</<br>
									<p>NOTE: &nbsp<input class="form-input" type="text" name="note" size="20"></p><br><br>
									<div class="col-md-12" align="center">
										<button class="btn btn-default btn-md">PRINT</button>
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