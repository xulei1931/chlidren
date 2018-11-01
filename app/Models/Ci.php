<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Ci extends Model
{
	 protected $table = 'ci';
	 public function getInfoByWord($word){
	 	return Ci::where('word','=',$word)->first();
	 }
	 public function getRandWordById($id){
	      $start = $id-2;
	      $end = $id+3;
          return Ci::whereBetween('id', [$start, $end])->get(['word'])->toArray();

	 }

}