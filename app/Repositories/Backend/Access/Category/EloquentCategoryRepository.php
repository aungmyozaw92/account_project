<?php

namespace App\Repositories\Backend\Access\Category;

use App\Models\Access\Category\Category;
use App\Exceptions\GeneralException;

/**
 * Class EloquentCategoryRepository
 * @package App\Repositories\Category
 */
class EloquentCategoryRepository implements CategoryRepositoryContract
{

    public function findOrThrowException($id)
    {
        if (! is_null(Category::where('id',$id))) {

            return Category::where('id',$id);
        }

        throw new GeneralException(trans('exceptions.backend.access.Category.not_found'));
    }


    public function getCategorysPaginated($per_page, $order_by = 'created_at', $sort = 'asc')
    {
        return Category::orderBy($order_by, $sort)->paginate($per_page);
    }


    public function getAllCategorys($order_by = 'created_at', $sort = 'asc')
    {

        return Category::orderBy($order_by, $sort)->get();
    }

     public function create($input,$type)
    {
        $category            = new Category;
        $category->name   = $input['name'];
        $category->save();
        return true;

        throw new GeneralException(trans('exceptions.backend.access.category.create_error'));
    }

}
