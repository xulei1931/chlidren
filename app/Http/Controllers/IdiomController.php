<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idiom;
use App\Models\Ci;
class  IdiomController extends Controller
{
	/*
	0,3
	3,3
	6,3
	9,3

	*/
	public function getWords(Request $req)
	{
        $num = $req->input('num') ?? 10; 
		$wordModel = new Idiom();
        $res = $wordModel->getRandomWords($num);
        $retRes = [];
        if (! empty($res)) {
			foreach ($res as $key => $v) {
				$dealWords = $this->dealWords($v['word']);
				$tmp = [
                'id' =>$v['id'],
                'word' =>$v['word'],
                'target_word' =>$dealWords['target_word'],
                'show_word' =>$dealWords['show_word'],
                'pinyin' =>$v['pinyin'],
                'explanation' =>$v['explanation'],
                'derivation' =>$v['derivation'],
                'example' =>$v['example'],
                'abbreviation' =>$v['abbreviation'],
                'ci' =>$dealWords['ci'],

				];
				$retRes[] = $tmp;
			}

	    }
	    var_dump($retRes);
   }

   public function dealWords($word)
   {     
   	    $ciModel= new Ci();
   	    $res =[];
        $weizi = rand(0,3)*3;
	      $target = substr($word,$weizi,3);
	      $res['target_word'] = $target;
	      $res['show_word'] =  preg_replace("/$target/",'[?]',$word,1);
        $ciInfo = $ciModel->getInfoByWord($target);
        $ciId = $ciInfo ->id ?? rand(1000,9999);
        $randWord = $ciModel->getRandWordById($ciId);
        $res['ci'] = $randWord;
        return $res;

   }

}