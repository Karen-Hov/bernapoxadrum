<?php


namespace App\Services\Locale;


use App\Services\Locale\handler\RequestLocaleHandler;
use Illuminate\Http\Request;

class LocaleService
{
    private $requestLocaleHandler;

    public function __construct(RequestLocaleHandler $requestLocaleHandler)
    {
        $this->requestLocaleHandler = $requestLocaleHandler;
    }

    public function LocalizeRequest(Request $request)
    {
        $this->requestLocaleHandler->handle($request);
    }
}
