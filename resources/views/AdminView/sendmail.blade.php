@extends('AdminView.wrapper')
@section('content')
    <section class="content-header">
        <h1>
            Send Mail Marketing
            <small>Gửi mail tiếp thị</small>
        </h1>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            @if (session('confirm'))
                <div class="alert alert-success">
                    Đã gửi mail thành công!
                </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tùy chọn gửi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url('admin/send-mail-action')}}" id="send_mail_action_form" enctype="multipart/form-data">
                {!! csrf_field() !!}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gửi:  </label>
                            <select name="option_send" id="option_send" class="form-control">
                                <option value="0">Gửi tất cả</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề ...">
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <textarea id="desc" class="form-control" id="contentmail" name="contentmail" placeholder="Nội dung"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ảnh(tối đa 4 hình ảnh)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="img"  accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id bài viết liên kết: </label>
                        <input type="text" class="custom-file-input form-control" name="id_home" id="id_home">
                        <!-- <select name="id_post" id="id_post" class="form-control">
                            <option value="0">21</option>
                        </select> -->
                    </div>
                    <div class="card-footer">
                    <button type="submit" id="submit-btn" class="btn btn-primary">Gửi Email</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function(){
        
            CKEDITOR.replace( 'desc' );

            // $(document).on('click',"#send_mail_action_form #submit-btn",function(event){
            //     event.preventDefault();
            //     $('#send_mail_action_form').submit();
            // });
            
            // $(document).on('submit','#send_mail_action_form',function(event){
            //     event.preventDefault();
            //     CKEDITOR.instances.desc.updateElement();
            //     var data = $(this).serialize();
            //     $.ajax({
			// 	type:'get',
			// 	url:"{{url('admin/send-mail-action')}}",
			// 	data:data,
			// 		success: function(resp){
			// 		if(resp.error==false)
			// 			console.log('errror');
			// 		else{
			// 			console.log('success');
            //             }
            //         }
            //     });
            // });
        })
    </script>

@endsection