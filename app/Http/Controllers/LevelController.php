<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Http\Requests\LevelRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        /**
         * Syntax for Insert data using Facade
         */
        /*DB::insert('insert into m_level (level_kode, level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);

        return 'Insert data baru berhasil';*/

        /**
         * Syntax for update data using Facade
         */
        /*$row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        return 'Update data berhasil. Jumlah data yang di update: ' . $row . ' baris';*/

        /**
         * Syntax for delete data using Facade
         */
        /*$row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . 'baris';*/

        /**
         * syntax for show all m_level table data
         */
        /*$data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);*/

        /**
         * Show all m_level table data using dataTables
         */
        return $dataTable->render('level.index');
    }

    /**
     * Show page level form
     */
    public function create(): View
    {
        return view('level.create');
    }

    /**
     * validate Level form and store that in database
     */
    public function store(LevelRequest $request): RedirectResponse
    {
        /**
         * The incoming request is valid...
         */

        /**
         * Retrieve the validated input data...
         */
        $validated = $request->validated();

        /**
         * Retrieve a portion of the validated input data...
         */
        $validated = $request->safe()->only(['level_kode', 'level_nama']);

        return redirect('/level');
    }
}
