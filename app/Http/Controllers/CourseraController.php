<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursera;

class CourseraController extends Controller
{
	public function index(){

		$url = "https://api.coursera.org/api/courses.v1";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		$output = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($output);
		$couArr = $response->elements;
		return view('home',compact('couArr'));
	}

	public function store(Request $request){

		$id = $_POST['id'];
		$cou_name = $_POST['name'];
		$cou_type = $_POST['type'];


		if(isset($id) && isset($cou_name) && isset($cou_type)){
			try {
			$Courses = new Coursera();
			$Courses->Course_ID = $id;
			$Courses->Course_Name = $cou_name;
			$Courses->Course_Type = $cou_type;
			$check = $Courses->save();
			}
			catch(\Exception $e) {
				return response()->json([
					"error" => "Course already Exits in DB"
				], 522);
			}	
			
			if($check == true){
				return response()->json([
					"id" => $id,
					"name" => $cou_name,
					"type" => $cou_type
				], 200);
			}else{
				return response()->json([
					"error" => "Course Exits in DB"
				], 522);
			}
		}else{
			return response()->json([
					"error" => "plse try again"
				], 522);
		}

	}

	public function view(){
		$courses = Coursera::get();
		return view('saved',compact('courses'));
	}
}
