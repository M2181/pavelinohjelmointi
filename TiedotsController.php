<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Tiedots;
class TiedotsController extends Controller
{
    public function __construct()
{
        $this->middleware('auth');
}
    public function check(){
        if (Auth::user()->tiedots_id == NULL){
            return view('/tiedot_create');
        }
        elseif (Auth::user()->tiedots_id != NULL){
            $id = Auth::user()->tiedots_id;
            return $this->edit_t($id);
        
    }}
    public function store() {

    $tieto = new Tiedots();
    $tieto->name = request('name');
    $tieto->phnum = request('phnum');
    $tieto->osoite = request('osoite');
    $tieto->etunimi = request('etunimi');
    $tieto->sukunimi = request('sukunimi');
    $tieto->save();
    $customer = Auth::user();
    $customer->tiedots_id = $tieto->id;
    $customer->save();
    return redirect('/');
}
    public function edit_t($id) {
   $tieto = Tiedots::find($id);
   return view('/tiedot_edit')->with('tieto', $tieto);
}
   public function update_t($id) {

    $tieto = Tiedots::find($id);

    $tieto->name = request('name');
    $tieto->phnum = request('phnum');
    $tieto->osoite = request('osoite');
    $tieto->etunimi = request('etunimi');
    $tieto->sukunimi = request('sukunimi');
    $tieto->save();

    return redirect('/home');
   } 
}
