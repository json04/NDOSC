<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests;
use PDF;
use Input;
use App\Patient;
use App\Subjective;
use App\Objective;
use App\Assessment;
use App\Date;
use App\Plan;
use DB;
class PrintController extends Controller
{
    public function index($id)
    {
        $dates = Date::findOrFail($id);
        // dd($dates);
        return view('print', compact('dates'));
    }

    public function xray(Request $request, $id)
    {
        // $patients = Patient::findOrFail($id);
        // dd($patients);
        $dates = Date::findOrFail($id);
        // dd($dates);
        $result = collect([
            'Cervical_Open_Mouth_View' => $request->Input('Cervical_Open_Mouth_View'),
            'Cervical_AP_+_Lateral_Swimmers' => $request->Input('Cervical_AP_+_Lateral_Swimmers'),
            'Cervical_Right_&_Left_Obliques' => $request->Input('Cervical_Right_&_Left_Obliques'),
            'Thoracic_APL' => $request->Input('Thoracic_APL'),
            'Chest_PAL(pedia)' => $request->Input('Chest_PAL(pedia)'),
            'Chest_ALV' => $request->Input('Chest_ALV'),
            'Chest_AP' => $request->Input('Chest_AP'),
            'TBC' => $request->Input('TBC'),
            'Shoulder_AP_Left' => $request->Input('Shoulder_AP_Left'),
            'Shoulder_AP_Right' => $request->Input('Shoulder_AP_Right'),
            'Neutral_AP_Stress_View_Left' => $request->Input('Neutral_AP_Stress_View_Left'),
            'Neutral_AP_Stress_View_Right' => $request->Input('Neutral_AP_Stress_View_Right'),
            'Shoulder_Axial_View_Left' => $request->Input('Shoulder_Axial_View_Left'),
            'Shoulder_Axial_View_Right' => $request->Input('Shoulder_Axial_View_Right'),
            'Shoulder_OIR(Grashey)_View_Left' => $request->Input('Shoulder_OIR(Grashey)_View_Left'),
            'Shoulder_OIR(Grashey)_View_Right' => $request->Input('Shoulder_OIR(Grashey)_View_Right'),
            'Shoulder_Lateral(Neers)_View_Left' => $request->Input('Shoulder_Lateral(Neers)_View_Left'),
            'Shoulder_Lateral(Neers)_View_Right' => $request->Input('Shoulder_Lateral(Neers)_View_Right'),
            'Shoulder_Neutral_Left' => $request->Input('Shoulder_Neutral_Left'),
            'Shoulder_Neutral_Right' => $request->Input('Shoulder_Neutral_Right'),
            'Shoulder_IR_Left' => $request->Input('Shoulder_IR_Left'),
            'Shoulder_IR_Right' => $request->Input('Shoulder_IR_Right'),
            'Shoulder_Glenohumeral_Left' => $request->Input('Shoulder_Glenohumeral_Left'),
            'Shoulder_Glenohumeral_Right' => $request->Input('Shoulder_Glenohumeral_Right'),
            'Clavicle_Left' => $request->Input('Clavicle_Left'),
            'Clavicle_Right' => $request->Input('Clavicle_Right'),
            'Clavicle_AP_Cephalad_Angulation(Serendipity_View)_Left' => $request->Input('Clavicle_AP_Cephalad_Angulation(Serendipity_View)_Left'),
            'Clavicle_AP_Cephalad_Angulation(Serendipity_View)_Right' => $request->Input('Clavicle_AP_Cephalad_Angulation(Serendipity_View)_Right'),
            'Axillary_View_Left' => $request->Input('Axillary_View_Left'),
            'Axillary_View_Right' => $request->Input('Axillary_View_Right'),
            'Y-Scapular_View_Left' => $request->Input('Y-Scapular_View_Left'),
            'Y-Scapular_View_Right' => $request->Input('Y-Scapular_View_Right'),
            'Femur_APL_Left' => $request->Input('Femur_APL_Left'),
            'Femur_APL_Right' => $request->Input('Femur_APL_Right'),
            'Knee_APL_Left' => $request->Input('Knee_APL_Left'),
            'Knee_APL_Right' => $request->Input('Knee_APL_Right'),
            'Knee_Merchant_View_AP_Left' => $request->Input('Knee_Merchant_View_AP_Left'),
            'Knee_Merchant_View_AP_Right' => $request->Input('Knee_Merchant_View_AP_Right'),
            'Knee_Sunrise_View_Left' => $request->Input('Knee_Sunrise_View_Left'),
            'Knee_Sunrise_View_Right' => $request->Input('Knee_Sunrise_View_Right'),
            'Knee_Rosenburg_View_Left' => $request->Input('Knee_Rosenburg_View_Left'),
            'Knee_Rosenburg_View_Right' => $request->Input('Knee_Rosenburg_View_Right'),
            'Knee_Tunnel_View_Left' => $request->Input('Knee_Tunnel_View_Left'),
            'Knee_Tunnel_View_Right' => $request->Input('Knee_Tunnel_View_Right'),
            'Tibial_Plateau_View_Left' => $request->Input('Tibial_Plateau_View_Left'),
            'Tibial_Plateau_View_Right' => $request->Input('Tibial_Plateau_View_Right'),
            'Leg_APL_Left' => $request->Input('Leg_APL_Left'),
            'Leg_APL_Right' => $request->Input('Leg_APL_Right'),
            'Ankle_APL_Left' => $request->Input('Ankle_APL_Left'),
            'Ankle_APL_Right' => $request->Input('Ankle_APL_Right'),
            'Ankle_Mortise_APL' => $request->Input('Ankle_Mortise_APL'),
            'Humerus_APL_Left' => $request->Input('Humerus_APL_Left'),
            'Humerus_APL_Right' => $request->Input('Humerus_APL_Right'),
            'Elbow_APL_Left' => $request->Input('Elbow_APL_Left'),
            'Elbow_APL_Right' => $request->Input('Elbow_APL_Right'),
            'Forearm_APL_Left' => $request->Input('Forearm_APL_Left'),
            'Forearm_APL_Right' => $request->Input('Forearm_APL_Right'),
            'Wrist_APL_Left' => $request->Input('Wrist_APL_Left'),
            'Wrist_APL_Right' => $request->Input('Wrist_APL_Right'),
            'Carpal_Tunnel_View_Left' => $request->Input('Carpal_Tunnel_View_Left'),
            'Carpal_Tunnel_View_Right' => $request->Input('Carpal_Tunnel_View_Right'),
            'Clenched_Fist_View_Left' => $request->Input('Clenched_Fist_View_Left'),
            'Clenched_Fist_View_Right' => $request->Input('Clenched_Fist_View_Right'),
            'Ulnar_Deviation_View_Left' => $request->Input('Ulnar_Deviation_View_Left'),
            'Ulnar_Deviation_View_Right' => $request->Input('Ulnar_Deviation_View_Right'),
            'Oblique_Scaphoid_View_Left' => $request->Input('Oblique_Scaphoid_View_Left'),
            'Oblique_Scaphoid_View_Right' => $request->Input('Oblique_Scaphoid_View_Right'),
            'Hand_APO_Left' => $request->Input('Hand_APO_Left'),
            'Hand_APO_Right' => $request->Input('Hand_APO_Right'),
            'Hand_Pronated_Oblique_View_Left' => $request->Input('Hand_Pronated_Oblique_View_Left'),
            'Hand_Pronated_Oblique_View_Right' => $request->Input('Hand_Pronated_Oblique_View_Right'),
            'Hand_Supinated_Oblique_View_Left' => $request->Input('Hand_Supinated_Oblique_View_Left'),
            'Hand_Supinated_Oblique_View_Right' => $request->Input('Hand_Supinated_Oblique_View_Right'),
            'FingerLeft' => $request->Input('FingerLeft'),
            'FingerRight' => $request->Input('FingerRight'),
            'Lumbar_APL' => $request->Input('Lumbar_APL'),
            'Lumbar_Forward_&_Backward_bending' => $request->Input('Lumbar_Forward_&_Backward_bending'),
            'Lumbar_Ferguson_View' => $request->Input('Lumbar_Ferguson_View'),
            'Lumbar_Oblique_View_Left' => $request->Input('Lumbar_Oblique_View_Left'),
            'Lumbar_Oblique_View_Right' => $request->Input('Lumbar_Oblique_View_Right'),
            'Scoliosis_Series' => $request->Input('Scoliosis_Series'),
            'Pelvis_AP' => $request->Input('Pelvis_AP'),
            'Pelvis_Inlet+Outlet_Views' => $request->Input('Pelvis_Inlet+Outlet_Views'),
            'Pelvis_Internal_Oblique+External_Oblique_Views' => $request->Input('Pelvis_Internal_Oblique+External_Oblique_Views'),
            'Abdomen_Upright_&_Supine_Views' => $request->Input('Abdomen_Upright_&_Supine_Views'),
            'Hip_APL_Left' => $request->Input('Hip_APL_Left'),
            'Hip_APL_Right' => $request->Input('Hip_APL_Right'),
            'Ankle_Mortise_View_Left' => $request->Input('Ankle_Mortise_View_Left'),
            'Ankle_Mortise_View_Right' => $request->Input('Ankle_Mortise_View_Right'),
            'Foot_APL_Left' => $request->Input('Foot_APL_Left'),
            'Foot_APL_Right' => $request->Input('Foot_APL_Right'),
            'Foot_Oblique_Left' => $request->Input('Foot_Oblique_Left'),
            'Foot_Oblique_Right' => $request->Input('Foot_Oblique_Right'),
            'Foot_APO_Left' => $request->Input('Foot_APO_Left'),
            'Foot_APO_Right' => $request->Input('Foot_APO_Right'),
            'Talar_Neck_View_Left' => $request->Input('Talar_Neck_View_Left'),
            'Talar_Neck_View_Right' => $request->Input('Talar_Neck_View_Right'),
            'Talar_Tilt_Stress_View_Left' => $request->Input('Talar_Tilt_Stress_View_Left'),
            'Talar_Tilt_Stress_View_Right' => $request->Input('Talar_Tilt_Stress_View_Right'),
            'Harris_View_Left' => $request->Input('Harris_View_Left'),
            'Harris_View_Right' => $request->Input('Harris_View_Right'),
            'Brodens_View' => $request->Input('Brodens_View'),
            'Foot_Lateral_Left' => $request->Input('Foot_Lateral_Left'),
            'Foot_Lateral_Right' => $request->Input('Foot_Lateral_Right'),
            'Harris_View_Left' => $request->Input('Harris_View_Left'),
            'Harris_View_Right' => $request->Input('Harris_View_Right'),
            'Skeletal_Survey' => $request->Input('Skeletal_Survey'),
        ]);

        $toArray = $result->toArray();
        $xrays = array_filter($toArray, function($data){
            return $data != null;
        });
       	$pdf = PDF::loadView('print.xray', compact('xrays', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
       	// $pdf = PDF::loadFile(public_path(). '\Ultrasound-Request.pdf')->stream('Ultrasound-Request.pdf');
        // dd($xrays);
    	return $pdf->stream('Xray-Request.pdf');
    }

    public function ultrasound(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
    	$subjectives = Subjective::findOrFail($id);
    	$objectives = Objective::findOrFail($id);
    	$assessments = Assessment::findOrFail($id);
    	$result = collect([
			'Neck' => $request->Input('Neck'),
            'Shoulder_Left' => $request->Input('Shoulder_Left'),
            'Shoulder_Right' => $request->Input('Shoulder_Right'),
            'Arm_Left' => $request->Input('Arm_Left'),
            'Arm_Right' => $request->Input('Arm_Right'),
            'Elbow_Left' => $request->Input('Elbow_Left'),
            'Elbow_Right' => $request->Input('Elbow_Right'),
            'Wrist_Left' => $request->Input('Wrist_Left'),
            'Wrist_Right' => $request->Input('Wrist_Right'),
            'Hand_Left' => $request->Input('Hand_Left'),
            'Hand_Right' => $request->Input('Hand_Right'),
            'Upper_Back' => $request->Input('Upper_Back'),
            'lower_Back' => $request->Input('lower_Back'),
            'Abdomen' => $request->Input('Abdomen'),
            'Pelvis' => $request->Input('Pelvis'),
            'Hip_Left' => $request->Input('Hip_Left'),
            'Hip_Right' => $request->Input('Hip_Right'),
            'Thigh_Left' => $request->Input('Thigh_Left'),
            'Thigh_Right' => $request->Input('Thigh_Right'),
            'Knee_Left' => $request->Input('Knee_Left'),
            'Knee_Right' => $request->Input('Knee_Right'),
            'Leg_Left' => $request->Input('Leg_Left'),
            'Leg_Right' => $request->Input('Leg_Right'),
            'Ankle_Left' => $request->Input('Ankle_Left'),
            'Ankle_Right' => $request->Input('Ankle_Right'),
            'Foot_Left' => $request->Input('Foot_Left'),
            'Foot_Right' => $request->Input('Foot_Right'),
            'DOPPLER_Upper_Extremity_Left' => $request->Input('DOPPLER_Upper_Extremity_Left'),
            'DOPPLER_Upper_Extremity_Right' => $request->Input('DOPPLER_Upper_Extremity_Right'),
            'DOPPLER_Lower_Extremity_Left' => $request->Input('DOPPLER_Lower_Extremity_Left'),
            'DOPPLER_Lower_Extremity_Right' => $request->Input('DOPPLER_Lower_Extremity_Right'),
            '2-D_Echocardiogram' => $request->Input('2-D_Echocardiogram'),
    	]);
        $toArray = $result->toArray();
        $ultrasounds = array_filter($toArray, function($data){
            return $data != null;
        });
       	$pdf = PDF::loadView('print.ultrasound', compact('dates', 'patients', 'ultrasounds', 'subjectives', 'objectives', 'assessments'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
    	return $pdf->stream('Ultrasound-Request.pdf');
    }

    public function laboratory(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $result = collect([
            'CBC' => $request->Input('CBC'),
            'Platelet_Count' => $request->Input('Platelet_Count'),
            'Blood_Typing' => $request->Input('Blood_Typing'),
            'ESR' => $request->Input('ESR'),
            'CRP' => $request->Input('CRP'),
            'ASO' => $request->Input('ASO'),
            'Rheumatoid_Factor' => $request->Input('Rheumatoid_Factor'),
            'ANA' => $request->Input('ANA'),
            'T3,_T4,_TSH' => $request->Input('T3,_T4,_TSH'),
            'Calcium' => $request->Input('Calcium'),
            'Potassium' => $request->Input('Potassium'),
            'Magnessium' => $request->Input('Magnessium'),
            'Creatinine' => $request->Input('Creatinine'),
            'Fasting_Blood_Sugar' => $request->Input('Fasting_Blood_Sugar'),
            'Serum_Uric_Acid' => $request->Input('Serum_Uric_Acid'),
            'Alkaline_Phosphatase' => $request->Input('Alkaline_Phosphatase'),
            'LDH' => $request->Input('LDH'),
            'SGPT/SGOT' => $request->Input('SGPT/SGOT'),
            'Lipid_Profile' => $request->Input('Lipid_Profile'),
            'AFP' => $request->Input('AFP'),
            'PSA' => $request->Input('PSA'),
            'CEA' => $request->Input('CEA'),
            'CA' => $request->Input('CA'),
            'HCG' => $request->Input('HCG'),
        ]);

        $toArray = $result->toArray();
        $laboratories = array_filter($toArray, function($data){
            return $data != null;
        });
        $pdf = PDF::loadView('print.laboratory', compact('laboratories', 'dates', 'patients'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Laboratory-Request.pdf');
    }

    public function mri(Request $request, $id){
        
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $result = collect([
            'Cranial' => $request->Input('Cranial'),
            'Cervical' => $request->Input('Cervical'),
            'Thoracic' => $request->Input('Thoracic'),
            'Chest' => $request->Input('Chest'),
            'Shoulder_Left' => $request->Input('Shoulder_Left'),
            'Shoulder_Right' => $request->Input('Shoulder_Right'),
            'Arm_Left' => $request->Input('Arm_Left'),
            'Arm_Right' => $request->Input('Arm_Right'),
            'Elbow_Left' => $request->Input('Elbow_Left'),
            'Elbow_Right' => $request->Input('Elbow_Right'),
            'Wrist_Left' => $request->Input('Wrist_Left'),
            'Wrist_Right' => $request->Input('Wrist_Right'),
            'Hand_Left' => $request->Input('Hand_Left'),
            'Hand_Right' => $request->Input('Hand_Right'),
            'Lumbar' => $request->Input('Lumbar'),
            'Abdomen' => $request->Input('Abdomen'),
            'Pelvis' => $request->Input('Pelvis'),
            'Hip_Left' => $request->Input('Hip_Left'),
            'Hip_Right' => $request->Input('Hip_Right'),
            'Thigh_Left' => $request->Input('Thigh_Left'),
            'Thigh_Right' => $request->Input('Thigh_Right'),
            'Knee_Left' => $request->Input('Knee_Left'),
            'Knee_Right' => $request->Input('Knee_Right'),
            'Leg_Left' => $request->Input('Leg_Left'),
            'Leg_Right' => $request->Input('Leg_Right'),
            'Ankle_Left' => $request->Input('Ankle_Left'),
            'Ankle_Right' => $request->Input('Ankle_Right'),
            'Foot_Left' => $request->Input('Foot_Left'),
            'Foot_Right' => $request->Input('Foot_Right'),
        ]);

        $creatinine = collect([
            'Creatinine' => $request->Input('creatinine'),
        ]);

        $toArray = $creatinine->toArray();
        $creatinineResults = array_filter($toArray, function($data){
            return $data != null;
        });

        $toArray = $result->toArray();
        $mris = array_filter($toArray, function($data){
            return $data != null;
        });

        $pdf = PDF::loadView('print.mri', compact('dates', 'creatinineResults', 'patients', 'mris', 'subjectives', 'objectives', 'assessments'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Mri-Request.pdf');
    }

    public function ct(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $result = collect([
            'Cranial' => $request->Input('Cranial'),
            'Cervical' => $request->Input('Cervical'),
            'Thoracic' => $request->Input('Thoracic'),
            'Chest' => $request->Input('Chest'),
            'Shoulder_Left' => $request->Input('Shoulder_Left'),
            'Shoulder_Right' => $request->Input('Shoulder_Right'),
            'Arm_Left' => $request->Input('Arm_Left'),
            'Arm_Right' => $request->Input('Arm_Right'),
            'Elbow_Left' => $request->Input('Elbow_Left'),
            'Elbow_Right' => $request->Input('Elbow_Right'),
            'Wrist_Left' => $request->Input('Wrist_Left'),
            'Wrist_Right' => $request->Input('Wrist_Right'),
            'Hand_Left' => $request->Input('Hand_Left'),
            'Hand_Right' => $request->Input('Hand_Right'),
            'Lumbar' => $request->Input('Lumbar'),
            'Abdomen' => $request->Input('Abdomen'),
            'Pelvis' => $request->Input('Pelvis'),
            'Hip_Left' => $request->Input('Hip_Left'),
            'Hip_Right' => $request->Input('Hip_Right'),
            'Thigh_Left' => $request->Input('Thigh_Left'),
            'Thigh_Right' => $request->Input('Thigh_Right'),
            'Knee_Left' => $request->Input('Knee_Left'),
            'Knee_Right' => $request->Input('Knee_Right'),
            'Leg_Left' => $request->Input('Leg_Left'),
            'Leg_Right' => $request->Input('Leg_Right'),
            'Ankle_Left' => $request->Input('Ankle_Left'),
            'Ankle_Right' => $request->Input('Ankle_Right'),
            'Foot_Left' => $request->Input('Foot_Left'),
            'Foot_Right' => $request->Input('Foot_Right'),
        ]);

        $creatinine = collect([
            'Creatinine' => $request->Input('creatinine'),
        ]);

        $toArray = $creatinine->toArray();
        $creatinineResults = array_filter($toArray, function($data){
            return $data != null;
        });

        $toArray = $result->toArray();
        $mris = array_filter($toArray, function($data){
            return $data != null;
        });

        $pdf = PDF::loadView('print.ct', compact('dates', 'creatinineResults', 'patients', 'mris', 'subjectives', 'objectives', 'assessments'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('CT-Request.pdf');
    }

    public function relaxant(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);

         // Pain/Muscle Relaxant Medications
        $result_arcoxia120 = $request->input('arcoxia120');
        $arcoxia120 = explode('|', $result_arcoxia120);
    
        $result_arcoxia90 = $request->input('arcoxia90');
        $arcoxia90 = explode('|', $result_arcoxia90);

        $result_arcoxia60 = $request->input('arcoxia60');
        $arcoxia60 = explode('|', $result_arcoxia60);

        $result_celebrex400 = $request->input('celebrex400');
        $celebrex400 = explode('|', $result_celebrex400);

        $result_celebrex200 = $request->input('celebrex200');
        $celebrex200 = explode('|', $result_celebrex200);

        $result_celcoxx400 = $request->input('celcoxx400');
        $celcoxx400 = explode('|', $result_celcoxx400);

        $result_celcoxx200 = $request->input('celcoxx200');
        $celcoxx200 = explode('|', $result_celcoxx200);

        $result_oxycodone10 = $request->input('oxycodone10');
        $oxycodone10 = explode('|', $result_oxycodone10);

        $result_dolcet = $request->input('dolcet');
        $dolcet = explode('|', $result_dolcet);

        $result_dolcetmini = $request->input('dolcetmini');
        $dolcetmini = explode('|', $result_dolcetmini);

        $result_paratram = $request->input('paratram');
        $paratram = explode('|', $result_paratram);

        $result_mefenamic_acid250 = $request->input('mefenamic_acid250');
        $mefenamic_acid250 = explode('|', $result_mefenamic_acid250);

        $result_mefenamic_acid50 = $request->input('mefenamic_acid50');
        $mefenamic_acid50 = explode('|', $result_mefenamic_acid50);

        $result_mefenamic_acid50_2 = $request->input('mefenamic_acid50_2');
        $mefenamic_acid50_2 = explode('|', $result_mefenamic_acid50_2);

        $result_paracetamol_biogesic500 = $request->input('paracetamol_biogesic500');
        $paracetamol_biogesic500 = explode('|', $result_paracetamol_biogesic500);

        $result_paracetamol_tempra250 = $request->input('paracetamol_tempra250');
        $paracetamol_tempra250 = explode('|', $result_paracetamol_tempra250);

        $result_paracetamol_tempra125 = $request->input('paracetamol_tempra125');
        $paracetamol_tempra125 = explode('|', $result_paracetamol_tempra125);

        $result_lyrica75 = $request->input('lyrica75');
        $lyrica75 = explode('|', $result_lyrica75);

        $result_lyrica50 = $request->input('lyrica50');
        $lyrica50 = explode('|', $result_lyrica50);

        $result_gabix300 = $request->input('gabix300');
        $gabix300 = explode('|', $result_gabix300);

        $result_gabix100 = $request->input('gabix100');
        $gabix100 = explode('|', $result_gabix100);

        $result_norgesic_forte = $request->input('norgesic_forte');
        $norgesic_forte = explode('|', $result_norgesic_forte);

        $result_myonal = $request->input('myonal');
        $myonal = explode('|', $result_myonal);

        $result_baclofen10 = $request->input('baclofen10');
        $baclofen10 = explode('|', $result_baclofen10);

        $result_dexamethasone_decilone_Forte4 = $request->input('dexamethasone_decilone_Forte4');
        $dexamethasone_decilone_Forte4 = explode('|', $result_dexamethasone_decilone_Forte4);

        $result_prednisolone10 = $request->input('prednisolone10');
        $prednisolone10 = explode('|', $result_prednisolone10);

        $result = array($arcoxia120, $arcoxia90, $arcoxia60, $celebrex400, $celebrex200, $celcoxx400, $celcoxx200, $oxycodone10, $dolcet, $dolcetmini, $paratram, $mefenamic_acid250, $mefenamic_acid50, $mefenamic_acid50_2, $paracetamol_biogesic500, $paracetamol_tempra250, $paracetamol_tempra125, $lyrica75, $lyrica50, $gabix300, $gabix100, $norgesic_forte, $myonal, $baclofen10, $dexamethasone_decilone_Forte4, $prednisolone10, );


        array_filter($result, function($v){return!empty($v);});
        $array = array_map('array_filter', $result);
        $relaxants = array_filter($array, function($x){ return!empty($x);});

         $pdf = PDF::loadView('print.relaxant', compact('relaxants', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Relaxant_relaxant_request.pdf'); 
    }

    public function miscsupplement(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);

        // Misc Supplements

        $result_mecobalamine500 = $request->input('mecobalamine500');
        $mecobalamine500 = explode('|', $result_mecobalamine500);

        $result_diprospan = $request->input('deiprospan');
        $diprospan = explode('|', $result_diprospan);

        $result_fosavance6500 = $request->input('fosavance6500');
        $fosavance6500 = explode('|', $result_fosavance6500);

        $result_reventa = $request->input('reventa');
        $reventa = explode('|', $result_reventa);

        $result_bonviva150 = $request->input('bonviva150');
        $bonviva150 = explode('|', $result_bonviva150);

        $result_polynerve1000 = $request->input('polynerve1000');
        $polynerve1000 = explode('|', $result_polynerve1000);

        $result_meganerve1000 = $request->input('meganerve1000');
        $meganerve1000 = explode('|', $result_meganerve1000);

        $result_mecobalamine_methycobal500_6 = $request->input('mecobalamine_methycobal500_6');
        $mecobalamine_methycobal500_6 = explode('|', $result_mecobalamine_methycobal500_6);

        $result_mecobalamine_methycobal500_90 = $request->input('mecobalamine_methycobal500_90');
        $mecobalamine_methycobal500_90 = explode('|', $result_mecobalamine_methycobal500_90);

        $result_immunpro = $request->input('immunpro');
        $immunpro = explode('|', $result_immunpro);

        $result_caltrate = $request->input('caltrate');
        $caltrate = explode('|', $result_caltrate);

        $result_calciumade = $request->input('calciumade');
        $calciumade = explode('|', $result_calciumade);

        $result_appebon = $request->input('appebon');
        $appebon = explode('|', $result_appebon);

        $result_appetite_plus = $request->input('appetite_plus');
        $appetite_plus = explode('|', $result_appetite_plus);

        $result_appetens = $request->input('appetens');
        $appetens = explode('|', $result_appetens);

        $result_appebon_kid120 = $request->input('appebon_kid120');
        $appebon_kid120 = explode('|', $result_appebon_kid120);

        $result = $arrayName = array($mecobalamine500, $diprospan, $fosavance6500, $reventa, $bonviva150, $polynerve1000, $meganerve1000, $mecobalamine_methycobal500_6, $mecobalamine_methycobal500_90, $immunpro, $caltrate, $calciumade, $appebon, $appetite_plus, $appetens, $appebon_kid120, );
        // end of Misc Supplements

        array_filter($result, function($v){return!empty($v);});
        $array = array_map('array_filter', $result);
        $miscs = array_filter($array, function($x){ return!empty($x);});

        $pdf = PDF::loadView('print.miscsupplement', compact('miscs', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Prescription_miscsupplements_request.pdf');

    }

    public function antimicrobial(Request $request, $id){
       
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);

        // Antimicrobial Medications

        $result_zegen500 = $request->input('zegen500');
        $zegen500 = explode('|', $result_zegen500);

        $result_unasyn625 = $request->input('unasyn625');
        $unasyn625 = explode('|', $result_unasyn625);

        $result_co_amoxiclav625 = $request->input('co_amoxiclav625');
        $co_amoxiclav625 = explode('|', $result_co_amoxiclav625);

        $result_cloxicillin500_28 = $request->input('cloxicillin500_28');
        $cloxicillin500_28 = explode('|', $result_cloxicillin500_28);

        $result_cloxicillin500_56 = $request->input('cloxicillin500_56');
        $cloxicillin500_56 = explode('|', $result_cloxicillin500_56);

        $result_cloxacillin250 = $request->input('cloxacillin250');
        $cloxacillin250 = explode('|', $result_cloxacillin250);

        $result_cloxacillin125 = $request->input('cloxacillin125');
        $cloxacillin125 = explode('|', $result_cloxacillin125);

        $result_cefuroxime_zegen250 = $request->input('cefuroxime_zegen250');
        $cefuroxime_zegen250 = explode('|', $result_cefuroxime_zegen250);

        $result_cefuroxime_zegen500 = $request->input('cefuroxime_zegen500');
        $cefuroxime_zegen500 = explode('|', $result_cefuroxime_zegen500);

        $result_cefuroxime250 = $request->input('cefuroxime250');
        $cefuroxime250 = explode('|', $result_cefuroxime250);

        $result_cefuroxime125 = $request->input('cefuroxime125');
        $cefuroxime125 = explode('|', $result_cefuroxime125);

        $result_levofloxacin750 = $request->input('levofloxacin750');
        $levofloxacin750 = explode('|', $result_levofloxacin750);

        $result_levofloxacin750_14 = $request->input('levofloxacin750_14');
        $levofloxacin750_14 = explode('|', $result_levofloxacin750_14);

        $result_fluconazole150 = $request->input('fluconazole150');
        $fluconazole150 = explode('|', $result_fluconazole150);

        $result_levox500 = $request->input('levox500');
        $levox500 = explode('|', $result_levox500);

        $result_ciprobay1000 = $request->input('ciprobay1000');
        $ciprobay1000 = explode('|', $result_ciprobay1000);

        $result_myrin_p_forte120 = $request->input('myrin_p_forte120');
        $myrin_p_forte120 = explode('|', $result_myrin_p_forte120);

        $result_myrin_p_forte90 = $request->input('myrin_p_forte90');
        $myrin_p_forte90 = explode('|', $result_myrin_p_forte90);

        $result_myrin120 = $request->input('myrin120');
        $myrin120 = explode('|', $result_myrin120);

        $result_marin90 = $request->input('marin90');
        $marin90 = explode('|', $result_marin90);

        $result_refampicin300 = $request->input('refampicin300');
        $refampicin300 = explode('|', $result_refampicin300);

        $result_refampicin200_tbsp = $request->input('refampicin200_tbsp');
        $refampicin200_tbsp = explode('|', $result_refampicin200_tbsp);

        $result_refampicin200_tsp = $request->input('refampicin200_tsp');
        $refampicin200_tsp = explode('|', $result_refampicin200_tsp);

        $result = $arrayName = array($zegen500, $unasyn625, $co-amoxiclav625, $cloxicillin500_28, $cloxicillin500_56, $cloxacillin250, $cloxacillin125, $cefuroxime_zegen250, $cefuroxime_zegen500, $cefuroxime250, $cefuroxime125, $levofloxacin750, $levofloxacin750_14, $fluconazole150, $levox500, $ciprobay1000, $myrin-p_forte120, $myrin-p_forte90, $myrin120, $marin90, $refampicin300, $refampicin200_tbsp, $refampicin200_tsp, );
        // end of Antimicrobial Medications

        array_filter($result, function($v){return!empty($v);});
        $array = array_map('array_filter', $result);
        $antimicrobials = array_filter($array, function($x){ return!empty($x);});

        $pdf = PDF::loadView('print.antimicrobial', compact('antimicrobials', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Prescription_antimicrobial_request.pdf');
    }

    public function injectable(Request $request, $id){

        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        
        // injectables

        $result_diprospan1_1 = $request->input('diprospan1_1');
        $diprospan1_1 = explode('|', $result_diprospan1_1);

        $result_diprospan1_2 = $request->input('diprospan1_2');
        $diprospan1_2 = explode('|', $result_diprospan1_2);

        $result_teriparatide_forteo = $request->input('teriparatide_forteo');
        $teriparatide_forteo = explode('|', $result_teriparatide_forteo);

        $result_zolendronic_acid_osteomet4 = $request->input('zolendronic_acid_osteomet4');
        $zolendronic_acid_osteomet4 = explode('|', $result_zolendronic_acid_osteomet4);

        $result_hyruan_plus2 = $request->input('hyruan_plus2');
        $hyruan_plus2 = explode('|', $result_hyruan_plus2);

        $result_high_hyal_plus2 = $request->input('high_hyal_plus2');
        $high_hyal_plus2 = explode('|', $result_high_hyal_plus2);

        $d50_glucose = $request->input('d50_glucose');

        $lidocaine2_1 = $request->input('lidocaine2_1');

        $lidocaine2_2 = $request->input('lidocaine2_2');

        $syringe_1_cc = $request->input('1_cc_syringe');

        $syringe_5_cc = $request->input('5_cc_syringe');

        $syringe_10_cc = $request->input('10_cc_syringe');

        $result = $arrayName = array($diprospan1_1, $diprospan1_2, $teriparatide_forteo, $zolendronic_acid_osteomet4, $hyruan_plus2, $high_hyal_plus2, $d50_glucose, $lidocaine2_1, $lidocaine2_2, $syringe_1_cc, $syringe_5_cc, $syringe_10_cc, );
        // end of injectables

        array_filter($result, function($v){return!empty($v);});
        $array = array_map('array_filter', $result);
        $injectables = array_filter($array, function($x){ return!empty($x);});

        $pdf = PDF::loadView('print.injectables', compact('injectables', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Prescription_injectables_request.pdf');
    }

    public function dressing(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);

        // dressing materials and injectables
        $syringe_1_cc = $request->input('1_cc_syringe');
        $syringe_5_cc = $request->input('5_cc_syringe');
        $syringe_10_cc = $request->input('10_cc_syringe');
        $sterile_gauze_pads_10 = $request->input('sterile_gauze_pads_10');
        $sterile_gauze_pads_20 = $request->input('sterile_gauze_pads_20');
        $sterile_gauze_pads_30 = $request->input('sterile_gauze_pads_30');
        $working_globes_box_1 = $request->input('working_globes_box_1');
        $one_inch_hypoallergenic_plaster_1 = $request->input('1_inch_hypoallergenic_plaster_1');
        $velcro_elastic_bondage_4_inches_2 = $request->input('velcro_elastic_bondage_4_inches_2');
        $velcro_elastic_bondage_6_inches_2 = $request->input('velcro_elastic_bondage_6_inches_2');
        $hydrogen_peroxide_50_ml_bot_1 = $request->input('hydrogen_peroxide_50_ml_bot_1');
        $tenpercent_betadine_soln_10_ml_bot_1 = $request->input('tenpercent_betadine_soln_10_ml_bot_1');
        $pnss_1l_bot_1 = $request->input('pnss_1l_bot_1');
        $cutasep_f_50ml_bot_1 = $request->input('cutasep_f_50ml_bot_1');
        $cutasep_f_250ml_bot_1 = $request->input('cutasep_f_250ml_bot_1');
        $prontosan_wound_irrigation_soln_bot_1 = $request->input('prontosan_wound_irrigation_soln_bot_1');
        $intrasite_gel_1 = $request->input('intrasite_gel_1');
        $iodosorb_powder_1 = $request->input('iodosorb_powder_1');
        $iodosorb_gel_1 = $request->input('iodosorb_gel_1');
        $mebo_gel_1 = $request->input('mebo_gel_1');
        $acticoat_dressing_3 = $request->input('acticoat_dressing_3');
        $allevyn_dressing_3 = $request->input('allevyn_dressing_3');
        $bactigrass_2 = $request->input('bactigrass_2');
        $mupirocin_bactroban_ointment_2 = $request->input('mupirocin_(bactroban)_ointment_2');
        $silver_sulfadiazine_flammazine_cream_2 = $request->input('silver_sulfadiazine_(flammazine)_cream_2');
        $opsite_post_op_6cm_2 = $request->input('opsite_post_op_6cm_2');
        $opsite_post_op_10cm_2 = $request->input('opsite_post_op_10cm_2');
        $opsite_post_op_15cm_2 = $request->input('opsite_post_op_15cm_2');
        $opsite_post_op_20cm_2 = $request->input('opsite_post_op_20cm_2');
        $opsite_post_op_25cm_2 = $request->input('opsite_post_op_25cm_2');
        $opsite_post_op_30cm_2 = $request->input('opsite_post_op_30cm_2');
        $aquacel_ag_dressing_2 = $request->input('aquacel_ag_dressing_2');
        $kaltostat_dressing_2 = $request->input('kaltostat_dressing_2');

        $result = array($syringe_1_cc, $syringe_5_cc, $syringe_10_cc, $sterile_gauze_pads_10, $sterile_gauze_pads_20, $sterile_gauze_pads_30, $working_globes_box_1, $one_inch_hypoallergenic_plaster_1, $velcro_elastic_bondage_4_inches_2, $velcro_elastic_bondage_6_inches_2, $hydrogen_peroxide_50_ml_bot_1, $tenpercent_betadine_soln_10_ml_bot_1, $pnss_1l_bot_1, $cutasep_f_50ml_bot_1, $cutasep_f_250ml_bot_1, $prontosan_wound_irrigation_soln_bot_1, $intrasite_gel_1, $iodosorb_powder_1, $iodosorb_gel_1, $mebo_gel_1, $acticoat_dressing_3, $allevyn_dressing_3, $bactigrass_2, $mupirocin_bactroban_ointment_2, $silver_sulfadiazine_flammazine_cream_2, $opsite_post_op_6cm_2, $opsite_post_op_10cm_2, $opsite_post_op_15cm_2, $opsite_post_op_20cm_2, $opsite_post_op_25cm_2, $opsite_post_op_30cm_2, $aquacel_ag_dressing_2, );

        array_filter($result, function($v){return!empty($v);});
        $array = array_map('array_filter', $result);
        $dressings = array_filter($array, function($x){ return!empty($x);});

        $pdf = PDF::loadView('print.dressing', compact('dressings', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Prescription_dressing_request.pdf');
        

    }

    public function castingMaterials(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);

        $three_inch_long_bone_fiber_cast_1 = $request->input('three_inch_long_bone_fiber_cast_1');
        $three_inch_long_bone_fiber_cast_2 = $request->input('three_inch_long_bone_fiber_cast_2');
        $four_inch_long_bone_fiber_cast_1 = $request->input('four_inch_long_bone_fiber_cast_1');
        $four_inch_long_bone_fiber_cast_2 = $request->input('four_inch_long_bone_fiber_cast_2');
        $five_inch_long_bone_fiber_cast_1 = $request->input('five_inch_long_bone_fiber_cast_1');
        $five_inch_long_bone_fiber_cast_2 = $request->input('five_inch_long_bone_fiber_cast_2');
        $four_inch_long_bone_fiber_splint_1 = $request->input('four_inch_long_bone_fiber_splint_1');
        $five_inch_long_bone_fiber_splint_1 = $request->input('five_inch_long_bone_fiber_splint_1');
        $three_inch_primecast_fiber_cast_1 = $request->input('three_inch_primecast_fiber_cast_1');
        $three_inch_primecast_fiber_cast_2 = $request->input('three_inch_primecast_fiber_cast_2');
        $four_inch_primecast_fiber_cast_1 = $request->input('four_inch_primecast_fiber_cast_1');
        $four_inch_primecast_fiber_cast_2 = $request->input('four_inch_primecast_fiber_cast_2');
        $five_inch_primecast_fiber_cast_1 = $request->input('five_inch_primecast_fiber_cast_1');
        $five_inch_primecast_fiber_cast_2 = $request->input('five_inch_primecast_fiber_cast_2');
        $four_inch_primecast_fiber_splint_1 = $request->input('four_inch_primecast_fiber_splint_1');
        $five_inch_primecast_fiber_splint_1 = $request->input('five_inch_primecast_fiber_splint_1');
        $stockinet_3_inches_1_yard = $request->input('stockinet_3_inches_1_yard');
        $stockinet_4_inches_1_yard = $request->input('stockinet_4_inches_1_yard');
        $stockinet_5_inches_1_yard = $request->input('stockinet_5_inches_1_yard');
        $velcro_elastic_bondage_2_inches_1 = $request->input('velcro_elastic_bondage_2_inches_1');
        $velcro_elastic_bondage_2_inches_2 = $request->input('velcro_elastic_bondage_2_inches_2');
        $velcro_elastic_bondage_3_inches_1 = $request->input('velcro_elastic_bondage_3_inches_1');
        $velcro_elastic_bondage_3_inches_2 = $request->input('velcro_elastic_bondage_3_inches_2');
        $velcro_elastic_bondage_4_inches_1 = $request->input('velcro_elastic_bondage_4_inches_1');
        $velcro_elastic_bondage_4_inches_2 = $request->input('velcro_elastic_bondage_4_inches_2');
        $velcro_elastic_bondage_5_inches_1 = $request->input('velcro_elastic_bondage_5_inches_1');
        $velcro_elastic_bondage_5_inches_2 = $request->input('velcro_elastic_bondage_5_inches_2');
        $primecast_wadding_sheet_4_inches_1 = $request->input('primecast_wadding_sheet_4_inches_1');
        $primecast_wadding_sheet_4_inches_2 = $request->input('primecast_wadding_sheet_4_inches_2');
        $primecast_wadding_sheet_6_inches_1 = $request->input('primecast_wadding_sheet_6_inches_1');
        $primecast_wadding_sheet_6_inches_2 = $request->input('primecast_wadding_sheet_6_inches_2');
        $long_bone_armsling_small_size_1 = $request->input('long_bone_armsling_small_size_1');
        $long_bone_armsling_medium_size_1 = $request->input('long_bone_armsling_medium_size_1');
        $long_bone_armsling_large_size_1 = $request->input('long_bone_armsling_large_size_1');
        $long_bone_armsling_xl_size_1 = $request->input('long_bone_armsling_xl_size_1');
        $long_bone_armsling_kiddie_size_1 = $request->input('long_bone_armsling_kiddie_size_1');

        $result = array($three_inch_long_bone_fiber_cast_1, $three_inch_long_bone_fiber_cast_2, $four_inch_long_bone_fiber_cast_1 ,$four_inch_long_bone_fiber_cast_2, $five_inch_long_bone_fiber_cast_1 ,$five_inch_long_bone_fiber_cast_2, $four_inch_long_bone_fiber_splint_1, $five_inch_long_bone_fiber_splint_1, $three_inch_primecast_fiber_cast_1, $three_inch_primecast_fiber_cast_2, $four_inch_primecast_fiber_cast_1, $four_inch_primecast_fiber_cast_2, $five_inch_primecast_fiber_cast_1, $five_inch_primecast_fiber_cast_2, $four_inch_primecast_fiber_splint_1, $five_inch_primecast_fiber_splint_1, $stockinet_3_inches_1_yard, $stockinet_4_inches_1_yard, $stockinet_5_inches_1_yard, $velcro_elastic_bondage_2_inches_1, $velcro_elastic_bondage_2_inches_2, $velcro_elastic_bondage_3_inches_1, $velcro_elastic_bondage_3_inches_2, $velcro_elastic_bondage_4_inches_1, $velcro_elastic_bondage_4_inches_2, $velcro_elastic_bondage_5_inches_1, $velcro_elastic_bondage_5_inches_2, $primecast_wadding_sheet_4_inches_1, $primecast_wadding_sheet_4_inches_2, $primecast_wadding_sheet_6_inches_1, $primecast_wadding_sheet_6_inches_2, $long_bone_armsling_small_size_1, $long_bone_armsling_medium_size_1, $long_bone_armsling_large_size_1, $long_bone_armsling_xl_size_1, $long_bone_armsling_kiddie_size_1, );

        array_filter($result, function($v){return!empty($v);});
        $array = array_map('array_filter', $result);
        $castingmaterials = array_filter($array, function($x){ return!empty($x);});

        $pdf = PDF::loadView('print.castingmaterials', compact('castingmaterials', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Prescription_casting_materials_request.pdf');


    }

    public function orthopedicsProstheses(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);

        $soft_collar_small_1 = $request->input('soft_collar_small_1');
        $soft_collar_medium_1 = $request->input('soft_collar_medium_1');
        $soft_collar_large_1 = $request->input('soft_collar_large_1');
        $hard_collar_small_1 = $request->input('hard_collar_small_1');
        $hard_collar_medium_1 = $request->input('hard_collar_medium_1');
        $hard_collar_large_1 = $request->input('hard_collar_large_1');
        $four_foster_brace = $request->input('four_foster_brace');
        $halo_vest = $request->input('halo_vest');
        $jewett_brace = $request->input('jewett_brace');
        $knight_taylor_brace = $request->input('knight_taylor_brace');
        $chairback_low_taylor_brace = $request->input('chairback_low_taylor_brace');
        $milwaukee_brace = $request->input('milwaukee_brace');
        $shoulder_compression_sleeve = $request->input('shoulder_compression_sleeve');
        $humeral_fracture_brace = $request->input('humeral_fracture_brace');
        $elbow_compression_sleeve = $request->input('elbow_compression_sleeve');
        $static_wrist_splint = $request->input('static_wrist_splint');
        $wrist_compression_sleeve = $request->input('wrist_compression_sleeve');
        $ischial_weight_bearing_brace = $request->input('ischial_weight_bearing_brace');
        $knee_compression_sleeve = $request->input('knee_compression_sleeve');
        $knee_hinge_brace = $request->input('knee_hinge_brace');
        $knee_immobilizer = $request->input('knee_immobilizer');
        $patellar_tendon_strap = $request->input('patellar_tendon_strap');
        $ankle_compression_sleeve = $request->input('ankle_compression_sleeve');
        $walker_boots = $request->input('walker_boots');
        $compression_foot_sleeve = $request->input('compression_foot_sleeve');
        $silicon_insole_medial_arch_support = $request->input('silicon_insole_medial_arch_support');
        $backjoy_sitsmart_posture_plus_travelclub = $request->input('backjoy_sitsmart_posture_plus_travelclub');

        $result = array($soft_collar_small_1, $soft_collar_medium_1, $soft_collar_large_1, $hard_collar_small_1, $hard_collar_medium_1, $hard_collar_large_1, $four_foster_brace, $halo_vest, $jewett_brace, $knight_taylor_brace, $chairback_low_taylor_brace, $milwaukee_brace, $shoulder_compression_sleeve, $humeral_fracture_brace, $elbow_compression_sleeve, $static_wrist_splint, $wrist_compression_sleeve, $ischial_weight_bearing_brace, $knee_compression_sleeve, $knee_hinge_brace, $knee_immobilizer, $patellar_tendon_strap, $ankle_compression_sleeve, $walker_boots, $compression_foot_sleeve, $silicon_insole_medial_arch_support, $backjoy_sitsmart_posture_plus_travelclub, );

        array_filter($result, function($v){return!empty($v);});
        $array = array_map('array_filter', $result);
        $orthopedicsprotheses = array_filter($array, function($x){ return!empty($x);});

        $pdf = PDF::loadView('print.orthopedicsprotheses', compact('orthopedicprotheses', 'patients', 'dates'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Prescription_orthopedic_protheses_request.pdf');

    }


    public function referralview($id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $plans = Plan::findOrFail($id);
        return view('referral', compact('dates', 'patients', 'subjectives', 'objectives', 'assessments', 'plans'));
        // $objectives = Objective::findOrFail($id);
        // $plan = Plan::findOrFail($id);
        // echo $dates.$patients->lastname.$subjectives->subjective;
    }
    public function referralPrint(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $plans = Plan::findOrFail($id);
        
        $name = collect([
            'Name' => $request->Input('name'),
        ]);
        $note = collect([
            'Note' => $request->Input('note'),
        ]);

        $toArray = $name->toArray();
        $names = array_filter($toArray, function($data){
            return $data != null;
        });
         $toArray = $note->toArray();
        $notes = array_filter($toArray, function($data){
            return $data != null;
        });

        $pdf = PDF::loadView('print.referral', compact('dates', 'names', 'notes', 'patients', 'subjectives', 'objectives', 'assessments', 'plans'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Referral-Request.pdf');

    }

    public function admissionView($id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $plans = Plan::findOrFail($id);
        return view('admission', compact('dates', 'patients', 'subjectives', 'objectives', 'assessments', 'plans'));
        // $objectives = Objective::findOrFail($id);
        // $plan = Plan::findOrFail($id);
        // echo $dates.$patients->lastname.$subjectives->subjective;
    }

    public function admissionPrint(Request $request, $id){
        $dates = Date::findOrFail($id);
        $patients = Patient::findOrFail($dates->patients_id);
        $subjectives = Subjective::findOrFail($id);
        $objectives = Objective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $plans = Plan::findOrFail($id);
        
        $data1 = collect([
            'data1' => $request->Input('data1'),
        ]);
        $data2 = collect([
            'data2' => $request->Input('data2'),
        ]);
        $data3 = collect([
            'data3' => $request->Input('data3'),
        ]);
        $data4 = collect([
            'data4' => $request->Input('data4'),
        ]);
        $data5 = collect([
            'data5' => $request->Input('data5'),
        ]);
        $data6 = collect([
            'data6' => $request->Input('data6'),
        ]);
        $data7 = collect([
            'data7' => $request->Input('data7'),
        ]);

        $toArray = $data1->toArray();
        $data1Results = array_filter($toArray, function($data){
            return $data != null;
        });
        $toArray = $data2->toArray();
        $data2Results = array_filter($toArray, function($data){
            return $data != null;
        });
        // $toArray = $data3->toArray();
        // $data3Results = array_filter($toArray, function($data){
        //     return $data != null;
        // });
        $toArray = $data4->toArray();
        $data4Results = array_filter($toArray, function($data){
            return $data != null;
        });
        // $toArray = $data5->toArray();
        // $data5Results = array_filter($toArray, function($data){
        //     return $data != null;
        // });
        $toArray = $data6->toArray();
        $data6Results = array_filter($toArray, function($data){
            return $data != null;
        });
        // $toArray = $data7->toArray();
        // $data7Results = array_filter($toArray, function($data){
        //     return $data != null;
        // });

        $pdf = PDF::loadView('print.admission', compact('dates', 'names', 'patients', 'subjectives', 'objectives', 'assessments', 'plans', 'data1Results', 'data2Results', 'data3', 'data4Results', 'data5', 'data6Results', 'data7'))->setPaper(array(0,-47,290.5,400), 'portrait')->setWarnings(false);
        return $pdf->stream('Admission-Request.pdf');

    }

}
