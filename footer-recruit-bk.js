$( "input[type=checkbox]" ).on( "click", function() {
        if($(this).prop("checked") == true){
            var val = $(this).val();
            if(val == 'tokyo') {
                // $('#recruit_inner_1').css('display','block');
                $('#recruit-2').css('display','block');
                $('#location_select').val('東京');
            }if(val == 'kanagawa') {
                // $('#recruit_inner_2').css('display','block');
                $('#recruit-2').css('display','block');
                $('#location_select').val('神奈川');
            }
            if(val == 'warehouse') {
                $('#recruitment').val('庫内作業');
            }else if(val == 'maneuver') {
                $('#recruitment').val('フォーク操縦');
            }

            if(val == 'warehouse' || val == 'maneuver') {
                $('.recruit-info').css('display','block');
                $('.recruit-page .contact-top').css('display','block');
                $('.recruit-page #wpcf7-f59-o1').css('display','block');
                $('.tel').css('display','block');
            }
        }
        // else if($(this).prop("checked") == false){
        //     var val = $(this).val();
        //     if(val == 'tokyo') {
        //         $('#recruit_inner_1').css('display','none');
        //     }
        //     if(val == 'kanagawa') {
        //         $('#recruit_inner_2').css('display','none');
        //     }
        // }

        if($(this).prop("checked") == true){
            var val = $(this).val();
            if(val == 'warehouse') {
                $('.recruit_inner_1.ac').css('display','block');
            }
            if(val == 'maneuver') {
                $('.recruit_inner_2.ac').css('display','block');
            }
        }else if($(this).prop("checked") == false){
            var val = $(this).val();
            if(val == 'warehouse') {
                $('.recruit_inner_1.ac').css('display','none');
            }
            if(val == 'maneuver') {
                $('.recruit_inner_2.ac').css('display','none');
            }
        }
    });