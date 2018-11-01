<?php

namespace App\Admin\Controllers;

use App\Models\Movie;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Request $request)
    {
        if($request->isMethod('post')){
    // 要执行的代码
              $res =   $request->all();
                $boolean = $request->validate([
                    'speech_content' => 'required',
                    'value' =>'json'
                 ]);
                echo 999;
              if(! $boolean){
                echo 999;die;
              }
            var_dump($boolean);
    }

         return Admin::content(function (Content $content) {

            $content->header('语音设置');
          //  $content->description('description');
            $content->body($this->form());

        });
         

    }
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        ///  $form = new Form(new Movie());
         return view('admin/movies');

    }
    public function doSpeech(Request $req){
         $res =   $req->all();
         var_dump($res);
    }
}
