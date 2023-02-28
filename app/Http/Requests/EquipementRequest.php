<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipementRequest extends FormRequest
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
            'Designation' =>'required|min:3|max:100',
            'Description' =>'required|min:3',
            'Categorie_id' =>'required',
            'Service_id' =>'required',
            'DateDebut' =>'required',
            'Prix' =>'required',
            'Marque' =>'required',
            'Reference' =>'required',
            'document' =>'required|mimes:pdf|max:3000',
            'image' =>'required|mimes:png,jpg|max:3000',

        ];
        
    }
}
