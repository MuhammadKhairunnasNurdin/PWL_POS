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
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);

        /**
         * Try access UserModel
         */
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
