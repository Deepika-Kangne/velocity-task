<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NumericSquareRootRequest extends FormRequest
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

    public function rules()
    {
         $productRules = $this->getProductRules();
         return $productRules;
    }

    protected function prepareForValidation() 
    {
        $this->merge(['squareNo' => $this->route('squareNo')]);
    }

    public function getProductRules() {
        return [
            'squareNo' => ['required','numeric']
        ];
    }
}
