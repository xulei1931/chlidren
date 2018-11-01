<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Idiom;
use App\Models\Xiehouyu;
use App\Models\Ciyu;
use App\Models\Ci;
class Input extends Command
{
    /*
     * 参数说明
     * path        视频的目录
     * camera_code 摄像头编号
     * put_path    图片保存的地址也是读取图片的地址
     * api_type    请求接口类型 'baidu'-百度车辆识别接口(默认) 'hik'-海康车辆识别接口 'youtu'-优图车辆识别
     */
    protected $signature = 'input:idiom';

    public function handle()
    {
      ini_set("memory_limit",-1);
      $model = new Ci();
      $path = '/Users/xulei/Downloads/chinese-xinhua-master/data/word.json';
      $myfile = fopen($path, "r") or die("Unable to open file!");
      $res = fread($myfile,filesize($path));
      $res = json_decode($res,true);
      foreach($res as $k=>$v){

        $model->insert($v);
        echo $k."\n";
      }
      fclose($myfile);

    }

}
