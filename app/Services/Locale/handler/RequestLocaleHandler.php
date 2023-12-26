<?php


namespace App\Services\Locale\handler;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RequestLocaleHandler
{
    private $locales = ['en','ru', 'hy'];
    public function handle($request)
    {

        $locale = $this->getRequestLocale($request);

        if (!$locale) {
            abort(404);
        }
        App::setLocale($locale);
        $request->route()->forgetParameter('locale');

//        return $next($request);
    }

    private function getRequestLocale($request)
    {

        $locale = $request->route('locale');

        if (in_array($locale, $this->locales)) {
            return $locale;
        }
        return abort(404);
    }
}
