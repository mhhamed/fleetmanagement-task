<?php
namespace App\Http\Controllers\Api\Profile\Authentication;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Support\Http\Responses\ApiResponse;
use App\Http\Resources\Profile\UserResource;
use Domain\Profile\Authentication\Actions\LoginAction;
use App\Http\Requests\Profile\Authentication\LoginRequest;
use Domain\Profile\Authentication\DataObjects\LoginDataObject;


class AuthenticationController extends Controller{

  


    public function user(): JsonResponse
    {

        return  ApiResponse::successAction(
                   trans('general.successAction'),
                   new UserResource(auth()->user())
                  , Response::HTTP_OK);


    }

   
    public function login(LoginRequest $request,LoginAction $action): JsonResponse
    {
            $token = $action(new LoginDataObject(...$request->validated()));
            
            return  ApiResponse::success(
                [
                    'message'      =>  trans('general.login_successfully'),
                    'token'        => $token,
                    'user'         => new UserResource(auth()->user()),
                ]
                
             ,Response::HTTP_OK);
    }



    public function logout()
    {
    }
}