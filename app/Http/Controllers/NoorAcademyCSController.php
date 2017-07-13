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
        
    	// Store Data
    	// $trainee = new Trainee();
    	// $trainee->email = $request['email'];
    	// $trainee->save();
         
    	// Return Success/Fail Message
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
         
    	// Store Data
    	// $trainer = new Trainer();
    	// $trainer->name = $request['name'];
    	// $trainer->email = $request['email'];
    	// $trainer->course_type_id = CourseType::find($id)->id;
    	// $trainer->course_field = $request['course_field']; // not added to the database
    	// $trainer->course_description = $request['course_description']; // not added to the database
    	// $trainer->save();
         
    	// Return Success/Fail Message
    }
}
