<?php

namespace App\DataTables;

use App\User;
use App\Dokumen;
use Yajra\Datatables\Services\DataTable;

class DokumenDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', '');
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Dokumen::select('*');

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableAttribute(['class' => 'no-print table dataTable no-footer table-responsive table-condensed table-small', 'width' => '100%'])
                    ->columns($this->getColumns())
                    ->ajax('')
                    ->addAction(['width' => '100px'])
                    ->parameters([
                        'dom'       => 'Bfrtip',
                        'buttons'   => ['csv', 'excel', 'print', 'reset', 'reload'],
                        'scrollX'   => true,
                        // 'responsive'=> true,
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'user_id',
            // 'ktp',
            'created_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'dokumendatatable_' . time();
    }
}
