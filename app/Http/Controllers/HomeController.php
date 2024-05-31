<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Video;
use App\Models\Service;
use App\Models\Calculator;
use App\Http\Requests\CalcRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{

    public function index(){

        SEOMeta::setTitle('İş Kazası Avukatı | İş Kazası Tazmınatı Hesaplama');
        return view('frontend.index');

    }

    public function calc(){
        $sehir = DB::table('sehir')->get();
        SEOMeta::setTitle('İş Kazası Tazminat Hesaplama | Ölümlü Yaralanmalı İş Kazası Geçirdim ');
        return view('frontend.page.calc', compact('sehir'));
    }

    public function calcpost(CalcRequest $request){

        $name = $request->input('name');
        $phone = $request->input('phone');
        $mesaage = $request->input('message');
        $age = $request->input('age');
        $city = $request->input('city');
        $fault_rate = $request->input('fault_rate');
        $disability = $request->input('disability');
        $gender = $request->input('gender');
        $income = $request->input('income');
    
        // Basit tazminat hesaplama mantığı (örnek)
        
        $base_tazminat = (config('settings.rate') ? config('settings.rate') : 100000); // Örnek baz tazminat miktarı

        $fault_deduction = $base_tazminat * ($fault_rate / 100);
        $disability_compensation = $base_tazminat * ($disability / 100);
    
        // Yaş ve cinsiyet faktörleri (örnek)
        $age_factor = ($age < 40) ? 1.2 : (($age < 50) ? 1.1 : 1.0);
        $gender_factor = ($gender == 'kadin') ? 1.1 : 1.0;
    
        // Nihai tazminat hesaplaması
        $final_tazminat = ($disability_compensation - $fault_deduction) * $age_factor * $gender_factor;

    
        $new = new Calculator;
        $new->name = $name;
        $new->phone = $phone;
        $new->income = $income;
        $new->age = $age;
        $new->fault_rate = $fault_rate;
        $new->disability = $disability;
        $new->gender = $gender;
        $new->city = $city;
        $new->message = $mesaage;
        $new->final = $final_tazminat;
        $new->save();
        //dd($final_tazminat);
        session()->put('calc_id', $new->id);

        return redirect()->route('calcresult');

    }

    public function calcresult(){
        $detail = Calculator::find(session()->get('calc_id'));
        return view('frontend.page.calcresult',compact('detail'));
    }

    public function faq(){

        SEOMeta::setTitle('Sıkça Sorulan Sorular | İş Kazası Avukatı | İş Kazası Tazmınatı Hesaplama');
        return view('frontend.page.faq');
    }

    public function team(){

        SEOMeta::setTitle('Ekibimiz | İş Kazası Avukatı | kazagecirdim.com.tr | Kaza Geçirdim');

        return view('frontend.page.team');
    }

    public function contact(){

        SEOMeta::setTitle('İletişim | İş Kazası Avukatı |  İş Kazası Tazmınatı Hesaplama');
        return view('frontend.contact');
    }

    public function servicedetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | İş Kazası Tazmınatı Hesaplama | İş Kazası Geçirdim');

        return view('frontend.service.detail', compact('Detail'));
    }

    public function service(){
        SEOMeta::setTitle('İş Kazası Avukatı | İş Kazası Tazmınatı Hesaplama | İş Kazası Geçirdim');
        SEOMeta::setDescription("İş Kazası Avukatı ");

        return view('frontend.service.index');
    }

    public function blogdetail($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | İş Kazası Avukatı | kazagecirdim.com.tr | Kaza Geçirdim');


        return view('frontend.blog.detail', compact('Detail'));
    }

    public function corporatedetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | İş Kazası Avukatı | kazagecirdim.com.tr | Kaza Geçirdim');

        return view('frontend.page.detail', compact('Detail'));
    }

    public function blog(){

        SEOMeta::setTitle('Makaleler | Ölümlü Yaralanmalı İş Kazası Avukatı');

        return view('frontend.blog.index');
    }

    public function video(){

        SEOMeta::setTitle('Video Galeri | İş Kazası Avukatı | kazagecirdim.com.tr | Kaza Geçirdim');

        $Video = Video::all();
        return view('frontend.video.index', compact('Video'));
    }

    public function form(ContactRequest $request){

        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to(config('settings.email1'))->subject($New->name.' - Site Bilgi Formu');
        });

        return redirect()->route('home');
    }

}
