<?php

namespace App\DataTables;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
class ItemsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {

        return (new EloquentDataTable($query))
            ->editColumn('product_id', function (Item $model) {
                return $model->product->name;
            })
            ->editColumn('color_id', function (Item $model) {
                return $model->color->name;
            })
            ->editColumn('size_id', function (Item $model) {
                return $model->color->name;
            })
            ->addColumn('action', function (Item $model) {
                return view('dashboard.pages.item.columns._actions', ['model'=>$model,'route_name'=>'dashboard.items']);
            })
            ->editColumn('created_at', function($data){
                return Carbon::parse($data->created_at)->toDateTimeString();
            })
            ->editColumn('updated_at', function($data){
                return Carbon::parse($data->updated_at)->toDateTimeString();
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Item $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('items-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
//                        Button::make('excel'),
//                        Button::make('csv'),
//                        Button::make('pdf'),
//                        Button::make('print'),
//                        Button::make('reset'),
//                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('product_id')->title('Product name'),
            Column::make('color_id')->title('Color name'),
            Column::make('size_id')->title('Size name'),
            Column::make('price'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Item_' . date('YmdHis');
    }
}
