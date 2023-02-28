<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActiviteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'description' =>'required|min:3|max:100',
            'date' =>'required',
            'duree' =>'required',
            'technicien_id' =>'required',
            'tache_id'=>'required',
            'etat_id'=>'required',
        ];
    }
}
