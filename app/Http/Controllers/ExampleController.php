<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Domains\SubmissionManagement\Checker;

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
        /**
         *  Params
         *
         *  $lang String (require)
         *  $sourceCode String (require)
         *  $input String (optional) 
         */
        $output = Checker::complie($request->input('lang'), 
                                   $request->input('sourceCode'), 
                                   $request->input('input'));

        return $this->respond(Response::HTTP_OK, $output);
    }

    public function checkTestCase(Request $request)
    {   
        /**
         *  Params
         *
         *  $lang String (require)
         *  $sourceCode String (require)
         *  $input String (require) 
         *  $output String (require) 
         */

        $output = Checker::checkTestCase($request->input('lang'), 
                                         $request->input('sourceCode'), 
                                         $request->input('input'), 
                                         $request->input('output'));

        return $this->respond(Response::HTTP_OK, $output);
    }


}
