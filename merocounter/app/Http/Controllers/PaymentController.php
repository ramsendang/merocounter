<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class PaymentController extends Controller
{
    public function index(Request $request, Booking $booking){
        return view('pages.payment',[
            'booking'=>$booking
        ]);
    }
}
