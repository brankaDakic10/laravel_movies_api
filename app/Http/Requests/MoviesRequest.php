<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // if (request()->isMethod('DELETE')) {
        //     return [];
        // }

        return [
            'title' => 'required|unique:movies',
            'director' => 'required',
            'imageUrl' => 'url',
            'duration'=>'required|integer|min:1|max:500',
            'releaseDate' => 'required|unique:movies',
            'genre' => 'string'

        ];
    }
}
