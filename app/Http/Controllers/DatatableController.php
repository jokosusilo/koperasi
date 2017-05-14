<?php
namespace App\Http\Controllers;

use App\Nasabah;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use Yajra\Datatables\Services\DataTable;

class DatatableController extends Controller
{
    /**
     * Datatable API section
     */

    public function nasabah(Request $request)
    {
        DB::statement(DB::raw('set @rownum=0'));
        $data = Nasabah::select([
            '*',
            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
            ]);
        $datatables = Datatables::of($data);

        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }

        // $datatables->editColumn('created_at', function ($data){
        //     return format_tanggal($data->created_at);
        // });

        // $datatables->addColumn('action', function ($data){
        //     $route = 'items';
        //     $show  = true;
        //     return view('partial.button', compact('data', 'route', 'show'))->render();
        // });

        return $datatables->make(true);
    }
}
