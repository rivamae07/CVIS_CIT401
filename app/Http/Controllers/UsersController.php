<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('created_at', 'DESC')->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    public function show($id){
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function download($file){
        return response()->download('storage/resume/'.$file);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request,[
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'string', (new Password)->requireUppercase()
                ->length(8) ->requireNumeric() ->requireSpecialCharacter(), 'confirmed'],
            'utype' => 'required|min:2|max:100',
        ]);
        
        $user = new User();

        if($request->hasFile('file')){
            $file = $request->file;
            $name = Str::random(60) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/resume', $name);
            $user->resume = $name;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->utype = $request->utype;
        $user->save();

        flash('Employee Created Successfully')->success();
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation
        $this->validate($request,[
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|unique:users,email,' . $id,
              'password' => [
                'required', 
                'string', 
                (new Password)->requireUppercase()
                ->length(8)
                ->requireNumeric()
                ->requireSpecialCharacter(), 
                'Confirmed'],
            'utype' => 'required|min:2|max:100',
        ]);
        
        $user = User::findOrFail($id);

        if($request->hasFile('file')){
            $file = $request->file;
            $name = Str::random(60) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/resume', $name);
            $user->resume = $name;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->utype = $request->utype;
        
        if($request->has('password') && $request->password != null){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        flash('Employee Updated Successfully')->success();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        flash('Employee Deleted Successfully')->success();
        return redirect()->route('users.index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
