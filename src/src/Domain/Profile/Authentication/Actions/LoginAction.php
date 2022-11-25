<?php


namespace Domain\Profile\Authentication\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Domain\Profile\Authentication\DataObjects\LoginDataObject;


class LoginAction {

    public function __invoke(LoginDataObject $object){


        $token = Auth::attempt($object->toArray());
        if (!$token) {
            throw new AuthenticationException(trans('general.invalid_credentials'));
        }

        return $token;
    }

}