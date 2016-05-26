<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateProductRequest extends Request
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
            //
            'title' => 'required|unique:products,title,'.$this->product_id, // request->has('product_id')
            'image_file' => 'mimes:png,jpg,bmp,jpeg',
            'image_link' => 'url',
            'product_link' => 'url',
            'old_price' => 'required',
            'video_link' => 'url'
        ];
    }
}
