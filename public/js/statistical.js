
  $(function(){
        $(document).on('click','#form-statistical .btn-submit',function(event){
            event.preventDefault();
            var option = $('#option-report').val();
            var time = $('#time-report').val();
            $('#form-statistical').submit();
        });

        $(document).on('change','#form-statistical #option-report',function(){
            var val = $(this).val();
            if(val == 2 || val == 3){
                if($('#timegroup').css('display')== 'none')
                $('#timegroup').slideToggle();
            }else{
                if($('#timegroup').css('display')== 'block')
                $('#timegroup').slideToggle();
            }
        });

        $('#form-statistical').submit(function(event){
            event.preventDefault();
            var data = [];
            var tam;
            $.ajax({
                type:'post',
                url: base_url+'/admin/thong-ke',
                data: $(this).serialize(),
                success:function(resp){
                    var label = resp.data.hometype.name;
                    $.each(resp.data.hometype.id,function(index,value){
                        tam = true;
                        $.each(resp.data.report,function(key,val){
                            if(value == val.hometype_id){
                                data.push(val.count_report);
                                tam =false;
                            }
                        });
                        if(tam){
                            data.push(0);
                        }
                    });
                    if($('#option-report').val() == 1){
                        var title = 'Số lượt xem';
                    }else if($('#option-report').val() == 2){
                        var title = 'Số người truy cập';
                    }else{
                        var title = 'Số lượt tìm kiếm';
                    }
                    drawChart.data = {
                        "labels": label,
                        "datasets": [{
                        "label": title,
                        "data": data,
                        "fill": false,
                        "backgroundColor": [],
                        "borderColor": [],
                        "borderWidth": 1
                        }]
                    };
                    drawChart.update();
                }
            });
        });
       
        // var bgColor = ["red", "blue", "green", "yellow"];
        // var bColor = ["red", "blue", "green", "yellow"];
        var ctx = document.getElementById("myChart");
        var drawChart =
          new Chart(ctx.getContext('2d'), {
                "type": "bar",
                "data": {
                    "labels": [],
                    "datasets": [{
                    "label": "Thống kê",
                    "data": [],
                    "fill": false,
                    "backgroundColor": [],
                    "borderColor": [],
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
    
        $('#time-report').daterangepicker({
            startDate: moment().startOf('month'),
            endDate: moment(),
            minDate: "01/01/2017",
            maxDate: moment().format('MM/DD/YYYY'),
            locale:{
                format: 'MM/DD/YYYY'
            }
        });
   });
   