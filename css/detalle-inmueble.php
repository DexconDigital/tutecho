<!DOCTYPE html>
<html class="no-js" lang="es">
<?php
$codigo = $_GET["dt"];
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=no">

    <title>Tutecho</title>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
    <script>
        /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
        if (typeof WebFontConfig === "undefined") {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {
            families: ['Roboto:300,500']
        };

        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/effects.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/personality.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/other.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">


    <style id='houzez-style-inline-css' type='text/css'>
        .btn-flex {
            display: flex;
            align-items: stretch;
            align-content: stretch;
        }

        .btn-flex .btn:first-child {
            flex-grow: 1;
            text-align: left;
        }

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
            color: #00AEEF;
        }

        .advanced-search .advance-btn:hover {
            color: #00AEEF;
        }

        .advanced-search .advance-btn:focus,
        .advanced-search .advance-btn.active {
            color: #00AEEF;
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
            color: #fff
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
            color: #00AEEF;
        }

        .owl-theme .owl-nav [class*=owl-],
        .testimonial-carousel .owl-nav [class*=owl-]:hover,
        .testimonial-carousel .owl-nav [class*=owl-]:focus,
        .gallery-thumb .icon {
            background-color: #00AEEF;
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
            background-color: #00AEEF;
            border: 1px solid #00AEEF;
        }

        .plan-tabs li.active {
            box-shadow: inset 0 4px 0 #00AEEF;
            border-top-color: #00AEEF;
            background-color: #fff;
            color: #00AEEF;
        }

        .btn-primary,
        .label-primary,
        .scrolltop-btn {
            color: #fff;
            background-color: #00AEEF;
            border-color: #00AEEF;
        }

        .btn-primary.btn-trans {
            color: #00AEEF;
        }

        .header-section-2 .header-top-call {
            color: #ffffff;
            background-color: #00aeef;
        }

        .header-section-2 .avatar {
            color: #ffffff;
        }

        @media (max-width: 991px) {
            .header-section-2 .header-top {
                background-color: #00AEEF;
            }
        }

        .ui-slider-horizontal .ui-slider-range,
        .ui-state-hover,
        .ui-widget-content .ui-state-hover,
        .ui-widget-header .ui-state-hover,
        .ui-state-focus,
        .ui-widget-content .ui-state-focus,
        .ui-widget-header .ui-state-focus,
        .list-loading-bar {
            background-color: #00AEEF;
            border-color: transparent;
        }

        .houzez-module .module-title-nav .module-nav .btn {
            color: #00AEEF;
            border: 1px solid #00AEEF;
            background-color: transparent;
        }

        .fave-load-more a,
        .fave-load-more a:hover {
            border: 1px solid #00AEEF;
        }

        #transportation,
        #supermarkets,
        #schools,
        #libraries,
        #pharmacies,
        #hospitals,
        .pay-step-block.active span,
        .loader-ripple div:nth-of-type(2) {
            border-color: #00AEEF;
        }

        .loader-ripple div:nth-of-type(1) {
            border-color: #FF6E00;
        }

        .detail-block .alert-info {
            color: rgba(0, 0, 0, .85);
            background-color: rgba(0, 174, 239, 0.1);
            border: 1px solid #00AEEF;
        }

        .houzez-taber-wrap .houzez-tabs li.active::before,
        .houzez-taber-wrap .houzez-tabs li:hover::before,
        .houzez-taber-wrap .houzez-tabs li:active::before,
        .profile-tabs li:hover,
        .steps-nav,
        .steps-progress-main .steps-progress span {
            background-color: #00AEEF;
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
            background-color: #77c720;
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
            background-color: rgba(0, 174, 239, 0.75);
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
            background-color: rgba(0, 174, 239, 0.75);
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
            background-color: rgba(0, 174, 239, 0.75);
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
            background-color: rgba(255, 110, 0, 0.75);
            border-color: rgba(255, 110, 0, 0.75);
        }

        .header-section {
            background-color: #00AEEF;
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
            background-color: #00AEEF;
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
            color: #00aeef;
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
            color: #00aeef !important;
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
            color: #00AEEF;
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
            color: #00AEEF;
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
            background-color: #00AEEF;
        }

        .ihf-map-icon {
            border-color: #00AEEF;
        }

        .ihf-map-icon:after {
            border-top-color: #00AEEF;
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
            background-color: #77c720;
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

        span.marcaagua {
            padding-bottom: 15px;
            padding-right: 15px;
        }

        .marcaagua {
            top: 75% !important;
            width: 100px;
            position: absolute;
            bottom: 8px;
            right: 8px;
        }

        @media(max-width: 450px) {
            .marcaagua {
                color: #ffffff6e;
                position: absolute;
                top: 70% !important;
                right: -6px;
                width: 65px;
            }
        }

        @media(min-width:315px) {
            h1.w3-title.ubicacion {
                margin-top: 28px;
            }
        }

        @media(min-width: 768px) {
            h1.w3-title.ubicacion {
                margin-top: 115px;
            }
        }

        @media(min-width: 992px) {
            h1.w3-title.ubicacion {
                margin-top: 60px;
            }
        }

        @media(min-width: 1095px) {
            h1.w3-title.ubicacion {
                margin-top: 28px;
            }
        }

        @media(min-width: 1025px) {
            h1.w3-title.ubicacion {
                margin-left: -95px;
            }
        }

        @media(min-width:1501px) {
            h1.w3-title.ubicacion {
                margin-left: -134px;
            }
        }

        @media(min-width:1610px) {
            #section-body {
                left: 10%;
            }

            h1.w3-title.ubicacion {
                margin-left: -341px;
            }
        }

        .video-responsive {
            height: 0;
            overflow: hidden;
            padding-bottom: 56.25%;
            padding-top: 30px;
            position: relative;
        }

        .video-responsive iframe,
        .video-responsive object,
        .video-responsive embed {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
    </style>
    <link rel='stylesheet' id='js_composer_front-css' href='wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/button-dropdown.css' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'>
    </script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php-rsd.xml" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />

    <link rel="canonical" href="index" />
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
            var evts =
                'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'
                .split(' ');
            var logHuman = function() {
                var wfscr = document.createElement('script');
                wfscr.type = 'text/javascript';
                wfscr.async = true;
                wfscr.src = url + '&r=' + Math.random();
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(
                    wfscr);
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
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e
                    .gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e
                    .sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e
                            .fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) /
                            100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e
                                .fullScreenOffset, 0))
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
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/tutecho.png">
    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5baa40dab156da713cb3cab5/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <link rel="stylesheet" href="css/carousel.inmuebles.css">
</head>


<body class="page-template page-template-template page-template-template-page page-template-templatetemplate-page-php page page-id-692  transparent-no wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
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
                                <img src="images/tutecho1.png" class="img-responsive" id="tam-logo"></a>
                        </h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">Inicio |</a>
                            </li>
                            <li>
                                <a href="nosotros.php" class="hvr-bounce-to-bottom">Nosotros |</a>
                            </li>
                            <li>
                                <a href="servicios.php" class="hvr-bounce-to-bottom">Servicios |</a>
                            </li>
                            <li class="active">
                                <a href="inmuebles.php" class="hvr-bounce-to-bottom">Inmuebles </a>
                            </li>
                            <li>
                                <a href="clientes.php" class="hvr-bounce-to-bottom">| Clientes |</a>
                            </li>
                            <li>
                                <a href="catalogo-virtual.php" class="hvr-bounce-to-bottom">Catálogo virtual |</a>
                            </li>
                            <li>
                                <a href="contactenos.php" class="hvr-bounce-to-bottom">Contáctenos</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/Tutechonet-Inmobiliaria-278591092546718/" target="blank" style="font-size: 20px;">
                                    <i class="fa fa-facebook list-icon" aria-hidden="true" style="color: #3b5998;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/tutecho.nett/" target="blank" style="font-size: 20px;">
                                    <i class="fa fa-instagram" aria-hidden="true" style="color: #8a3ab9;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCXNa6ec2ZrQW8HmhmeMNuEw" target="blank" style="font-size: 20px;">
                                    <i class="fa fa-youtube list-icon" aria-hidden="true" style="color: #c4302b"></i>
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
    <section id="section-body">
        <div class="container">

            <!-- <h1 class="w3-title ubicacion "> </h1> -->



            <!--start compare panel-->
            <div id="compare-controller" class="compare-panel">
                <div class="compare-panel-header">
                    <h4 class="title"> Compare Listings <span class="panel-btn-close pull-right"><i class="fa fa-times"></i></span></h4>
                </div>

                <div id="compare-properties-basket">
                </div>
            </div>
            <!--end compare panel-->
            <!--<div class="page-title breadcrumb-top">
                <div class="row" id="page-title-aling">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a itemprop="url" href="index.php"><span itemprop="title" style="color: #EC0100">Inicio</span></a></li>
                            <li><a href="inmuebles.php"><span>inmueble</span></a></li>
                            <li class="active">detalle inmueble  <?php echo $codigo; ?></li>
                        </ol>

                    </div>
                </div>
            </div>-->
            <!--Feature property section-->
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="page-main">
                                <div class="white-block " id="blog-aling">
                                    <h1 class="ubicacion2"><i class="fa fa-map-marker"></i> </h1>
                                    <article id="post-692" class="post-692 page type-page status-publish hentry">
                                        <div class="row row-fluid">
                                            <div class="col-sm-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <div class="single-property-details">
                                                        <div class="carousel slide" id="myCarousel" data-ride="carousel">
                                                            <div class="full-propertys-img">
                                                                <a data-fancybox="gallery" href="" class="link_fotos">
                                                                    <i class="fas fa-expand mr-2"></i>
                                                                </a>
                                                            </div>
                                                            <div class="carousel-inner">
                                                                <div class="item active">

                                                                </div>
                                                            </div>
                                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev" ">
                                                            <span class=" glyphicon fa fa-toggle-left" aria-hidden="true" style="top: 50%"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                                <span class="glyphicon fa fa-toggle-right" aria-hiden="true" style="top:50%"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                                            <div class="property-condition">
                                                                <div class="condtion-title">
                                                                    <br>
                                                                    <h5 id="code"> </h5>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="property-condition-list">
                                                                        <i class="fas fa-dollar-sign"></i>
                                                                        <span id="precio">Valor: </span>
                                                                        <br>
                                                                        <i id="iconoAdmin" class="fas fa-user-tie"></i>
                                                                        <span id="administracion"></span>
                                                                        <br id="espacio">
                                                                        <i class="fas fa-ruler-combined"></i>
                                                                        <span id="areaC">Area Construida: </span>
                                                                        <br>
                                                                        <i class="fas fa-ruler"></i>
                                                                        <span id="areaP">Area Privada: </span>
                                                                        <br>
                                                                        <i class="fas fa-thumbtack"></i> Ciudad:
                                                                        <span class="ciudaddetalle"> </span>
                                                                        <br>
                                                                        <i class="fas fa-thumbtack"></i> Barrio:
                                                                        <span id="barrio"> </span>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="property-condition-list">
                                                                        <i class="fas fa-store-alt"></i>
                                                                        <span id="gestion"> </span>
                                                                        <br>
                                                                        <i class="fa fa-home"></i>
                                                                        <span id="tipo"> </span>
                                                                        <br>
                                                                        <i class="fa fa-bed"></i>
                                                                        <span id="alcobas">Alcobas: </span><br>
                                                                        <i class="fa fa-bath"></i>
                                                                        <span id="banios">Baños: </span>
                                                                        <br>
                                                                        <i class="fas fa-thumbtack  "></i> Localidad:
                                                                        <span id="localidad"> </span>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <br>
                                                            <div class="single-property-description">

                                                                <div class="desc-title">
                                                                    <h5><em>De</em>scripción</h5>
                                                                </div>
                                                                <div class="description-inner text-justify">
                                                                    <p class="text-1" style="color:#000"> <span id="descripcion"></span></p><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="single-property-description">
                                                            <div class="desc-title">
                                                                <h5><em>Ca</em>racterísicas Internas</h5>
                                                            </div>
                                                            <div class="description-inner">
                                                                <ul id="details-2"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <br>
                                                            <div class="single-property-description">
                                                                <div class="desc-title">
                                                                    <h5><em>Ca</em>racterísicas Externas</h5>
                                                                </div>
                                                                <div class="description-inner">
                                                                    <ul id="details-1"></ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12" style="margin-top:30px;">
                                                            <div class="video-responsive">
                                                                <iframe id="videosrc" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- .entry-content -->
                            </article>
                            <!-- #post-## -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-offset-1 col-lg col-md-4 col-sm-6 col-sm-offset-1 col-xs-12">
                <div class="form-small">
                    <p class="p1" style="font-size: 30px;line-height: 30px">Contacto con Asesor</p>
                    <p class="detalle-asesor"></p>

                    <form method="post" action="" id="agent_detail_contact_form">
                        <input id="target_email" name="target_email" value="vincent@houzez.com" type="hidden">
                        <input name="agent_detail_ajax_nonce" id="agent_detail_ajax_nonce" value="d20a4756b8" type="hidden">
                        <input name="action" value="houzez_contact_agent" type="hidden">
                        <div class="form-group">
                            <input name="name" placeholder="Nombre" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <input name="email" placeholder="Correo electrónico" class="form-control" type="email">

                        </div>
                        <div class="form-group">
                            <input name="asunto" placeholder="Asunto" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="3" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <button type="submit" id="agent_detail_contact_btn" class="btn btn-secondary btn-block">
                            Enviar </button>
                    </form>
                    <div id="form_messages"></div>
                    <a href="https://simicrm.app/mcomercialweb/fichas_tecnicas/FichaInmueble.php?reg=<?php echo $codigo; ?>" target="_blank">
                        <button id="agent_detail_contact_btn" class="btn btn-secondary btn-block" type="submit" style="margin-bottom: 10px;">Imprimir Ficha</button>
                    </a>
                    <button class="btn btn-danger" type="submit" style="width: 100%;" id="myBtn">Enviar a un
                        amigo</button>


                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">&times;</span>
                            </div>
                            <div class="modal-body">
                                <div class="contact-right-w3l">
                                    <div action="" method="post" id="contact_form" class="validate-form" onsubmit="enviardetalle()">
                                        <input class="name" name="name" id="name" placeholder="nombre de su amig@" required="" style="width:100%" type="text">
                                        <input class="name" name="name_envia" id="name_envia" placeholder="su nombre" required="" style="width:100%" type="text">
                                        <input class="name" name="email" id="email" placeholder="correo electrónico de su amig@" required="" style="width:100%" type="email">
                                        <textarea placeholder="mensaje para su amig@" name="message" id="message" required=""></textarea>
                                        <button class="btn btn-danger" type="submit" value="submit" id="sendMessageButton" onclick="enviardetalle()" style="width: 30%;height: 50px;font-size: 20px;border-radius: 10px;padding: 0;margin: 10px 0 0 0;">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div style="margin-bottom:20px"></div>
                    <div class="desc-title">
                        <h5>Ubicación</h5>
                    </div>
                    <div id="map" style="height:300px">
                    </div>

                </div>

            </div>




    </section>
    <!--Start in header end #section-body-->
    <!--footer-->
    <footer class="agileits_w3layouts-footer">

    </footer>
    <!-- //footer -->
    <div class="agileits_w3layouts-search">
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s&callback=initMap" async defer></script>
    <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
    <script type='text/javascript' src='wp-content/themes/houzez/js/plugins.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/position.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/menu.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/wp-a11y.min.js'></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/email.js"></script>
    <?php echo "<script> var codeInm ='" . $codigo . "';</script>";
    ?>

    <script type="text/javascript">
        if (codeInm != 0) {
            var latitud = 0;
            var longitud = 0;
            $.ajax({
                url: "https://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/" + codeInm + "",
                async: true,
                type: "GET",
                dataType: "json",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader(
                        "Authorization",
                        'Basic ' + btoa('Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117')
                    );
                },
                success: function(data) {
                    if (data.msn == "Inmueble NO Disponible") {
                        modalOpen();
                        return;
                    }
                    var j = 1;
                    var carrousel = '';
                    $('.link_fotos').attr('href', data.fotos[0].foto);
                    var texto_link_fotos = ' '+data.fotos.length+' fotos'
                    $('.link_fotos').append(texto_link_fotos);

                    if (data.fotos == undefined) {
                        carrousel += '<div class="item">' +
                            '<img class="image-responsive" src="images/no_image.png" alt="" />' +
                            '</div>';
                    } else if (data.fotos.length == 1) {
                        carrousel += '<div class="item">' +
                            '<img class="image-responsive" src="' + data.fotos[0].foto + '" alt="" />' +
                            '</div>';
                    } else {

                        for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
                            carrousel += '<div class="item">' +
                                '<img class="image-responsive" src="' + data.fotos[y].foto + '" alt="" />' +
                                '</div>';
                        }
                    }
                    var j = 1;
                    var carrousel = '';
                    if (data.fotos == undefined) {
                        carrousel += '<div class="item active">' +
                            '<img src="images/no_image.png" alt=""  class="thumb-preview img-resp"/>' +
                            '</div>';
                    } else {
                        carrousel += '<div class="item active">' +
                            '<a data-fancybox="gallery" href="' + data.fotos[0].foto + '" class="">' +
                            '<img src="' + data.fotos[0].foto +
                            '" alt=""  id="tam-img"/><span class="marcaagua marcaagua-detalle"><img src="images/marca_de_agua.png" /></span>' +
                            '</a>' +
                            '</div>';

                        for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
                            if (data.fotos[y].foto != undefined) {
                                carrousel += '<div class="item">' +
                                    '<a data-fancybox="gallery" href="' + data.fotos[y].foto + '" class="">' +
                                    '<img src="' + data.fotos[y].foto +
                                    '" alt=""  id="tam-img"/><span class="marcaagua marcaagua-detalle"><img src="images/marca_de_agua.png"/></span>' +
                                    '</a>' +
                                    '</div>';
                                j++;
                            }
                        }
                    }

                    $(".carousel-inner").html(carrousel);

                    if (data.Gestion == "Arriendo/venta") {
                        $("#precio").append("$" + new Intl.NumberFormat().format(data.ValorCanon) + " / $" +
                            new Intl.NumberFormat().format(data.ValorVenta));
                    } else {
                        $("#precio").append("$" + data.precio);
                    }
                    console.log()
                    $("#administracion").append("Administración: $" + data.Administracion);
                    if (data.Administracion == 0) {
                        $("#administracion").css("display", "none");
                        $("#iconoAdmin").css("display", "none");
                        $('#espacio').css('display', 'none');
                    }
                    if (data.video === "") {
                        $(".video-responsive").css("display", "none");
                    } else {
                        $("#videosrc").attr("src", data.video);
                    }
                    $(".ubicacion2").append(" " + data.barrio + ", " + data.ciudad + ", " + data.depto);
                    $(".ciudaddetalle").append(data.ciudad);
                    $("#alcobas").append(data.alcobas);
                    $("#barrio").append(data.barrio);
                    $("#localidad").append(data.localidad);
                    $("#banios").append(data.banos);
                    $("#garajes").append(data.garaje);
                    $("#areaC").append(Math.trunc(data.AreaConstruida) + " mts<sup>2</sup>");
                    $("#areaP").append(Math.trunc(data.AreaLote) + " mts<sup>2</sup>");
                    $("#code").append("<em>Có</em>digo: " + data.codinm);
                    $("#estrato").append(data.Estrato);
                    $("#venta").append("$ " + data.ValorVenta);
                    $("#descripcion").text(data.descripcionlarga);
                    $("#tipo-gestion").append('<a title="' + data.Tipo_Inmueble + '"style="color: black;" >  ' +
                        data.Tipo_Inmueble + ' en </a><a title="' + data.Gestion +
                        '" style="color: black;" > ' + data.Gestion + ' </a>');
                    $("#gestion").html('<a title="' + data.Gestion + '" style="color:black"> ' + data.Gestion +
                        '</a>');
                    $("#tipo").append('<a title="' + data.Tipo_Inmueble + '" style="color:black"> ' + data
                        .Tipo_Inmueble + '</a>');
                    var res = '';
                    if ((data.caracteristicasExternas != undefined)) {
                        for (var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++) {
                            res += '<li class="detalle-caracteristicas"><i class="jfont"></i>' + data
                                .caracteristicasExternas[x].Descripcion + '</li>';
                        }
                    }
                    if (Object.keys(data.caracteristicasExternas).length == 0) {
                        res += '<li class="detalle-caracteristicas"><i class="jfont"></i>Garaje: ' + data
                            .garaje +
                            '</li>';
                    }
                    var res1 = '';

                    if (data.caracteristicasInternas != undefined || Object.keys(data.caracteristicasInternas)
                        .length > 0) {
                        for (var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++) {
                            res1 += '<li class="detalle-caracteristicas"><i class="jfont"></i>' + data
                                .caracteristicasInternas[x].Descripcion + '</li>';

                        }
                    }
                    $("#details-1").append(res);
                    $("#details-2").append(res1);

                    var detallea = '';
                    if ((data.asesor[0] == undefined)) {
                        detallea = '<p class="p1" style="font-size: 23px;line-height: 30px"><a href="mailto:' +
                            data
                            .inmobiliaria.correo +
                            '" target="_blank" style="color: black;><i class="fa fa-envelope" style="font-size: 20px;"></i>' +
                            data.inmobiliaria.correo + '</p></a>' +
                            '<p class="p1" style="font-size: 23px;line-height: 30px"><a href="tel:' + data
                            .inmobiliaria.telefono +
                            '" target="_blank" style="color: black;"><img src="images/whatsapp.svg" style="width: 25px">' +
                            data.inmobiliaria.telefono + '</p></a>';
                        window.localStorage.setItem("mailasesor", data.inmobiliaria.correo)
                    }
                    if ((data.asesor == "Jennifer Carolina MuÃ±oz Rodriguez")) {
                        data.asesor = "Jennifer Carolina Muñoz Rodriguez";
                        alert(data.asesor);
                    } else {
                        if (data.asesor[0].ntercero == "Jennifer Carolina MuÃ±oz Rodriguez") {
                            data.asesor[0].ntercero = "Jennifer Carolina Muñoz Rodriguez";
                        }
                        detallea += '<p class="p1" style="font-size: 23px;line-height: 30px">' + data.asesor[0]
                            .ntercero + '</p>' +
                            '<p class="p1" style="font-size: 23px;line-height: 30px"><a href="tel:' + data
                            .asesor[0]
                            .celular +
                            '" target="_blank" style="color: black;"><img src="images/whatsapp.svg" style="width: 25px">' +
                            data.asesor[0].celular + '</p></a>' +
                            '<p class="p1" style="font-size: 23px;line-height: 30px"><a href="mailto:' + data
                            .asesor[0].correo +
                            '" target="_blank" style="color: black;" ><i class="fa fa-envelope" style="font-size: 20px;"></i> ' +
                            data.asesor[0].correo + '</p></a>' +
                            '<p class="p1" style="font-size: 23px;line-height: 30px"><a href="tel:' + data
                            .inmobiliaria.telefono +
                            '" target="_blank" style="color: black;"><i class="fa fa-phone"></i> ' + data
                            .inmobiliaria.telefono + '</p></a>';
                        window.localStorage.setItem("mailasesor", data.inmobiliaria.correo)
                    }

                    $(".detalle-asesor").append(detallea);
                    latitud = data.latitud;
                    longitud = data.longitud;


                    console.log(data.ciudad)
                    console.log(data.localidad)
                    console.log(data)
                    console.log("lat: " + latitud)
                    console.log("long: " + longitud)

                    initMap(latitud, longitud);
                },
                error: function(data) {
                    console.log("Fail");
                }
            });

            function initMap(latitud, longitud) {
                var uluru = {
                    lat: parseFloat(latitud),
                    lng: parseFloat(longitud)
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru,
                    disableDefaultUI: true
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        } else {
            modalOpen();
        }

        function modalOpen() {
            $("body").append(
                '<div class="inicio modal fade" id="modalstar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                '<div class="modal-dialog" role="document">' +
                '<div class="modal-content">' +
                '<div class="modal-header">' +
                '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
                '<h4 class="modal-title" id="myModalLabel">tutecho dice:</h4>' +
                '</div>' +
                '<div class="modal-body text-center">' +
                'El Inmueble no existe.' +
                '</div>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</section>');

            $(".inicio").modal();
        }

        function redirect() {
            window.location.href = "inmuebles.php";
        }
    </script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 500);
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
    <script type='text/javascript' src='wp-content/themes/houzez/js/bootstrap.min.js'></script>

    <script type='text/javascript' src='wp-includes/js/jquery/ui/autocomplete.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.ui.touch-punch.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.min.js'></script>
    <script type='text/javascript' src='wp-content/themes/houzez/js/houzez_ajax_calls.min.js'></script>
    <script type='text/javascript' src='wp-content/themes/houzez/js/custom.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'>
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js'></script>
    <!--[if lte IE 9]>
<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js'></script>
<![endif]-->
    </script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
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
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>
<!--
Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Object Caching 5490/702 objects using disk
Page Caching using disk: enhanced 
Database Caching using disk

Served from: houzez04.favethemes.com @ 2018-04-09 21:16:57 by W3 Total Cache
-->