<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;

use DB;
use Mail;

class IndexController extends Controller
{
    public function execute(Request $request) {

        if ($request->isMethod('post')) {

            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute должно соответствовать email адресу"
            ];

            $this->validate($request,[
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required'
            ], $messages);

            $data = $request->all();
            Mail::send('site.email', ['data' => $data], function ($message) {
                $mail_admin = env('MAIL_USERNAME');
                $message->from('zkin@ukr.net','Форма отправки');
                $message->to($mail_admin, 'LandingPageForm')->subject('Письмо с формы отправки');
            });

            if( count(Mail::failures()) == 0 ) {
                return redirect()->route('home')->with('status', 'Ваше письмо было успешно отправлено!');
            }
            //dd($result_mail);
            //if ($result_mail) {
            //    return redirect()->route('home')->with('status', 'Email is send');
            //}
        }

        $pages = Page::all();
        $portfolios = Portfolio::get(array('name','filter','images'));
        $services = Service::where('id','<',20)->get();
        $peoples = People::take(3)->get();

        $tags = DB::table('portfolios')->distinct()->pluck('filter')->all();

        $menu = array();
        foreach ($pages as $page) {
            $item = array('title'=>$page->name,'alias'=>$page->alias);
            array_push($menu,$item);
        }
        $item = array('title'=>'Сервисы','alias'=>'service');
        array_push($menu,$item);

        $item = array('title'=>'Портфолио','alias'=>'Portfolio');
        array_push($menu,$item);

        $item = array('title'=>'Наша команда','alias'=>'team');
        array_push($menu,$item);

        $item = array('title'=>'Контакты','alias'=>'contact');
        array_push($menu,$item);

        return view('site.index',array(
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'portfolios'=>$portfolios,
            'peoples'=>$peoples,
            'tags'=>$tags,
        ));
    }
}
