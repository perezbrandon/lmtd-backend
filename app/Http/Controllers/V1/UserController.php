<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(Request $request)
    {
        $this->validate($request, [
          'first_name' => 'required|alpha_num',
          'last_name'  => 'required|alpha_num',
          'email'      => 'required|email|unique:users:email',
          'username'   => 'required|alpha_num|unique:users:username',
          'password'   => 'required|confirmed'
        ]);

        $user = new User();
        $user->password = app( 'hash' )->make( $request->get( 'password' ) );
        $user->

    }
}
