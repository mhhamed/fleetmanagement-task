<?php

namespace App\Http\Requests\Process\UserSeat;

use Illuminate\Validation\Rule;
use App\Rules\CheckIfSeatIsBookedRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserSeatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
    
        return [

            'date'             => ['required', 'date_format:Y-m-d','after_or_equal:today'],
            'seat_id'          => ['required', new CheckIfSeatIsBookedRule()],
            'trip_id'          => ['required'],
            'from_point_id'    => ['required', Rule::exists('points','id')->where('trip_id',request('trip_id'))],
            'to_point_id'      => ['required', Rule::exists('points','id')->where('trip_id',request('trip_id'))],
        ];
    }
}
