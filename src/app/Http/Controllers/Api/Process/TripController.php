<?php
namespace App\Http\Controllers\Api\Process;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Support\Http\Responses\ApiResponse;
use App\Http\Resources\Process\TripResource;
use Domain\Process\Trip\Actions\IndexTripAction;


class TripController extends Controller{


    public function index(IndexTripAction $action):JsonResponse
    {

        return ApiResponse::success(TripResource::collection($action())
           ->additional([
            'filters' => [
                'limit'       => 'number of items in a single page',
                'page'        => 'Page Number',
            ],])->response()->getData(),Response::HTTP_OK);
    }
 
}