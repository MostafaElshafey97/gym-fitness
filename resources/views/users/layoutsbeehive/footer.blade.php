<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<script type="text/javascript" src="assets/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
<script type="text/javascript" src="assets/js/backbone.min.js?ver=1.4.0" id="backbone-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress-media/lib/media-element/wp-mediaelement.min.js?ver=4.6.9" id="rt-mediaelement-wp-js"></script>
<script type="text/javascript" id="rtmedia-main-js-extra">
/* <![CDATA[ */
var rtmedia_bp = {"bp_template_pack":"nouveau"};
var RTMedia_Main_JS = {"media_delete_confirmation":"Are you sure you want to delete this media?","rtmedia_ajaxurl":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","media_delete_success":"Media file deleted successfully."};
var rtmedia_main_js_strings = {"rtmedia_albums":"Albums","privacy_update_success":"Privacy updated successfully.","privacy_update_error":"Couldn't change privacy, please try again."};
var rtmedia_media_size_config = {"photo":{"thumb":{"width":250,"height":250,"crop":1},"medium":{"width":450,"height":320,"crop":1},"large":{"width":800,"height":0,"crop":1}},"video":{"activity_media":{"width":320,"height":240},"single_media":{"width":640,"height":480}},"music":{"activity_media":{"width":320},"single_media":{"width":640}},"featured":{"default":{"width":100,"height":100,"crop":1}}};
var rtmedia_main = {"rtmedia_ajax_url":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","rtmedia_media_slug":"media","rtmedia_lightbox_enabled":"1","rtmedia_direct_upload_enabled":"0","rtmedia_gallery_reload_on_upload":"1","rtmedia_empty_activity_msg":"Please enter some content to post.","rtmedia_empty_comment_msg":"Empty comment is not allowed.","rtmedia_media_delete_confirmation":"Are you sure you want to delete this media?","rtmedia_media_comment_delete_confirmation":"Are you sure you want to delete this comment?","rtmedia_album_delete_confirmation":"Are you sure you want to delete this Album?","rtmedia_drop_media_msg":"Drop files here","rtmedia_album_created_msg":" album created successfully.","rtmedia_something_wrong_msg":"Something went wrong. Please try again.","rtmedia_empty_album_name_msg":"Enter an album name.","rtmedia_max_file_msg":"Max file Size Limit: ","rtmedia_allowed_file_formats":"Allowed File Formats","rtmedia_select_all_visible":"Select All Visible","rtmedia_unselect_all_visible":"Unselect All Visible","rtmedia_no_media_selected":"Please select some media.","rtmedia_selected_media_delete_confirmation":"Are you sure you want to delete the selected media?","rtmedia_selected_media_move_confirmation":"Are you sure you want to move the selected media?","rtmedia_waiting_msg":"Waiting","rtmedia_uploaded_msg":"Uploaded","rtmedia_uploading_msg":"Uploading","rtmedia_upload_failed_msg":"Failed","rtmedia_close":"Close","rtmedia_edit":"Edit","rtmedia_delete":"Delete","rtmedia_edit_media":"Edit Media","rtmedia_remove_from_queue":"Remove from queue","rtmedia_add_more_files_msg":"Add more files","rtmedia_file_extension_error_msg":"File not supported","rtmedia_more":"more","rtmedia_less":"less","rtmedia_read_more":"Read more","rtmedia__show_less":"Show less","rtmedia_activity_text_with_attachment":"disable","rtmedia_delete_uploaded_media":"This media is uploaded. Are you sure you want to delete this media?","rtm_wp_version":"5.9","rtmedia_masonry_layout":"false","rtmedia_disable_media_in_commented_media":"1","rtmedia_disable_media_in_commented_media_text":"Adding media in Comments is not allowed"};
/* ]]> */
</script>
<script type="text/javascript" src="assets/plugins/buddypress-media/app/assets/js/rtmedia.min.js?ver=4.6.9" id="rtmedia-main-js"></script>
<script type="text/javascript" id="rtmedia-backbone-js-extra">
/* <![CDATA[ */
var rtmedia_template = {"template_url":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php?action=rtmedia_get_template&template=media-gallery-item"};
var rtMedia_plupload = {"rtMedia_plupload_config":{"url":"\/wordpress-5.9\/wordpress\/members-2\/upload\/","runtimes":"html5,flash,html4","browse_button":"rtMedia-upload-button","container":"rtmedia-upload-container","drop_element":"drag-drop-area","filters":[{"title":"Media Files","extensions":"jpg,jpeg,png,gif,mp4,mp3"}],"max_file_size":"40M","multipart":true,"urlstream_upload":true,"flash_swf_url":"httplocalhost\/wordpress-5.9\/wordpress\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"httplocalhost\/wordpress-5.9\/wordpress\/wp-includes\/js\/plupload\/plupload.silverlight.xap","file_data_name":"rtmedia_file","multi_selection":true,"multipart_params":{"redirect":"no","redirection":"false","action":"wp_handle_upload","_wp_http_referer":"\/wordpress-5.9\/wordpress\/members-2\/","mode":"file_upload","rtmedia_upload_nonce":"1705d12038"},"max_file_size_msg":"40M"}};
var rtmedia_media_thumbs = {"photo":"httplocalhost\/wordpress-5.9\/wordpress\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/image_thumb.png","video":"httplocalhost\/wordpress-5.9\/wordpress\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/video_thumb.png","music":"httplocalhost\/wordpress-5.9\/wordpress\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/audio_thumb.png"};
var rtmedia_edit_media_info_upload = {"title":"Title:","description":"Description:"};
var rtmedia_bp = {"bp_template_pack":"nouveau"};
var rtmedia_backbone_strings = {"rtm_edit_file_name":"Edit File Name"};
var rtmedia_exteansions = {"photo":["jpg","jpeg","png","gif"],"video":["mp4"],"music":["mp3"]};
var rtMedia_update_plupload_comment = {"url":"\/wordpress-5.9\/wordpress\/members-2\/upload\/","runtimes":"html5,flash,html4","browse_button":"rtmedia-comment-media-upload","container":"rtmedia-comment-media-upload-container","filters":[{"title":"Media Files","extensions":"jpg,jpeg,png,gif,mp4,mp3"}],"max_file_size":"40M","multipart":"1","urlstream_upload":"1","flash_swf_url":"httplocalhost\/wordpress-5.9\/wordpress\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"httplocalhost\/wordpress-5.9\/wordpress\/wp-includes\/js\/plupload\/plupload.silverlight.xap","file_data_name":"rtmedia_file","multi_selection":"","multipart_params":{"redirect":"no","redirection":"false","action":"wp_handle_upload","_wp_http_referer":"\/wordpress-5.9\/wordpress\/members-2\/","mode":"file_upload","rtmedia_upload_nonce":"1705d12038"},"max_file_size_msg":"40M"};
var rtmedia_backbone = {"rMedia_loading_media":"httplocalhost\/wordpress-5.9\/wordpress\/wp-content\/plugins\/buddypress-media\/app\/assets\/admin\/img\/boxspinner.gif","rtmedia_set_featured_image_msg":"Featured media set successfully.","rtmedia_unset_featured_image_msg":"Featured media removed successfully.","rtmedia_no_media_found":"Oops !! There's no media found for the request !!","rtmedia_load_more_or_pagination":"load_more","rtmedia_bp_enable_activity":"1","rtmedia_upload_progress_error_message":"There are some uploads in progress. Do you want to cancel them?","rtmedia_media_disabled_error_message":"Media upload is disabled. Please Enable at least one media type to proceed.","rMedia_loading_file":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/images\/loading.gif"};
/* ]]> */
</script>
<script type="text/javascript" src="assets/plugins/buddypress-media/app/assets/js/rtMedia.backbone.js?ver=4.6.9" id="rtmedia-backbone-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress/bp-core/js/vendor/moment-js/moment.min.js?ver=10.0.0" id="bp-moment-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress/bp-core/js/vendor/livestamp.min.js?ver=10.0.0" id="bp-livestamp-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress/bp-core/js/vendor/jquery.caret.min.js?ver=10.0.0" id="jquery-caret-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress/bp-core/js/vendor/jquery.atwho.min.js?ver=10.0.0" id="jquery-atwho-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress/bp-activity/js/mentions.min.js?ver=10.0.0" id="bp-mentions-js"></script>
<script type="text/javascript" id="bp-nouveau-js-extra">
/* <![CDATA[ */
var BP_Nouveau = {"ajaxurl":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","confirm":"Are you sure?","show_x_comments":"Show all %d comments","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost.","object_nav_parent":"#buddypress","objects":{"0":"activity","1":"members","4":"xprofile","7":"settings","8":"notifications"},"nonces":{"activity":"df9acb35e1","members":"ffa7640dda","xprofile":"a53195db85","settings":"a9fa80e98d","notifications":"b1fff94a07"}};
/* ]]> */
</script>
<script type="text/javascript" src="assets/plugins/buddypress/bp-templates/bp-nouveau/js/buddypress-nouveau.min.js?ver=10.0.0" id="bp-nouveau-js"></script>
<script type="text/javascript" src="assets/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="assets/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"httplocalhost\/wordpress-5.9\/wordpress\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="assets/plugins/contact-form-7/includes/js/index.js?ver=5.5.4" id="contact-form-7-js"></script>
<script type="text/javascript" src="assets/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.1.1" id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wordpress-5.9\/wordpress\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"httplocalhost\/wordpress-5.9\/wordpress\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="assets/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.1.1" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="assets/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.1.1" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wordpress-5.9\/wordpress\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="assets/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.1.1" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wordpress-5.9\/wordpress\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_efef217e63ca1ec3bf968c5521b8b1da","fragment_name":"wc_fragments_efef217e63ca1ec3bf968c5521b8b1da","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" src="assets/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.1.1" id="wc-cart-fragments-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/popper.min.js?ver=1.4.4" id="popper-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/bootstrap.min.js?ver=1.4.4" id="bootstrap-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/mscrollbar.min.js?ver=1.4.4" id="mscrollbar-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/wow.min.js?ver=1.4.4" id="wow-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/hiraku.min.js?ver=1.4.4" id="hiraku-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/jquery.shorten.min.js?ver=1.4.4" id="shorten-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/jquery.fitvids.min.js?ver=1.4.4" id="fitvids-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/flexmenu.min.js?ver=1.4.4" id="flexmenu-js"></script>
<script type="text/javascript" id="beehive-bp-js-extra">
/* <![CDATA[ */
var beehive_data = {"ajaxurl":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","beehive_search_nonce":"0207592559","avatar":"<img alt='' src='http:\/\/0.gravatar.com\/avatar\/?s=24&d=mm&r=g' srcset='http:\/\/0.gravatar.com\/avatar\/?s=48&d=mm&r=g 2x' class='avatar avatar-24 photo avatar-default' height='24' width='24' loading='lazy'\/>","mobile_logo_url":null,"fire_login_modal":"","user_nav":"1","stick_offset":"90","more_text":"More","read_more":"Read more","read_close":"Close","like_msg":"Like this","unlike_msg":"Unlike this","attachment_text":"Attach media","activity_max":"3000","bp_is_active":"1","icon_logo_url":"https:\/\/beehive.themified.com\/wp-content\/themes\/beehive\/assets\/images\/logo-icon.svg","rtm_is_masonry":""};
/* ]]> */
</script>
<script type="text/javascript" src="assets/themes/beehive/buddypress/js/beehive-bp.min.js?ver=1.4.4" id="beehive-bp-js"></script>
<script type="text/javascript" id="beehive-login-js-extra">
/* <![CDATA[ */
var beehive_data = {"ajaxurl":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","beehive_search_nonce":"0207592559","avatar":"<img alt='' src='http:\/\/1.gravatar.com\/avatar\/?s=24&d=mm&r=g' srcset='http:\/\/2.gravatar.com\/avatar\/?s=48&d=mm&r=g 2x' class='avatar avatar-24 photo avatar-default' height='24' width='24' loading='lazy'\/>","mobile_logo_url":null,"fire_login_modal":"","user_nav":"1","stick_offset":"90","more_text":"More","read_more":"Read more","read_close":"Close","like_msg":"Like this","unlike_msg":"Unlike this","attachment_text":"Attach media","activity_max":"3000","bp_is_active":"1","icon_logo_url":"https:\/\/beehive.themified.com\/wp-content\/themes\/beehive\/assets\/images\/logo-icon.svg","rtm_is_masonry":""};
/* ]]> */
</script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/beehive-login.min.js?ver=1.4.4" id="beehive-login-js"></script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/sticky-kit.min.js?ver=1.4.4" id="sticky-kit-js"></script>
<script type="text/javascript" src="assets/js/imagesloaded.min.js?ver=4.1.4" id="imagesloaded-js"></script>
<script type="text/javascript" src="assets/js/masonry.min.js?ver=4.2.2" id="masonry-js"></script>
<script type="text/javascript" id="beehive-js-extra">
/* <![CDATA[ */
var beehive_data = {"ajaxurl":"httplocalhost\/wordpress-5.9\/wordpress\/wp-admin\/admin-ajax.php","beehive_search_nonce":"0207592559","avatar":"<img alt='' src='http:\/\/1.gravatar.com\/avatar\/?s=24&d=mm&r=g' srcset='http:\/\/1.gravatar.com\/avatar\/?s=48&d=mm&r=g 2x' class='avatar avatar-24 photo avatar-default' height='24' width='24' loading='lazy'\/>","mobile_logo_url":null,"fire_login_modal":"","user_nav":"1","stick_offset":"90","more_text":"More","read_more":"Read more","read_close":"Close","like_msg":"Like this","unlike_msg":"Unlike this","attachment_text":"Attach media","activity_max":"3000","bp_is_active":"1","icon_logo_url":"https:\/\/beehive.themified.com\/wp-content\/themes\/beehive\/assets\/images\/logo-icon.svg","rtm_is_masonry":""};
/* ]]> */
</script>
<script type="text/javascript" src="assets/themes/beehive/assets/js/beehive.min.js?ver=1.4.4" id="beehive-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress-media/lib/media-element/mediaelement-and-player.min.js?ver=4.6.9" id="rt-mediaelement-js"></script>
<script type="text/javascript" src="assets/plugins/buddypress-media/lib/touchswipe/jquery.touchSwipe.min.js?ver=4.6.9" id="rtmedia-touchswipe-js"></script>
</body>

</html>