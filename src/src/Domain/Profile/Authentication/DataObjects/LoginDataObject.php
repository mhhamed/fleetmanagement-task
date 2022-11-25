<?php

namespace Domain\Profile\Authentication\DataObjects;

class LoginDataObject{
 
    public function __construct(
        public string $phone ,
        public string $password 
        ){}


    public function toArray(){
        return [
             'phone'    => $this->phone,
             'password' => $this->password
        ];  
    }    

}