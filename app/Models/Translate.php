<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use HasFactory;
    protected $fillable = ['*'];
    protected $table = 'translate';
    public $timestamps = false;

    public function about_us(){
        return $this->belongsTo('App/AboutUs');
    }
    public function post(){
        return $this->belongsTo('App/Post');
    }
    public function service(){
        return $this->belongsTo('App/Services');
    }
    public function partners(){
        return $this->belongsTo('App/Partners');
    }
    public function menu(){
        return $this->belongsTo('App/Menu');
    }
    public function category(){
        return $this->belongsTo('App/Category');
    }
    public static function storeTranslate($request, $page_Id) : bool
    {
//        dump($page_Id);
//        dd($request->all(),$request->method(),$page_Id);
        foreach (config('lang') as $lang) {
            $tableT = new self();
            if ($request->method() == 'PUT') {
                $tableT
                    = self::where('page_id', $page_Id)
                    ->where('type', $request['translate'])
                    ->where('code',  $lang)
                    ->first();
            } else {
                $tableT->page_id = $page_Id;
                $tableT->type = $request['translate'];
            }
            $tableT->code = $lang['code'];
            $tableT->title = $request['title_'. $lang['code']]?? null;
            $tableT->subtitle = $request['subtitle_'. $lang['code']]?? null;
            $tableT->content = $request['content_'. $lang['code']]?? null;
//            dd($request->all(),$tableT);
            $tableT->save();

        }
        return true;
    }
}
