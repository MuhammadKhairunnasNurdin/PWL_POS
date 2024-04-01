<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;
use App\Models\LevelModel;
use App\DataTables\UserDataTable;
use App\Http\Requests\UserRequest;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * handling view home page user
     */
    public function index(): View
    {
        /**
         * Insert data using Eloquent Model
         */
        /*$data = [
            'username' => 'customer-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 4
        ];*/
        /**
         * inserted our data using insert() function
         */
        /*UserModel::insert($data);*/

        /**
         * Update data using Eloquent Model
         */
        /*$data = [
            'nama' => 'Pelanggan pertama',
        ];*/
        /**
         * Updated our data with update() function
         */
        /*UserModel::where('username', 'customer-1')->update($data);*/

        /**
         * Example mass assignment using Eloquent ORM (with attribute
         * $fillable)
         */
       /* $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);*/

        /**
         * Try access all row in UserModel table
         */
        /*$user = UserModel::all();*/

        /**
         * finding row in UserModel table that has an id
         */
        /*$user = UserModel::find(1);*/

        /**
         * finding row in UserModel table with criteria(where()) and first
         * row from that criteria
         */
        /*$user = UserModel::where('level_id', 1)->first();*/

        /**
         * this method has exact meaning with our above code
         */
        /*$user = UserModel::firstWhere('level_id', 1);*/

        /**
         * method for finding row with primary key, and different with
         * find() method above, findOr() can handle if finding failed with
         * error message like bellow or other way
         */
        /*$user = UserModel::findOr(20, ['username', 'nama'], function () {
        abort(404);
        });*/

        /**
         * method finding data with handled exception when row not found
         */
        /*$user = UserModel::findOrFail(1);*/

        /**
         * Execute the query and get the first result or throw an
         * exception.
         */
        /*$user = UserModel::where('username', 'manager9')->firstOrFail();*/

        /**
         * Retrieve the "count" result of the query.
         */
        /*$user = UserModel::where('level_id', 2)->count();
        return view('user', ['data' => ['jumlahPengguna' => $user]]);*/

        /**
         * firstOrCreate() method with existing data available
         */
        /*$user = UserModel::firstOrCreate(
            [
                'username' => 'manager',
                'nama' => 'Manager'
            ]
        );*/

        /**
         * firstOrCreate() method with data isn't available
         */
        /*$user = UserModel::firstOrCreate(
            [
                'username' => 'manager22',
                'nama' => 'Manager Dua Dua',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );*/

        /**
         * firstOrNew() method with existing data available
         */
        /*$user = UserModel::firstOrNew(
            [
                'username' => 'manager',
                'nama' => 'Manager'
            ]
        );*/

        /**
         * firstOrNew() method with data isn't available
         *
         * with object saved in database using $object->save()
         */
        /*$user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );
        $user->save();

        return view('user', ['data' => $user]);*/

        /**
         * Attribute value change checking
         */
        /*$user = UserModel::create([
            'username' => 'manager55',
            'nama' => 'Manager55',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);
        $user->username = 'manager56';
        $user->isDirty();                       //true
        $user->isDirty('username');             //true
        $user->isDirty('nama');                 //false
        $user->isDirty(['nama', 'username']);   //true
        $user->isClean();                       //false
        $user->isClean('username');             //false
        $user->isClean('nama');                 //true
        $user->isClean(['nama', 'username']);   //false
        $user->save();
        $user->isDirty();                       //false
        $user->isClean();                       //true
        dd($user->isDirty());*/

        /**
         * Attribute value change checked
         */
        /*$user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ]);
        $user->username = 'manager12';
        $user->save();
        $user->wasChanged();                            //true
        $user->wasChanged('username');                  //true
        $user->wasChanged(['username', 'level_id']);    //true
        $user->wasChanged('nama');                      //false
        dd($user->wasChanged(['nama', 'username']));    //true*/

        /**
         * show all user data
         */
        /*$user = UserModel::all();
        return view('user', ['data' => $user]);*/

        /**
         * show join table from model UserModel and LevelModel
         */
        /*$user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);*/

        /**
         * Show all m_user table data using dataTables
         *
         * This for active menu we set in datatables
         */
        /*return $dataTable->render('user.index');*/

        $breadcrumb = (object) [
            'title' => 'Daftar User',
            'list' => ['Home', 'User']
        ];

        $page = (object) [
            'title' => 'Daftar User yang terdaftar dalam sistem'
        ];

        /**
         * Set active menu
         */
        $activeMenu = 'user';

        /**
         * Retrieve all level data for filter in User table
         */
        $level = LevelModel::all();

        return view('user.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level,'activeMenu' => $activeMenu]);
    }

    /**
     * Show page user form
     */
    public function create(): View
    {
        $breadcrumb = (object) [
            'title' => 'Tambah User',
            'list' => ['Home', 'User', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah User baru'
        ];

        /**
         * Retrieve all level data
         */
        $level = LevelModel::all();

        /**
         * Set active menu
         */
        $activeMenu = 'user';

        return view('user.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
    }

    /**
     * validate user form and store that in database
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            /**
             * Username must fill with string, minimum 3 character, and
             * unique in existing m_user username data
             */
            'username' => 'required|string|min:3|unique:m_user,username',

            /**
             * Must be fill with string, with maximum 100 character
             */
            'nama' => 'required|string|max:100',

            /**
             * password must have minimum 5 character
             */
            'password' => 'required|min:5',

            /**
             * level must fill with number
             */
            'level_id' => 'required|integer',
        ]);

        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,

            /**
             * password is encrypted before save in database
             */
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
        ]);

        return redirect('/user')->with('success', 'Data user berhasil disimpan');
    }

    /**
     * take user data in JSON format for datatables
     * @throws \Exception
     */
    public function list(Request $request): JsonResponse
    {
        $users = UserModel::select(['user_id', 'username', 'nama', 'level_id'])
                    ->with('level');

        /**
         * Filter User data that we retrieve above base level_id retrieved in user.index view
         */
        if ($request->level_id) {
            $users->where('level_id', $request->level_id);
        }

        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('aksi', function ($user) {
                $btn  = '<a href="'.url('/user/' . $user->user_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/user/' . $user->user_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'. url('/user/'.$user->user_id).'">'

                             . csrf_field()
                             . method_field('DELETE') .
                            '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button>
                        </form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * show detail data from table that using list() function to show all data
     */
    public function show(string $id): View
    {
        $user = UserModel::with('level')->find($id);

        $breadcrumb = (object)[
            'title' => 'Detail User',
            'list' => ['Home', 'User', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail user'
        ];

        /**
         * Set active menu
         */
        $activeMenu = 'user';

        return view('user.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user,'activeMenu' => $activeMenu]);
    }

    /**
     * show form edit user
     */
    public function edit($id):View
    {
        /**
         * Retrieve specific user data with id
         */
        $user = UserModel::find($id);

        /**
         * Retrieve all level data
         */
        $level = LevelModel::all();

        $breadcrumb = (object)[
            'title' => 'Edit User',
            'list' => ['Home', 'User', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit User'
        ];

        /**
         * Set active menu
         */
        $activeMenu = 'user';

        return view('user.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'level' => $level, 'activeMenu' => $activeMenu]);
    }

    /**
     * saving edited form data in database
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            /**
             * Username must fill with string, minimum 3 character, and
             * unique in existing m_user username data, except for user that with id we edit
             */
            'username' => 'required|string|min:3|unique:m_user,username, '.$id. ',user_id',

            /**
             * Must be fill with string, with maximum 100 character
             */
            'nama' => 'required|string|max:100',

            /**
             * password must have minimum 5 character and can be null(if user hadn't filled in edit)
             */
            'password' => 'nullable|min:5',

            /**
             * level must fill with number
             */
            'level_id' => 'required|integer',
        ]);

        UserModel::find($id)->update([
            'username' => $request->username,
            'nama' => $request->nama,

            /**
             * password is encrypted before save in database
             */
            'password' => $request->password ? bcrypt($request->password) : UserModel::find($id)->password,
            'level_id' => $request->level_id,
        ]);

        return redirect('/user')->with('success', 'Data user berhasil diubah');
    }

    /**
     * delete specific user data with id
     */
    public function destroy(string $id): RedirectResponse
    {
        $check = UserModel::find($id);

        /**
         * check whatever user data with id is available or not
         */
        if (!$check) {
            return redirect('/user')->with('error', 'Data User tidak ditemukan');
        }

        try {
            /**
             * Delete user data
             */
            UserModel::destroy($id);
            return redirect('/user')->with('success', 'Data User berhasil dihapus');
        } catch (QueryException) {
            return redirect('/user')->with('error', 'Data User gagal dihapus, karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }

    /**
     * handling view when adding user data
     */
   /* public function tambah()
    {
        return view('user_tambah');
    }*/

    /**
     * handling form when adding user data
     */
    /*public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user');
    }*/

    /**
     * handling view when update user data
     */
    /*public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }*/

    /**
     * handling form when update user data
     */
    /*public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }*/

    /**
     * handling delete user data
     */
    /*public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }*/
}
