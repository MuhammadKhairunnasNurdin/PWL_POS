<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
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
        $user = UserModel::findOr(20, ['username', 'nama'], function () {
        abort(404);
        });

        return view('user', ['data' => $user]);
    }
}
