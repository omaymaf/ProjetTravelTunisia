<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 


class BookController extends Controller
{
    public function showForm()
    {
        $testbooks =[
            ['title' => 'name :', 'type' => 'text', 'input' => 'enter your full name', 'name' => 'name', 'value' => ''],
            ['title' => 'email :', 'type' => 'email', 'input' => 'enter your email', 'name' => 'email', 'value' => ''],
            ['title' => 'phone :', 'type' => 'number', 'input' => 'enter your number', 'name' => 'phone', 'value' => ''],
            ['title' => 'address :', 'type' => 'text', 'input' => 'enter your address', 'name' => 'address', 'value' => ''],
            ['title' => 'where to :', 'type' => 'text', 'input' => 'enter your destination', 'name' => 'location', 'value' => ''],
            ['title' => 'how many :', 'type' => 'number', 'input' => 'number of guests', 'name' => 'guests', 'value' => ''],
            ['title' => 'arrivals :', 'type' => 'date', 'input' => 'dd/mm/yyyy', 'name' => 'arrivals', 'value' => ''],
            ['title' => 'leaving :', 'type' => 'date', 'input' => 'dd/mm/yyyy', 'name' => 'leaving', 'value' => ''],
        ];
        return view('book', compact('testbooks'));
    }

    public function submitForm(Request $request)
        {
            $book =new Book();
            $book->name = $request->input('name');
            $book->email = $request->input('email');
            $book->phone = $request->input('phone');
            $book->address = $request->input('address');
            $book->location = $request->input('location');
            $book->guests = $request->input('guests');
            $book->arrivals= $request->input('arrivals');
            $book->leaving = $request->input('leaving');


            //enregistrer le livre dans la base de donnees 
            $book->save();

            return redirect()->route ('form.thankyou');

        }
            


       
    
}



