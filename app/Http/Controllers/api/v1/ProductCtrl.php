<?php

namespace App\Http\Controllers\api\v1;

use DB;
use Response;
use XmlParser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductCtrl extends Controller
{
    public function exportJSON()
    {
    	#Providers
    	$httpCode = 500;
    	$status = false;
    	$exp = '';
    	try {
    		$data = DB::table('products')->select('id','name','description')->orderBy('id','DESC')->get();
    		if(count($data) == 0) {
    			$httpCode = 500;
    			$status = false;
    			$exp = "No data found.";
    		} else {
	    		$httpCode = 200;
	    		$status= true;
	    		$exp = "Data Loaded Successfully.";
    		}
    	} catch (\Exception $e) {
    		$exp = "Something went wrong.";
    	}
    	return Response::json(['httpCode'=>$httpCode,'success'=>$status,'exp'=>$exp,'data'=>$data]);
    }

    public function exportXML()
    {
    	#Providers
    	$httpCode = 500;
    	$status = false;
    	$exp = '';
    	try {
    		$data = Product::select('id','name','description')->orderBy('id','DESC')->get()->toArray();
    		if(count($data) == 0) {
    			$httpCode = 500;
    			$status = false;
    			$exp = "No data found.";
    		} else {
	    		$httpCode = 200;
	    		$status= true;
	    		$exp = "Data Loaded Successfully.";
    		}
    	} catch (\Exception $e) {
    		$exp = "Something went wrong.";
    	}
    	return response()->xml(['httpCode'=>$httpCode,'success'=>$status,'exp'=>$exp,'data'=>$data]);
    }




    public function importJSON(Request $request)
    {
    	#Providers
    	$httpCode = 500;
    	$status = false;
    	$exp = "";
    	$data = $request->input('data');
    	if(!$data) { $exp = "Missing Data"; }
    	else {
    		try {
    			#Convert JSON and insert into DB
    			$json = json_decode($data, true);
    			Product::insert($json);
	    		$status = true;
	    		$httpCode = 200;
	    		$exp = "JSON Added Successfully";
    		} catch (\Exception $e) {
    			$exp = "Invalid JSON data";
    		}
    	}    	
    	return Response::json(['httpCode'=>$httpCode,'success'=>$status,'exp'=>$exp]);
    }

    public function importXML(Request $request)
    {
    	#Providers
    	$httpCode = 500;
    	$status = false;
    	$exp = "";
    	$data = $request->input('data');
    	if(!$data) { $exp = "Missing Data"; }
    	else {
    		try {
    			#Convert XML data to JSON and insert into DB
    			$xml = simplexml_load_string($data);
				$json = json_encode($xml);
				$array = json_decode($json,TRUE);
    			Product::insert($array);
	    		$status = true;
	    		$httpCode = 200;
	    		$exp = "XML Added Successfully";
    		} catch (\Exception $e) {
    			$exp = "Invalid XML data";
    		}
    	}    	
    	return Response::json(['httpCode'=>$httpCode,'success'=>$status,'exp'=>$exp]);
    }
}
