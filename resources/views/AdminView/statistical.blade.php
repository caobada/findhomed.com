@extends('AdminView.wrapper')
@section('content')
<style>
    #chartReport{
        padding:30px;
        background:#fff;
        margin-top: 30px;
    }
</style>
<div style="width: 900px;height: 500px; margin:auto;" id="chartReport">
    <div class="form-group">
        <label>Thống kê theo:</label>
        <select class="form-control">
            <option>Lượt xem</option>
            <option>Lượt truy cập</option>
            <option>Lượt tìm kiếm</option>
        </select>
    </div>
    <div class="form-group">
        <label>Thời gian:</label>
        <input type="text" name="dates" class="form-control" value="01/01/2018 - 01/15/2018" />
    </div>
    <canvas id="myChart" style="display: block; width: 770px; height: 385px;"></canvas>
</div>

@endsection
@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{asset('bower_components\chart.js\src\Chart.min.js')}}"></script>

    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var label = ["Phòng trọ", "Mặt bằng", "Chung cư", "Ở ghép"];
    var data = [65, 59, 80, 81];
    var bgColor = ["red", "blue", "green", "yellow"];
    var bColor = ["red", "blue", "green", "yellow"];

    var drawChart = function(el,label,data,bgColor = [],bColor = []){
        new Chart(el, {
            "type": "bar",
            "data": {
                "labels": label,
                "datasets": [{
                "label": "Số người",
                "data": data,
                "fill": false,
                "backgroundColor": bgColor,
                "borderColor": bColor,
                "borderWidth": 1
                }]
            },
            "options": {
                "scales": {
                    "yAxes": [{
                        "ticks": {
                            "beginAtZero": true
                        }
                    }],
                    "xAxes": [{
                    "barPercentage": 0.5,
                    "barThickness": 40,
                    "maxBarThickness": 20,
                    "minBarLength": 2,
                        "gridLines": {
                            "offsetGridLines": true
                        }
                    }]
                }
            }
        });
    };
    $('input[name="dates"]').daterangepicker();
    drawChart(ctx,label,data,bgColor,bColor);
    
    </script>
@endsection