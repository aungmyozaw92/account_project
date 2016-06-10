<?php

namespace App\Models\Access\Category\Traits\Attribute;

/**
 * Class UserAttribute
 * @package App\Models\Access\Category\Traits\Attribute
 */
trait CategoryAttribute
{



    public function getCategoryEditButtonAttribute()
    {
        if (access()->allow('edit-category')) {
             return '<a href="' . route('admin.access.category.edit', $this->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.edit') . '"></i></a> ';
        }

        return '';
    }

   public function getCategoryDeleteButtonAttribute()
    {
            if (access()->allow('delete-category')) {
                return '<a href="' . route('admin.access.category.destroy', $this->id) . '" class="btn btn-xs btn-danger" data-method="delete"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></a>';
            }

        return '';
    }

     public function getCategoryActionButtonsAttribute()
    {
        return $this->getCategoryEditButtonAttribute() .
        $this->getCategoryDeleteButtonAttribute();
    }



   
}
