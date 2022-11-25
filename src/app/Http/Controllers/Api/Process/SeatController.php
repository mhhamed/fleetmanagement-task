<?php
namespace App\Http\Controllers\Api\Process;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Support\Http\Responses\ApiResponse;
use App\Http\Resources\Process\SeatResource;
use Domain\Process\Seat\Actions\IndexSeatAction;
use Domain\Process\Seat\DataObjects\IndexSeatObject;
use App\Http\Requests\Process\Seat\AvailableSeatRequest;

class SeatController extends Controller{


    public function index(AvailableSeatRequest $request,IndexSeatAction $action,$id):JsonResponse
    {
        return ApiResponse::success(SeatResource::collection($action($id,new IndexSeatObject(...$request->validated())))
          
                 ->response()->getData(),Response::HTTP_OK);
    }
 
}