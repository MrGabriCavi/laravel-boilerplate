<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Resources\Json\JsonResource;

class LandingController extends ApiController
{
    public function index()
    {
        $apiVersionRegexRes = preg_match("/\\\\Api\\\\(.*)\\\\/",self::class, $match);
        list($matchString, $apiVersion) = $match;
        return new JsonResource([
            "apiVersion" => $apiVersion
        ]);
    }
}
