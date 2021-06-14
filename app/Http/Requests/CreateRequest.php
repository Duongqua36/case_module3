<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name'=>'required',
            'price'=>'required|numeric',
            'type'=>'required',
            'origin'=>'required',
            'date_of_produce'=>'required',
            'alcohol_concentration'=>'required|numeric',
            'image'=>'required'
        ];
    }

    public function messages(){
        $messages=[
            'name.required'=>'Tên không được để trống',
            'price.required'=>'bảng giá không được để trống',
            'price.numeric'=>'bảng giá phải là kiểu số',
            'type.required'=>' loại sản phẩm không được để trống',
            'origin.required'=>'không để trống xuất xứ sản phẩm',
            'date_of_produce.required'=>'không được để trống ngày sản xuất',
            'alcohol_concentration.required'=>'không để trống nồng độ',
            'alcohol_concentration.numeric'=>'phải là kiểu số',
            'image.required'=>'không được để trống ảnh',
        ];
        return $messages;
    }
}
