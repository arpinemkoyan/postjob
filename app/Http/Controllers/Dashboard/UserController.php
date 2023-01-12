<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Session;
use Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('users.signin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('users.signup');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');

        $routeName = User::where(['name' => $request->name])->first()->role == User::EMPLOYER_ROLE ? 'layout' : 'candidates.index';
        $routeName = User::where(['name' => $request->name])->first()->role == User::ADMIN_ROLE ? 'categories.index' : $routeName;
        if (Auth::attempt($credentials)) {

            return redirect()->route($routeName)
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function userRegistration(UserRequest $request)
    {

        $data = $request->all();

        $routeName = $request->role == User::EMPLOYER_ROLE ? 'layout' : 'candidates.index';

        $check = $this->create($data);
        echo 'create';
        return redirect()->route($routeName);

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role']
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function layout()
    {
        return view('jobs.index');
    }
}
