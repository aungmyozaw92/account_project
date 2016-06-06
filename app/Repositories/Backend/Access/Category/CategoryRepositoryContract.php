<?php

namespace App\Repositories\Backend\Access\Category;

/**
 * Interface CategoryRepositoryContract
 * @package App\Repositories\Category
 */
interface CategoryRepositoryContract
{
    /**
     * @param  $id
     * @param  bool    $withRoles
     * @return mixed
     */
    public function findOrThrowException($id);

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @param  $status
     * @return mixed
     */
    public function getCategorysPaginated($per_page,$order_by = 'id', $sort = 'asc');

    public function getAllCategorys($order_by = 'id', $sort = 'asc');

    public function create($input,$type);


}
