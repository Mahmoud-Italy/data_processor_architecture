<?php

namespace App\Http\Controllers\frontend;

use DB;
use File;
use Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class AppCtrl extends Controller
{
    public function index()
    {
    	#Grap All Data
    	$data = Product::orderBy('id','DESC')->get();
    	return view('frontend.layouts.app')->withdata($data);
    }
   
    public function exportJSON()
    {
    	#Export JSON file
    	$data = Product::orderBy('id','DESC')->get();
		$filename = "products.json";
        $handle = fopen($filename, 'w+');

        #Convert Data to JSON PRETTY PRINT
        fputs($handle, $data->toJson(JSON_PRETTY_PRINT));
        fclose($handle);

        #Fix Content Type to allowed json files
        $headers = array('Content-type'=> 'application/json');
        return response()->download($filename,'data.json',$headers);
    }

    public function exportCSV()
    {
    	#Convert Data to Array
    	$data = Product::orderBy('id','DESC')->get()->toArray();

    	#Export CSV File
        return Excel::create('csv_products', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download('csv');
    }

    public function importJSON(Request $request)
    {
    	#Validation required file with only extension json
    	$request->validate([
            'import_file' => 'required|mimes:json,txt'
        ]);

        try {
        	#Upload File to public director
        	$path = 'uploads/json/';
        	$filename = date('Y-m-d-h-i-s').'.json';
        	$file = $request->file('import_file');
        	$file->move(public_path().'/'.$path,$filename);

        	#Then Read file and json_decoded
	        $json = File::get(public_path().'/'.$path.''.$filename);
			$data = json_decode($json);
			$array = (array) $data;
            
            #Foreach data stored in file and Insert to DB
			foreach ($array as $obj) {
				DB::table('products')->insert(array(
				    'name' => ((isset($obj->name) ? $obj->name : null)),
				    'description' => ((isset($obj->description) ? $obj->description : null))
				));
			}
			return back()->with('success', 'Insert Record successfully.');
        } catch (\Exception $e) {
        	return back()->with('error', 'Invalid JSON File');
        }
    }


    public function importCSV(Request $request)
    {
    	#Validation required file with only extension csv
    	$request->validate([
            'import_file' => 'required|mimes:csv,txt'
        ]);

        try {
        	#Upload File to public director
        	$path = 'uploads/csv/';
        	$filename = date('Y-m-d-h-i-s').'.csv';
        	$file = $request->file('import_file');
        	$file->move(public_path().'/'.$path,$filename);
            
            #Then Read File with permissions read
          	$file = fopen(public_path().'/'.$path.$filename,"r");
          	$importData_arr = array();

          	#Prepare for looping on data count
          	$i = 0;
          	while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             #Skipp first Row
             if($i == 0){ $i++; continue; }
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);
            
            #Insert data to DB
	        foreach($importData_arr as $importData){
	            $insertData = array(
	               "name"=>$importData[1],
	               "description"=>$importData[2]);
	           	Product::insert($insertData);
	        }
			return back()->with('success', 'Insert Record successfully.');
        } catch (\Exception $e) {
        	return back()->with('error', 'Invalid CSV File');
        }
    }

}
