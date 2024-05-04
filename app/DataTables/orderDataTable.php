<?php

namespace App\DataTables;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class orderDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Order $model) {
                return view('dashboard.pages.order.columns._actions', ['model'=>$model,'route_name'=>'dashboard.orders']);
            })
            ->editColumn('user_id', function (Order $model) {
                return $model->user->name;
            })
            ->editColumn('created_at', function($data){
                return Carbon::parse($data->created_at)->toDateTimeString();
            })
            ->editColumn('updated_at', function($data){
                return Carbon::parse($data->updated_at)->toDateTimeString();
            })
            ->setRowId('id');
            // ->editColumn('id', function ($order) {
            //     return '<a href="'. route('dashboard.orders.show', $order->id) .'">'. $order->id .'</a>';
            // });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(order $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('order-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        // Button::make('excel'),
                        // Button::make('csv'),
                        // Button::make('pdf'),
                        // Button::make('print'),
                        // Button::make('reset'),
                        // Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('sub_total'),
            Column::make('total'),
            Column::make('user_id')->title('User name'),
            Column::make('created_at'),
            Column::make('updated_at'),
            // 'id',
            // 'sub-total',
            // 'total',
            // 'user_id'=>'user-name',
            
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
        return 'order_' . date('YmdHis');
    }
}
