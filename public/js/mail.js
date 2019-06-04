$(function(){


    var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
            $(wrapper).append(
            '<div class="afield">'+
            '<input type="text" name="mylink[]" class="form-control"/>'+
            '<a href="#" class="remove_field">Xóa</a>'+
            '</div>'
            ); //add input box'
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    

    $.ajax({
        url: base_url+'/admin/shownumermail?type=all',
        type:'get',
        success:function(resp){
            if(resp.code == 200){
                $('#nummermail').html(resp.data);
                $('#numersend').val(resp.data);
            }
        }
    });
    CKEDITOR.replace( 'desc' );
    
    $('#id_home').select2();
    $('#option_send').select2();
    $('#option_sendtype').select2();
    $(document).on('change','#option_send',function(){
        var option_send = $(this).val();
        if(option_send == 1){
            if($('#hometypesend').css('display')=='none'){
                $('#hometypesend').slideToggle();
            }
            $('#option_hometype').select2();
            var hometype = $('#option_hometype').val();
            hometype = hometype.join();
            $.ajax({
               url: base_url+'/admin/shownumermail?type=hometype&val='+hometype,
               type:'get',
               success:function(resp){
                   if(resp.code == 200){
                       $('#nummermail').html(resp.data);
        

                   }
               }
           });

        }else if(option_send == 0){
            if($('#hometypesend').css('display')=='block')
            $('#hometypesend').slideToggle();
            $.ajax({
                url: base_url+'/admin/shownumermail?type=all',
                type:'get',
                success:function(resp){
                    if(resp.code == 200){
                        $('#nummermail').html(resp.data);

                    }
                }
            });
        }else{
            if($('#hometypesend').css('display')=='block')
            $('#hometypesend').slideToggle();
            $.ajax({
                url: base_url+'/admin/shownumermail?type=sub',
                type:'get',
                success:function(resp){
                    if(resp.code == 200){
                        $('#nummermail').html(resp.data);

                    }
                }
            });
        }

        $('#option_hometype').on('change', function (e) {
             var hometype = $(this).val();
             hometype = hometype.join();
             $.ajax({
                url: base_url+'/admin/shownumermail?type=hometype&val='+hometype,
                type:'get',
                success:function(resp){
                    if(resp.code == 200){
                        $('#nummermail').html(resp.data);

                    }
                }
            });
        });

    });
})