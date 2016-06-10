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

    public function edit($id)
    {
        $category = $this->category->findOrThrowException($id, true);

        return view('backend.access.category.edit')->withCategory($category);

    }

    /**
     * @param  $id
     * @param  UpdateRoleRequest $request
     * @return mixed
     */
    public function update($id, StoreCategoryRequest $request)
    {
        $this->category->update($id, $request->all());
        return redirect()->route('admin.access.category.index')->withFlashSuccess(trans('alerts.backend.category.updated'));
    }

     public function destroy($id)
    {
        $this->category->destroy($id);
        return redirect()->route('admin.access.category.index')->withFlashSuccess(trans('alerts.backend.category.deleted'));
    }

   
}
