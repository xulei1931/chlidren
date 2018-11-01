<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessPodcast;
use App\Events\OrderShipped;
use App\Notifications\InvoicePaid;
use App\Models\Movie;
use Illuminate\Notifications\Notifiable;
use App\Models\Idiom;
class IndexController extends Controller
{
    public function queue() {


        for($i=0;$i<100;$i++){
            $podcast=['xulei','18',$i];
            ProcessPodcast::dispatch($podcast) ->delay(now()->addMinutes(1));;

        }

    }
    public function event(){
       // $order=['order_id'=>'100','ctime'=>'2018-10-01'];
       // event(new OrderShipped($order));
       // echo 'event';
        $movies = new Movie();
        //var_dump($movies);die;
        $invoice=['xxx','001'];
        $res = $movies->notify(new InvoicePaid($invoice));
        var_dump($res);die;

    }
        public function notice(){
       $src_path = '/Users/xulei/video/frames_00145.jpeg';
//创建源图的实例, 从字符串中的图像流新建一副图像
$src = imagecreatefromstring(file_get_contents($src_path));
 
//裁剪开区域左上角的点的坐标
$x = 0;
$y = 100;
//裁剪区域的宽和高
$width = 700;
$height = 650;
//最终保存成图片的宽和高，和源要等比例，否则会变形
$final_width = 700;
$final_height = round($final_width * $height / $width);
//将裁剪区域复制到新图片上，并根据源和目标的宽高进行缩放或者拉升
$new_image = imagecreatetruecolor($final_width, $final_height);
imagecopyresampled($new_image, $src, 0, 0, $x, $y, $final_width, $final_height, $width, $height);
//输出图片

//var_dump($new_image);die;
header('Content-Type: image/jpg');
imagejpeg($new_image);
imagedestroy($src);
imagedestroy($new_image);
       
       

    }
    public function input(){
      $model = new Idiom();
      $path = '/Users/xulei/Downloads/chinese-xinhua-master/data/idiom.json';
      $myfile = fopen($path, "r") or die("Unable to open file!");
      $res = fread($myfile,filesize($path));
      $res = json_decode($res,true);
      foreach($res as $k=>$v){

         $model->insert($v)."<br>";
      }
fclose($myfile);
    }

}
