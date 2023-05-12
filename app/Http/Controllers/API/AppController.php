<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComplianceApp;

class AppController extends Controller
{
    //
    function index() {
        return view('member.app');
    }

    public function add(Request $request)
    {
        try{



            if ($request->file('file')) {

                $upload_path = "assets/complianceapp";
                $generate_new_name = time().'.'.$request->file->getClientOriginalExtension();
                $request->file->move(public_path($upload_path),$generate_new_name);

                $complianceapp = new ComplianceApp();
                $complianceapp->group_of_complaints = $request->group_of_complaints;
                $complianceapp->type_of_complaints = $request->type_of_complaints;
                $complianceapp->detail_of_event = $request->detail_of_event;
                $complianceapp->the_attached_file = $generate_new_name;
                $complianceapp->save();
                
            }else{

                $complianceapp = new ComplianceApp();
                $complianceapp->group_of_complaints = $request->group_of_complaints;
                $complianceapp->type_of_complaints = $request->type_of_complaints;
                $complianceapp->detail_of_event = $request->detail_of_event;
                $complianceapp->the_attached_file = $generate_new_name;
                $complianceapp->save();

            }

            $success = true;
            $message = "ສົ່ງຂໍ້ມູນສຳເລັດ";
            
        } catch (\Illuminate\Database\QueryException $ex){
            $success = false;
            $message = $ex->getMessage();
        }

        $response = [
            "success" => $success,
            "message" => $message
        ];

        return response()->json($response);
    }
}

