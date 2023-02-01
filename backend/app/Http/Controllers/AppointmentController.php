<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function show($id)
    {
        $appointment = Appointment::find($id);
            if (! $appointment) {
                return response()->json([
                    'error' => 'Post not found'
                ], 404);
            }
    
            return response()->json([
                'data' => $appointment
            ]);
    }
    public function store (Request $request){
        return Appointment::create([
            "full_name" => $request->full_name,
            "address" => $request->address,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "type_of_service" => $request->type_of_service,
            "price" => $request->price,
            "clothes_weight" => $request->clothes_weight,
            "total_payment" => $request->total_payment,
            "available_time" => $request->available_time,
            "available_date" => $request->available_date,

        ]);
    }
    public function update (Request $request){
        return Appointment::create([
            "full_name" => $request->full_name,
            "address" => $request->address,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "type_of_service" => $request->type_of_service,
            "price" => $request->price,
            "clothes_weight" => $request->clothes_weight,
            "total_payment" => $request->total_payment,
            "available_time" => $request->available_time,
            "available_date" => $request->available_date,
        ]);
    }
    public function destroy($id)
    {
        return Appointment::find($id)->delete();
    }
}
