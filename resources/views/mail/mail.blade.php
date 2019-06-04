<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    .wrapper-mail{
        margin:auto;
        width:50%;
        padding: 10px;
        border-radius: 5px;
        background-color:#f0f0f0;
        -webkit-box-shadow: 0px 2px 8px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 8px 2px rgba(0,0,0,0.75);
box-shadow: 0px 2px 8px 2px rgba(0,0,0,0.75);
    }
    .wrapper-mail h2{
        text-align:center;
        color: #000;
    }
    .title-mail{
        color: #F85A16;
        font-size: 28px;

    }
    @media(max-width:768px){
        .wrapper-mail{
            width:100%;
        }
    }
    .container-mail{
        width:100%;
      
    }
    </style>
</head>
<body>
        <div class="container-mail">
            <div class="wrapper-mail">
                <h2>Chúng tôi tìm thấy thông tin phù hợp với bạn!</h2>
                <p><b class="title-mail">{{$booking->title}}</b></p>
                {!!$booking->content!!}
                @if(!empty($mess))
                <div class="image-mail">
                    <img src='{{$message->embed($mess)}}' height="200px" width="100%">
                </div>
                @endif
                
                @if(isset($booking->id_home) && is_numeric($booking->id_home))
                <a href='{{url("detail/$booking->id_home")}}'>Chi tiết bài viết</a><br>
                @else
                <a href='{{url("/")}}'>Truy cập trang để tìm hiểu thêm.</a><br>
                @endif

                @if(isset($booking->mylink))
                    @foreach($booking->mylink as $val)
                        <a href='{{$val}}'>{{$val}}</a><br>
                    @endforeach
                @endif
            </div>
        </div>
</body>
</html>