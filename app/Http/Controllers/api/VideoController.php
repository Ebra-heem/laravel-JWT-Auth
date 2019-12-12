<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class VideoController extends Controller
{
    
	protected $auth;

    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    public function index()
    {
    	$data[]=[
    		['id'=>'1',
    		'name'=>'Learn Html',
    		'description'=>'something'
    	],
    	[
    		'id'=>'2',
    		'name'=>'Learn CSS',
    		'description'=>'something new'
    	]
    	];
    	return response()->json([
                'success' =>true,
                'data' =>$data
            ],200);
    }
}
