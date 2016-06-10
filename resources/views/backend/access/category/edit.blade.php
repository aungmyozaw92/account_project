@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.access.category.management') . ' | ' . trans('labels.backend.access.category.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.category.management') }}
        <small>{{ trans('labels.backend.access.category.edit') }}</small>
    </h1>
@endsection


@section('content')
    {!! Form::model($category, ['route' => ['admin.access.category.update', $category->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-category']) !!}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.access.category.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.access.category.header-buttons')
                </div>
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name', trans('validation.attributes.backend.access.category.name'), ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.category.name')]) !!}
                    </div>
                </div><!--form control-->

            </div><!-- /.box-body -->
        </div><!--box-->

        <div class="box box-success">
            <div class="box-body">
                <div class="pull-left">
                    <a href="{!! route('admin.access.category.index') !!}" class="btn btn-danger btn-xs">{{ trans('buttons.general.cancel') }}</a>
                </div>

                <div class="pull-right">
                    <input type="submit" class="btn btn-success btn-xs" value="{{ trans('buttons.general.crud.update') }}" />
                </div>
                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->

    {!! Form::close() !!}
@stop
