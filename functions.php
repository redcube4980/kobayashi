<?php
add_editor_style( 'style.css' );
if ( ! function_exists( 'custom_breadcrumb' ) ) {
    function custom_breadcrumb( $wp_obj = null ) {

        // トップページでは何も出力しない
        if ( is_front_page() ) return false; 
		
        //そのページのWPオブジェクトを取得
        $wp_obj = $wp_obj ?: get_queried_object();

        echo '<div id="breadcrumb">'.  //id名などは任意で
                '<ul>'.
                    '<li>'.
                        '<a href="'. home_url() .'"><span>ホーム <span class="ie"><i>＞</i></span></span></a>'.
                    '</li>';

        if ( is_attachment() ) {

            /**
             * 添付ファイルページ ( $wp_obj : WP_Post )
             * ※ 添付ファイルページでは is_single() も true になるので先に分岐
             */
            echo '<li><span>'. $wp_obj->post_title .'</span></li>';
		} elseif ( is_home() ) {
			// 投稿自身の表示
            echo '<li><span>インフォメーション一覧</span></li>';
				
        } elseif ( is_single() ) {
			echo '<li>'.
				'<a href="/information/">'.
                '<span>インフォメーション一覧 <span class="ie">'.'<i>＞ </i>'.'</span>'.'</span>'.'</a>'.'</li>';
            /**
             * 投稿ページ ( $wp_obj : WP_Post )
             */
            $post_id    = $wp_obj->ID;
            $post_type  = $wp_obj->post_type;
            $post_title = $wp_obj->post_title;

            // カスタム投稿タイプかどうか
            if ( $post_type !== 'post' ) {

                $the_tax = "";  //そのサイトに合わせ、投稿タイプごとに分岐させて明示的に指定してもよい

                // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
                $tax_array = get_object_taxonomies( $post_type, 'names');
                foreach ($tax_array as $tax_name) {
                    if ( $tax_name !== 'post_format' ) {
                        $the_tax = $tax_name;
                        break;
                    }
                }

                //カスタム投稿タイプ名の表示
                echo '<li>'.
                        '<a href="'. get_post_type_archive_link( $post_type ) .'">'.
                            '<span>'. get_post_type_object( $post_type )->label .'</span>'.
                        '</a>'.
                     '</li>';

            } else {
                $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示
            }


            // 投稿自身の表示
            echo '<li><span>'. $post_title .'</span></li>';

        } elseif ( is_page() ) {

            /**
             * 固定ページ ( $wp_obj : WP_Post )
             */
            $page_id    = $wp_obj->ID;
            $page_title = $wp_obj->post_title;

            // 親ページがあれば順番に表示
            if ( $post->post_parent !== 0 ) {
                $parent_array = array_reverse( get_post_ancestors( $page_id ) );
                foreach( $parent_array as $parent_id ) {
                    echo '<li>'.
                            '<a href="'. get_permalink( $parent_id ).'">'.
                                '<span>'.get_the_title( $parent_id ).' ＞</span>'.
                            '</a>'.
                         '</li>';
                }
            }
            // 投稿自身の表示
            echo '<li><span>'. $page_title .' </span></li>';

        } elseif ( is_post_type_archive() ) {

            /**
             * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
             */
            echo '<li><span>'. $wp_obj->label .'</span></li>';

        } elseif ( is_date() ) {

            /**
             * 日付アーカイブ ( $wp_obj : null )
             */
            $year  = get_query_var('year');
            $month = get_query_var('monthnum');
            $day   = get_query_var('day');

            if ( $day !== 0 ) {
                //日別アーカイブ
                echo '<li><a href="'. get_year_link( $year ).'"><span>'. $year .'年</span></a></li>'.
                     '<li><a href="'. get_month_link( $year, $month ). '"><span>'. $month .'月</span></a></li>'.
                     '<li><span>'. $day .'日</span></li>';

            } elseif ( $month !== 0 ) {
                //月別アーカイブ
                echo '<li><a href="'. get_year_link( $year ).'"><span>'.$year.'年</span></a></li>'.
                     '<li><span>'.$month . '月</span></li>';

            } else {
                //年別アーカイブ
                echo '<li><span>'.$year.'年</span></li>';

            }

        } elseif ( is_author() ) {

            /**
             * 投稿者アーカイブ ( $wp_obj : WP_User )
             */
            echo '<li><span>'. $wp_obj->display_name .' の執筆記事</span></li>';

        } elseif ( is_archive() ) {

            /**
             * タームアーカイブ ( $wp_obj : WP_Term )
             */
            $term_id   = $wp_obj->term_id;
            $term_name = $wp_obj->name;
            $tax_name  = $wp_obj->taxonomy;

            /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

            // 親ページがあれば順番に表示
            if ( $wp_obj->parent !== 0 ) {

                $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
                foreach( $parent_array as $parent_id ) {
                    $parent_term = get_term( $parent_id, $tax_name );
                    echo '<li>'.
                            '<a href="'. get_term_link( $parent_id, $tax_name ) .'">'.
                                '<span>'. $parent_term->name .'</span>'.
                            '</a>'.
                         '</li>';
                }
            }

            // ターム自身の表示
            echo '<li>'.
                    '<span>'. $term_name .'</span>'.
                '</li>';


        } elseif ( is_search() ) {

            /**
             * 検索結果ページ
             */
            echo '<li><span>「'. get_search_query() .'」で検索した結果</span></li>';

        
        } elseif ( is_404() ) {

            /**
             * 404ページ
             */
            echo '<li><span>お探しの記事は見つかりませんでした。</span></li>';

        } else {

            /**
             * その他のページ（無いと思うが一応）
             */
            echo '<li><span>'. get_the_title() .'</span></li>';
        }

        echo '</ul></div>';  // 冒頭に合わせて閉じタグ

    }
}
// function wpcf7_do_something ($WPCF7_ContactForm) {
//     $failed = 0;
//     $submission = WPCF7_Submission::get_instance();
//     if ( $submission ) {
//         $posted_data = $submission->get_posted_data();
         
//     }
//     $email = $posted_data['text-987'].'@'.$posted_data['text-418'];
    
//     $to = trim($email);

//     $subject = trim('【㈱コバヤシ・エンタープライズ】お問い合わせありがとうございます');

//     $message = '';

//     $message .= '<p>この度は㈱コバヤシ・エンタープライズWebサイトより</p>';
//     $message .= '<p>お問い合わせいただき、誠にありがとうございます。</p>';
//     $message .= '<p>後ほど担当よりご連絡差し上げますので</p>';
//     $message .= '<p>少々お時間くださいますようお願い申し上げます。</p>';
//     $message .= '<p>万が一このメールの内容に覚えのない方は、その旨をご記入の上、</p>';
//     $message .= '<p>本メールの内容とともに '.$email.' までご連絡下さい。</p>';
//     $message .= '<p>お手数ですがよろしくお願いいたします。</p>';
//     $message .= '<p>■株式会社コバヤシ・エンタープライズ</p>';
//     $message .= '<p>オフィシャルサイト</p>';
//     $message .= '<p>https://www.kobayashi-e.co.jp</p>';

    
//     $headers = array('Content-Type: text/html; charset=UTF-8');
//     if(!empty($to) && !empty($subject) && !empty($message)){

//         try{

//             $result = wp_mail($to,$subject,$message, $headers);

//         }catch(phpmailerException $e){

//             $failed = 1;

//         }

//     }
// }
// function wpcf7_do_something ($WPCF7_ContactForm) {
//     $submission = WPCF7_Submission::get_instance();
//     if ( $submission ) {
//         $posted_data = $submission->get_posted_data();
//     }

//     $phone  = $posted_data['text-17'].'-'.$posted_data['text-463'].'-'.$posted_data['text-272'];
//     $check = preg_match('/^0([1-9]{1}-?[1-9]\d{3}|[1-9]{2}-?\d{3}|[1-9]{2}\d{1}-?\d{2}|[1-9]{2}\d{2}-?\d{1})-?\d{4}$/',$phone);
//     if (!$check) {
//         echo 'Sai định dạng';
//     }
    
// }
// add_action("wpcf7_before_send_mail", "wpcf7_do_something");
// add_filter( 'wpcf7_validate_text', 'cus_confirmation_validation_filter', 10, 2 );
function cus_confirmation_validation_filter($result, $tag) {
    $submission = WPCF7_Submission::get_instance();
    if ( $submission ) {
        $posted_data = $submission->get_posted_data();
    }

    if($tag->name == 'text-17' || $tag->name == 'text-463' || $tag->name == 'text-272') {
        $phone  = $posted_data['text-17'].'-'.$posted_data['text-463'].'-'.$posted_data['text-272'];
        $check = preg_match('/^(?:\d{10}|\d{3}-\d{3}-\d{4}|\d{2}-\d{4}-\d{4}|\d{3}-\d{4}-\d{4})$/',$phone);

        if (!$check) {
            $result->invalidate( $tag, '間違った電話フォーマット' );
        }
    }
    // Check fax
    if($tag->name == 'text-986' || $tag->name == 'text-582' || $tag->name == 'text-253') {
        $fax  = $posted_data['text-986'].'-'.$posted_data['text-582'].'-'.$posted_data['text-253'];
        $check = preg_match('/^(?:\d{10}|\d{3}-\d{3}-\d{4}|\d{2}-\d{4}-\d{4}|\d{3}-\d{4}-\d{4})$/',$fax);
        if (!$check) {
            $result->invalidate( $tag, '間違った電話フォーマット' );
        }
    }
    return $result;
}
// add_filter( 'wpcf7_validate_text*', 'custom_text_confirmation_validation_filter', 10, 2 );
  
function custom_text_confirmation_validation_filter( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
 
    if ( 'text-477' == $name ) {
        $the_value = $_POST[$name];
 
        if ( $the_value == '' ) {
            $result['valid'] = false;
            $result['reason'][$name] = "Error message here";
        }
    }

    return $result;
}
// add_action( 'wpcf7_init', 'custom_add_form_tag_clock' );
 
// function custom_add_form_tag_clock() {
//   wpcf7_add_form_tag( 'phone_input', 'custom_clock_form_tag_handler' ); // "clock" is the type of the form-tag
// }
 
// function custom_clock_form_tag_handler( $tag ) {
//     return '<input name="phone1"><span class="hrd"></span><input name="phone2"><span class="hrd"></span><input name="phone3">';
// }



function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'infomation';
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

?>