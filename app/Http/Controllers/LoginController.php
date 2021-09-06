<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\AccountClient;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        $validated = $request->validate(
//            [
//                'username' => 'required',
//                'password' => 'required',
//            ],
//            [
//                'username.required' => 'Email không được để trống',
//                'password.required' => 'Mật khẩu không được để trống',
//            ]
//        );
        $username = $request->get('username');
        $password = $request->get('password');
        $login = AccountClient::where('username', $username)->first();
        if (Hash::check($password,$login->password_hash )){
//            $account->\Illuminate\Support\Facades\Session::put('login', $login);
            alert()->success('Success','Đăng nhập thành công');
            return redirect('/');

        }else{
            alert()->error('Error','Tài khoản hoặc mật khẩu không đúng');
            return redirect('/login',);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
