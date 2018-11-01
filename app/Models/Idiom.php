<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Idiom extends Model
{
	 protected $table = 'idiom';

	 // 随机取出指定的数成语
	 public function getRandomWords(int $num) 
	 {
	 	return Idiom::where([])->orderBy(\DB::raw('RAND()'))
       ->take($num)
       ->get();
	 }



}


