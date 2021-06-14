<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use Illuminate\Http\Request;

class FormControler extends Controller
{
    public function checkValidation(CreateRequest $request)
    {
        echo 'name:' . $request->name . '. price: ' . $request->price . '. type: ' . $request->type . '. origin: ' . $request->origin . '. date_of_produce: ' . $request->date_of_produce . '. alcohol_concentration: ' . $request->alcohol_concentration;
    }
}
