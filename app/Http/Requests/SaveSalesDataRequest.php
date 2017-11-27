<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSalesDataRequest extends FormRequest
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
            'brand' => 'required',
            'model' => 'required',
            'count' => 'required',
            'date' => 'required'
        ];
    }

    /**
     * Get brand.
     *
     * @return mixed
     */
    public function getBrand()
    {
        return $this->get('brand');
    }

    /**
     * Get model.
     *
     * @return mixed
     */
    public function getModel()
    {
        return $this->get('model');
    }

    /**
     * Get count.
     *
     * @return mixed
     */
    public function getCount()
    {
        return $this->get('count');
    }

    /**
     * Get date.
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->get('date');
    }
}
