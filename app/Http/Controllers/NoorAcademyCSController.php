<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseType;
use App\Trainee;
use App\Trainer;

class NoorAcademyCSController extends Controller
{
	/**
	 * Display the Trainer view
	 * Populate the view with data from CourseType Database
	 * Return view with array
	 * @return [array]
	 */
    public function index(){
    	// Get Data from CourseType
    	// $course_types = CourseType::all();
         
    	// Return view with the data
        // return view('trainer', [
        //  'course_types' => $course_types
        // ]);
    }

    /**
     * Receive Trainee data from view
     * Store the data to Trainee Database
     * Return success/fail message
     * @param  Request
     * @return [string]
     */
    public function postTrainee(Request $request){
    	// Validation
        // $rules = [
        //     'email' => 'required|email'
        // ];
        // if(!$this->validate($request, $rules)){
        //     $email_trainee = $request['email'];
            // Store Data 
            // try{
                // $trainee = new Trainee();
                // $trainee->email = $email_trainee;
                // $trainee->save();
            // } catch(\Illuminate\Database\QueryException $e){
                // $errorCode = $e->errorInfo[1];
                // Duplicate Email (1062) in The Database
                // if($errorCode == 1062){ 
            //         return redirect()
            //                 ->route('')
            //                 ->with('email_duplicate', "");
            //     }
            // }
            // Return Success/Fail Message
            // return redirect()
            //        ->route()
            //        ->with('message', 'success'); 
        // }
    }

    /**
     * Receive Trainer data from view
     * Store the data to Trainer Database
     * Return success/fail message
     * @param  Request
     * @return [string]
     */
    public function postTrainer(Request $request, $id){
    	// Validation
        // $rules = [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'course_type_id' => 'required',
        //     'course_field' => 'required',
        //     'course_description' => 'required'
        // ];
        // if(!$this->validate($request, $rules)){
        //     $name_trainer = $request['name'];
        //     $email_trainer = $request['email'];
        //     $course_type_id = CourseType::find($id)->id;
        //     $course_field = $request['course_field'];
        //     $course_description = $request['course_description'];
        	// Store Data
            // try {
                // $trainer = new Trainer();
            	// $trainer->name = $name_trainer;
            	// $trainer->email = $email_trainer;
            	// $trainer->course_type_id = $course_type_id;
            	// $trainer->course_field = $course_field; // not added to the database
            	// $trainer->course_description = $course_description; // not added to the database
            	// $trainer->save();  
        //     } catch (\Illuminate\Database\QueryException $e) {
        //         $errorCode = $e->errorInfo[1];
        //         if($errorCode == 1062){
        //             return redirect()
        //                    ->route('')
        //                    ->with('email_duplicate', "");
        //         }
        //     }
        	// Return Success/Fail Message
            // return redirect()
            //        ->route('')
            //        ->with('message', ""); 
        // }
    }
}
