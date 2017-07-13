<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseType;
use App\Trainee;
use App\Trainer
;
class NoorAcademyCSController extends Controller
{
	/**
	 * Display the Trainer view
	 * Populate the view with data from CourseType Database
	 * Return view with array
	 * @return [array]
	 */
    public function index(){

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
    	// Return Success/Fail Message
    }

    /**
     * Receive Trainer data from view
     * Store the data to Trainer Database
     * Return success/fail message
     * @param  Request
     * @return [string]
     */
    public function postTrainer(Request $request){
    	// Validation
    	// Store Data
    	// Return Success/Fail Message
    }
}
