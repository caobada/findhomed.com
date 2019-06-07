@extends('AdminView.wrapper')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Gửi thông báo tới trình duyệt</h1>
                <div class="div-center" style="margin:auto">
                    <div class="col-md-6" style="margin:auto;float:none">
                        <form id="form-push-notification">
                            <div class="form-group">
                                <label>Tiều đề</label>
                                <input type="text" class="form-control" name="title" >
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <input type="text" class="form-control" name="title" >
                            </div>
                            <div class="form-group">
                                <label>Đường dẫn điều hướng</label>
                                <input type="text" class="form-control" name="title" >
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" name="title" value="Gửi">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection