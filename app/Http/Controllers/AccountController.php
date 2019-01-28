<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class AccountController extends Controller
{
    /**
     * Account Global Model
     *
     * @var [type]
     */
    protected $account;
    /**
     * Account Model accessible
     *
     * @param Account $account
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    public function signUp()
    {
        return view('register');
    }
    /**
     * User Account Signup
     *
     * @param Request $request
     * @return void
     */
    public function auth(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $query = $this->account->where('email', $request->email)
            ->where('password', $request->password);

        if ($query->count() > 0) {
            return redirect()->back()->with('message', 'User Already Registered, Please Login')
                ->withInput();
        }
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $lastId = $this->account->create($data);
        $data['id'] = $lastId;
        session(['pharm_account' => $data]);
        return redirect(route('account_dashboard'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('log-in');
    }

    public function loginAuth(Request $request)
    {
        $sql = $this->account->where('email', $request->email);
        if ($sql->count() > 0) {
            $oldHash = $sql->first();
            $checkHash = Hash::check($request->password, $oldHash->password);
            if ($checkHash) {
                $data = $oldHash;
                session(['pharm_account' => $data]);
                return redirect(route('account_dashboard'));
            }
            return redirect()->back()->with('error', 'Invalid information supplied')->withInput();
        }
        return redirect()->back()->with('error', 'Invalid information supplied')->withInput();
    }

    public function signout()
    {
        if (session::has('pharm_account')) {
            session::flush('pharm_account');
        }
        return redirect(route('account.login'));
    }
}
