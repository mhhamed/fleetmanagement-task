<?php
namespace App\Http\Controllers\Api\Process;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Support\Http\Responses\ApiResponse;
use App\Http\Resources\Process\SeatResource;
use Domain\Process\Seat\Actions\StoreUserSeatAction;
use App\Http\Requests\Process\UserSeat\StoreUserSeatRequest;
use Domain\Process\Seat\DataObjects\UserSeatObject;

class UserSeatController extends Controller{


    public function store(StoreUserSeatRequest $request,StoreUserSeatAction $action):JsonResponse
    {
        $action(new UserSeatObject(...$request->validated()));
        return ApiResponse::successAction(trans('general.successAction') ,Response::HTTP_OK);
    }
 
}