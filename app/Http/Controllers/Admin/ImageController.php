<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public static $large_image_path = 'storage/posts/large/';
    public static $medium_image_path = 'storage/posts/medium/';
    public static $small_image_path = 'images/posts/small/';

    public function index(Request $request)
    {

//        $arr = $request->files;
//        $images = array();
//        foreach ($arr as $key=>$file) {
//            $extension = $file->getClientOriginalExtension();
//            $filename = time().$key . '.' . $extension;
//
////           session::put('images', $filename);
//
//
//                Image::make($file)->save(public_path('storage/product/'. $filename));
//                Image::make($file)->resize(457, 539)->save(public_path('storage/product/large/'. $filename));
//                Image::make($file)->resize(310, 324)->save(public_path('storage/product/medium/'. $filename));
//                Image::make($file)->resize(134, 114)->save(public_path('storage/product/medium/'. $filename));
//
//            array_push($images,$filename);
//
//        }
////        $request->session()->push('images', $filename);
////        dd($images);
//
//
////        session('images',$images);
//        return response()->json($filename, 200);


        $arr = $_FILES;
        $images = array();
        foreach ($arr as $file) {
            $imagedetails = getimagesize($file['tmp_name']);
            $width = $imagedetails[0];
            $height = $imagedetails[1];
//            dd($file);

            $upload = $file;
//            $uploadPath = base_path() . '/public/product/';
            $uploadPath = public_path('storage/posts/');
            $uploadName = date('Y-m-d-G-B') . substr(str_shuffle(str_repeat('01245vcseddey-09uj541254124512', 5)), 0, 3) . '.jpg';
//            if($width > 1200){
//                $this->getFilePathAttribute('product/'.$uploadName);
//             }
            $restrainedQuality = 70; //0 = lowest, 100 = highest. ~75 = default
            $sizeLimit = 1200;
            if ($upload['size'] > $sizeLimit) {
                //open a stream for the uploaded image
                $streamHandle = @fopen($upload['tmp_name'], 'r');
                //create a image resource from the contents of the uploaded image
                $resource = imagecreatefromstring(stream_get_contents($streamHandle));

                if (!$resource)
                    die('Something wrong with the upload!');

                //close our file stream
                @fclose($streamHandle);

                //move the uploaded file with a lesser quality
                imagejpeg($resource, $uploadPath . $uploadName, $restrainedQuality);
                //delete the temporary upload
                @unlink($upload['tmp_name']);
                array_push($images,  $uploadName);
//                $this->cropImage($uploadPath . $uploadName, base_path() . '/public/crop/product/' . $uploadName, 540, 350);
                $this->cropImage($uploadPath . $uploadName, public_path('storage/posts/large/' . $uploadName), 457, 539);
                $this->cropImage($uploadPath . $uploadName, public_path('storage/posts/medium/' . $uploadName), 310, 324);
                $this->cropImage($uploadPath . $uploadName, public_path('storage/posts/small/' . $uploadName), 134, 114);
            } else {
                //the file size is less than the limit, just move the temp file into its appropriate directory
                move_uploaded_file($upload['tmp_name'], $uploadPath . $uploadName);
                array_push($images,  $uploadName);
                $this->cropImage($uploadPath . $uploadName,  public_path('storage/posts/large/' . $uploadName), 457, 539);
                $this->cropImage($uploadPath . $uploadName,  public_path('storage/posts/medium/' . $uploadName), 310, 324);
                $this->cropImage($uploadPath . $uploadName,  public_path('storage/posts/small/' . $uploadName), 134, 114);
            }

        }


//dd($images);

        return response()->json($images, 200);

    }
    public function removeimg(Request $request)
    {

        $name = $request->name;
        Storage::delete('public/'.$request['type'].'/'.$name);
        DB::table('gallery')->where('file', $name)->delete();
        return true;

    }

    public function cropImage($aInitialImageFilePath, $aNewImageFilePath, $aNewImageWidth, $aNewImageHeight)
    {

        if (($aNewImageWidth < 0) || ($aNewImageHeight < 0)) {
            return false;
        }

        // Массив с поддерживаемыми типами изображений
        $lAllowedExtensions = array(1 => "gif", 2 => "jpeg", 3 => "png");

        // Получаем размеры и тип изображения в виде числа
        list($lInitialImageWidth, $lInitialImageHeight, $lImageExtensionId) = getimagesize($aInitialImageFilePath);

        if (!array_key_exists($lImageExtensionId, $lAllowedExtensions)) {
            return false;
        }
        $lImageExtension = $lAllowedExtensions[$lImageExtensionId];

        // Получаем название функции, соответствующую типу, для создания изображения
        $func = 'imagecreatefrom' . $lImageExtension;
        // Создаём дескриптор исходного изображения
        $lInitialImageDescriptor = $func($aInitialImageFilePath);

        // Определяем отображаемую область

        $lInitialImageCroppingX = 0;
        $lInitialImageCroppingY = 0;
        if ($aNewImageWidth / $aNewImageHeight > $lInitialImageWidth / $lInitialImageHeight) {
            $lCroppedImageWidth = floor($lInitialImageWidth);
            $lCroppedImageHeight = floor($lInitialImageWidth * $aNewImageHeight / $aNewImageWidth);
            $lInitialImageCroppingY = floor(($lInitialImageHeight - $lCroppedImageHeight) / 2);
        } else {
            $lCroppedImageWidth = floor($lInitialImageHeight * $aNewImageWidth / $aNewImageHeight);
            $lCroppedImageHeight = floor($lInitialImageHeight);
            $lInitialImageCroppingX = floor(($lInitialImageWidth - $lCroppedImageWidth) / 2);
        }

        // Создаём дескриптор для выходного изображения
        $lNewImageDescriptor = imagecreatetruecolor($aNewImageWidth, $aNewImageHeight);
        imagecopyresampled($lNewImageDescriptor, $lInitialImageDescriptor, 0, 0, $lInitialImageCroppingX, $lInitialImageCroppingY, $aNewImageWidth, $aNewImageHeight, $lCroppedImageWidth, $lCroppedImageHeight);
        $func = 'image' . $lImageExtension;

        // сохраняем полученное изображение в указанный файл
        return $func($lNewImageDescriptor, $aNewImageFilePath);
    }

}
