<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveProductRequest extends Request
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
            'name' => 'required|unique:categories|max:255',
            'description' => 'required|max:400',
            'size' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'varietal_id' => 'required',
            'winery_id' => 'required',
            //'image' => 'mimes:jpeg,bmp,png,gif',
            'description_file' => 'mimes:pdf',
        ];
    }
}
