<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Calculator;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){

        $form = Form::all();
        $calc = Calculator::all();        
        return view('backend.index', compact('form', 'calc'));
    }

    public function formlar(){
        $All = Form::orderBy('created_at','desc')->get();
        return view('backend.form.index', compact('All'));
    }

    public function formDelete($id){

        $Delete = Form::findOrFail($id);
        $Delete->delete();

        alert()->success('Başarıyla Silindi','Form mesajı başarıyla Silindi');
        return redirect()->route('form');
    }



}
