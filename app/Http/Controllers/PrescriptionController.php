<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    function printPrescription (Request $req) 
    {
        $data = array(
            'name' => $req->name,
            'age' => $req->age,
            'address' => $req->address,
            'patient_id' => $req->patient_id,
            'medicine' => $req->medicine,
            'advice' => $req->advise,
        );
        $pdf = PDF::setOptions(['isRemoteEnabled'=> true])->loadView('prescription.template', [
            'name' => $req->name,
            'age' => $req->age,
            'address' => $req->address,
            'patient_id' => $req->patient_id,
            'medicine' => $req->medicine,
            'advice' => $req->advise,
        ]);
        //$pdf->set_option('isRemoteEnabled', true);
        //return $pdf->download('prescription.pdf');
        return $pdf->stream();
        // return view('prescription.template', [
        //     'name' => $req->name,
        //     'age' => $req->age,
        //     'address' => $req->address,
        //     'patient_id' => $req->patient_id,
        //     'medicine' => $req->medicine,
        //     'advice' => $req->advise,
        // ]);
    }
}
