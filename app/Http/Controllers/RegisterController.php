<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public   function create()
    {
        return View('register.create');
    }

    public  function store(Request $request)
    {
        

        $request->validate([
            'name' => 'required|min:5|max:200',
            'password' => 'required|max:200'
        ]);

        // return View('register.create');
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function FunctionName()
    {
        # code...
    }
}
