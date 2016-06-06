<?php

namespace App\Http\Controllers\Backend\Access\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Access\Category\StoreCategoryRequest;
use App\Repositories\Backend\Access\Category\CategoryRepositoryContract;

class CategoryController extends Controller
{
     protected $category;

    public function __construct(CategoryRepositoryContract $category)
    {
        $this->category       = $category;
    }

    public function index()
    {
        return view('backend.access.category.index')
            ->withCategory($this->category->getCategorysPaginated(50));
    }
    public function create()
    {
        return view('backend.access.category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->category->create($request->all(),'category');
        return redirect()->route('admin.access.category.index')->withFlashSuccess(trans('alerts.backend.category.created'));
    }

   
}
