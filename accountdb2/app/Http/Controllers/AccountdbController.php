<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use Session;

class AccountdbController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
    
       $user = new User();
       $user->studID = $request->studID; 
       $user->lname = $request->lname; 
       $user->fname = $request->fname; 
       $user->MI = $request->MI; 
       $user->course = $request->course; 
       $user->yearlevel = $request->yearlevel;
       $res = $user->save();
       if ($res){
            return back()->with('success', 'You have registered successfully');
       }else{
            return back()->with('fail', 'Something wrong');
       }
       
    }
    public function loginUser(Request $request){
        $user = User::where('studID','=',$request->uname) && User::where( 'lname', '=', $request->pwd)->first();
        if($user){
           
            return redirect('dashboard');
        }
        else{
            return back()->with('fail','Your are not registered. Please register first!');
        }
    }
    public function dashboard(){
        $data = User::all();
        return view('dashboard',['users'=>$data]);
    }
    public function delete($id){
        $data = User::find($id);
        $data->status='Deleted';
        $data->save();
        return redirect('dashboard');
    }
    public function update($id){
        $data = User::find($id);
        return view('update',['data'=>$data]);
    }
    public function update2(Request $request){
        $data = User::find($request->id);
        $data->studID = $request->studID; 
        $data->lname = $request->lname; 
        $data->fname = $request->fname; 
        $data->MI = $request->MI; 
        $data->course = $request->course; 
        $data->yearlevel = $request->yearlevel;
        $data->status='Updated';
        $data->save();
        return redirect('dashboard');
        
    }

}
