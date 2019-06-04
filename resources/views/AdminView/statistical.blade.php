@extends('AdminView.wrapper')
@section('content')
<style>
    #chartReport{
        padding:30px;
        background:#fff;
        margin-top: 30px;
    }
</style>
<div style="width: 900px; margin:auto;" id="chartReport">
    <form id="form-statistical">
    {!! csrf_field() !!}
        <div class="form-group">
            <label>Thống kê theo:</label>
            <select class="form-control" id="option-report" name="optionreport">
                <option value="1">Lượt xem</option>
                <option value="2">Lượt truy cập</option>
                <option value="3">Lượt tìm kiếm</option>
            </select>
        </div>
        <div class="form-group" id="timegroup" style="display:none;">
            <label>Thời gian:</label>
            <input type="text" name="timereport" id="time-report" class="form-control" />
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-submit">Xác nhận</button>
        </div>
    </form>
    <canvas id="myChart" style="display: block; width: 770px; height: 385px;"></canvas>
</div>

@endsection
@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="{{asset('bower_components/chart.js/src/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/statistical.js')}}"></script>
@endsection