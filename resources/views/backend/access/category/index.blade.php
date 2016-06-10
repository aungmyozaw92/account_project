@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.access.category.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.access.category.management') }}</h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.category.list') }}</h3>

            <div class="box-tools pull-right">
                    @include('backend.access.category.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.backend.access.category.table.no') }}</th>
                        <th>{{ trans('labels.backend.access.category.table.name') }}</th>
                        <th>{{ trans('labels.backend.access.category.table.update_at') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; ?>
                        @foreach ($category as $row)
                            <tr>
                                <td>{!! ++$i !!}</td>
                                <td>{!! $row->name !!}</td>
                                <td>{!! $row->updated_at !!}</td>
                                <td>{!! $row->Categoryaction_buttons !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pull-left">
                {{ $category->total() }} {{ trans_choice('labels.backend.access.category.table.total', $category->total()) }}
            </div>

            <div class="pull-right">
                {{ $category->render() }}
            </div>

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
@stop
