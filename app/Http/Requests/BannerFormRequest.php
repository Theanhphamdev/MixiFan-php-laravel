<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BannerFormRequest extends FormRequest
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
            "title" => [
                "required",
            ],
            "heading" => [
                "required",
            ],
            "file_upload" => [
                "required",
                "mimes:jpg,png,bmp"
            ]

        ];
        if ($this->id == null){
            $formRuels['file_upload'][] = "required";
        }
    }
}
