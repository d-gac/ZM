<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlRequest;
use App\Models\Location;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function __invoke(UrlRequest $request)
    {
        dump($request->get('City'), $request->get('Street'), $request->get('Nr'));
        $services = Location::with('service')
                ->where('city', $request->get('City'))
                ->where('street', $request->get('Street'))
                ->where('number', $request->get('Nr'))
                ->get()->toArray();

        dd($services[0]['service']);

//        $response = [];
//        foreach ($services->service as $key => $service){
//            $response[$key] = $service;
//        }
//
//        dd($response);
    }
}
