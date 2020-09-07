</main>
<div id="ac">
<ul class="accordion1">
    <li class="noborder">
    	<p class="ac1"><i class="fas fa-angle-right"></i>サービス <span>SERVICE</span>
			<span class="click"></span>
			<span class="click"></span>
		</p>
        <ul class="inner">
            <li class="content1-1"><i class="fas fa-angle-right"></i>物流加工 <span>Logistics processing</span></li>
            <li class="content1-2"><i class="fas fa-angle-right"></i>倉庫業 <span>Warehousing business</span></li>
            <li class="content1-3"><i class="fas fa-angle-right"></i>人材派遣 <span>Temporary staffing</span></li>
        </ul>
    </li>
    <li>
        <p class="ac2"><i class="fas fa-angle-right"></i>会社概要 <span>Company Profile</span></p>
    </li>
    <li>
        <p class="ac3"><i class="fas fa-angle-right"></i>代表挨拶 <span>Message from the President</span></p>
    </li>
	 <li>
        <p class="ac4"><i class="fas fa-angle-right"></i>採用情報 <span>Recruit</span>
			<span class="click"></span>
			<span class="click"></span>
		</p>
		 <ul class="inner">
            <li class="content4-1"><i class="fas fa-angle-right"></i>募集要項 <span>Application Requirements</span></li>
            <li class="content4-2"><i class="fas fa-angle-right"></i>社員インタビュー01 <span>Employee interview 01</span></li>
            <li class="content4-3"><i class="fas fa-angle-right"></i>社員インタビュー02 <span>Employee interview 02</span></li>
			<li class="content4-4"><i class="fas fa-angle-right"></i>社員インタビュー03 <span>Employee interview 03</span></li>
        </ul>
    </li>
	 <li>
        <p class="ac5"><i class="fas fa-angle-right"></i>お問い合わせ <span>Contact</span></p>
    </li>
	 <li>
        <p class="ac6"><i class="fas fa-angle-right"></i>トピックス一覧 <span>TOPICS</span></p>
    </li>
	<li>
        <p class="ac7"><i class="fas fa-angle-right"></i>サイトマップ <span>Sitemap</span></p>
    </li>
	 <li>
        <p class="ac8"><i class="fas fa-angle-right"></i>サイトポリシー <span>Sitepolicy</span></p>
    </li>
</ul>
</div>
<img class="img_sp addres_logo" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/logo.svg" alt="" width="" height="" border="0" />
<div class="clone-address">
	<p><span>本社</span><br>
	<span class="border"></span>
	&#12306;220-0042<br>
	神奈川県横浜市西区戸部町 1−10<br><br>
	<span>横浜支店</span><br>
	<span class="border"></span>
	&#12306;231-0801<br>
	神奈川県横浜市中区新山下 3−9−1<br></p>
	<h3>TEL.045-625-0441</h3>
	<h3>FAX.045-625-0441</h3>
</div>
<div id="copyright-sp">Copyright © 2018　KOBAYASHI ENTERPRISE INCORPORATED. </div>
<!-- footer -->

<!-- footer -->
</div>
<script type="text/javascript" src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo( get_stylesheet_directory_uri() ); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top-swiper.js"></script>
<?php wp_footer(); ?>
<style type="text/css">
    .submit-step-2 {
        display: none;
    }
</style>
<script type="text/javascript">
    function validate(value, rule, messenger) {
        var rule_input = rule.split(":");
        if(rule_input.length > 1) {
            rule = rule_input[0];
            var parameter = rule_input[1];
        }
        var check_input = true;
        var error_msg = '';
        let phone_expr  = /^([0-9]){3}[-]([0-9]){3}[-]([0-9]){4}$/;
        let phone_expr2 = /^([0-9]){2}[-]([0-9]){4}[-]([0-9]){4}$/;
        let phone_expr3 = /^([0-9]){3}[-]([0-9]){4}[-]([0-9]){4}$/;
        switch (rule) {
            case 'required' :
                if(value == null) {
                    if(typeof messenger['required'] != 'undefined') {
                        error_msg = '<p>'+messenger['required']+'</p>';   
                    }else {
                        error_msg = '<p>This field is required</p>';
                    }
                    break;
                }
                var len = value.length;
                if ( len == 0 ) {
                    if(typeof messenger['required'] != 'undefined') {
                        error_msg = '<p>'+messenger['required']+'</p>';   
                    }else {
                        error_msg = '<p>※必須項目です</p>';
                    }
                }
                break;
            case 'max' :
                var len = value.length;
                if ( len > parameter ) {
                    if(typeof messenger['max'] != 'undefined') {
                        error_msg = '<p>'+messenger['max']+'</br>';    
                    }else {
                        error_msg = '<p>'+'Phải nhỏ hơn '+parameter+'ký tự </p>';
                    }
                }
                break;
            case 'email':
                if ( value.length > 0 ) {
                    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                    if (!testEmail.test(value)) {
                        if(typeof messenger['email'] != 'undefined') {
                            error_msg = '<p>'+messenger['email']+'</p>';  
                        }else {
                            error_msg = '<p>Định dạng email không đúng</p>';
                        }
                    }
                }
                break;
            case 'telephone':
                let test = false;
                if ( value.length > 0 ) {
                  if (phone_expr.test(value)) {
                      test = true;
                  }
                  if (phone_expr2.test(value)) {
                      test = true;
                  }
                  if (phone_expr3.test(value)) {
                      test = true;
                  }
                  if(test == false) {
	                  if(typeof messenger['telephone'] != 'undefined') {
	                    error_msg = '<p>'+messenger['telephone']+'</p>';  
	                  }else {
	                    error_msg = '<p>Định dạng số điện thoại không đúng vui lòng thử lại</p>';
	                  }
	              }
                }
                break;
            case 'number':
                var number_expr = /^[0-9]{1,10}$/;
                if (!number_expr.test(value) && value != '') {
                    if(typeof messenger['number'] != 'undefined') {
                        error_msg = '<p>'+messenger['number']+'</p>'; 
                    }else {
                        error_msg = '<p>Không phải là số</p>';
                    }   
                }
                break;
            case 'url':
                var pattern = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
                if(!pattern.test(value) && value != '') {
                    if(typeof messenger['url'] != 'undefined') {
                        error_msg = '<p>'+messenger['url']+'</p>'; 
                    }else {
                        error_msg = '<p>Không phải là url</p>';
                    }
                }
                break;
            case '1bit':
                var pattern = /^[a-zA-Z0-9.!#$%&@'*+/=?^_`{|}~-]+$/;
                if(!pattern.test(value) && value != '') {
                    if(typeof messenger['url'] != 'undefined') {
                        error_msg = '<p>'+messenger['url']+'</p>'; 
                    }else {
                        error_msg = '<p>※半角でご入力ください </p>';
                    }
                }
                break;
            default:
                break;
        }
        if(error_msg != '') {
            return error_msg;
        }
        return '';
    }

    $('.contact-page #check_form').on('click', function () {
    	$('.contact-page #wpcf7-f55-o1').find('span.wpcf7-not-valid-tip.custom').remove();
        var check = true;
        var data_check = [];
        var error_msg = [];
        data_check.push({'name' : 'sex', 'value' : $('input[name="text-477"]').val()});
        data_check.push({'name' : 'name1', 'value' : $('input[name="text-629"]').val()});
        data_check.push({'name' : 'surname', 'value' : $('input[name="text-411"]').val()});
        data_check.push({'name' : 'mei', 'value' : $('input[name="text-321"]').val()});

        if($('input[name="text-987"]').val() != '' || $('input[name="text-418"]').val() != '') {
        	data_check.push({'name' : 'email', 'value' : $('input[name="text-987"]').val()+'@'+$('input[name="text-418"]').val()});
        }else {
        	data_check.push({'name' : 'email', 'value' : ''});
        }
        if($('input[name="text-123"]').val() != '' || $('input[name="text-848"]').val() != '') {
        	data_check.push({'name' : 'emailconf', 'value' : $('input[name="text-123"]').val()+'@'+$('input[name="text-848"]').val()});
        }else {
        	data_check.push({'name' : 'emailconf', 'value' : ''});
        }
        if($('input[name="text-17"]').val() != '' || $('input[name="text-463"]').val() != '' || $('input[name="text-272"]').val() != '') {
        	data_check.push({'name' : 'phone', 'value' : $('input[name="text-17"]').val()+'-'+$('input[name="text-463"]').val()+'-'+$('input[name="text-272"]').val()});
        }else {
        	data_check.push({'name' : 'phone', 'value' : ''});
        }

        if($('input[name="text-986"]').val() != '' || $('input[name="text-582"]').val() != '' || $('input[name="text-253"]').val() != '') {
            data_check.push({'name' : 'fax', 'value' : $('input[name="text-986"]').val()+'-'+$('input[name="text-582"]').val()+'-'+$('input[name="text-253"]').val()});
        }
        
        data_check.push({'name' : 'office_name', 'value' : $('input[name="text-556"]').val()});
        data_check.push({'name' : 'inquiry_item', 'value' : $('input[name="radio-867"]').val()});
        data_check.push({'name' : 'inquiry_contents', 'value' : $('textarea[name="textarea-444"]').val()});

        var rule = {
            sex           : 'required',
            name1         : 'required',
            surname         : 'required',
            mei         : 'required',
            email         : 'email|1bit|required',
            emailconf         : 'email|1bit|required',
            phone         : 'telephone|1bit|required',
            fax         : 'telephone|1bit',
            office_name         : 'required',
            inquiry_item         : 'required',
            inquiry_contents         : 'required',
        };
        var messenge = {
            email : {
            	email 		: '間違ったメール形式'
            },
            emailconf : {
            	email 		: '間違ったメール形式'
            },
            phone : {
            	telephone 	: '間違った電話フォーマット'
            },
            fax : {
            	telephone   : 'ファックス番号が間違っている'
            }
        };
        $.each(data_check, function( key, value ) {
            var name = value.name;
            
            if(typeof rule[name] != 'undefined') {
                var rule_input = rule[name].split("|");
                var messenger = messenge[name];
                if(typeof messenger != 'undefined') {
                    messenger = messenger;
                }
                else {
                    messenger = '';
                }
                jQuery.each( rule_input, function( k, v ) {
                    if(validate(value.value, v, messenger) != ''){
                        error_msg.push({'name':name,'msg':validate(value.value, v, messenger)});
                    }
                });
            } 
        });
        let email = $('input[name="text-987"]').val()+'@'+$('input[name="text-418"]').val();
        let emailconf = $('input[name="text-123"]').val()+'@'+$('input[name="text-848"]').val();
        if(email != emailconf) {
        	error_msg.push({'name': 'emailconf','msg':'<p>※メールアドレスが異なっています</p>'});
        }

        if(error_msg != ''){
            var error_msg_html = '';
            jQuery.each( error_msg, function( k, v ) {
            	var html = '<span class="wpcf7-not-valid-tip custom" role="alert" aria-hidden="true">'+v.msg+'</span>';
            	if($('.'+v.name).find('span.wpcf7-not-valid-tip.custom').length > 0) {
            		$('.'+v.name).find('span.wpcf7-not-valid-tip.custom').remove();
            	}
                $('.'+v.name).append(html);
            });
            // $('.contact-error .content-error').html(error_msg_html);
   			let htmlnotok = '<p class="text2">㈱コバヤシ・エンタープライズにお問い合わせいただき、誠にありがとうございます。</p>';
   			htmlnotok +='<p class="text2">お手数ですが、必須項目をご記入の上、「確認」ボタンをクリックしてください。</p>';
   			htmlnotok +='<p class="text2">★は必須項目です。</p>';
   			$('.contact-top').html(htmlnotok);
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }else {
        	let htmlok = '<p class="text2">下記の内容でよろしければ、「送信」ボタンをクリックしてください。</p>';
   			$('.contact-top').html(htmlok);
        	$('#check_form').css('display','none');
        	$('.submit-step-2').css('display','block');
        }
        event.preventDefault();
    });
	$('#form_back').on('click',function(event) {
		$('#check_form').css('display','block');
    $('.submit-step-2').css('display','none');
    event.preventDefault();
	});
	document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '59' == event.detail.contactFormId ) {
            window.location="http://kobayashi.cube-stg.com/recruit-thanks/";
        }else {
            window.location="http://kobayashi.cube-stg.com/contact-thanks/";
        }
	}, false );
    var userAgent, ieReg, ie;
    userAgent = window.navigator.userAgent;
    ieReg = /msie|Trident.*rv[ :]*11\./gi;
    ie = ieReg.test(userAgent);

    if(ie) {
        
      $(".img-container").each(function () {
        var $container = $(this),
            imgUrl = $container.find("img").prop("src");
        if (imgUrl) {
          $container.css("backgroundImage", 'url(' + imgUrl + ')').addClass("custom-object-fit");
        }
      });
    }
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
                $('#recruit_inner_1').css('display','block');
            }
            if(val == 'maneuver') {
                $('#recruit_inner_2').css('display','block');
            }
        }else if($(this).prop("checked") == false){
            var val = $(this).val();
            if(val == 'warehouse') {
                $('#recruit_inner_1').css('display','none');
            }
            if(val == 'maneuver') {
                $('#recruit_inner_2').css('display','none');
            }
        }
    });
    $('.recruit-page #check_form').on('click', function () {
        $('.recruit-page  #wpcf7-f59-o1').find('span.wpcf7-not-valid-tip.custom').remove();
        var check = true;
        var data_check = [];
        var error_msg = [];
        data_check.push({'name' : 'sex', 'value' : $('input[name="text-477"]').val()});
        data_check.push({'name' : 'name1', 'value' : $('input[name="text-629"]').val()});
        data_check.push({'name' : 'surname', 'value' : $('input[name="text-411"]').val()});
        data_check.push({'name' : 'mei', 'value' : $('input[name="text-321"]').val()});

        if($('input[name="text-987"]').val() != '' || $('input[name="text-418"]').val() != '') {
            data_check.push({'name' : 'email', 'value' : $('input[name="text-987"]').val()+'@'+$('input[name="text-418"]').val()});
        }else {
            data_check.push({'name' : 'email', 'value' : ''});
        }
        if($('input[name="text-123"]').val() != '' || $('input[name="text-848"]').val() != '') {
            data_check.push({'name' : 'emailconf', 'value' : $('input[name="text-123"]').val()+'@'+$('input[name="text-848"]').val()});
        }else {
            data_check.push({'name' : 'emailconf', 'value' : ''});
        }
        if($('input[name="text-17"]').val() != '' || $('input[name="text-463"]').val() != '' || $('input[name="text-272"]').val() != '') {
            data_check.push({'name' : 'phone', 'value' : $('input[name="text-17"]').val()+'-'+$('input[name="text-463"]').val()+'-'+$('input[name="text-272"]').val()});
        }else {
            data_check.push({'name' : 'phone', 'value' : ''});
        }
        
        data_check.push({'name' : 'inquiry_item', 'value' : $('input[name="radio-867"]').val()});
        data_check.push({'name' : 'inquiry_contents', 'value' : $('textarea[name="textarea-444"]').val()});


        var rule = {
            sex           : 'required',
            name1         : 'required',
            surname         : 'required',
            mei         : 'required',
            email         : 'email|1bit|required',
            emailconf         : 'email|1bit|required',
            phone         : 'telephone|1bit|required',
            inquiry_item         : 'required',
        };
        var messenge = {
            email : {
                email       : '間違ったメール形式'
            },
            emailconf : {
                email       : '間違ったメール形式'
            },
            phone : {
                telephone   : '間違った電話フォーマット'
            },
            fax : {
                telephone   : 'ファックス番号が間違っている'
            }
        };
        $.each(data_check, function( key, value ) {
            var name = value.name;
            
            if(typeof rule[name] != 'undefined') {
                var rule_input = rule[name].split("|");
                var messenger = messenge[name];
                if(typeof messenger != 'undefined') {
                    messenger = messenger;
                }
                else {
                    messenger = '';
                }
                jQuery.each( rule_input, function( k, v ) {
                    if(validate(value.value, v, messenger) != ''){
                        error_msg.push({'name':name,'msg':validate(value.value, v, messenger)});
                    }
                });
            } 
        });
        let email = $('input[name="text-987"]').val()+'@'+$('input[name="text-418"]').val();
        let emailconf = $('input[name="text-123"]').val()+'@'+$('input[name="text-848"]').val();
        if(email != emailconf) {
            error_msg.push({'name': 'emailconf','msg':'<p>※メールアドレスが異なっています</p>'});
        }

        if(error_msg != ''){
            var error_msg_html = '';
            jQuery.each( error_msg, function( k, v ) {
                var html = '<span class="wpcf7-not-valid-tip custom" role="alert" aria-hidden="true">'+v.msg+'</span>';
                if($('.'+v.name).find('span.wpcf7-not-valid-tip.custom').length > 0) {
                    $('.'+v.name).find('span.wpcf7-not-valid-tip.custom').remove();
                }
                $('.'+v.name).append(html);
            });
            let htmlnotok = '<p class="text2 no-margin">㈱コバヤシ・エンタープライズにお問い合わせいただき、誠にありがとうございます。</p>';
   			htmlnotok +='<p class="text2 no-margin">お手数ですが、必須項目をご記入の上、「確認」ボタンをクリックしてください。</p>';
   			htmlnotok +='<p class="text2 no-margin">★は必須項目です。</p>';
   			$('.contact-top').html(htmlnotok);
            $("html, body").animate({ scrollTop: 1500 }, "slow");
            
        }else {
        	let htmlok = '<p class="text2">下記の内容でよろしければ、「送信」ボタンをクリックしてください。</p>';
   			$('.contact-top').html(htmlok);
        	$('#check_form').css('display','none');
        	$('.submit-step-2').css('display','block');
        }
        event.preventDefault();
    });
</script>
</body>
</html>
