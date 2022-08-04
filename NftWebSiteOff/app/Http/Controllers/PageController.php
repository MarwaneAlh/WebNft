<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller

{

    
    public function index(){
        return view('index');
    }

    public function aboutpage(){
        return view('about');
    }

    public function sign(){
        if(!Session::has('loginId')){
        return view ('sign');
    }else{
        return back()->with('fail','Inscription connexion impossible,vous etes encore connectés !');
    }
}

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required|unique:users',
            'mail'=>'required|email|unique:users',
            'password'=>'required|min:5'

        ]);
        $user= new User();
        $user->name=$request->name;
        $user->mail=$request->mail;
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if($res){
            $request->session()->put('loginId',$user->id);
            $request->session()->put('name',$user->name);
            return redirect('MarketPlace')->with('success','Vous êtes inscrit avec succès !');

        }else{
            return back()->with('fail','Connexion échouée');
        }
    }

   
    public function loginUser(Request $request){
        $request->validate([

            'email'=>'required|email',
            'passwords'=>'required|min:5'

        ]);
        $input['email']=$request->email;

        $rules = array('mail'=>'required|email|unique:users');

        $validation=Validator::make($input,$rules);
        if($validation->fails()){
      

        $user =User::where('mail','=',$request->email)->first();
        if($user){
         
            if(Hash::check($request->passwords,$user->password)){
           $request->session()->put('loginId',$user->id);
           $request->session()->put('name',$user->name);
         
           
           return redirect('MarketPlace')->with('success','Vous êtes connecté !');
        }else{
            return back()->with('fail','Mauvais mot de passe');
        }
            
        }else{
            return back()->with('fail','Compte non existant');
        }

        
        }
    }

  

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            Session::pull("name");
            return redirect('Sign')->with('success','Vous vous êtes déconnectés !');
        }else{
          
            return back()->with('fail','Vous êtes déja déconnecté !');
        }
    }
}
