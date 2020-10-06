<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    /**
     * changeLanguage
     * @param  Request $request
     * @return 
     */
    public function changeLanguage(Request $request)
    {
    	$lang = $request->language;
    	$language = config('app.locale');
    	if ($lang == 'en') {
    		$language = 'en';
    	}
    	if($lang == 'vi') {
    		$language = 'vi';
    	}
    	Session::put('language', $language);
    	return redirect()->back();
    }
}
