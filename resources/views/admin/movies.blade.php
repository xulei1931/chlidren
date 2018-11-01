<section class="content">

                                
        <div class="row"><div class="col-md-12">
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">创建</h3>

        <div class="box-tools">
            <div class="btn-group pull-right" style="margin-right: 10px">
 
</div> <div class="btn-group pull-right" style="margin-right: 10px">
</div>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
            <form action="http://www.laravel.com/admin/movies" method="post" accept-charset="UTF-8" class="form-horizontal" pjax-container="">
    
        <div class="box-body">

                            <div class="fields-group">

                                                                        <div class="form-group  ">

    <label for="speech_content" class="col-sm-2 control-label">语音内容</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="speech_content" name="speech_content" value="" class="form-control speech_content" placeholder="输入 语音内容">

            
        </div>

        
    </div>
</div>
                                                    <div class="form-group  ">
  <label for="number" class="col-sm-2 control-label"> 配置参数 </label>
  <div class="col-sm-8">
        <textarea class="form-control center" name="value" placeholder="输入 配置参数，必须为有效json"></textarea>
    <span class="help-block">
    <i class="fa fa-info-circle"></i>&nbsp;样例：{"h": 440, "w": 660}
</span>
  </div>
</div>
                                                    <input type="hidden" name="url" value="" class="url">

                                            

                </div>
            
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

                            <input type="hidden" name="_token" value="2hlHSeGT1PdjzFINBgJwrh47FuDLnJxlIjwCfPpE">
                        <div class="col-md-2">

            </div>
            <div class="col-md-8">

                <div class="btn-group pull-right">
    <button type="submit" class="btn btn-info pull-right" data-loading-text="<i class='fa fa-spinner fa-spin '></i> 提交">提交</button>
</div>

                <div class="btn-group pull-left">
    <button type="reset" class="btn btn-warning">撤销</button>
</div>

            </div>

        </div>

                    <input type="hidden" name="_previous_" value="http://local.api.gmall.gaopeng.com/admin/movies" class="_previous_">

        
        <!-- /.box-footer -->
    </form>
</div>

</div></div>

    </section>