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
            @if (session('success'))
                <div class="alert alert-success">
                    Đã gửi mail thành công!
                </div>
            @elseif (session('error'))
            <div class="alert alert-error">
                    Đã xảy ra lỗi! Vui lòng thử lại!
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
                                <option value="1">Theo chuyên mục</option>
                                <option value="2">Người đăng kí</option>       
                            </select>
                        </div>
                        <div class="form-group" id="hometypesend" style="display:none">
                            <label for="exampleInputEmail1">Chuyên mục:  </label>
                            <select name="option_hometype[]" multiple id="option_hometype" class="form-control">
                            @foreach($hometype as $val)
                                <option value="{{$val->id}}">{{$val->nametype}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Tổng số người gửi: <span id="nummermail">0</span></label><br>
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
                            <label for="exampleInputFile">Hình ảnh</label>
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
                        <select name="id_home" id="id_home" class="form-control">
                            <option value="0">Chọn bài viêt</option>
                            @foreach($home as $val)
                            <option value="{{$val->home_id}}">{{$val->home_id}} - {{$val->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input_fields_wrap">
                            <button class="add_field_button">Thêm link điều hướng</button>
                            <div class="afield"><input type="text" name="mylink[]" class="form-control"></div>
                        </div>
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
    <script src="{{asset('js/mail.js')}}"></script>

@endsection