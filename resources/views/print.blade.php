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
									<input type="checkbox" name="arcoxia120" value="Arcoxia 120mg tablet # 7|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet once a day after meal">
									Arcoxia 120mg tablet # 7 <br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="arcoxia90" value="Arcoxia 90mg tablet #10|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet once a day after meal">
									Arcoxia 90mg tablet #10<br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="arcoxia60" value="Arcoxia 60mg tablet # 20|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet 2x a day after meal">
									Arcoxia 60mg tablet # 20<br>
									&emsp;&emsp;Sig. 1 tablet 2x a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celebrex400" value="Celebrex 400 mg capsule # 14|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet once a day after meal">
									Celebrex 400 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celebrex200" value="Celebrex 200 mg capsule # 14|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet 2x a day after meal">
									Celebrex 200 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet 2x a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celcoxx400" value="Celcoxx 400 mg capsule # 14|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet once a day after meal">
									Celcoxx 400 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet once a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="celcoxx200" value="Celcoxx 200 mg capsule # 14|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet 2x a day after meal">
									Celcoxx 200 mg capsule # 14<br>
									&emsp;&emsp;Sig. 1 tablet 2x a day after meal
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="oxycodone10" value="Oxycodone 10mg tab # 15|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet once a day at night time">
									Oxycodone 10mg tab # 15<br>
									&emsp;&emsp;Sig. 1 tablet once a day at night time
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="dolcet" value="Dolcet tab # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tab 3x a day">
									Dolcet tab # 21<br>
									&emsp;&emsp;Sig. 1 tab 3x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="dolcetmini" value="Dolcet mini  tab # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tab 3x a day">
									Dolcet mini  tab # 21<br>
									&emsp;&emsp;Sig. 1 tab 3x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="paratram" value="Paratram tab # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet 3 x a day">
									Paratram tab # 21<br>
									&emsp;&emsp;Sig. 1 tablet 3 x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="mefenamic_acid250" value="Mefenamic Acid 250 mg cap # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 cap 3x a day">
									Mefenamic Acid 250 mg cap # 21<br>
									&emsp;&emsp;Sig. 1 cap 3x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="mefenamic_acid50" value="Mefenamic Acid 50mg/5ml bot # 2|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 2 tsp every 6 hrs as needed">
									Mefenamic Acid 50mg/5ml bot # 2<br>
									&emsp;&emsp;Sig. 2 tsp every 6 hrs as needed
								</label><br>
								
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">

							<label style="color: black;"> 
								<input type="checkbox" name="mefenamic_acid50_2" value="Mefenamic Acid 50mg/5ml bot # 2|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tbsp every 6 hrs as needed">
								Mefenamic Acid 50mg/5ml bot # 2<br>
								&emsp;&emsp;Sig. 1 tbsp every 6 hrs as needed
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="paracetamol_biogesic500" value="Paracetamol(Biogesic) 500mg tab # 12|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tab every 4 hrs as needed">
								Paracetamol(Biogesic) 500mg tab # 12<br>
								&emsp;&emsp;Sig. 1 tab every 4 hrs as needed
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="paracetamol_tempra250" value="Paracetamol(Tempra) 250mg/5ml 60ml bot# 2|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tbsp every 4 hrs as needed.">
								Paracetamol(Tempra) 250mg/5ml 60ml bot# 2<br>
								&emsp;&emsp;Sig. 1 tbsp every 4 hrs as needed.
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="paracetamol_tempra125" value="Paracetamol(Tempra) 125mg/5ml 60ml bot# 2|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tsp every 4 hrs as needed.">
								Paracetamol(Tempra) 125mg/5ml 60ml bot# 2<br>
								&emsp;&emsp;Sig. 1 tsp every 4 hrs as needed.
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="lyrica75" value="Lyrica 75mg cap # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig.  1 cap 2x a day">
								Lyrica 75mg cap # 21<br>
								&emsp;&emsp;Sig.  1 cap 2x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="lyrica50" value="Lyrica 50mg cap # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig.  1 cap 2x a day">
								Lyrica 50mg cap # 21<br>
								&emsp;&emsp;Sig.  1 cap 2x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="gabix300" value="Gabix 300mg cap # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 cap 3x a day">
								Gabix 300mg cap # 21<br>
								&emsp;&emsp;Sig. 1 cap 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="gabix100" value="Gabix 100mg cap # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 capsule 3x a day">
								Gabix 100mg cap # 21<br>
								&emsp;&emsp;Sig. 1 capsule 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="norgesic_forte" value="Norgesic Forte tab # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. I tab 3x a day">
								Norgesic Forte tab # 21<br>
								&emsp;&emsp;Sig. I tab 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="myonal" value="Myonal tab # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tab 3x a day">
								Myonal tab # 21<br>
								&emsp;&emsp;Sig. 1 tab 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="baclofen10" value="Baclofen 10mg tab # 21|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet 3x a day">
								Baclofen 10mg tab # 21<br>
								&emsp;&emsp;Sig. 1 tablet 3x a day
							</label><br>

							<label style="color: black;"> 
								<input type="checkbox" name="dexamethasone_decilone_Forte4" value="Dexamethasone(Decilone Forte) 4mg tab # 4|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet once a day after meal">
								Dexamethasone(Decilone Forte) 4mg tab # 4<br>
								&emsp;&emsp;Sig. 1 tablet once a day after meal
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="prednisolone10" value="Prednisolone(Pred 10) 10mg tab # 4|&nbsp;&nbsp;&nbsp;&nbsp;Sig. 1 tablet once a day">
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
			<form action="/miscsupplement/{{$dates->id}}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">Misc Supplements</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- DRESSING MATERIALS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="mecobalamine500" value="Mecobalamine 500mcg tab # 30|Sig. 1 tab 3x a day">
									Mecobalamine 500mcg tab # 30<br>
									&emsp;&emsp;Sig. 1 tab 3x a day
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="deiprospan" value="Diprospan amp # 1|Sig. AD">
									Diprospan amp # 1<br>
									&emsp;&emsp;Sig. AD
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="fosavance6500" value="Fosavance 6500IU tab # 8|Sig. 1 tab 1x a week in a.m before any intake">
									Fosavance 6500IU tab # 8 <br>
									&emsp;&emsp;Sig. 1 tab 1x a week in a.m before any intake
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="reventa" value="Reventa tab # 8|Sig. 1 tab 1x a week in a.m before any intake">
									Reventa tab # 8<br>
									&emsp;&emsp;Sig. 1 tab 1x a week in a.m before any intake
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="bonviva150" value="Bonviva 150mg tab # 4|Sig. 1 tab 1x a month in a.m before any intake.">
									Bonviva 150mg tab # 4<br>
									&emsp;&emsp;Sig. 1 tab 1x a month in a.m before any intake.
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="polynerve1000" value="Polynerve 1000 tab # 60|sig. 1 tablet 2x a day">
									Polynerve 1000 tab # 60<br>
									&emsp;&emsp;sig. 1 tablet 2x a day"
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="meganerve1000" value="Meganerve 1000 tab # 60|sig. 1 tablet 2x a day">
									Meganerve 1000 tab # 60<br>
									&emsp;&emsp;sig. 1 tablet 2x a day
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="mecobalamine_methycobal500_6" value="Mecobalamine(Methycobal) 500mcg amp# 6|sig. 1 amp via IM injection every 2 days">
									Mecobalamine(Methycobal) 500mcg amp# 6<br>
									&emsp;&emsp;sig. 1 amp via IM injection every 2 days
								</label><br>
							</div>
						</div>
					<div class="col-md-6 col-sm-6">
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="mecobalamine_methycobal500_90" value="Mecobalamine(Methycobal) 500mcg tab # 90|sig. 1 tablet 3x a day">
								Mecobalamine(Methycobal) 500mcg tab # 90<br>
								&emsp;&emsp;sig. 1 tablet 3x a day
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="immunpro" value="ImmunPro tab # 30|sig. 1 tablet once a day after meal">
								ImmunPro tab # 30<br>
								&emsp;&emsp;sig. 1 tablet once a day after meal
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="caltrate" value="Caltrate tab #60|Sig. I tab 2x a day">
								Caltrate tab #60<br>
								&emsp;&emsp;Sig. I tab 2x a day
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="calciumade" value="Calciumade tab #60|Sig 1 tab 2x a day">
								Calciumade tab #60<br>
								&emsp;&emsp;Sig 1 tab 2x a day
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="appebon" value="Appebon tab# 30|Sig. 1 tablet 1x a day">
								Appebon tab# 30<br>
								&emsp;&emsp;Sig. 1 tablet 1x a day
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="appetite_plus" value="Appetite Plus tab # 30|sig. 1 tablet 1 a day">
								Appetite Plus tab # 30<br>
								&emsp;&emsp;sig. 1 tablet 1 a day
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="appetens" value="Appetens tab # 30|sig. 1 tablet 1 x a day">
								Appetens tab # 30<br>
								&emsp;&emsp;sig. 1 tablet 1 x a day
							</label><br>
							<label style="color: black;"> 
								<input type="checkbox" name="appebon_kid120" value="Appebon Kid 120ml Syrup bot # 2|Sig. 1 tsp 1x a day">
								Appebon Kid 120ml Syrup bot # 2<br>
								&emsp;&emsp;Sig. 1 tsp 1x a day
							</label><br>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-12" align="center">
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
			<form action="/antimicrobials/{{$dates->id}}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">Antimicrobials</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- DRESSING MATERIALS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="zegen500" value="Zegen 500mg tab # 14|Sig. 1 tab 2x a day">
								Zegen 500mg tab # 14<br>
								&emsp;&emsp;Sig. 1 tab 2x a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="unasyn625" value="Unasyn 625mg tab # 14|Sig. 1 tab 2x a day">
								Unasyn 625mg tab # 14<br>
								&emsp;&emsp;Sig. 1 tab 2x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="co_amoxiclav625" value="Co-Amoxiclav 625mg tab # 14|Sig. 1 tablet 2x a day">
								Co-Amoxiclav 625mg tab # 14<br>
								&emsp;&emsp;Sig. 1 tablet 2x a day
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cloxicillin500_28" value="Cloxicillin 500mg cap # 28|Sig. 1 capsule 4 x a day">
								Cloxicillin 500mg cap # 28<br>
								&emsp;&emsp;Sig. 1 capsule 4 x a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cloxicillin500_56" value="Cloxicillin 500mg cap # 56|Sig. 1 capsule x a day for 14 days">
								Cloxicillin 500mg cap # 56<br>
								&emsp;&emsp;Sig. 1 capsule x a day for 14 days	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cloxacillin250" value="Cloxacillin 250mg/5ml bot # 4|Sig. 1 tsp 3 x a day for 14 days">
								Cloxacillin 250mg/5ml bot # 4<br>
								&emsp;&emsp;Sig. 1 tsp 3 x a day for 14 days	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cloxacillin125" value="Cloxacillin 125mg/5ml bot # 4|Sig. 1 tsp 3 x a day for 14 days">
								Cloxacillin 125mg/5ml bot # 4<br>
								&emsp;&emsp;Sig. 1 tsp 3 x a day for 14 days	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cefuroxime_zegen250" value="Cefuroxime(Zegen) 250mg cap # 14|Sig. 1 capsule 2x a day">
								Cefuroxime(Zegen) 250mg cap # 14<br>
								&emsp;&emsp;Sig. 1 capsule 2x a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cefuroxime_zegen500" value="Cefuroxime(Zegen) 500mg cap # 14|Sig. 1 capsule 2x a day">
								Cefuroxime(Zegen) 500mg cap # 14<br>
								&emsp;&emsp;Sig. 1 capsule 2x a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cefuroxime250" value="Cefuroxime 250mg/5ml 50ml bot # 2|Sig. 1 tsp 2 x a day">
								Cefuroxime 250mg/5ml 50ml bot # 2<br>
								&emsp;&emsp;Sig. 1 tsp 2 x a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="cefuroxime125" value="Cefuroxime 125mg/5ml 50ml bot # 2|Sig. 1 tsp 2 x a day">
								Cefuroxime 125mg/5ml 50ml bot # 2<br>
								&emsp;&emsp;Sig. 1 tsp 2 x a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="levofloxacin750" value="Levofloxacin 750mg tab # 7|Sig. 1 tablet once a day">
								Levofloxacin 750mg tab # 7<br>
								&emsp;&emsp;Sig. 1 tablet once a day	
								</label><br>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="levofloxacin750_14" value="Levofloxacin 750mg tab # 7|Levofloxacin 750mg tab # 7">
								Levofloxacin 750mg tab # 7<br>
								&emsp;&emsp;Levofloxacin 750mg tab # 7	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="fluconazole150" value="Fluconazole 150mg tab # 14|Sig. 1 tablet 1 x a day for 2 weeks">
								Fluconazole 150mg tab # 14<br>
								&emsp;&emsp;Sig. 1 tablet 1 x a day for 2 weeks	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="levox500" value="Levox 500mg tab # 7|Sig. 1 tab once  a day">
								Levox 500mg tab # 7<br>
								&emsp;&emsp;Sig. 1 tab once  a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="ciprobay1000" value="Ciprobay 1000mg tab # 7|Sig. 1 tab 1x a day">
								Ciprobay 1000mg tab # 7<br>
								&emsp;&emsp;Sig. 1 tab 1x a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="myrin_p_forte120" value="Myrin-P Forte tab # 120|Sig. 4 tablets in a.m 1hr before food intake">
								Myrin-P Forte tab # 120<br>
								&emsp;&emsp;Sig. 4 tablets in a.m 1hr before food intake	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="myrin_p_forte90" value="Myrin-P Forte tab # 90|Sig. 3 tabs OD in 1hr a.m before meal">
								Myrin-P Forte tab # 90<br>
								&emsp;&emsp;Sig. 3 tabs OD in 1hr a.m before meal	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="myrin120" value="Myrin tab # 120|Sig. 4 tablets in a.m 1 hr before food intake">
								Myrin tab # 120<br>
								&emsp;&emsp;Sig. 4 tablets in a.m 1 hr before food intake	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="marin90" value="Myrin tab # 90|Sig. 3 tablets in a.m 1 hr before food intake">
								Myrin tab # 90<br>
								&emsp;&emsp;Sig. 3 tablets in a.m 1 hr before food intake	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="refampicin300" value="Rifampicin 300mg tab # 14|Sig. 1 tablet once a day">
								Rifampicin 300mg tab # 14<br>
								&emsp;&emsp;Sig. 1 tablet once a day	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="refampicin200_tbsp" value="Rifampicin 200mg/5ml 120ml bot # 2|Sig. 1 tbsp once a day in a.m before food intake">
								Rifampicin 200mg/5ml 120ml bot # 2<br>
								&emsp;&emsp;Sig. 1 tbsp once a day in a.m before food intake	
								</label><br>

								<label style="color: black;"> 
									<input type="checkbox" name="refampicin200_tsp" value="Rifampicin 200mg/5ml 120ml bot # 2|Sig. 1 tsp once a day in a.m before food intake">
								Rifampicin 200mg/5ml 120ml bot # 2<br>
								&emsp;&emsp;Sig. 1 tsp once a day in a.m before food intake	
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

		<div class="container">
			<div class="row">
				<h3 title="title" align="center">MEDICATIONS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/injectables/{{$dates->id}}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">Injectables</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- DRESSING MATERIALS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="diprospan1_1" value="Diprospan 1ml amp # 1|Sig. AD">
									Diprospan 1ml amp # 1<br>
									&emsp;&emsp;Sig. AD
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="diprospan1_2" value="Diprospan 1ml amp # 2|Sig. AD">
									Diprospan 1ml amp # 2<br>
									&emsp;&emsp;Sig. AD
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="teriparatide_forteo" value="Teriparatide(Forteo) multi dose prefilled pen set # 1">
									Teriparatide(Forteo) multi dose prefilled pen set # 1
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="zolendronic_acid_osteomet4" value="Zolendronic Acid(Osteomet) 4mg via l # 1|Sig. 1 vial+ 20ml PNSS to be given in 20 min">
									Zolendronic Acid(Osteomet) 4mg via l # 1<br>
									&emsp;&emsp;Sig. 1 vial+ 20ml PNSS to be given in 20 min
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="hyruan_plus2" value="Hyruan Plus 2.5ml pre-filled syringe # 3|Sig. AD">
									Hyruan Plus 2.5ml pre-filled syringe # 3<br>
									&emsp;&emsp;Sig. AD
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="high_hyal_plus2" value="High Hyal Plus 2ml pre-filled syringe # 3|sig. AD">
									High Hyal Plus 2ml pre-filled syringe # 3<br>
									&emsp;&emsp;sig. AD
								</label><br>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="d50_glucose" value="D50 Glucose Injection bot # 1">
									D50 Glucose Injection bot # 1
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="lidocaine2_1" value="Lidocaine 2% amp # 1">
									Lidocaine 2% amp # 1
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="lidocaine2_2" value="Lidocaine 2% amp # 2">
									Lidocaine 2% amp # 2
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="1_cc_syringe" value="1 cc syringe # 1">
									1 cc syringe # 1
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="5_cc_syringe" value="5 cc syringe # 1">
									5 cc syringe # 1
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="10_cc_syringe" value="10 cc syringe # 1">
									10 cc syringe # 1
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

		<div class="container">
			<div class="row">
				<h3 title="title" align="center">MEDICATIONS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/dressing/{{$dates->id}}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">Dressing Materials</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- DRESSING MATERIALS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="1_cc_syringe" value="1 cc syringe # 1">
									1 cc syringe # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="5_cc_syringe" value="5 cc syringe # 1">
									5 cc syringe # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="10_cc_syringe" value="10 cc syringe # 1">
									10 cc syringe # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="sterile_gauze_pads_10" value="Sterile gauze pads # 10">
									Sterile gauze pads # 10<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="sterile_gauze_pads_20" value="Sterile gauze pads # 20">
									Sterile gauze pads # 20<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="sterile_gauze_pads_30" value="Sterile gauze pads # 30">
									Sterile gauze pads # 30<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="working_globes_box_1" value="Working gloves box # 1">
									Working gloves box # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="1_inch_hypoallergenic_plaster_1" value="1 inch Hypoallergenic plaster # 1">
									1 inch Hypoallergenic plaster # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="velcro_elastic_bondage_4_inches_2" value="Velcro Elastic Bondage 4 inches # 2">
									Velcro Elastic Bondage 4 inches # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="velcro_elastic_bondage_6_inches_2" value="Velcro Elastic Bondage 6 inches # 2">
									Velcro Elastic Bondage 6 inches # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="hydrogen_peroxide_50_ml_bot_1" value="Hydrogen Peroxide 50 ml bot # 1">
									Hydrogen Peroxide 50 ml bot # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="tenpercent_betadine_soln_10_ml_bot_1" value="10% Betadine Soln 10 ml bot # 1">
									10% Betadine Soln 10 ml bot # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="pnss_1l_bot_1" value="PNSS 1L bot # 1">
									PNSS 1L bot # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="cutasep_f_50ml_bot_1" value="Cutasep F 50ml bot #1">
									Cutasep F 50ml bot #1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="cutasep_f_250ml_bot_1" value="Cutasep F 250ml bot # 1">
									Cutasep F 250ml bot # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="prontosan_wound_irrigation_soln_bot_1" value="Prontosan Wound Irrigation Soln bot # 1">
									Prontosan Wound Irrigation Soln bot # 1<br>
								</label><br>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="intrasite_gel_1" value="Intrasite gel #1">
									Intrasite gel #1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="iodosorb_powder_1" value="Iodosorb powder # 1">
									Iodosorb powder # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="iodosorb_gel_1" value="Iodosorb gel # 1">
									Iodosorb gel # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="mebo_gel_1" value="Mebo gel # 1">
									Mebo gel # 1<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="acticoat_dressing_3" value="Acticoat dressing # 3">
									Acticoat dressing # 3<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="allevyn_dressing_3" value="Allevyn dressing # 3">
									Allevyn dressing # 3<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="bactigrass_2" value="Bactigrass # 2">
									Bactigrass # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="mupirocin_(bactroban)_ointment_2" value="Mupirocin(Bactroban) ointment # 2">
									Mupirocin(Bactroban) ointment # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="silver_sulfadiazine_(flammazine)_cream_2" value="Silver Sulfadiazine(Flammazine) cream # 2">
									Silver Sulfadiazine(Flammazine) cream # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="opsite_post_op_6cm_2" value="Opsite post-op dressing 6cm # 2">
									Opsite post-op dressing 6cm # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="opsite_post_op_10cm_2" value="Opsite post-op dressing 10cm # 2">
									Opsite post-op dressing 10cm # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="opsite_post_op_15cm_2" value="Opsite post-op dressing 15cm # 2">
									Opsite post-op dressing 15cm # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="opsite_post_op_20cm_2" value="Opsite post-op dressing 20cm # 2">
									Opsite post-op dressing 20cm # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="opsite_post_op_25cm_2" value="Opsite post-op dressing 25cm # 2">
									Opsite post-op dressing 25cm # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="opsite_post_op_30cm_2" value="Opsite post-op dressing 30cm # 2">
									Opsite post-op dressing 30cm # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="aquacel_ag_dressing_2" value="Aquacel Ag dressing # 2">
									Aquacel Ag dressing # 2<br>
								</label><br>
								<label style="color: black;"> 
									<input type="checkbox" name="kaltostat_dressing_2" value="Kaltostat dressing # 2">
									Kaltostat dressing # 2<br>
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
		<div class="container">
			<div class="row">
				<h3 title="title" align="center">MEDICATIONS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/castingmaterials/{{$dates->id}}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">Casting Materials</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- DRESSING MATERIALS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="three_inch_long_bone_fiber_cast_1" value="3 inch Long Bone fiber cast # 1">
								3 inch Long Bone fiber cast # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="three_inch_long_bone_fiber_cast_2" value="3 inch Long Bone fiber cast # 2">
								3 inch Long Bone fiber cast # 2<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="four_inch_long_bone_fiber_cast_1" value="4 inch Long Bone fiber cast # 1">
								4 inch Long Bone fiber cast # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="four_inch_long_bone_fiber_cast_2" value="4 inch Long Bone fiber cast # 2">
								4 inch Long Bone fiber cast # 2<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="five_inch_long_bone_fiber_cast_1" value="5 inch Long Bone fiber cast # 1">
								5 inch Long Bone fiber cast # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="five_inch_long_bone_fiber_cast_2" value="5 inch Long Bone fiber cast # 2">
								5 inch Long Bone fiber cast # 2<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="four_inch_long_bone_fiber_splint_1" value="4 inch Long Bone fiber splint # 1">
								4 inch Long Bone fiber splint # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="five_inch_long_bone_fiber_splint_1" value="5 inch Long Bone fiber splint # 1">
								5 inch Long Bone fiber splint # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="three_inch_primecast_fiber_cast_1" value="3 inch PrimeCast fiber cast # 1">
								3 inch PrimeCast fiber cast # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="three_inch_primecast_fiber_cast_2" value="3 inch PrimeCast fiber cast # 2">
								3 inch PrimeCast fiber cast # 2<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="four_inch_primecast_fiber_cast_1" value="4 inch PrimeCast fiber cast # 1">
								4 inch PrimeCast fiber cast # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="four_inch_primecast_fiber_cast_2" value="4 inch PrimeCast fiber cast # 2">
								4 inch PrimeCast fiber cast # 2<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="five_inch_primecast_fiber_cast_1" value="5 inch PrimeCast fiber cast # 1">
								5 inch PrimeCast fiber cast # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="five_inch_primecast_fiber_cast_2" value="5 inch PrimeCast fiber cast # 2">
								5 inch PrimeCast fiber cast # 2<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="four_inch_primecast_fiber_splint_1" value="4 inch PrimeCast fiber splint # 1">
								4 inch PrimeCast fiber splint # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="five_inch_primecast_fiber_splint_1" value="5 inch PrimeCast fiber splint # 1">
								5 inch PrimeCast fiber splint # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="stockinet_2_inches_1_yard" value="Stockinet 2 inches 1 yard # 1">
								Stockinet 2 inches 1 yard # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="stockinet_3_inches_1_yard" value="Stockinet 3 inches 1 yard # 1">
								Stockinet 3 inches 1 yard # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="stockinet_4_inches_1_yard" value="Stockinet 4 inches 1 yard # 1">
								Stockinet 4 inches 1 yard # 1<br>
								</label><br>
							</div>
						</div>

					<div class="col-md-6 col-sm-6">
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="stockinet_5_inches_1_yard" value="Stockinet 5 inches 1 yard # 1">
							Stockinet 5 inches 1 yard # 1<br>	
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_2_inches_1" value="Velcro elastic bondage 2 inches # 1">
							Velcro elastic bondage 2 inches # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_2_inches_2" value="Velcro elastic bondage 2 inches # 2">
							Velcro elastic bondage 2 inches # 2<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_3_inches_1" value="Velcro elastic bondage 3 inches # 1">
							Velcro elastic bondage 3 inches # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_3_inches_2" value="Velcro elastic bondage 3 inches # 2">
							Velcro elastic bondage 3 inches # 2<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_4_inches_1" value="Velcro elastic bondage 4 inches # 1">
							Velcro elastic bondage 4 inches # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_4_inches_2" value="Velcro elastic bondage 4 inches # 2">
							Velcro elastic bondage 4 inches # 2<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_5_inches_1" value="Velcro elastic bondage 5 inches # 1">
							Velcro elastic bondage 5 inches # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="velcro_elastic_bondage_5_inches_2" value="Velcro elastic bondage 5 inches # 2">
							Velcro elastic bondage 5 inches # 2<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="primecast_wadding_sheet_4_inches_1" value="PrimeCast Wadding sheet 4 inches # 1">
							PrimeCast Wadding sheet 4 inches # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="primecast_wadding_sheet_4_inches_2" value="PrimeCast Wadding sheet 4 inches # 2">
							PrimeCast Wadding sheet 4 inches # 2<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="primecast_wadding_sheet_6_inches_1" value="PrimeCast Wadding sheet 6 inches # 1">
							PrimeCast Wadding sheet 6 inches # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="primecast_wadding_sheet_6_inches_2" value="PrimeCast Wadding sheet 6 inches # 2">
							PrimeCast Wadding sheet 6 inches # 2<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="long_bone_armsling_small_size_1" value="Long bone Armsling kiddie size # 1">
							Long bone Armsling kiddie size # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="long_bone_armsling_medium_size_1" value="Long bone Armsling small size # 1">
							Long bone Armsling small size # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="long_bone_armsling_large_size_1" value="Long bone Armsling medium size # 1">
							Long bone Armsling medium size # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="long_bone_armsling_xl_size_1" value="Long bone Armsling Large size # 1">
							Long bone Armsling Large size # 1<br>
							</label><br>
						</div>
						<div class="checkbox">
							<label style="color: black;"> 
								<input type="checkbox" name="long_bone_armsling_kiddie_size_1" value="Long bone Armsling X-L size # 1">
							Long bone Armsling X-L size # 1<br>
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

		<div class="container">
			<div class="row">
				<h3 title="title" align="center">MEDICATIONS</h3>
				<p title="description" align="center">Check <strong style="color: red;">ONLY</strong> the required input box below.</p>	
			</div>
			<form action="/orthopedicsprotheses/{{$dates->id}}" method="post">
			{{ csrf_field() }}
				<h4 class="title" align="center">Orthopedics/Protheses</h4>
				<div class="col-md-12 col-md-offset-2 col-sm-12">
				{{-- DRESSING MATERIALS --}}
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="soft_collar_small_1" value="Soft collar small # 1">
								Soft collar small # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="soft_collar_medium_1" value="Hard Collar small # 1">
								Hard Collar small # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="soft_collar_large_1" value="Soft collar medium # 1">
								Soft collar medium # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="hard_collar_small_1" value="Hard Collar medium # 1">
								Hard Collar medium # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="hard_collar_medium_1" value="Soft collar large # 1">
								Soft collar large # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="hard_collar_large_1" value="Hard Collar large # 1">
								Hard Collar large # 1<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="four_foster_brace" value="Four Foster Brace">
								Four Foster Brace<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="halo_vest" value="Halo vest">
								Halo vest<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="jewett_brace" value="Jewett Brace">
								Jewett Brace<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="knight_taylor_brace" value="Knight-Taylor Brace">
								Knight-Taylor Brace<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="chairback_low_taylor_brace" value="Chairback/Low-Taylor Brace">
								Chairback/Low-Taylor Brace<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="milwaukee_brace" value="Milwaukee Brace">
								Milwaukee Brace<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="shoulder_compression_sleeve" value="Shoulder Compression Sleeve">
								Shoulder Compression Sleeve<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="humeral_fracture_brace" value="Humeral Fracture Brace">
								Humeral Fracture Brace<br>
								</label><br>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="elbow_compression_sleeve" value="Elbow Compression sleeve">
								Elbow Compression sleeve<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="static_wrist_splint" value="Static wrist splint">
								Static wrist splint<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="wrist_compression_sleeve" value="Wrist compression sleeve">
								Wrist compression sleeve<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="ischial_weight_bearing_brace" value="Ischial Weight Bearing Brace">
								Ischial Weight Bearing Brace<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="knee_compression_sleeve" value="Knee Compression sleeve">
								Knee Compression sleeve<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="knee_hinge_brace" value="Knee Hinge Brace">
								Knee Hinge Brace<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="knee_immobilizer" value="Knee Immobilizer">
								Knee Immobilizer<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="patellar_tendon_strap" value="Patellar Tendon Strap">
								Patellar Tendon Strap<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="ankle_compression_sleeve" value="Ankle Compression sleeve">
								Ankle Compression sleeve<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="walker_boots" value="Walker boots">
								Walker boots<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="compression_foot_sleeve" value="Compression Foot Sleeve">
								Compression Foot Sleeve<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="silicon_insole_medial_arch_support" value="Silicone insole medial arch support">
								Silicone insole medial arch support<br>
								</label><br>
							</div>
							<div class="checkbox">
								<label style="color: black;"> 
									<input type="checkbox" name="backjoy_sitsmart_posture_plus_travelclub" value="Backjoy sitsmart posture plus(Travel Club)">
								Backjoy sitsmart posture plus(Travel Club)<br>
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
	</div>
	{{-- End of Main Raised --}}
@endsection

@section('script')
@endsection