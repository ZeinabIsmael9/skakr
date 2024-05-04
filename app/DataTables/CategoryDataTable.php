<?php

namespace App\DataTables;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Carbon as SupportCarbon;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;


class CategoryDataTable extends DataTable
{
    public function dataTable($query)
    {
        return (new EloquentDataTable($query))
            // ->eloquent($query)
            // ->addColumn('action', function($category) {
            //     return '<a href="'. route('dashboard.categories.edit', $category->id) .'" class="btn btn-primary">Edit</a>
            //             <form action="'. route('dashboard.categories.destroy', $category->id) .'" method="POST">
            //                 '. method_field('DELETE') . csrf_field() .'
            //                 <button type="submit" class="btn btn-danger">Delete</button>
            //             </form>';
            // });
            ->addColumn('action', function (Category $model) {
                return view('dashboard.pages.category.columns._actions', ['model'=>$model,'route_name'=>'dashboard.categories']);
            })
            
            ->editColumn('created_at', function($data){
                return Carbon::parse($data->created_at)->toDateTimeString();
            })
            ->editColumn('updated_at', function($data){
                return Carbon::parse($data->updated_at)->toDateTimeString();
            })
            ->setRowId('id');
    }

    public function query(Category $model)
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('categories-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([

                    ]);
    }
    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    protected function filename():string
    {
        return 'Category_' . date('YmdHis');
    }
}


