<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {
        Attendance::create([
            'event'       => $request->event,
            'name'        => $request->fullname,
            'address'     => $request->address,
            'whatsapp'    => $request->whatsapp_number,
            'instagram'   => $request->instagram,
            'institute'   => $request->institute,
            'institution' => $request->institute_name,
            'time_visit'  => $request->time_visit,
            'reason'      => $request->reason_to_visit,
            'info'        => $request->user_info_source_malahing,
        ]);
        Alert::success('Success', 'Data Saved Successfully');
        return view('form.index');
    }
}
