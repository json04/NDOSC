@extends('layouts.app')
@include('flash::message')
@section('content')
	
	<div class="main">
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">DIAGNOSTICS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/xray/{{ $dates->id }}" method="post">
				{{ csrf_field() }}
				<h4 class="title" align="center">X-RAY</h4>
				<div class="col-md-12 col-md-offset-2 col-md-12">
					{{-- X-RAY --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="Cervical Open Mouth View" value="Cervical Open Mouth View">
									Cervical Open Mouth View
								</label><br>
								<label style="color: black;">
							        <input type="checkbox" name="Cervical AP + Lateral Swimmers" value="Cervical AP + Lateral Swimmers">
							        Cervical AP + Lateral Swimmers
					    		</label><br>
					    		<label style="color: black;"> 
							    	<input type="checkbox" name="Cervical Right & Left Obliques" value="Cervical Right & Left Obliques">
							        Cervical Right & Left Obliques
							    </label><br>
							    <label style="color: black;"> 
							    	<input type="checkbox" name="Thoracic APL" value="Thoracic APL">
							        Thoracic APL
							    </label><br>
							    <label style="color: black;"> 
							    	<input type="checkbox" name="Chest PAL(pedia)" value="Chest PAL(pedia)">
							        Chest PAL(pedia)
							    </label><br>
							    <label style="color: black;"> 
									<input type="checkbox" name="Chest ALV" value="Chest ALV">
									Chest ALV
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Chest AP" value="Chest AP">
									Chest AP
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="TBC" value="TBC">
									TBC
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder AP Left" value="Shoulder AP Left">
									Shoulder AP Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder AP Right" value="Shoulder AP Right">
									Shoulder AP Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Neutral AP Stress View Left" value="Neutral AP Stress View Left">
									Neutral AP Stress View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Neutral AP Stress View Right" value="Neutral AP Stress View Right">
									Neutral AP Stress View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Axial View Left" value="Shoulder Axial View Left">
									Shoulder Axial View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Axial View Right" value="Shoulder Axial View Right">
									Shoulder Axial View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder OIR(Grashey) View Left" value="Shoulder OIR(Grashey) View Left">
									Shoulder OIR(Grashey) View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder OIR(Grashey) View Right" value="Shoulder OIR(Grashey) View Right">
									Shoulder OIR(Grashey) View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Lateral(Neers) View Left" value="Shoulder Lateral(Neers) View Left">
									Shoulder Lateral(Neers) View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Lateral(Neers) View Right" value="Shoulder Lateral(Neers) View Right">
									Shoulder Lateral(Neers) View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Neutral Left" value="Shoulder Neutral Left">
									Shoulder Neutral Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Neutral Right" value="Shoulder Neutral Right">
									Shoulder Neutral Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder IR Left" value="Shoulder IR Left">
									Shoulder IR Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder IR Right" value="Shoulder IR Right">
									Shoulder IR Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Glenohumeral Left" value="Shoulder Glenohumeral Left">
									Shoulder Glenohumeral Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Glenohumeral Right" value="Shoulder Glenohumeral Right">
									Shoulder Glenohumeral Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Axillary View Left" value="Axillary View Left">
									Axillary View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Axillary View Right" value="Axillary View Right">
									Axillary View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Y-Scapular View Left" value="Y-Scapular View Left">
									Y-Scapular View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Y-Scapular View Right" value="Y-Scapular View Right">
									Y-Scapular View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Clavicle Left" value="Clavicle Left">
									Clavicle Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Clavicle Right" value="Clavicle Right">
									Clavicle Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Clavicle AP Cephalad Angulation(Serendipity View) Left" value="Clavicle AP Cephalad Angulation(Serendipity View) Left">
									Clavicle AP Cephalad Angulation(Serendipity View) Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Clavicle AP Cephalad Angulation(Serendipity View) Right" value="Clavicle AP Cephalad Angulation(Serendipity View) Right">
									Clavicle AP Cephalad Angulation(Serendipity View) Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Humerus APL Left" value="Humerus APL Left">
									Humerus APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Humerus APL Right" value="Humerus APL Right">
									Humerus APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Elbow APL Left" value="Elbow APL Left">
									Elbow APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Elbow APL Right" value="Elbow APL Right">
									Elbow APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Forearm APL Left" value="Forearm APL Left">
									Forearm APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Forearm APL Right" value="Forearm APL Right">
									Forearm APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Wrist APL Left" value="Wrist APL Left">
									Wrist APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Wrist APL Right" value="Wrist APL Right">
									Wrist APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Carpal Tunnel View Left" value="Carpal Tunnel View Left">
									Carpal Tunnel View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Carpal Tunnel View Right" value="Carpal Tunnel View Right">
									Carpal Tunnel View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Clenched Fist View Left" value="Clenched Fist View Left">
									Clenched Fist View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Clenched Fist View Right" value="Clenched Fist View Right">
									Clenched Fist View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ulnar Deviation View Left" value="Ulnar Deviation View Left">
									Ulnar Deviation View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ulnar Deviation View Right" value="Ulnar Deviation View Right">
									Ulnar Deviation View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Oblique Scaphoid View Left" value="Oblique Scaphoid View Left">
									Oblique Scaphoid View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Oblique Scaphoid View Right" value="Oblique Scaphoid View Right">
									Oblique Scaphoid View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hand APO Left" value="Hand APO Left">
									Hand APO Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hand APO Right" value="Hand APO Right">
									Hand APO Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hand Pronated Oblique View Left" value="Hand Pronated Oblique View Left">
									Hand Pronated Oblique View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hand Pronated Oblique View Right" value="Hand Pronated Oblique View Right">
									Hand Pronated Oblique View Right
								</label><br>
								<label style="color: black;"> 
										<input type="checkbox" name="Hand Supinated Oblique View Left" value="Hand Supinated Oblique View Left">
										Hand Supinated Oblique View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hand Supinated Oblique View Right" value="Hand Supinated Oblique View Right">
									Hand Supinated Oblique View Right
								</label><br>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									Finger Lateral Left - 
                                    <select name="FingerLeft">
                                    	<option disabled selected>Select Finger</option>
                                    	<option value="Thumb/Finger Lateral Left">Thumb/Finger Lateral Left</option>
                                      	<option value="Finger Thumb Lateral Left">Finger Thumb Lateral Left</option>
                                      	<option value="Finger Index Lateral Left">Finger Index Lateral Left</option>
                                      	<option value="Finger Long Lateral Left">Finger Long Lateral Left</option>
                                      	<option value="Finger Ring Lateral Left">Finger Ring Lateral Left</option>
                                      	<option value="Finger Small Lateral Left">Finger Small Lateral Left</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									Finger Lateral Right - 
                                    <select name="FingerRight">
                                    	<option disabled selected>Select Finger</option>
                                    	<option value="Thumb/Finger Lateral Right">Thumb/Finger Lateral Right</option>
                                      	<option value="Finger Thumb Lateral Right">Finger Thumb Lateral Right</option>
                                      	<option value="Finger Index Lateral Right">Finger Index Lateral Right</option>
                                      	<option value="Finger Long Lateral Right">Finger Long Lateral Right</option>
                                      	<option value="Finger Ring Lateral Right">Finger Ring Lateral Right</option>
                                      	<option value="Finger Small Lateral Right">Finger Small Lateral Right</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Lumbar APL" value="Lumbar APL">
									Lumbar APL
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Lumbar Ferguson View" value="Lumbar Ferguson View">
									Lumbar Ferguson View
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Lumbar Oblique View Left" value="Lumbar Oblique View Left">
									Lumbar Oblique View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Lumbar Oblique View Right" value="Lumbar Oblique View Right">
									Lumbar Oblique View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Lumbar Forward & Backward bending" value="Lumbar Forward & Backward bending">
									Lumbar Forward & Backward bending
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Scoliosis Series" value="Scoliosis Series">
									Scoliosis Series
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Abdomen Upright & Supine Views" value="Abdomen Upright & Supine Views">
									Abdomen Upright & Supine Views
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Pelvis AP" value="Pelvis AP">
									Pelvis AP
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Pelvis Inlet+Outlet Views" value="Pelvis Inlet+Outlet Views">
									Pelvis Inlet+Outlet Views
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Pelvis Internal Oblique+External Oblique Views" value="Pelvis Internal Oblique+External Oblique Views">
									Pelvis Internal Oblique+External Oblique Views
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hip APL Left" value="Hip APL Left">
									Hip APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hip APL Right" value="Hip APL Right">
									Hip APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Femur APL Left" value="Femur APL Left">
									Femur APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Femur APL Right" value="Femur APL Right">
									Femur APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee APL Left" value="Knee APL Left">
									Knee APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee APL Right" value="Knee APL Right">
									Knee APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Merchant View AP Left" value="Knee Merchant View AP Left">
									Knee Merchant View AP Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Merchant View AP Right" value="Knee Merchant View AP Right">
									Knee Merchant View AP Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Sunrise View Left" value="Knee Sunrise View Left">
									Knee Sunrise View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Sunrise View Right" value="Knee Sunrise View Right">
									Knee Sunrise View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Rosenburg View Left" value="Knee Rosenburg View Left">
									Knee Rosenburg View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Rosenburg View Right" value="Knee Rosenburg View Right">
									Knee Rosenburg View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Tunnel View Left" value="Knee Tunnel View Left">
									Knee Tunnel View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Tunnel View Right" value="Knee Tunnel View Right">
									Knee Tunnel View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Tibial Plateau View Left" value="Tibial Plateau View Left">
									Tibial Plateau View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Tibial Plateau View Right" value="Tibial Plateau View Right">
									Tibial Plateau View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Leg APL Left" value="Leg APL Left">
									Leg APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Leg APL Right" value="Leg APL Right">
									Leg APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ankle APL Left" value="Ankle APL Left">
									Ankle APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ankle APL Right" value="Ankle APL Right">
									Ankle APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ankle Mortise APL" value="Ankle Mortise APL">
									Ankle Mortise APL
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ankle Mortise View Left" value="Ankle Mortise View Left">
									Ankle Mortise View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ankle Mortise View Right" value="Ankle Mortise View Right">
									Ankle Mortise View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot APL Left" value="Foot APL Left">
									Foot APL Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot APL Right" value="Foot APL Right">
									Foot APL Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot Oblique Left" value="Foot Oblique Left">
									Foot Oblique Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot Oblique Right" value="Foot Oblique Right">
									Foot Oblique Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot APO Left" value="Foot APO Left">
									Foot APO Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot APO Right" value="Foot APO Right">
									Foot APO Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Talar Neck View Left" value="Talar Neck View Left">
									Talar Neck View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Talar Neck View Right" value="Talar Neck View Right">
									Talar Neck View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Talar Tilt Stress View Left" value="Talar Tilt Stress View Left">
									Talar Tilt Stress View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Talar Tilt Stress View Right" value="Talar Tilt Stress View Right">
									Talar Tilt Stress View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Harris View Left" value="Harris View Left">
									Harris View Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Harris View Right" value="Harris View Right">
									Harris View Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Brodens View" value="Brodens View">
									Brodens View
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot Lateral Left" value="Foot Lateral Left">
									Foot Lateral Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot Lateral Right" value="Foot Lateral Right">
									Foot Lateral Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Skeletal Survey" value="Skeletal Survey">
									Skeletal Survey
								</label><br>
							</div>
						</div>
					</div>
					{{-- End --}}
				</div>
				<div class="col-md-12" align="center">
					<p title="description">Review all the selected check box before submitting.</p>
					<button class="btn btn-md btn-danger">SUBMIT</button>
				</div>
			</form>		
		</div>
		<hr>
		{{-- End of Container --}}
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">DIAGNOSTICS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/ultrasound/{{ $dates->id}}" method="POST">
				{{ csrf_field() }}
				<h4 class="title" align="center">ULTRASOUND</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
					{{-- Ultrasound --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="Neck" value="Neck">
									Neck
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Left" value="Shoulder Left">
									Shoulder Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Shoulder Right" value="Shoulder Right">
									Shoulder Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Arm Left" value="Arm Left">
									Arm Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Arm Right" value="Arm Right">
									Arm Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Elbow Left" value="Elbow Left">
									Elbow Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Elbow Right" value="Elbow Right">
									Elbow Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Wrist Left" value="Wrist Left">
									Wrist Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Wrist Right" value="Wrist Right">
									Wrist Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hand Left" value="Hand Left">
									Hand Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hand Right" value="Hand Right">
									Hand Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Upper Back" value="Upper Back">
									Upper Back
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="lower Back" value="lower Back">
									lower Back
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Abdomen" value="Abdomen">
									Abdomen
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Pelvis" value="Pelvis">
									Pelvis
								</label><br>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="Hip Left" value="Hip Left">
									Hip Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Hip Right" value="Hip Right">
									Hip Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Thigh Left" value="Thigh Left">
									Thigh Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Thigh Right" value="Thigh Right">
									Thigh Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Left" value="Knee Left">
									Knee Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Knee Right" value="Knee Right">
									Knee Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Leg Left" value="Leg Left">
									Leg Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Leg Right" value="Leg Right">
									Leg Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ankle Left" value="Ankle Left">
									Ankle Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Ankle Right" value="Ankle Right">
									Ankle Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot Left" value="Foot Left">
									Foot Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Foot Right" value="Foot Right">
									Foot Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="DOPPLER Upper Extremity Left" value="DOPPLER Upper Extremity Left">
									DOPPLER Upper Extremity Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="DOPPLER Upper Extremity Right" value="DOPPLER Upper Extremity Right">
									DOPPLER Upper Extremity Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="DOPPLER Lower Extremity Left" value="DOPPLER Lower Extremity Left">
									DOPPLER Lower Extremity Left
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="DOPPLER Lower Extremity Right" value="DOPPLER Lower Extremity Right">
									DOPPLER Lower Extremity Right
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="2-D Echocardiogram" value="2-D Echocardiogram">
									2-D Echocardiogram
								</label><br>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12" align="center">
					<p title="description">Review all the selected check box before submitting.</p>
					<button class="btn btn-md btn-danger">SUBMIT</button>
				</div>
				{{-- End --}}
			</form>
		</div>
		<hr>
		{{-- end of Container --}}
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">DIAGNOSTICS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/laboratory/{{$dates->id}}" method="post">
				{{ csrf_field() }}
				<h4 class="title" align="center">LABORATORY</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
					{{-- LABORATORY --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="CBC" value="CBC">
									CBC
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Platelet Count" value="Platelet Count">
									Platelet Count
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Blood Typing" value="Blood Typing">
									Blood Typing
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="ESR" value="ESR">
									ESR
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="CRP" value="CRP">
									CRP
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="ASO" value="ASO">
									ASO
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Rheumatoid Factor" value="Rheumatoid Factor">
									Rheumatoid Factor
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="ANA" value="ANA">
									ANA
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="T3, T4, TSH" value="T3, T4, TSH">
									T3, T4, TSH
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Calcium" value="Calcium">
									Calcium
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Potassium" value="Potassium">
									Potassium
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Magnessium" value="Magnessium">
									Magnessium
								</label><br>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="Creatinine" value="Creatinine">
									Creatinine
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Fasting Blood Sugar" value="Fasting Blood Sugar">
									Fasting Blood Sugar
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Serum Uric Acid" value="Serum Uric Acid">
									Serum Uric Acid
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Alkaline Phosphatase" value="Alkaline Phosphatase">
									Alkaline Phosphatase
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="LDH" value="LDH">
									LDH
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="SGPT/SGOT" value="SGPT/SGOT">
									SGPT/SGOT
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="Lipid Profile" value="Lipid Profile">
									Lipid Profile
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="AFP" value="AFP">
									AFP
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="PSA" value="PSA">
									PSA
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="CEA" value="CEA">
									CEA
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="CA" value="CA">
									CA
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="HCG" value="HCG">
									HCG
								</label><br>
							</div>
						</div>
					</div>
					{{-- End --}}
				</div>
				<div class="col-md-12" align="center">
					<p title="description">Review all the selected check box before submitting.</p>
					<button class="btn btn-md btn-danger">SUBMIT</button>
				</div>
			</form>
		</div>
		<hr>
		{{-- End of Container --}}
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">DIAGNOSTICS</h3>
				<p title="description" align="center">Select <strong style="color: red;">ONLY</strong> the required select box below.</p>	
			</div>
			<form action="/mri/{{ $dates->id }}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">MRI</h4>
				<div class="col-md-12 col-md-offset-1 col-sm-12">
				{{-- MRI SCAN --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="select">
								<label style="color: black;"> 
									<span class="label label-default">Cranial</span> - 
                                    <select name="Cranial">
                                    	<option disabled selected>Select Note</option>
                                      	<option value="Cranial - With Contrast">With Contrast</option>
                                      	<option value="Cranial - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Cervical</span> - 
                                    <select name="Cervical">
                                    	<option disabled selected>Select Note</option>
                                      	<option value="Cervical - With Contrast">With Contrast</option>
                                      	<option value="Cervical - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Thoracic</span> - 
									<select name="Thoracic">
										<option disabled selected>Select Note</option>
                                      	<option value="Thoracic - With Contrast">With Contrast</option>
                                      	<option value="Thoracic - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Chest</span> - 
									<select name="Chest">
										<option disabled selected>Select Note</option>
                                      	<option value="Chest - With Contrast">With Contrast</option>
                                      	<option value="Chest - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Shoulder Left</span> - 
									<select name="Shoulder Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Shoulder Left - With Contrast">With Contrast</option>
                                      	<option value="Shoulder Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Shoulder Right</span> - 
									<select name="Shoulder Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Shoulder Right - With Contrast">With Contrast</option>
                                      	<option value="Shoulder Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Arm Left</span> - 
									<select name="Arm Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Arm Left - With Contrast">With Contrast</option>
                                      	<option value="Arm Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Arm Right</span> - 
									<select name="Arm Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Arm Right - With Contrast">With Contrast</option>
                                      	<option value="Arm Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Elbow Left</span> - 
									<select name="Elbow Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Elbow Left - With Contrast">With Contrast</option>
                                      	<option value="Elbow Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Elbow Right</span> - 
									<select name="Elbow Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Elbow Right - With Contrast">With Contrast</option>
                                      	<option value="Elbow Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Wrist Left</span> -  
									<select name="Wrist Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Wrist Left - With Contrast">With Contrast</option>
                                      	<option value="Wrist Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Wrist Right</span> - 
									<select name="Wrist Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Wrist Right - With Contrast">With Contrast</option>
                                      	<option value="Wrist Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Hand Left</span> - 
									<select name="Hand Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Hand Left - With Contrast">With Contrast</option>
                                      	<option value="Hand Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Hand Right</span> - 
									<select name="Hand Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Hand Right - With Contrast">With Contrast</option>
                                      	<option value="Hand Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Lumbar</span> - 
									<select name="Lumbar">
										<option disabled selected>Select Note</option>
                                      	<option value="Lumbar - With Contrast">With Contrast</option>
                                      	<option value="Lumbar - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Abdomen</span> - 
									<select name="Abdomen">
										<option disabled selected>Select Note</option>
                                      	<option value="Abdomen - With Contrast">With Contrast</option>
                                      	<option value="Abdomen - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="select">
								<label style="color: black;">
									<span class="label label-default">Pelvis</span> - 
									<select name="Pelvis">
										<option disabled selected>Select Note</option>
                                      	<option value="Pelvis - With Contrast">With Contrast</option>
                                      	<option value="Pelvis - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Hip Left</span> - 
									<select name="Hip Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Hip Left - With Contrast">With Contrast</option>
                                      	<option value="Hip Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Hip Right</span> - 
									<select name="Hip Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Hip Right - With Contrast">With Contrast</option>
                                      	<option value="Hip Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Thigh Left</span> - 
									<select name="Thigh Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Thigh Left - With Contrast">With Contrast</option>
                                      	<option value="Thigh Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Thigh Right</span> - 
									<select name="Thigh Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Thigh Right - With Contrast">With Contrast</option>
                                      	<option value="Thigh Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Knee Left</span> - 
									<select name="Knee Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Knee Left - With Contrast">With Contrast</option>
                                      	<option value="Knee Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Knee Right</span> - 
									<select name="Knee Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Knee Right - With Contrast">With Contrast</option>
                                      	<option value="Knee Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Leg Left</span> - 
									<select name="Leg Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Leg Left - With Contrast">With Contrast</option>
                                      	<option value="Leg Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Leg Right</span> - 
									<select name="Leg Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Leg Right - With Contrast">With Contrast</option>
                                      	<option value="Leg Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Ankle Left</span> - 
									<select name="Ankle Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Ankle Left - With Contrast">With Contrast</option>
                                      	<option value="Ankle Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Ankle Right</span> - 
									<select name="Ankle Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Ankle Right - With Contrast">With Contrast</option>
                                      	<option value="Ankle Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Foot Left</span> - 
									<select name="Foot Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Foot Left - With Contrast">With Contrast</option>
                                      	<option value="Foot Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Foot Right</span> - 
									<select name="Foot Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Foot Right - With Contrast">With Contrast</option>
                                      	<option value="Foot Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
							</div>
						</div>
					</div>
					{{-- end --}}
				</div>
				<div class="col-md-12" align="center">
					<br>
					<h5 class="title">CREATININE</h5>
					<input type="text" name="creatinine" placeholder="creatinine" style="text-align: center;">
					<p title="description">Review all the selected check box before submitting.</p>
					<button class="btn btn-md btn-danger">SUBMIT</button>
				</div>
			</form>
		</div>
		<hr>
		{{-- End of Container --}}
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">DIAGNOSTICS</h3>
				<p title="description" align="center">Select <strong style="color: red;">ONLY</strong> the required select box below.</p>	
			</div>
			<form action="/ct/{{ $dates->id }}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">CT SCAN</h4>
				<div class="col-md-12 col-md-offset-1 col-sm-12">
				{{-- CT SCAN --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="select">
								<label style="color: black;"> 
									<span class="label label-default">Cranial</span> - 
                                    <select name="Cranial">
                                    	<option disabled selected>Select Note</option>
                                      	<option value="Cranial - With Contrast">With Contrast</option>
                                      	<option value="Cranial - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Cervical</span> - 
                                    <select name="Cervical">
                                    	<option disabled selected>Select Note</option>
                                      	<option value="Cervical - With Contrast">With Contrast</option>
                                      	<option value="Cervical - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Thoracic</span> - 
									<select name="Thoracic">
										<option disabled selected>Select Note</option>
                                      	<option value="Thoracic - With Contrast">With Contrast</option>
                                      	<option value="Thoracic - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Chest</span> - 
									<select name="Chest">
										<option disabled selected>Select Note</option>
                                      	<option value="Chest - With Contrast">With Contrast</option>
                                      	<option value="Chest - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Shoulder Left</span> - 
									<select name="Shoulder Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Shoulder Left - With Contrast">With Contrast</option>
                                      	<option value="Shoulder Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Shoulder Right</span> - 
									<select name="Shoulder Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Shoulder Right - With Contrast">With Contrast</option>
                                      	<option value="Shoulder Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Arm Left</span> - 
									<select name="Arm Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Arm Left - With Contrast">With Contrast</option>
                                      	<option value="Arm Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Arm Right</span> - 
									<select name="Arm Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Arm Right - With Contrast">With Contrast</option>
                                      	<option value="Arm Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Elbow Left</span> - 
									<select name="Elbow Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Elbow Left - With Contrast">With Contrast</option>
                                      	<option value="Elbow Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Elbow Right</span> - 
									<select name="Elbow Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Elbow Right - With Contrast">With Contrast</option>
                                      	<option value="Elbow Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Wrist Left</span> -  
									<select name="Wrist Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Wrist Left - With Contrast">With Contrast</option>
                                      	<option value="Wrist Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Wrist Right</span> - 
									<select name="Wrist Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Wrist Right - With Contrast">With Contrast</option>
                                      	<option value="Wrist Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Hand Left</span> - 
									<select name="Hand Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Hand Left - With Contrast">With Contrast</option>
                                      	<option value="Hand Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Hand Right</span> - 
									<select name="Hand Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Hand Right - With Contrast">With Contrast</option>
                                      	<option value="Hand Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Lumbar</span> - 
									<select name="Lumbar">
										<option disabled selected>Select Note</option>
                                      	<option value="Lumbar - With Contrast">With Contrast</option>
                                      	<option value="Lumbar - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;"> 
									<span class="label label-default">Abdomen</span> - 
									<select name="Abdomen">
										<option disabled selected>Select Note</option>
                                      	<option value="Abdomen - With Contrast">With Contrast</option>
                                      	<option value="Abdomen - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="select">
								<label style="color: black;">
									<span class="label label-default">Pelvis</span> - 
									<select name="Pelvis">
										<option disabled selected>Select Note</option>
                                      	<option value="Pelvis - With Contrast">With Contrast</option>
                                      	<option value="Pelvis - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Hip Left</span> - 
									<select name="Hip Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Hip Left - With Contrast">With Contrast</option>
                                      	<option value="Hip Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Hip Right</span> - 
									<select name="Hip Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Hip Right - With Contrast">With Contrast</option>
                                      	<option value="Hip Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Thigh Left</span> - 
									<select name="Thigh Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Thigh Left - With Contrast">With Contrast</option>
                                      	<option value="Thigh Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Thigh Right</span> - 
									<select name="Thigh Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Thigh Right - With Contrast">With Contrast</option>
                                      	<option value="Thigh Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Knee Left</span> - 
									<select name="Knee Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Knee Left - With Contrast">With Contrast</option>
                                      	<option value="Knee Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Knee Right</span> - 
									<select name="Knee Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Knee Right - With Contrast">With Contrast</option>
                                      	<option value="Knee Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Leg Left</span> - 
									<select name="Leg Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Leg Left - With Contrast">With Contrast</option>
                                      	<option value="Leg Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Leg Right</span> - 
									<select name="Leg Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Leg Right - With Contrast">With Contrast</option>
                                      	<option value="Leg Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Ankle Left</span> - 
									<select name="Ankle Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Ankle Left - With Contrast">With Contrast</option>
                                      	<option value="Ankle Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Ankle Right</span> - 
									<select name="Ankle Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Ankle Right - With Contrast">With Contrast</option>
                                      	<option value="Ankle Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Foot Left</span> - 
									<select name="Foot Left">
										<option disabled selected>Select Note</option>
                                      	<option value="Foot Left - With Contrast">With Contrast</option>
                                      	<option value="Foot Left - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
								<label style="color: black;">
									<span class="label label-default">Foot Right</span> - 
									<select name="Foot Right">
										<option disabled selected>Select Note</option>
                                      	<option value="Foot Right - With Contrast">With Contrast</option>
                                      	<option value="Foot Right - Without Contrast">Without Contrast</option>
                                    </select>
								</label><br>
							</div>
						</div>
					</div>
					{{-- end --}}
				</div>
				<div class="col-md-12" align="center">
					<br>
					<h5 class="title">CREATININE</h5>
					<input type="text" name="creatinine" placeholder="creatinine" style="text-align: center;">
					<p title="description">Review all the selected check box before submitting.</p>
					<button class="btn btn-md btn-danger">SUBMIT</button>
				</div>
			</form>
		</div>
		<hr>
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">MEDICATIONS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/relaxant/{{$dates->id}}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">RELAXANT</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- MEDICATIONS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="arcoxia120" value="Arcoxia 120mg tablet # 7|Sig. 1 tablet once a day after meal">
									Arcoxia 120mg tablet # 7 <br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="arcoxia90" value="Arcoxia 90mg tablet #10|Sig. 1 tablet once a day after meal">
									Arcoxia 90mg tablet #10<br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="arcoxia60" value="Arcoxia 60mg tablet # 20|Sig. 1 tablet 2x a day after meal">
									Arcoxia 60mg tablet # 20<br>
									&emsp;&emsp;Sig. 1 tablet 2x a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celebrex400" value="Celebrex 400 mg capsule # 14|Sig. 1 tablet once a day after meal">
									Celebrex 400 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celebrex200" value="Celebrex 200 mg capsule # 14|Sig. 1 tablet 2x a day after meal">
									Celebrex 200 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet 2x a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celcoxx400" value="Celcoxx 400 mg capsule # 14|Sig. 1 tablet once a day after meal">
									Celcoxx 400 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celcoxx200" value="Celcoxx 200 mg capsule # 14|Sig. 1 tablet 2x a day after meal">
									Celcoxx 200 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet 2x a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="oxycodone10" value="Oxycodone 10mg tab # 15|Sig. 1 tablet once a day at night time">
									Oxycodone 10mg tab # 15<br>
									&emsp;&emsp;Sig. 1 tablet once a day at night time
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="dolcet" value="Dolcet tab # 21|Sig. 1 tab 3x a day">
									Dolcet tab # 21<br>
									&emsp;&emsp;Sig. 1 tab 3x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="dolcetmini" value="Dolcet mini  tab # 21|Sig. 1 tab 3x a day">
									Dolcet mini  tab # 21<br>
									&emsp;&emsp;Sig. 1 tab 3x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="paratram" value="Paratram tab # 21|Sig. 1 tablet 3 x a day">
									Paratram tab # 21<br>
									&emsp;&emsp;Sig. 1 tablet 3 x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="mefenamic_acid250" value="Mefenamic Acid 250 mg cap # 21|Sig. 1 cap 3x a day">
									Mefenamic Acid 250 mg cap # 21<br>
									&emsp;&emsp;Sig. 1 cap 3x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="mefenamic_acid50" value="Mefenamic Acid 50mg/5ml bot # 2|Sig. 2 tsp every 6 hrs as needed">
									Mefenamic Acid 50mg/5ml bot # 2<br>
									&emsp;&emsp;Sig. 2 tsp every 6 hrs as needed
								</label><br>
								
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">

							<label style="color: black;"> 
								<input type="checkbox" name="mefenamic_acid50_2" value="Mefenamic Acid 50mg/5ml bot # 2|Sig. 1 tbsp every 6 hrs as needed">
								Mefenamic Acid 50mg/5ml bot # 2<br>
								&emsp;&emsp;Sig. 1 tbsp every 6 hrs as needed
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="paracetamol_biogesic500" value="Paracetamol(Biogesic) 500mg tab # 12|Sig. 1 tab every 4 hrs as needed">
								Paracetamol(Biogesic) 500mg tab # 12<br>
								&emsp;&emsp;Sig. 1 tab every 4 hrs as needed
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="paracetamol_tempra250" value="Paracetamol(Tempra) 250mg/5ml 60ml bot# 2|Sig. 1 tbsp every 4 hrs as needed.">
								Paracetamol(Tempra) 250mg/5ml 60ml bot# 2<br>
								&emsp;&emsp;Sig. 1 tbsp every 4 hrs as needed.
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="paracetamol_tempra125" value="Paracetamol(Tempra) 125mg/5ml 60ml bot# 2|Sig. 1 tsp every 4 hrs as needed.">
								Paracetamol(Tempra) 125mg/5ml 60ml bot# 2<br>
								&emsp;&emsp;Sig. 1 tsp every 4 hrs as needed.
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="lyrica75" value="Lyrica 75mg cap # 21|Sig.  1 cap 2x a day">
								Lyrica 75mg cap # 21<br>
								&emsp;&emsp;Sig.  1 cap 2x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="lyrica50" value="Lyrica 50mg cap # 21|Sig.  1 cap 2x a day">
								Lyrica 50mg cap # 21<br>
								&emsp;&emsp;Sig.  1 cap 2x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="gabix300" value="Gabix 300mg cap # 21|Sig. 1 cap 3x a day">
								Gabix 300mg cap # 21<br>
								&emsp;&emsp;Sig. 1 cap 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="gabix100" value="Gabix 100mg cap # 21|Sig. 1 capsule 3x a day">
								Gabix 100mg cap # 21<br>
								&emsp;&emsp;Sig. 1 capsule 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="norgesic_forte" value="Norgesic Forte tab # 21|Sig. I tab 3x a day">
								Norgesic Forte tab # 21<br>
								&emsp;&emsp;Sig. I tab 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="myonal" value="Myonal tab # 21|Sig. 1 tab 3x a day">
								Myonal tab # 21<br>
								&emsp;&emsp;Sig. 1 tab 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="baclofen10" value="Baclofen 10mg tab # 21|Sig. 1 tablet 3x a day">
								Baclofen 10mg tab # 21<br>
								&emsp;&emsp;Sig. 1 tablet 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="dexamethasone_decilone_Forte4" value="Dexamethasone(Decilone Forte) 4mg tab # 4|Sig. 1 tablet once a day after meal">
								Dexamethasone(Decilone Forte) 4mg tab # 4<br>
								&emsp;&emsp;Sig. 1 tablet once a day after meal
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="prednisolone10" value="Prednisolone(Pred 10) 10mg tab # 4|Sig. 1 tablet once a day">
								Prednisolone(Pred 10) 10mg tab # 4 <br>
								&emsp;&emsp;Sig. 1 tablet once a day
							</label><br>

							</div>
						</div>
					</div>
					{{--  --}}
				</div>
				<div class="col-md-12" align="center">
					<p title="description">Review all the selected check box before submitting.</p>
					<button class="btn btn-md btn-danger" type="submit">SUBMIT</button>
				</div>
			</form>
		</div>
		<hr>
		{{-- End of Container --}}
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">MEDICATIONS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="#" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">DRESSING MATERIALS</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- DRESSING MATERIALS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="" value="">
									
								</label><br>
							</div>
						</div>
					</div>
					{{--  --}}
				</div>
				<div class="col-md-12" align="center">
					<p title="description">Review all the selected check box before submitting.</p>
					<button class="btn btn-md btn-danger">SUBMIT</button>
				</div>
			</form>
		</div>
		<hr>
		{{-- End of Container --}}
	</div>
	{{-- End of Main Raised --}}
@endsection

@section('script')
@endsection