<!DOCTYPE html>
<html class="no-js">
<?php

$gs = 0;
$ti = 0;
$ci = 0;
$zo = 0;
$pre = 0;
$pre1 = 0;
if (isset($_GET["gs"]) && isset($_GET["ti"]) && isset($_GET["ci"]) && isset($_GET["zo"]) && isset($_GET["pre"]) && isset($_GET["pre1"])) {
    $gs = $_GET["gs"];
    $ti = $_GET["ti"];
    $ci = $_GET["ci"];
    $zo = $_GET["zo"];
    $pre = $_GET["pre"];
    $pre= str_replace('.', '', $pre);
    $pre1 = $_GET["pre1"];
    $pre1= str_replace('.', '', $pre1);

}
?>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="shortcut icon" href="images/tutecho.png">
    <title>Tutecho</title>
 
   
  
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!--Start of Tawk.to Script-->
      
<!--End of Tawk.to Script-->
    <link rel='dns-prefetch' href='http://s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Houzez &raquo; Feed" href="feed/index.php" />
    <link rel="alternate" type="application/rss+xml" title="Houzez &raquo; Comments Feed" href="comments/feed/index.php" />
    <meta property='og:site_name' content='Houzez' />
    <meta property='og:title' content='About Houzez' />
    <meta property='og:type' content='article' />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/effects.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/personality.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/other.css">
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet">
    <style id='houzez-style-inline-css' type='text/css'>
        .advance-search-header,
        .advanced-search-mobile,
        .advanced-search-mobile .single-search .form-control,
        .search-expandable .advanced-search {
            background-color: #ffffff;
        }

        .search-expand-btn {
            background-color: #ff6e00;
        }

        .search-expand-btn {
            color: #ffffff
        }

        .advance-search-header .houzez-theme-button,
        .advanced-search-mobile .houzez-theme-button,
        .splash-search .btn-secondary,
        .advanced-search .btn-secondary {
            color: #ffffff;
            background-color: #ff6e00;
            border: 1px solid #ff6e00;
        }

        .advance-search-header .houzez-theme-button:focus,
        .advanced-search-mobile .houzez-theme-button:focus,
        .advanced-search .btn-secondary:focus,
        .splash-search .btn-secondary:focus {
            color: #ffffff;
            background-color: #e96603;
            border: 1px solid #e96603;
        }

        .advance-search-header .houzez-theme-button:hover,
        .advanced-search .btn-secondary:hover,
        .advanced-search .btn-secondary:active,
        .advanced-search .btn-secondary:active:hover,
        .advanced-search .btn-secondary.active,
        .advanced-search-mobile .houzez-theme-button:hover,
        .splash-search .btn-secondary:hover {
            color: #ffffff;
            background-color: #e96603;
            border: 1px solid #e96603;
        }

        .advance-search-header .houzez-theme-button:active,
        .advanced-search .btn-secondary:active,
        .advanced-search-mobile .houzez-theme-button:active,
        .splash-search .btn-secondary:active {
            color: #ffffff;
            background-color: #e96603;
            border: 1px solid #e96603;
        }

        .advanced-search .dropdown-toggle,
        .advanced-search .form-control,
        .advance-search-header .bootstrap-select .btn,
        .advance-search-header .bootstrap-select .fave-load-more a,
        .fave-load-more .advance-search-header .bootstrap-select a,
        .advance-fields .form-control {
            border: 1px solid #cccccc;
        }

        .advanced-search .input-group .form-control,
        .search-long .search input,
        .advanced-search .search-long .search,
        .advanced-search .search-long .btn-group,
        .advanced-search .search-long .advance-btn,
        .input-group-addon {
            border-color: #cccccc !important;
        }

        .advanced-search-mobile .advance-fields {
            border-top: 1px solid #cccccc;
        }

        .advanced-search-mobile .single-search-wrap button {
            color: #cccccc;
        }

        .advanced-search-mobile .advance-fields::after {
            border-bottom-color: #cccccc;
        }

        .advanced-search-mobile .single-search-inner .form-control::-moz-placeholder {
            color: #cccccc;
        }

        .advanced-search-mobile .single-search-inner .form-control:-ms-input-placeholder {
            color: #cccccc;
        }

        .advanced-search-mobile .single-search-inner .form-control::-webkit-input-placeholder {
            color: #cccccc;
        }

        .advance-btn.blue {
            color: #ffffff;
        }

        .advance-btn.blue:hover,
        .advance-btn.blue:focus {
            color: #e96603;
        }

        .advanced-search .advance-btn {
            color: #8c8c8c;
        }

        .advanced-search .advance-btn:hover {
            color: #8c8c8c;
        }

        .advanced-search .advance-btn:focus,
        .advanced-search .advance-btn.active {
            color: #8c8c8c
            ;
        }

        .advanced-search .advance-fields,
        .advanced-search .features-list label.title,
        .advanced-search .features-list .checkbox-inline,
        .advanced-search-mobile .advance-fields,
        .advanced-search-mobile .features-list label.title,
        .advanced-search-mobile .features-list .checkbox-inline,
        .range-title,
        .range-text,
        .range-text p,
        .min-price-range,
        .max-price-range,
        .advanced-search-mobile,
        .advanced-search-mobile .single-search-inner .form-control {
            color: #000000;
        }

        .advanced-search-mobile .single-search-inner .form-control::-moz-placeholder {
            color: #000000 !important;
        }

        .advanced-search-mobile .single-search-inner .form-control:-ms-input-placeholder {
            color: #000000 !important;
        }

        .advanced-search-mobile .single-search-inner .form-control::-webkit-input-placeholder {
            color: #000000 !important;
        }

        .top-bar {
            background-color: #000000;
        }

        .top-bar .top-nav>ul>li>a:hover,
        .top-bar .top-nav>ul li.active>a,
        .top-bar .top-nav>ul ul a:hover,
        .top-contact a:hover,
        .top-bar .dropdown-menu>li:hover,
        .top-contact li .btn:hover {
            color: rgba(0, 174, 239, 0.75);
        }

        .top-contact a,
        .top-contact li,
        .top-contact li .btn,
        .top-bar .top-nav>ul>li>a {
            color: #ffffff;
        }

        .top-bar .mobile-nav .nav-trigger {
            color: #FFFFFF;
        }

        body {
            background-color: #f5f5f5;
        }

        a,
        .blue,
        .text-primary,
        .btn-link,
        .item-body h2,
        .detail h3,
        .breadcrumb li a,
        .fave-load-more a,
        .sort-tab .btn,
        .sort-tab .fave-load-more a,
        .fave-load-more .sort-tab a,
        .pagination-main .pagination a,
        .team-caption-after .team-name a:hover,
        .team-caption-after .team-designation a:hover,
        .agent-media .view,
        .my-property-menu a.active,
        .my-property-menu a:hover,
        .search-panel .advance-trigger {
            color: #000;
        }

        .banner-caption h1,
        .banner-caption h2 {
            color: #000;
        }

        .property-item h2 a,
        .property-item .property-title a,
        .widget .media-heading a {
            color: #000000;
        }

        .property-item h2 a:hover,
        .property-item .property-title a:hover,
        .widget .media-heading a:hover {
            color: #8c8c8c;
        }

        .owl-theme .owl-nav [class*=owl-],
        .testimonial-carousel .owl-nav [class*=owl-]:hover,
        .testimonial-carousel .owl-nav [class*=owl-]:focus,
        .gallery-thumb .icon {
            background-color: #8c8c8c;
        }

        #sidebar .widget_tag_cloud .tagcloud a,
        .article-footer .meta-tags a,
        .pagination-main .pagination li.active a,
        .other-features .btn.btn-secondary,
        .my-menu .active a,
        .houzez-module .module-title-nav .module-nav .btn,
        .houzez-module .module-title-nav .module-nav .fave-load-more a,
        .fave-load-more .houzez-module .module-title-nav .module-nav a {
            color: #fff;
            background-color: #8c8c8c;
            border: 1px solid #8c8c8c;
        }

        .plan-tabs li.active {
            box-shadow: inset 0 4px 0 #8c8c8c;
            border-top-color: #8c8c8c;
            background-color: #fff;
            color: #8c8c8c;
        }

        .btn-primary,
        .label-primary,
        .scrolltop-btn {
            color: #fff;
            background-color: #8c8c8c;
            border-color: #8c8c8c;
        }

        .btn-primary.btn-trans {
            color: #8c8c8c;
        }

        .header-section-2 .header-top-call {
            color: #ffffff;
            background-color: #8c8c8c;
        }

        .header-section-2 .avatar {
            color: #ffffff;
        }

        @media (max-width: 991px) {
            .header-section-2 .header-top {
                background-color: #8c8c8c;
            }
        }

        .modal-header,
        .ui-slider-horizontal .ui-slider-range,
        .ui-state-hover,
        .ui-widget-content .ui-state-hover,
        .ui-widget-header .ui-state-hover,
        .ui-state-focus,
        .ui-widget-content .ui-state-focus,
        .ui-widget-header .ui-state-focus,
        .list-loading-bar {
            background-color: #8c8c8c;
            border-color: transparent;
        }

        .houzez-module .module-title-nav .module-nav .btn {
            color: #8c8c8c;
            border: 1px solid #8c8c8c;
            background-color: transparent;
        }

        .fave-load-more a,
        .fave-load-more a:hover {
            border: 1px solid #8c8c8c;
        }

        #transportation,
        #supermarkets,
        #schools,
        #libraries,
        #pharmacies,
        #hospitals,
        .pay-step-block.active span,
        .loader-ripple div:nth-of-type(2) {
            border-color: #8c8c8c;
        }

        .loader-ripple div:nth-of-type(1) {
            border-color: #FF6E00;
        }

        .detail-block .alert-info {
            color: rgba(0, 0, 0, .85);
            background-color: rgba(0, 174, 239, 0.1);
            border: 1px solid #8c8c8c;
        }

        .houzez-taber-wrap .houzez-tabs li.active::before,
        .houzez-taber-wrap .houzez-tabs li:hover::before,
        .houzez-taber-wrap .houzez-tabs li:active::before,
        .profile-tabs li:hover,
        .steps-nav,
        .steps-progress-main .steps-progress span {
            background-color: #8c8c8c;
        }

        .btn-secondary,
        .agent_contact_form.btn-secondary,
        .form-media .wpcf7-submit,
        .wpcf7-submit,
        .dsidx-resp-area-submit input[type='submit'] {
            color: #fff;
            background-color: #FF6E00;
            border-color: #FF6E00;
        }

        .btn-secondary.btn-trans {
            color: #FF6E00;
        }

        .item-thumb .label-featured,
        figure .label-featured,
        .carousel-module .carousel .item figure .label-featured {
            background-color: #e20a16;
            color: #ffffff;
        }

        a:hover,
        a:focus,
        a:active,
        .blue:hover,
        .btn-link:hover,
        .breadcrumb li a:hover,
        .pagination-main .pagination a:hover,
        .vc_toggle_title h4:hover,
        .footer a:hover,
        .impress-address:hover,
        .agent-media .view:hover,
        .my-property .dropdown-menu a:hover,
        .article-detail .article-title a:hover,
        .comments-block .article-title a:hover {
            color: #8c8c8c;
            text-decoration: none;
        }

        .detail-top .media-tabs a:hover span,
        .header-section.slpash-header .header-right a.btn:hover,
        .slpash-header.header-section-4 .header-right a.btn:hover,
        .houzez-module .module-title-nav .module-nav .btn:hover,
        .houzez-module .module-title-nav .module-nav .fave-load-more a:hover,
        .fave-load-more .houzez-module .module-title-nav .module-nav a:hover,
        .houzez-module .module-title-nav .module-nav .btn:focus,
        .houzez-module .module-title-nav .module-nav .fave-load-more a:focus,
        .fave-load-more .houzez-module .module-title-nav .module-nav a:focus {
            color: #fff;
            background-color: #8c8c8c;
            border: 1px solid rgba(0, 174, 239, 0.75);
        }

        .fave-load-more a:hover,
        #sidebar .widget_tag_cloud .tagcloud a:hover,
        .article-footer .meta-tags a:hover,
        .other-features .btn.btn-secondary:hover,
        .my-actions .action-btn:hover,
        .my-actions .action-btn:focus,
        .my-actions .action-btn:active,
        .my-actions .open .action-btn {
            background-color:#8c8c8c;
            border-color: rgba(0, 174, 239, 0.75);
        }

        .owl-theme .owl-nav [class*=owl-]:hover,
        .owl-theme .owl-nav [class*=owl-]:focus,
        .owl-theme .owl-nav [class*=owl-]:active,
        .testimonial-carousel .owl-nav [class*=owl-]:hover,
        .testimonial-carousel .owl-nav [class*=owl-]:focus {
            border-color: rgba(0, 174, 239, 0.75);
        }

        .owl-theme .owl-nav [class*=owl-]:hover,
        .owl-theme .owl-nav [class*=owl-]:focus,
        .owl-theme .owl-nav [class*=owl-]:active,
            {
            background-color: rgba(0, 174, 239, 0.75);
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .btn-primary:active:hover,
        .btn-primary.btn-trans:hover,
        .btn-primary.btn-trans:focus,
        .btn-primary.btn-trans:active,
        .btn-primary.btn-trans.active,
        .btn-primary.btn-trans:active:hover,
        .invoice-list .btn-invoice:hover,
        #houzez-gmap-main .map-btn:hover,
        .media-tabs-list li>a:hover,
        .media-tabs-list li.active a,
        .detail-bar .detail-tabs li:hover,
        .actions li>span:hover,
        .lightbox-arrow:hover,
        .scrolltop-btn:hover {
            background-color: #8c8c8c;
            border-color: rgba(0, 174, 239, 0.75);
        }

        .btn-secondary:hover,
        .btn-secondary:focus,
        .btn-secondary:active,
        .btn-secondary.active,
        .btn-secondary:active:hover,
        .btn-secondary.btn-trans:hover,
        .btn-secondary.btn-trans:focus,
        .btn-secondary.btn-trans:active,
        .btn-secondary.btn-trans.active,
        .btn-secondary.btn-trans:active:hover,
        .agent_contact_form.btn-secondary:hover,
        .form-media .wpcf7-submit:hover,
        .wpcf7-submit:hover,
        .wpcf7-submit:focus,
        .wpcf7-submit:active,
        .dsidx-resp-area-submit input[type='submit']:hover,
        .dsidx-resp-area-submit input[type='submit']:focus,
        .dsidx-resp-area-submit input[type='submit']:active {
            color: #fff;
            background-color: #8c8c8c;
            border-color: rgba(255, 110, 0, 0.75);
        }

        .header-section {
            background-color:#8c8c8c;
        }

        .header-section .navi>ul>li>a {
            color: #FFFFFF;
            background-color: transparent;
        }

        .header-section .header-right .user a,
        .header-section .header-right span {
            color: #FFFFFF;
        }

        .header-section .navi>ul>li>a:hover {
            color: rgba(255, 255, 255, 1);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .header-section .header-right .user a:hover,
        .header-section .header-right span:hover {
            color: rgba(255, 255, 255, 1);
        }

        .header-section-3 .header-top {
            background-color: #ffffff;
        }

        .header-section-3 .header-top-social a,
        .header-section-3 .header-contact .contact-block .fa,
        .header-section-3 .header-top .media-heading,
        .header-contact .contact-block p {
            color: #004274;
        }

        .header-contact .contact-block .fa {
            color: #4cc6f4;
        }

        .header-section-3 .header-bottom {
            background-color: #8c8c8c;
        }

        .header-section-3 .navi>ul>li>a,
        .header-section-3 .header-right .user a,
        .header-section-3 .header-right span {
            color: #ffffff;
        }

        .header-section-3 .header-right .user {
            line-height: 60px;
        }

        .header-section-3 .navi>ul>li>a:hover,
        .header-section-3 .navi>ul>li.active>a {
            color: rgba(255, 255, 255, 1);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .header-section-3 .header-right .user a:hover,
        .header-section-3 .header-right span:hover {
            color: rgba(255, 255, 255, 1);
        }

        .header-section-3 .navi>ul>li {
            border-right: 1px solid rgba(255, 255, 255, 0.2);
        }

        .header-section-3 .header-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .header-section-3 .navi ul {
            border-left: 1px solid rgba(255, 255, 255, 0.2);
        }

        .header-section-2 .header-top {
            background-color: #004272;
        }

        .header-section-2 .header-bottom {
            background-color: #004272;
            border-top: 1px solid #194d72;
            border-bottom: 1px solid #194d72;
        }

        .header-section-2 .header-bottom .navi>ul>li {
            border-right: 1px solid #194d72;
        }

        .header-section-2 .header-right {
            border-left: 1px solid #194d72;
        }

        .header-section-2 .navi>ul>li>a,
        .header-section-2 .header-right .user a,
        .header-section-2 .header-right span {
            color: #FFFFFF;
        }

        .header-section-2 .navi>ul>li>a:hover,
        .header-section-2 .navi>ul>li.active>a {
            color: rgba(255, 255, 255, 1);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .header-section-2 .header-right .user a:hover,
        .header-section-2 .header-right span:hover {
            color: rgba(255, 255, 255, 1);
        }

        .header-section .header-right a.btn,
        .header-section-2 .header-right a.btn,
        .header-section-3 .header-right a.btn {
            color: #ffffff;
            border: 1px solid #ffffff;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .header-section .header-right .user a.btn:hover,
        .header-section-2 .header-right .user a.btn:hover,
        .header-section-3 .header-right .user a.btn:hover {
            color: rgba(255, 255, 255, 1);
            border-color: #ffffff;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .header-section-4,
        .header-section-4 .navi>ul ul,
        .sticky_nav.header-section-4 {
            background-color: #ffffff;
        }

        .header-section-4 .navi>ul>li>a,
        .header-section-4 .navi>ul ul a,
        .header-section-4 .header-right .user a,
        .header-section-4 .header-right span {
            color: #004274;
        }

        .header-section-4 .header-right .btn {
            color: #004274;
            border: 1px solid #004274;
            background-color: #ffffff;
        }

        .header-section-4 .navi>ul>li>a:hover,
        .header-section-4 .navi>ul ul a:hover,
        .header-section-4 .navi>ul>li.active>a,
        .header-section-4 .header-right .user a:hover,
        .header-section-4 .header-right .user a:focus,
        .header-section-4 .header-right span:hover,
        .header-section-4 .header-right span:focus {
            color: rgba(0, 174, 239, 1);
        }

        .header-section-4 .header-right .user .btn:hover {
            color: rgba(255, 255, 255, 1);
            border-color: rgba(0, 174, 239, 1);
            background-color: rgba(0, 174, 239, 1);
        }

        .houzez-header-transparent {
            background-color: transparent;
            position: absolute;
            width: 100%;
            border-bottom: 1px none;
            border-color: rgba(255, 255, 255, 0.3);
        }

        .header-section-4.houzez-header-transparent .navi>ul>li>a,
        .header-section-4.houzez-header-transparent .header-right .account-action span,
        .header-section-4.houzez-header-transparent .header-right .user span {
            color: #ffffff;
        }

        .header-section-4.houzez-header-transparent .navi>ul>li>a:hover,
        .header-section-4.houzez-header-transparent .navi>ul ul a:hover,
        .header-section-4.houzez-header-transparent .account-action li:hover,
        .header-section-4.houzez-header-transparent .header-right .user a:hover,
        .header-section-4.houzez-header-transparent .header-right .account-action span:hover,
        .header-section-4.houzez-header-transparent .header-right .user span:hover,
        .header-section-4.houzez-header-transparent .header-right .user a:focus {
            color:#8c8c8c;
        }

        .header-section-4.houzez-header-transparent .header-right .btn {
            color: #ffffff;
            border: 1px solid #ffffff;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .header-section-4.houzez-header-transparent .header-right .user .btn:hover {
            color: rgba(255, 255, 255, 1);
            border-color: rgba(0, 174, 239, 1);
            background-color: rgba(0, 174, 239, 1);
        }

        .navi.main-nav>ul ul {
            background-color: rgba(255, 255, 255, 0.95);
        }

        .navi.main-nav>ul ul a {
            color: #2e3e49 !important;
        }

        .navi.main-nav>ul ul a:hover {
            color: #8c8c8c !important;
        }

        .navi.main-nav>ul ul li {
            border-color: #e6e6e6;
        }

        .header-section .header-right a,
        .header-section .header-right span,
        .header-section .header-right .btn-default,
        .header-section .navi ul li,
        .header-section .account-dropdown>ul>li>a,
        .header-section-3 .header-right a,
        .header-section-3 .header-right span,
        .header-section-3 .navi ul li,
        .header-section-3 .account-dropdown>ul>li>a,
        .header-section-2 .header-right a,
        .header-section-2 .header-right span,
        .header-section-2 .navi ul li,
        .header-section-2 .account-dropdown>ul>li>a,
        .header-section-4 .header-right a,
        .header-section-4 .header-right span,
        .header-section-4 .navi ul li,
        .header-section-4 .header-right .btn-default,
        .header-section-4 .account-dropdown>ul>li>a {
            font-size: 14px;
            font-weight: 500;
            line-height: 18px;
      
            text-align: left;
        }

        .header-section.slpash-header .navi>ul>li>a:hover,
        .slpash-header.header-section-4 .navi>ul>li>a:hover,
        .header-section.slpash-header .header-right .user>a:hover,
        .slpash-header.header-section-4 .header-right .user>a:hover,
        .header-section.slpash-header .navi>ul>li>a:focus,
        .slpash-header.header-section-4 .navi>ul>li>a:focus,
        .header-section.slpash-header .header-right .user>a:focus,
        .slpash-header.header-section-4 .header-right .user>a:focus {
            color: rgba(255, 255, 255, 1);
        }

        .header-section.slpash-header .navi>ul>li.active>a {
            color: #8c8c8c;
        }

        .header-mobile {
            background-color: #004274;
        }

        .header-mobile .nav-dropdown>ul {
            background-color: rgba(255, 255, 255, 0.95);
        }

        .mobile-nav .nav-trigger,
        .header-mobile .user a,
        .header-mobile .user-icon {
            color: #FFFFFF;
        }

        .splash-header .mobile-nav .nav-trigger,
        .splash-header .header-mobile .user a,
        .splash-header .header-mobile .user-icon {
            color: #FFFFFF;
        }

        .nav-dropdown a,
        .nav-dropdown li .expand-me {
            color: #004274;
        }

        .mobile-nav a {
            font-size: 14px;
            font-weight: 500;
            line-height: 18px;
      
            text-align: left;
        }

        .mobile-nav .nav-dropdown>ul ul a {
            color: #ffffff;
            background-color: #30C7FF;
        }

        .mobile-nav .nav-dropdown li {
            border-top: 1px solid #ffffff;
        }

        .mobile-nav .nav-dropdown>ul>li:hover {
            background-color: rgba(0, 174, 239, 1);
        }

        .mobile-nav .nav-dropdown li.active>a {
            color: rgba(255, 255, 255, 1);
            background-color: rgba(0, 174, 239, 1);
        }

        .account-dropdown>ul {
            background-color: #FFFFFF;
        }

        .account-dropdown>ul:before {
            border-bottom-color: #FFFFFF;
        }

        .account-dropdown>ul>li>a {
            color: #2e3e49 !important;
        }

        .account-dropdown>ul>li>a:hover,
        .account-dropdown>ul>li.active>a,
        .account-dropdown>ul>li.active>a:hover {
            color: #2e3e49 !important;
            background-color: rgba(204, 204, 204, 0.15);
        }

        .account-dropdown>ul>li {
            border-color: #e6e6e6;
        }

        .account-dropdown>ul .sub-menu {
            background-color: #00365e;
        }

        .account-dropdown>ul .sub-menu>li,
        .account-dropdown>ul .sub-menu>li a {
            color: #FFFFFF;
        }

        .account-dropdown>ul .sub-menu>li a:hover,
        .account-dropdown>ul .sub-menu>li.active>a {
            background-color: rgba(255, 255, 255, 0.2) !important;
            color: inherit;
        }

        .account-dropdown>ul .sub-menu>li {
            border-color: rgba(255, 255, 255, 0.3) !important;
        }

        .footer {
            background-color: #004274;
        }

        .footer-bottom {
            background-color: #00335A;
            border-top: 1px solid #00243f;
        }

        .footer,
        .footer-widget h4,
        .footer-bottom p,
        .footer-widget.widget_calendar caption {
            color: #FFFFFF;
        }

        .footer a,
        .footer-bottom .navi a,
        .footer-bottom .foot-social p a {
            color: #FFFFFF;
        }

        .footer-widget .widget-title,
        .footer p,
        .footer p.wp-caption-text,
        .footer li,
        .footer li i {
            color: #FFFFFF;
        }

        .footer a:hover,
        .footer-bottom .navi a:hover,
        .footer-bottom .foot-social p a:hover {
            color: rgba(0, 174, 239, 1);
        }

        .footer-widget.widget_tag_cloud .tagcloud a {
            color: rgba(0, 174, 239, 1);
            background-color: #FFFFFF;
            border: 1px solid #FFFFFF;
        }

        .detail-bar p,
        .detail-bar ol li,
        .detail-bar ul li {
            font-size: 16px;
        }

        h1,
        .page-title .title-head,
        .article-detail h1,
        h2,
        .article-detail h2,
        .houzez-module .module-title-nav h2,
        h3,
        .module-title h3,
        .article-detail h3,
        .detail h3,
        .caption-bottom .detail h3,
        .detail-bottom.detail h3,
        .add-title-tab h3,
        #sidebar .widget-title,
        .footer-widget .widget-title,
        .services-module .service-block h3,
        h4,
        .article-detail h4,
        h5,
        .article-detail h5,
        h6,
        .article-detail h6,
        .item-body h2,
        .item-body .property-title,
        .post-card-description h3,
        .post-card-description .post-card-title,
        .my-property .my-heading,
        .module-title h2,
        .houzez-module .module-title-nav h2 {
            font-weight: 500;
          
            text-align: inherit;
        }

        h1,
        .page-title .title-head,
        .article-detail h1 {
            font-size: 30px;
            line-height: 38px;
            margin: 0 0 28px 0;
        }

        h2,
        .article-detail h2,
        .houzez-module .module-title-nav h2 {
            font-size: 24px;
            line-height: 32px;
            margin: 0 0 10px 0;
        }

        .houzez-module .module-title-nav h2 {
            margin: 0;
        }

        h3,
        .module-title h3,
        .article-detail h3,
        .services-module .service-block h3 {
            font-size: 20px;
            line-height: 28px;
        }

        h4,
        .article-detail h4 {
            font-size: 18px;
            line-height: 26px;
            margin: 0 0 24px 0;
        }

        h5,
        .article-detail h5 {
            font-size: 16px;
            line-height: 24px;
            margin: 0 0 24px 0;
        }

        h6,
        .article-detail h6 {
            font-size: 14px;
            line-height: 20px;
            margin: 0 0 24px 0;
        }

        .item-body h2,
        .post-card-description h3,
        .my-property .my-heading {
            font-size: 16px;
            line-height: 20px;
            margin: 0 0 8px 0;
            font-weight: 500;
          
            text-align: inherit;
        }

        .module-title h2 {
            font-size: 24px;
            line-height: 32px;
            margin: 0 0 10px 0;
            font-weight: 500;
          
            text-align: inherit;
        }

        .module-title .sub-heading {
            font-size: 16px;
            line-height: 24px;
            font-weight: 300;
          
            text-align: inherit;
        }

        .houzez-module .module-title-nav .sub-title {
            font-size: 16px;
            line-height: 18px;
            margin: 8px 0 0 0;
            font-weight: 300;
          
            text-align: inherit;
        }

        .item-thumb .hover-effect:before,
        figure .hover-effect:before,
        .carousel-module .carousel .item figure .hover-effect:before,
        .item-thumb .slideshow .slideshow-nav-main .slick-slide:before,
        .slideshow .slideshow-nav-main .item-thumb .slick-slide:before,
        figure .slideshow .slideshow-nav-main .slick-slide:before,
        .slideshow .slideshow-nav-main figure .slick-slide:before {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 65%, rgba(0, 0, 0, .75) 100%);
        }

        .slideshow .slide .slick-prev:hover,
        .slideshow .slideshow-nav .slick-prev:hover,
        .slideshow .slide .slick-next:hover,
        .slideshow .slideshow-nav .slick-next:hover,
        .slideshow .slide .slick-prev:focus,
        .slideshow .slideshow-nav .slick-prev:focus,
        .slideshow .slide .slick-next:focus,
        .slideshow .slideshow-nav .slick-next:focus .item-thumb:hover .hover-effect:before,
        figure:hover .hover-effect:before,
        .carousel-module .carousel .item figure:hover .hover-effect:before,
        .item-thumb:hover .slideshow .slideshow-nav-main .slick-slide:before,
        .slideshow .slideshow-nav-main .item-thumb:hover .slick-slide:before,
        figure:hover .slideshow .slideshow-nav-main .slick-slide:before,
        .slideshow .slideshow-nav-main figure:hover .slick-slide:before,
        .item-thumb:hover .hover-effect:before,
        figure:hover .hover-effect:before,
        .carousel-module .carousel .item figure:hover .hover-effect:before,
        .item-thumb:hover .slideshow .slideshow-nav-main .slick-slide:before,
        .slideshow .slideshow-nav-main .item-thumb:hover .slick-slide:before,
        figure:hover .slideshow .slideshow-nav-main .slick-slide:before,
        .slideshow .slideshow-nav-main figure:hover .slick-slide:before {
            color: #fff;
            background-color: rgba(255, 255, 255, .5);
        }

        .figure-grid .detail h3,
        .detail-above.detail h3 {
            color: #fff;
        }

        .detail-bottom.detail h3 {
            color: #000;
        }

        .agent-contact a {
            font-weight: 700;
        }

        label {
            font-weight: 400;
            font-size: 14px;
        }

        .label-status {
            background-color: #333;
            font-weight: 700;
        }

        .read .fa {
            top: 1px;
            position: relative;
        }

        .label-primary,
        .fave-load-more a,
        .widget_tag_cloud .tagcloud a,
        .pagination-main .pagination li.active a,
        .other-features .btn.btn-secondary,
        .my-menu .active am {
            font-weight: 500;
        }

        /*.features-list {
            padding-bottom: 15px;
        }*/

        .advanced-search .advance-btn i {
            float: inherit;
            font-size: 14px;
            position: relative;
            top: 0px;
            margin-right: 6px;
        }

        @media (min-width: 992px) {
            .advanced-search .features-list .checkbox-inline {
                width: 14%;
            }
        }

        .header-detail.table-cell .header-right {
            margin-top: 27px;
        }

        .header-detail h1 .actions span,
        .header-detail h4 .actions span {
            font-size: 18px;
            display: inline-block;
            vertical-align: middle;
            margin: 0 3px;
        }

        .header-detail .property-address {
            color: #707070;
            margin-top: 12px;
        }

        .white-block {
            padding: 40px;
        }

        .wpb_text_column ul,
        .wpb_text_column ol {
            margin-top: 20px;
            margin-bottom: 20px;
            padding-left: 20px;
        }

        #sidebar .widget_houzez_latest_posts img {
            max-width: 90px;
            margin-top: 0;
        }

        #sidebar .widget_houzez_latest_posts .media-heading,
        #sidebar .widget_houzez_latest_posts .read {
            font-size: 14px;
            line-height: 18px;
            font-weight: 500;
        }

        #sidebar .widget-range .dropdown-toggle,
        .bootstrap-select.btn-group,
        .search-long .search input,
        .advanced-search .search-long .advance-btn,
        .splash-search .dropdown-toggle {
            font-weight: 400;
            color: #959595 !important;
            font-size: 15px;
        }

        .advanced-search .input-group .form-control {
            border-left-width: 0;
        }

        .location-select {
            max-width: 170px;
        }

        .vegas-overlay {
            opacity: 0.5;
            background-image: url("wp-content/uploads/2016/03/bg-video-1.png");
        }

        .label-color-129 {
            background-color: #dd3333;
        }

        .label-color-130 {
            background-color: #ff9900;
        }

        .user-dashboard-left,
        .board-header-4 {
            background-color: #00365e;
        }

        .board-panel-menu>li a,
        .board-header-4 .board-title,
        .board-header-4 .breadcrumb>.active,
        .board-header-4 .breadcrumb li:after,
        .board-header-4 .steps-progress-main {
            color: #ffffff;
        }

        .board-panel-menu>li.active {
            color: #4cc6f4;
        }

        .board-panel-menu .sub-menu {
            background-color: #002B4B;
        }

        .board-panel-menu .sub-menu>li.active>a,
        .board-panel-menu>li a:hover {
            color: #4cc6f4;
        }

        #ihf-main-container .btn-primary,
        #ihf-main-container .ihf-map-search-refine-link,
        #ihf-main-container .ihf-map-search-refine-link {
            background-color: #FF6E00;
            border-color: #FF6E00;
            color: #fff;
        }

        #ihf-main-container .btn-primary:hover,
        #ihf-main-container .btn-primary:focus,
        #ihf-main-container .btn-primary:active,
        #ihf-main-container .btn-primary.active {
            background-color: rgba(255, 110, 0, 0.75);
        }

        #ihf-main-container a {
            color:#8c8c8c;
        }

        .ihf-grid-result-basic-info-container,
        #ihf-main-container {
            color: #000000;
            font-size: 16px;
            font-weight: 300;
            line-height: 24px;
      
        }

        #ihf-main-container .fs-12,
        .ihf-tab-pane,
        #ihf-agent-sellers-rep,
        #ihf-board-detail-disclaimer,
        #ihf-board-detail-updatetext {
            font-size: 16px;
        }

        #ihf-main-container .title-bar-1,
        .ihf-map-icon {
            background-color: #8c8c8c;
        }

        .ihf-map-icon {
            border-color: #8c8c8c;
        }

        .ihf-map-icon:after {
            border-top-color: #8c8c8c;
        }

        #ihf-main-container h1,
        #ihf-main-container h2,
        #ihf-main-container h3,
        #ihf-main-container h4,
        #ihf-main-container h5,
        #ihf-main-container h6,
        #ihf-main-container .h1,
        #ihf-main-container .h2,
        #ihf-main-container .h3,
        #ihf-main-container .h4,
        #ihf-main-container .h5,
        #ihf-main-container .h6,
        #ihf-main-container h4.ihf-address,
        #ihf-main-container h4.ihf-price {
            font-weight: 500;
          
            text-align: inherit;
        }

        .advanced-search-mobile {
            position: relative;
            z-index: 10;
        }

        .advanced-search-module {
            z-index: 10;
        }

        .form-media {
            max-height: 547px;
        }

        /* NEW label for menus
------------------------------------ */

        .navi>ul ul li.new-feature a:after {
            content: 'NEW';
            color: #fff;
            border-radius: 3px;
            font-size: 10px;
            padding: 4px 6px 4px;
          
            margin-bottom: 0;
            display: inline-block;
            line-height: 11px;
            vertical-align: top;
            background-color: #e20a16;
            margin-left: 10px;
        }

        #singlePropertyMap>div {
            position: absolute !important;
        }

        .packages-no-padding div[class^="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .header-top-social a {
            color: #fff;
        }

        .splash-inner-content .header-mobile .user a i {
            font-size: 16px;
            top: 5px;
            position: relative;
        }

        .profile-properties .property-listing.grid-view .item-wrap:nth-child(3n+1) {
            clear: both;
        }

        span.user-name {
            display: none !important;
        }
    </style>
    <link rel='stylesheet' id='js_composer_front-css' href='wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php-rsd.xml" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <link rel="canonical" href="index.php" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed-url=http_%7C%7Chouzez04.favethemes.com%7Cabout-houzez%7C.json" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed-url=http_%7C%7Chouzez04.favethemes.com%7Cabout-houzez%7C&format=xml.xml" />
  
    <script type="text/javascript">
        (function(url) {
            if (/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)) {
                return;
            }
            var addEvent = function(evt, handler) {
                if (window.addEventListener) {
                    document.addEventListener(evt, handler, false);
                } else if (window.attachEvent) {
                    document.attachEvent('on' + evt, handler);
                }
            };
            var removeEvent = function(evt, handler) {
                if (window.removeEventListener) {
                    document.removeEventListener(evt, handler, false);
                } else if (window.detachEvent) {
                    document.detachEvent('on' + evt, handler);
                }
            };
            var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
            var logHuman = function() {
                var wfscr = document.createElement('script');
                wfscr.type = 'text/javascript';
                wfscr.async = true;
                wfscr.src = url + '&r=' + Math.random();
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(wfscr);
                for (var i = 0; i < evts.length; i++) {
                    removeEvent(evts[i], logHuman);
                }
            };
            for (var i = 0; i < evts.length; i++) {
                addEvent(evts[i], logHuman);
            }
        })('//houzez04.favethemes.com/?wordfence_lh=1&hid=EC4F565B5B723BE3249157824116B78C');
    </script>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=217780371604666";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Favicon -->

    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <meta name="generator" content="Powered by Slider Revolution 5.4.6.4 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

    <!-- Favicon -->
        <link rel="shortcut icon" href="images/tutecho.png">
          <script>
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5baa40dab156da713cb3cab5/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
        </head>


<body onload="imprimir(1)" class="page-template page-template-template page-template-template-page page-template-templatetemplate-page-php page page-id-692  transparent-no wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
     <div id="preloader">
    </div>
    <div id="fb-root"></div>
    <div style="position:fixed;width: 100%;z-index: 100;">
        <div class="header-bottom">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                    <div class="logo">
                        <h1>
                            <a class="navbar-brand" href="index.php">
                                          <img src="images/tutecho1.png" class="img-responsive"  id="tam-logo"></a>
                        </h1>
                    </div>
                </div>
    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav" id="items_en_uso">
                            <li>
                                <a href="index.php">Inicio  |</a>
                            </li>
                            <li>
                                <a href="nosotros.php" class="hvr-bounce-to-bottom">Nosotros  |</a>
                            </li>
                            <li>
                                <a href="servicios.php" class="hvr-bounce-to-bottom">Servicios  |</a>
                            </li>
                            <li class="active" id="items3">
                                <a href="inmuebles.php" class="hvr-bounce-to-bottom">Inmuebles </a>
                            </li>
                            <li>
                                <a href="clientes.php" class="hvr-bounce-to-bottom">| Clientes  |</a>
                            </li>
                           
                        <li>
                            <a href="catalogo-virtual.php" class="hvr-bounce-to-bottom">Catálogo virtual  |</a>
                        </li>
                            <li>
                                <a href="contactenos.php" class="hvr-bounce-to-bottom">Contáctenos</a>
                            </li>
                             <li>
                             <a href="https://www.facebook.com/tutechonet-1182783751863330/" target="blank" style="font-size: 20px;">
                            <i class="fa fa-facebook list-icon" aria-hidden="true" style="color: #3b5998;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/tutecho.nett/" target="blank" style="font-size: 20px;">
                            <i class="fa fa-instagram" aria-hidden="true"  style="color: #8a3ab9;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCXNa6ec2ZrQW8HmhmeMNuEw" target="blank" style="font-size: 20px;">
                            <i class="fa fa-youtube list-icon" aria-hidden="true"  style="color: #c4302b"></i>
                        </a>
                    </li>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
        <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create">
			<a href="https://wa.me/573152226222" target="_blank"><img src="images/whatsapp.svg" style="width: 65px" alt=""></a>
		  </div>

     <div class="page-title breadcrumb-top" style="padding:0;">
                <div class="container" style="width:100%;">           
    <div id="mapa" style="width:100%;height:500px;" >
        <iframe src="georef.php" frameborder="0"style="width:100%;height:100%"></iframe>
    </div>
    </div>
    
    </div>


        
    

        <!--.container Start in header-->
    
                    <!--<div class="page-title breadcrumb-top">
                <div class="container">
                    <div class="row" id="page-title-aling">
                        <div class="col-sm-12">
                            <ol class="breadcrumb">
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="index.php"><span itemprop="title" style="color: #EC0100">Inicio</span></a></li>
                                <li class="active">Inmuebles</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>-->
    <!--Start in header end #section-body-->
    <div class="container" style="margin-top:-15px">
    <div id="siguiente">  
                    <a href="#innmb2">Ver inmuebles</a>
                    <a id="bsiguiente" href="#innmb2"><i class="fa fa-angle-down" aria-hidden="true" style="color:#fff"></i> </a>
    </div>    
    </div>
        <div class="container" id="mostrar-buscador">
            <div class="row">
                    <div style="padding:10px;border-radius: 20px;">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group no-margin">
                                <div class="col-md-3 col-lg-3 wow fadeInDown col-sm-6 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">
                                <div class="form-group">
                                <input class="form-control " type="number" id="codeInm" data-live-search="true"  data-width="100%" data-toggle="tooltip" placeholder="Código" >
                                </div>
                                </div>
                                <div class="col-md-3 col-lg-3 wow fadeInDown col-sm-6 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">
                                    <div class="form-group">
                                        <select class="form-control" id="operacion" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
                                                                    <option value="0"> Operación </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 wow fadeInDown col-sm-6 col-xs-12" data-wow-offset="200" data-wow-delay="400ms">
                                    <div class="form-group">
                                        <select class="form-control" id="inmueble" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
                                                <option value="0">Tipo de Inmueble</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 wow fadeInDown col-sm-6 col-xs-12" data-wow-offset="200" data-wow-delay="100ms">
                                    <div class="form-group">
                                        <select class="form-control" id="ciudad" data-live-search="true"  data-width="100%" data-toggle="tooltip" title="Select">
                                                <option value="0">Ciudad</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2 col-lg-2 wow fadeInDown col-sm-6 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">
                                    <div class="form-group">
                                        <select class="form-control " id="zona"  data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
                                                <option value="0"> Barrio </option>
                                                <option value="2095">Antiguo country</option>
            <option value="6040">Barrancas</option>
            <option value="515">Belalcazar</option>
            <option value="49">Bella suiza</option>
            <option value="51">Bosque medina</option>
            <option value="1111718">Bosques de marques</option>
            <option value="6245">Bulevar de bolivia</option>
            <option value="749">Calatayud</option>
            <option value="32">Cedritos</option>
            <option value="33">Cedro bolivar</option>
            <option value="6256">Centro</option>
            <option value="5181">Centro internacional</option>
            <option value="1111193">Cerros de  suba</option>
            <option value="2077">Chapinero alto</option>
            <option value="2108">Chapinero central</option>
            <option value="2064">Chicó alto</option>
            <option value="2605">Chico museo</option>
            <option value="2606">Chico navarra</option>
            <option value="2096">Chicó norte</option>
            <option value="2097">Chicó norte ii</option>
            <option value="2098">Chicó norte iii</option>
            <option value="2062">ChicÓ reservado</option>
            <option value="543">Ciudad salitre nororiental</option>
            <option value="761">Colina campestre</option>
            <option value="629">Conjunto residencial alamedas de sa</option>
            <option value="2572">El lago</option>
            <option value="2604">El nogal</option>
            <option value="2066">El refugio</option>
            <option value="2101">El retiro</option>
            <option value="2607">El virrey</option>
            <option value="2080">Emaus</option>
            <option value="1962">Fontibon centro</option>
            <option value="570">Guaymaral</option>
            <option value="574">Hacienda san sebastian  pl. 2 de 3</option>
            <option value="4277">Hayuelos</option>
            <option value="101">Jorge eliecer gaitan</option>
            <option value="2608">La cabrera</option>
            <option value="2067">La cabrera el refugio</option>
            <option value="70">La calleja</option>
            <option value="71">La carolina</option>
            <option value="94">La castellana</option>
            <option value="2024">La merced</option>
            <option value="2084">La salle</option>
            <option value="743">Lagos de cordoba la alhambra</option>
            <option value="42">Lisboa</option>
            <option value="880">Los andes</option>
            <option value="4270">Los lagartos</option>
            <option value="2068">Los rosales</option>
            <option value="107">Metropolis</option>
            <option value="2145">Minuto de dios</option>
            <option value="818">Mirador de suba</option>
            <option value="45">Montearroyo</option>
            <option value="2004">Montevideo</option>
            <option value="772">Niza suba</option>
            <option value="525">Palermo</option>
            <option value="577">Parque comercial bima</option>
            <option value="737">Pasadena</option>
            <option value="127">Polo club</option>
            <option value="2105">Porciuncula</option>
            <option value="775">Provenza</option>
            <option value="2106">Quinta camacho</option>
            <option value="9169">Rincon del chico</option>
            <option value="2221">San basilio engativa</option>
            <option value="2027">San diego</option>
            <option value="130">San felipe</option>
            <option value="585">San jose de bavaria</option>
            <option value="9505">San jose de fontibon</option>
            <option value="2028">San martin</option>
            <option value="86">San patricio</option>
            <option value="63">Santa ana</option>
            <option value="87">Santa barbara</option>
            <option value="65">Santa barbara alta</option>
            <option value="88">Santa barbara central</option>
            <option value="80">Santa barbara occidental</option>
            <option value="66">Santa barbara oriental</option>
            <option value="2575">Santa paula</option>
            <option value="8684">Santa teresa torcoroma</option>
            <option value="528">Teusaquillo</option>
            <option value="11">Toberin</option>
            <option value="6223">Unicentro</option>
            <option value="68">Usaquen</option>
            <option value="1111948">Zona franca fontibon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-1  wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">
                                    <div class="form-group">
                                        <input class="form-control" type="number"  id="precio" data-live-search="true"  data-width="100%" data-toggle="tooltip" placeholder="Precio Min" >
                                    </div>
                               </div>
                                <div class="col-md-1  wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">
                                    <div class="form-group">
                                        <input class="form-control" type="number" id="precio1" data-live-search="true"  data-width="100%" data-toggle="tooltip" placeholder="Precio Max" >
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-2 wow fadeInDown col-sm-6 col-xs-12" data-wow-offset="200" data-wow-delay="500ms">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-submit ripple-effect btn-theme search-2" style="font-size: 14px;" id="boton">Buscar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agileit-services"  id="id-inmuebles-2">
            <div class="container" style="" id="innmb2">
                <div class="row">
                <div class="property" id="inmb"></div>   
                </div>
                  
                <div id="siguiente">Ver Más  
                    <a id="bsiguiente" onclick="paginator('sig')"><i class="fa fa-angle-down" aria-hidden="true" style="color:#fff"></i> </a>
                </div>
            </div>
        </div>

        <!--footer-->
    </div>


    <footer class="agileits_w3layouts-footer">
    </footer>
    <!-- //footer -->
    <div class="agileits_w3layouts-search" >
    </div>
 
    <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
    <script type='text/javascript' src='wp-content/themes/houzez/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='wp-content/themes/houzez/js/plugins.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/position.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/menu.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/wp-a11y.min.js'></script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="js/index.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.js"></script>
        <!-- script para animar la transicion de ver inmuebles -->
        <script>
            $(document).ready(function() {
                $('a[href^="#"]').click(function() {
                    var destino = $(this.hash);
                    if (destino.length == 0) {
                    destino = $('a[name="' + this.hash.substr(1) + '"]');
                    }
                    if (destino.length == 0) {
                    destino = $('html');
                    }
                    $('html, body').animate({ scrollTop: destino.offset().top }, 500);
                    return false;
                });
                });
        </script>    
   
    <script type='text/javascript'>
        /* <![CDATA[ */
        var uiAutocompleteL10n = {
            "noResults": "No results found.",
            "oneResult": "1 result found. Use up and down arrow keys to navigate.",
            "manyResults": "%d results found. Use up and down arrow keys to navigate.",
            "itemSelected": "Item selected."
        };
        /* ]]> */
    </script>

    <script type='text/javascript' src='wp-includes/js/jquery/ui/autocomplete.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.ui.touch-punch.js'></script>
    <script type='text/javascript' src='wp-content/themes/houzez/js/houzez_ajax_calls.min.js'></script>
    <script type='text/javascript' src='wp-content/themes/houzez/js/custom.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>

    <script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js'></script>


    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script src="js/search-movil.js"></script>


    <script src="js/jarallax.js"></script>
    <script src="js/SmoothScroll.min.js"></script>

    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
        
    <?php echo '<script>var gs = ' . $gs . '</script>'; ?>
    <?php echo '<script>var ti = ' . $ti . '</script>'; ?>
    <?php echo '<script>var ci = ' . $ci . '</script>'; ?>
    <?php echo '<script>var zo = ' . $zo . '</script>'; ?>
    <?php echo '<script>var pre = ' . $pre . '</script>'; ?>
    <?php echo '<script>var pre1 = ' . $pre1 . '</script>'; ?>

    <script>

    if (typeof(Storage) !== "undefined") {
        
    // Store
        localStorage.setItem("gestion", gs);
        localStorage.setItem("ciudad", ci);
        localStorage.setItem("tipo", ti);
        localStorage.setItem("zona", zo);
        localStorage.setItem("precio", pre);
        localStorage.setItem("precio1", pre1);
    
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    }
        
    </script>
    <script type="text/javascript">
        $(document).ready(function()
            {
            $("#pre").click(function () {
            //saco el valor accediendo a un input de tipo text y name = nombre2 y lo asigno a uno con name = nombre3 
            $("#pre").val($("0").val());
            });		
        });
    </script>
    <script>
        $(document).ready(function () {
        $('body').on('click', '#items_en_uso li', function () {
            console.log($(this).attr('id'));
            if ($(this).attr('id') == 'items3') {
                sessionStorage.clear();
            }
    
        })
    });
    </script>
   

    <script src="js/paginador.js"></script>

     
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
</body>

</html>