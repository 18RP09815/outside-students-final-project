<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::latest()->paginate(5);

        return view('accounts.index', compact('accounts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'username' => 'required',
            'password' => 'required',
            'title' => 'required',
                
            ]);
        
            Account::create($request->all());
             echo"<center>Account Created &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/admin' target='_parent'>Close</a></center>";
   
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('accounts.show',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('accounts.edit',compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
                 
                 
                 
        ]);
    
        $account->update($request->all());
    
        return redirect()->route('accounts.index')
                        ->with('success','Account updated successfully');
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
       
        $account->delete();
    
        return redirect()->route('accounts.index')
                        ->with('success','Account deleted successfully');
    
   
    }

    public function slogin(Request $r)
    {
        $user=$r->username;
        $pass=$r->password;
        $session=Account::where('username',$user)->where('password',$pass)->where('title',"student")->get();
        if(count($session)>0)
        {
            $r->session()->put('id',$session[0]->id);
            $r->session()->put('username',$session[0]->username);
            return view('student');

        }
        else
        {
            echo"<center><font color='red'>Invalid username or Password</font></center>";
            return view('student_login');
        }

    }

    public function login(Request $r)
    {
        $user=$r->username;
        $pass=$r->password;
        $session=Account::where('username',$user)->where('password',$pass)->where('title',"dean")->get();
        if(count($session)>0)
        {
            $r->session()->put('id',$session[0]->id);
            $r->session()->put('username',$session[0]->username);
            return view('admin');

        }
        else
        {
            echo"<center><font color='red'>Invalid username or Password</font></center>";
            return view('index');
        }

    }
    public function logout(Request $r)
    {
        $r=session()->forget('id');
        $r=session()->forget('username');
        return view('index');

    }
    
}