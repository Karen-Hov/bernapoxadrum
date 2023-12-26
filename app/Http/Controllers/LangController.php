<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function switchLang(Request $request, $locale) {

        // Store the URL on which the user was
        $previous_url = url()->previous();
        // Transform it into a correct request instance
        $previous_request = app('request')->create($previous_url);

        // Get Query Parameters if applicable  //Ստուգեք հարցման պարամետրերը, եթե կիրառելի են
        $query = $previous_request->query();

        // Store the segments of the last request as an array  //naxkin url  pahuma arrayum  amen /-i hasnelov elementa sarqum
        $segments = $previous_request->segments();

        if (array_key_exists($locale, config('app.locales'))) {  //if have a local in config
            // Replace the first segment by the new language code
            $segments[0] = $locale;

            if (count($query)) {
                $text="";
                foreach ($query as $q=>$value){
                    $text= $text."?".$q."=".$value;
                    return redirect()->to(implode('/', $segments).$text);
                }
            }
            return redirect()->to(implode('/', $segments));
        }
        return redirect()->back(); //if locale don't exist
    }

}
