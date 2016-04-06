<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Modules\CheckerModule;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function complie(Request $request)
    {   
        $output = CheckerModule::complie($request->input('lang'), $request->input('sourceCode'), $request->input('input'));

        return $this->respond(Response::HTTP_OK, $output);
    }
}
