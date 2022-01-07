<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Rules\Password;
class ADMCityHallUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('ADMcityhallusers.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ADMcityhallusers.create');
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
            'password' => [
                'required', 
                'string', 
                (new Password)->requireUppercase()
                ->length(8)
                ->requireNumeric()
                ->requireSpecialCharacter(), 
                'Confirmed'],
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->utype = 'CHV';
        $user->password = Hash::make($request->password);
        $user->save();

        flash('Employee Created Successfully')->success();
        return redirect()->route('ADMcityhallusers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $user = User::find($id);
        return view('ADMmobileusers.show', compact('user'));
    }

    public function download($file){
        return response()->download('storage/resume/'.$file);
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
        return view('ADMcityhallusers.edit', compact('user'));
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
        ]);
        
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        
        if($request->has('password') && $request->password != null){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        flash('Employee Updated Successfully')->success();
        return redirect()->route('ADMcityhallusers.index');
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
        return redirect()->route('ADMcityhallusers.index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
