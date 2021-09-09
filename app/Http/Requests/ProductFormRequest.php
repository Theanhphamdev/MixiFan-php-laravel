<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductFormRequest extends FormRequest
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
        $formRuels = [
            "name" => [
                "required",
                Rule::unique('products')->ignore($this->id)
            ],
            "description" => [
                "required"
            ],
            "short_description" => [
                "required"
            ],
            "file_upload" => [
                "required",
                "mimes:jpg,png,bmp"
            ],
            "price" => [
                "numeric",
                "min:0"
            ],
            "quantity" => [
                "numeric",
                "min:0"
            ],
            "weight" => [
                    "numeric",
                    "min:0"
                ],
            "height" => [
                    "numeric",
                    "min:0"
                ],
            "width" => [
                    "numeric",
                    "min:0"
                ],
            "length" => [
                    "numeric",
                    "min:0"
                ],
        ];
        if ($this->id == null){
            $formRuels['file_upload'][] = "required";
        }
        return $formRuels;
    }
}
