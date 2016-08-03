@extends('auditwise_theme.layouts.default')

@section('content')
<!-- header banner start -->
    <!-- <div class="container"> -->
        <div id="homepage_main_banner_container">
            <img class="img-responsive" src="/images/homepage/main banner.jpg">
            <span class="text_in_main_banner">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
            <div id="who_we_are_container">
                <div class="container_2">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 who_we_are_home_title">
                        <h1>Who We Are</h1>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8 who_we_are_home_text_container">
                        <p class="who_we_are_home_text_header">Pellentesque habitant morbi tristique senectus et netus.</p>
                        <p class="who_we_are_home_text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div id="who_we_are_container_md_and_smaller">
                <div class="who_we_are_home_title row">
                    <h2>Who We Are</h2>
                </div>
                 <div class="who_we_are_home_text_container row">
                        <p class="who_we_are_home_text_header">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        <p class="who_we_are_home_text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>
            </div>
        </div>
    <!-- </div> -->
<!-- header banner end -->

<!-- services start -->
    <div id="services_container">
        <h2 class="section_title">Services</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        <div class="row">
            <div class="services_col_container col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="/services/accounting">
                    <div class="service_homepage_img_container">
                        <img src="/images/homepage/accouning.jpg">
                        <span>Accounting & Bookkeeping</span>
                    </div>
                    <img class="services_arrow" src="images/icons/arrow.svg">
                </a>
            </div>
            <div class="services_col_container col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="/services/tax">
                    <div class="service_homepage_img_container">
                        <img src="/images/homepage/tax.jpg">
                        <span>Personal & Corporate Taxation</span>
                    </div>
                    <img class="services_arrow" src="images/icons/arrow.svg">
                </a>
            </div>
            <div class="services_col_container col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="/services/auditing_and_insurance">
                    <div class="service_homepage_img_container">
                        <img src="/images/homepage/Auditing & Assurance.jpg">
                        <span>Auditing & Assurance</span>
                    </div>
                    <img class="services_arrow" src="images/icons/arrow.svg">
                </a>
            </div>
            <div class="services_col_container col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="/services/business_administration">
                    <div class="service_homepage_img_container">
                        <img src="/images/homepage/Business Administration.jpg">
                        <span>Business Administration</span>
                    </div>
                    <img class="services_arrow" src="images/icons/arrow.svg">
                </a>
            </div>
            <div class="services_col_container col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="/services/business_plan">
                    <div class="service_homepage_img_container">
                        <img src="/images/homepage/Business Plans.jpg">
                        <span>Business Plans</span>
                    </div>
                    <img class="services_arrow" src="images/icons/arrow.svg">
                </a>
            </div>
            <div class="services_col_container col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="/services/business_advisors">
                    <div class="service_homepage_img_container">
                        <img src="/images/homepage/Βusiness Advisors.jpg">
                        <span>Business Advisors</span>
                    </div>
                    <img class="services_arrow" src="images/icons/arrow.svg">
                </a>
            </div>
        </div>
    </div>
<!-- services end -->

<!-- news/publications start -->
    <div id="news_container">
        <h2 class="section_title">News / Publications</h2>
        <div class="row">
            <div id="news_banner_text_container">
                <div class="col-xs-12 col-sm-5 col-md-7 col-lg-7">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                <a href="">read more</a>
                </div>
                <div id="news_img_col" class="hidden-xs col-sm-7 col-md-5 col-lg-5">
                    <img src="/images/homepage/news.jpg">
                </div>
            </div>
        </div>
        <div id="publications_container">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 publ_text">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="col-lg-2">
                    <a href="news/1">read more</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 publ_text">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="col-lg-2">
                    <a href="news/1">read more</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 publ_text">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="col-lg-2">
                    <a href="news/1">read more</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 publ_text">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="col-lg-2">
                    <a href="news/1">read more</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 publ_text">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="col-lg-2">
                    <a href="news/1">read more</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="go_to_news_page" class="col-xs-12">
                <a href="">go to our news page</a>
            </div>
        </div>
    </div>
<!-- news/publications end -->

<!-- selected clients start -->
    <div id="selected_clients_container">
        <h2 class="section_title">Selected Clients</h2>
        <div id="auditwise_clients" class="row">
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
        </div>
        <a href="">see all of our clients</a>
    </div>
<!-- selected clients end -->

@stop
