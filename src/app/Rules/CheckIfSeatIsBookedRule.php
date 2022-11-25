<?php

namespace App\Rules;

use Domain\Process\Seat\Models\UserSeat;
use Illuminate\Contracts\Validation\Rule;

class CheckIfSeatIsBookedRule implements Rule
{

    private $message;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
    //    $seatExists = UserSeat::query()
    //             ->where('seat_id', request('seat_id'))
    //             ->where('date', request('date'))
    //             ->where('from_point_id', request('from_point_id'))
    //             ->where('to_point_id', request('to_point_id'))
    //             ->exists();

        
            $seatExists = UserSeat::
                where('seat_id',request('seat_id'))
                ->where('date',request('date'))
                ->where(function($query){
                  $query
                  ->where('from_point_id', '<=', request('from_point_id'))
                  ->orWhere('from_point_id','<', request('to_point_id'));
                })
                ->where(function($query){
                    $query->where('to_point_id','>', request('from_point_id'));
                    $query->orWhere('to_point_id','>=', request('to_point_id'));
                 })
                ->exists();        

         if($seatExists){
            $this->message = trans('general.no_available_seats');
            return false;
          } 
          
          
        return true;   
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
