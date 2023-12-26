<?php

namespace App\Models;

use App\Http\Traits\File;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    public $timestamps = false;
    public function product(){
        return $this->belongsTo('App/Product');
    }

    public static function storeGallery($request, $relation_id) : bool
    {
        if($request['files'][0]) {
            $images = explode(',', $request['files'][0]);
            foreach ($images as $item) {
                $tableG = new self();
                $tableG->relation_id = $relation_id;
                $tableG->type = $request['translate'];
                $tableG->file = $item;
                $tableG->save();
            }
        }

        return true;
    }
}
