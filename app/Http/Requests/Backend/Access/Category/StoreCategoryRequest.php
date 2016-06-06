<?php

namespace App\Http\Requests\Backend\Access\Category;

use App\Http\Requests\Request;

/**
 * Class StoreCategoryRequest
 * @package App\Http\Requests\Backend\Access\Category
 */
class StoreCategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-category') || access()->allow('edit-category');
    }

    public function rules()
    {

        $rules = array(
                    'name' => 'required'
                );

        return $rules;
    }
}
