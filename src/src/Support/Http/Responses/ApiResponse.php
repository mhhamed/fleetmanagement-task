<?php
namespace Support\Http\Responses;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;


class ApiResponse {

    public static array $headers = [
        'Content-Type' => 'application/json',
    ];

    public static function success( $data = [],int $status = Response::HTTP_OK,array $headers = []): JsonResponse
    {
        return new JsonResponse(
            
            $data,
            $status ,
            array_merge( static::$headers,$headers)
        );
    }
    public static function successAction( $message,$data = null,int $status = Response::HTTP_OK,array $headers = []): JsonResponse
    {
        return new JsonResponse(
               [
                'message' => $message,
                'data' => $data,
               ],
            $status ,
            array_merge( static::$headers,$headers)
        );
    }

    public static function error(string $message , int $status = Response::HTTP_INTERNAL_SERVER_ERROR,array $headers = []){
        return new JsonResponse(
            [
                'error' => $message,
                'status' => $status
        
           ],
            $status ,
            array_merge( static::$headers,$headers)
        );
    }


    public static function successNoPaginate( $data ,int $status = Response::HTTP_OK,array $headers = []): JsonResponse
    {
        return new JsonResponse(
             ['data' => $data]
            ,
            $status ,
            array_merge( static::$headers,$headers)
        );
    }
}