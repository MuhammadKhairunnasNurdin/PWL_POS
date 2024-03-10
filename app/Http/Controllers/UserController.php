<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * handling view home page user
     */
    public function index()
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
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

    /**
     * handling view when adding user data
     */
    public function tambah()
    {
        return view('user_tambah');
    }

    /**
     * handling form when adding user data
     */
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user');
    }

    /**
     * handling view when update user data
     */
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    /**
     * handling form when update user data
     */
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    /**
     * handling delete user data
     */
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
