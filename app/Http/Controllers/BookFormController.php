<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookform;

class BookFormController extends Controller
{
  public function showForm()
  {
    return view ('book_form');

  }

  public function storeForm (Request $request)
  {
    $validatedData = $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'address'=>'required',
        'location'=>'required',
        'guests'=>'required|numeric',
        'arrivals'=>'required|date',
        'leaving'=>'required|date|after:arrivals',
    ]);

    Bookform::create($validateData);
    
    return redirect ()-> route ('form.thankyou');

  }
}
