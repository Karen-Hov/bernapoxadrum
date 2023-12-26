<?php

namespace App\Http\Middleware;

use App\Services\Locale\LocaleService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localize
{
    private $localeService;

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function __construct(LocaleService $localeService){
        $this->localeService = $localeService;
    }
    public function handle($request, Closure $next)
    {

        $this->localeService->LocalizeRequest($request);


        return $next($request);
    }


}

