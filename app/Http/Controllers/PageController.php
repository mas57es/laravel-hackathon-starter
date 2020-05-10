<?php

    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;


    class PageController extends Controller
    {
        
        /**
         * Return the homepage view
         * @return mixed
         */   
        public function home()
        {
            return view('welcome');

        } 

        /**
         * Return the api dashboard view listing available apis
         * @return mixed
         */ 
        public function api()
        {
            return view('apidashboard');

        }    

        /**
         * Return the contact page view
         * @return mixed
         */ 
        public function contact()
        {
            return view('contact');

        }

        /**
         * Return the site page view
         * @return mixed
         */ 
        public function site($code)
        {
            $imagenes = DB::select('select a.* from images as a inner join menus as b where a.menu_id = b.id and b.code = ?', [$code]);
            // var_dump($local);
            return view('site', ['imagenes'=> $imagenes]);


        }
    }
