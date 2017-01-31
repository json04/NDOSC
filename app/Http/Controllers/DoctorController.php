<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Input;
use Flash;
use App\Patient;
use App\Subjective;
use App\Objective;
use App\Assessment;
use App\Plan;
use App\Date;
use App\Photo;
use Image;
use Validator;
use Session;
use Redirect;

class DoctorController extends Controller
{
    public function create($id)
    {
    	$retrieves = Patient::findOrFail($id);
        $query = $retrieves->subjectives;
        if ($query->isEmpty()) {
            return view('doc-create', compact('retrieves'));
        }else{
            flash('This patient has already a record.', 'danger');
            return back()->withInput(); 
        }
    }

    public function store(Request $request, $id)
    {
    	$retrieves = Patient::findOrFail($id);

    	$subject = new Subjective;
    	$subject->patients_id=$request->Input('patients_id');
    	$subject->subjective=$request->Input('subjective');
    	$subject->save();

    	$object = new Objective;
    	$object->patients_id=$request->Input('patients_id');
    	$object->objective=$request->Input('objective');
        $object->save();

        // Image Upload
        // getting all of the post data
        $files=$request->file('images');
        // If file exist
        if ($files) {
            // Making counting of uploaded images
            $file_count = count($files);
            // start count how many uploaded
            $uploadcount = 0;
            foreach($files as $file) {
                $img = new Photo;
                $img->patients_id=$request->Input('patients_id');
                $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                $destinationPath = public_path('uploads/');
                $filename = $retrieves->lastname.'-'.$retrieves->firstname.'-'.rand(10,100).$file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $img->image=$filename;
                $img->date=$request->Input('date');
                $img->save();
                $uploadcount ++;
              }
            }     
            // End of image upload
            $assess = new Assessment;
            $assess->patients_id=$request->Input('patients_id');
            $assess->assessment=$request->Input('assessment');
            $assess->save();

            $plan = new Plan;
            $plan->patients_id=$request->Input('patients_id');
            $plan->plan=$request->Input('plan');
            $plan->save();

            $dates = new Date;
            $dates->patients_id=$request->Input('patients_id');
            $dates->date=$request->Input('date');
            $dates->save();

            flash('Success! Information stored to database.', 'success');
            return redirect('home')->withInput(); 
        }else{
            $assess = new Assessment;
            $assess->patients_id=$request->Input('patients_id');
            $assess->assessment=$request->Input('assessment');
            $assess->save();

            $plan = new Plan;
            $plan->patients_id=$request->Input('patients_id');
            $plan->plan=$request->Input('plan');
            $plan->save();

            $dates = new Date;
            $dates->patients_id=$request->Input('patients_id');
            $dates->date=$request->Input('date');
            $dates->save();

            flash('Success! Information stored to database.', 'success');
            return redirect('home')->withInput(); 
            }
        // end
    }

    // Checks if the ID has the record from consultation
    public function PatientUpdate($id)
    {
        $info = Patient::findOrFail($id);
        $query = $info->dates;
        if ($query->isEmpty()) {
            flash('This patient has no record yet.', 'danger');
            return back()->withInput(); 
        }else{
            return view('doc-update', compact('query'));
        }
    }

    public function update($id)
    {
        $objectives = Objective::findOrFail($id);
        $retrieves = Patient::find($objectives->patients_id);
        $dates = Date::findOrFail($id);
        $subjectives = Subjective::findOrFail($id);
        $assessments = Assessment::findOrFail($id);
        $plans = Plan::findOrFail($id);
        // $images = Photo::findOrFail($id);
        $images=DB::table('photos')->where('date','=',$dates->date)->get();
        // dd($images);
        return view('doc-update-create', compact('retrieves', 'dates', 'subjectives', 'objectives', 'assessments', 'plans', 'images'));
    }

    public function updateStore(Request $request, $id)
    {
        $retrieves = Patient::findOrFail($id);

        $subject = new Subjective;
        $subject->patients_id=$request->Input('patients_id');
        $subject->subjective=$request->Input('subjective');
        $subject->save();

        $object = new Objective;
        $object->patients_id=$request->Input('patients_id');
        $object->objective=$request->Input('objective');
        $object->save();

        // Image Upload
        // getting all of the post data
        $files=$request->file('images');
        // If file exist
        if ($files) {
            // Making counting of uploaded images
            $file_count = count($files);
            // start count how many uploaded
            $uploadcount = 0;
            foreach($files as $file) {
                $img = new Photo;
                $img->patients_id=$request->Input('patients_id');
                $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                $destinationPath = public_path('/uploads/');
                $filename = $retrieves->lastname.'-'.$retrieves->firstname.'-'.rand(10,100).$file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $img->image=$filename;
                $img->date=$request->Input('date');
                $img->save();
                $uploadcount ++;
              }
            }     
            // End of image upload
            $assess = new Assessment;
            $assess->patients_id=$request->Input('patients_id');
            $assess->assessment=$request->Input('assessment');
            $assess->save();

            $plan = new Plan;
            $plan->patients_id=$request->Input('patients_id');
            $plan->plan=$request->Input('plan');
            $plan->save();

            $dates = new Date;
            $dates->patients_id=$request->Input('patients_id');
            $dates->date=$request->Input('date');
            $dates->save();

            flash('Success! Information successfully UPDATED to our database.', 'success');
            return back()->withInput(); 
        }else{
            $assess = new Assessment;
            $assess->patients_id=$request->Input('patients_id');
            $assess->assessment=$request->Input('assessment');
            $assess->save();

            $plan = new Plan;
            $plan->patients_id=$request->Input('patients_id');
            $plan->plan=$request->Input('plan');
            $plan->save();

            $dates = new Date;
            $dates->patients_id=$request->Input('patients_id');
            $dates->date=$request->Input('date');
            $dates->save();

            flash('Success! Information successfully UPDATED to our database.', 'success');
            return back()->withInput(); 
            }
        // end
    }
}
