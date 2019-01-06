<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
    public function rules() //called in CategoryController : public function store(CategoryRequest $request)
    {
        return [
            'cat_name'=>'required' ,
            'cat_ename'=>'required|unique:cats,cat_ename,'.$this->cats. '',//while edit this culumn, check all for uniqueness except this one, otherwise error!
            'parent_id'=>'required' ,
            'pic'=>'image|max:1024',
        ];
    }

    public function attributes() //copied to lang/fa/validation
    {
        return
            [
                'cat_name' => 'نام دسته' ,
                'cat_ename' => 'نام لاتین دسته',
                'parent_id'=>'سردسته',
                'pic'=>'تصویر دسته',
            ];
    }
}
