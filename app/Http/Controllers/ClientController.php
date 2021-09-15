<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Entreprise;
class ClientController extends Controller
{

     //
     public function index(){
        $clients = Client::status();
        return view('clients.index',['clients'=>$clients]);
    }

    public function create(){
        $entreprises = Entreprise::all();

        return view('clients.create',['entreprises'=>$entreprises]);
    }

    public function store(){
        request()->validate([
            'pseudo'=>'required|min:3',
            'email'=>'required|email',
            'status'=>'required|integer',
            'entreprise_id'=>'required|integer'
        ]);
       $client = new Client();
       $client ->pseudo = request('pseudo');
       $client ->email = request('email');
       $client ->status = request('status');
       $client ->entreprise_id = request('entreprise_id');
       $client->save();

        return back();
    }

    public function show(Client $client){
        return view('clients.show',compact('client'));
    }

    public function edit(Client $client){
        $entreprises=Entreprise::all();
        return view('clients.edit',compact('client','entreprises'));
    }

    public function  update(Client $client){
        $data =request()->validate([
            'pseudo'=>'required|min:3',
            'email'=>'required|email',
            'status'=>'required|integer',
            'entreprise_id'=>'required|integer'
        ]);
        $client->update($data);
        return redirect('client/'.$client->id);

    }

    public function destroy(Client $client){
        $client->delete();
        return redirect('clients');
    }

    
    
}
