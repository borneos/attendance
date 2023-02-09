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
            'name'        => $request->name,
            'address'     => $request->address,
            'whatsapp'    => $request->whatsapp,
            'instagram'   => $request->instagram,
            'institution' => $request->institution,
            'time_visit'  => $request->time_visit,
            'reason'      => $request->reason,
            'info'        => $request->info,
        ]);
        Alert::success('Success', 'Data Saved Successfully');
        return view('form.index');
    }
}
