<?php

namespace App\Http\Requests\Process\Seat;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AvailableSeatRequest extends FormRequest
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
            'from_point_id'    => ['required', Rule::exists('points','id')->where('trip_id',request('id'))->where('last_point',0)],
            'to_point_id'      => ['required', Rule::exists('points','id')->where('trip_id',request('id'))],
            'date'             => ['required', 'date_format:Y-m-d','after_or_equal:today'],
            'time'             => ['nullable', 'date_format:H:i:s'],
        ];
    }
}
