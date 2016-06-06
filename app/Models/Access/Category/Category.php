<?php

namespace App\Models\Access\Category;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Category\Traits\CategoryAccess;
use App\Models\Common;
use DB;

/**
 * Class Category
 * @package App\Models\Access\Category
 */
class Category extends Model
{
    use CategoryAccess;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;
    protected $connection;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->connection = config('access.category_connection');
        $this->table = config('access.category_table');
    }

   
}
