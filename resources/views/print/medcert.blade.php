<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
	body{
    	height: 410mm;
    	width: 297mm;
    	padding-top: 2em;
	}
	.footer {
	    position: absolute;
	    bottom: 0;
	}
	#sign {
	    position: absolute;
	}
	#footer{
		color: grey;
	}
</style>
<body>
	<div class="container">
		<div class="col-xs-12" align="center">
			<img src="C:\Users\Jayson\Documents\GitHub\NDOSC\public\img\intrologo.png" height="300" width="940">
		</div>
		<div class="col-md-12">
			<div class="col-md-6" align="right" style="padding-right: 20mm;">
				<h3>Date:{{$dates->date}}</h3>
			</div><br>
			<div class="col-md-12" align="center">
				<h1 style="font-size: 40px;">M E D I C A L &nbsp;&nbsp;C E R T I F I C A T E</h1>
			</div><br>
			<div class="col-md-12" style="padding-left: 20mm; padding-right: 20mm;">
				<h3>TO WHOM IT MAY CONCERN:</h3>
			</div><br>
		</div>
		<div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
			<h3>This is to certify that {{$dates->patients->firstname}} {{$dates->patients->middlename}} {{$dates->patients->lastname}}, {{$dates->patients->age}} years old, {{$dates->patients->sex}}, {{$dates->patients->civilstatus}}, and a resident of {{$dates->patients->address}}, was <u>examined/treated</u> in this clinic on <u>{{$dates->date}}</u> with the following findings</h3>
		</div>
		<div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
			<h3><strong>Impression</strong></h3>
			@foreach($impressions as $assessment)
				<h3>{!! $assessment !!}</h3>
			@endforeach
		</div>
		<div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
			<h3><strong>Procedure</strong></h3>
			@foreach($procedures as $procedure)
				<h3>{!! $procedure !!}</h3>
			@endforeach
		</div>
		<div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
			<h3><strong>Recommendation</strong></h3>
			@foreach($recommendations as $recommendation)
				<h3>{!! $recommendation !!}</h3>
			@endforeach
		</div>
		<div class="col-md-12" id="sign" style="padding-left: 194mm; padding-right: 20mm; padding-top: 175mm;">
			<h4>___________________________</h4>
			<h4><strong>Jerimiah R. Morales, MD, FPOA</strong></h4>
			<h4><strong>Lic. <u>No.</u> 103836</strong></h4>
			<h4><strong>Attending Physician</strong></h4>
		</div>
	</div>
	<footer class="footer" style="padding-left: 20mm; padding-right: 20mm;">
		<div class="col-xs-12">
			<div class="container" id="footer">
				<h5>__________________________________________________________________________________________________________________</h5>
				<h4>Clinical Address:</h4>
				<h4>Panabo City: Rm 2-2Q Medical Arts Building, Rivera Medical Center Incorporated, 7302 National Highway, San Francisco, Panabo City, Davao del Norte; Contact Numbers: (084) 628 5234; +63933119941</h4>
				<br>
				<h4>Davao City: Rm S215, Health Science &amp; Wellness Center, Metro Davao Medical &amp; Research Center, Km 4, JP Laurel Ave., Bajada, Davao City; Contact Numbers: (082) 287 7777 (loc 2215); +639227566591</h4>
			</div>
		</div>
	</footer>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>