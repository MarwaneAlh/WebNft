<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Session;
use PDF;



class NftController extends Controller
{


    public function marketplace(Request $request){
        
        $nft =Nft::all();
        
        $user= new User();
        $user->name=$request->session()->get("name");
        return view('MarketPlace',compact('nft'),compact('user'));
    
    }

function main(){
    return view("addNft");
}

    function savenft(Request $request){ 
        if($request->hasFile('user_image')&&
        !empty($request->input('user_title'))&&
        !empty($request->input('user_name'))&&
        !empty($request->input('user_price'))
        ){
        $nft= new Nft;
        $nft->title=$request->input('user_title');
        $nft->author=$request->input('user_name');
        $nft->price=$request->input('user_price');
        $nft->token=bin2hex(random_bytes(18));
       
             $file=$request->file('user_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/nft/',$filename);
            $nft->nftcontent=$filename;
          $nft->save();
        return redirect('MarketPlace')->with('success',"Nft uploadé avec succès !");
        }else{
            return back()->with('fail',"Veuillez remplir tous les champs");
        }
    }

    function editnft(Request $request,$id){
       
       
        $user= new User();
        $user->name=$request->session()->get("name");
        if($user->name==="admin"){  
        $nft=Nft::find($id);
        if($nft==null){
            return back()->with('fail',"Veuillez finaliser ou quitter ! ");
        }
        return view('edit',compact('nft'));
        }else{
            return back()->with('fail',"Vous n'avez pas les droits");
        }
      

    }

    function update(Request $request,$id){

        $nft=Nft::find($id);
        $nft->title=$request->input('user_title');
        $nft->author=$request->input('user_name');
        $nft->price=$request->input('user_price');
        $nft->token=bin2hex(random_bytes(18));
        
            $destination='uploads/nft/'.$nft->user_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            if($request->hasFile('user_image')){
             $file=$request->file('user_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/nft/',$filename);
            $nft->nftcontent=$filename;
            }
          $nft->update();
          return redirect('MarketPlace')->with('success',"Nft modifié avec succès");

    }

    function buy($id){
       
        $nft=Nft::find($id);
         if($nft==null){
            return back()->with('fail',"Veuillez finaliser l'achat ou annuler !");
        }else{
        return view("checkout",compact('nft'));
        }
    }

    function downloadnft($id){
        $nft= Nft::find($id);
        $pdf = PDF::setOptions(['isRemoteEnabled' => true,'defaultFont' => 'sans-serif']);

        $pdf = PDF::loadView('pdf.certification',[
            'nft'=>$nft
        ]);
        $nft->delete();
        return $pdf->download('Certification.pdf');
       

    }

    function thnkx($id){
        $nft=Nft::find($id);
        if($nft==null){
            return back()->with('fail',"Veuillez télécharger le certificat de propriété et/ou quitter !");
        }
        return view("thankx",compact('nft'));
        
    }
}
