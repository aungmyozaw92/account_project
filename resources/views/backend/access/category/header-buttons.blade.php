        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              {{ trans('menus.backend.access.category.main') }} <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('admin.access.category.index') }}">{{ trans('menus.backend.access.category.all') }}</a></li>

            @permission('create-category')
                <li><a href="{{ route('admin.access.category.create') }}">{{ trans('menus.backend.access.category.create') }}</a></li>
            @endauth
          </ul>
        </div><!--btn group-->
