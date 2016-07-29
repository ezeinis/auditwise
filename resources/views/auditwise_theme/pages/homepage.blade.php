@extends('auditwise_theme.layouts.default')

@section('content')
<!-- header banner start -->
    <div class="container">
        <div id="homepage_main_banner_container">
            <img src="">
            <span class="text_in_main_banner">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
            <div id="who_we_are_container">
                <div class="container_2">
                <div class="row">
                    <div id="who_we_are_home_title" class="col-lg-4">
                        <p>Who We Are</p>
                    </div>
                    <div id="who_we_are_home_text" class="col-lg-8">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- header banner end -->

<!-- services start -->
    <div id="services_container" class="container">
        <h2 class="section_title">Services</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        <div class="row">
            <div class="col-lg-4">
                <div class="service_homepage_img_container">
                    <img src="">
                    <span>Accounting & Bookkeeping</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service_homepage_img_container">
                    <img src="">
                    <span>Personal & Corporate Taxation</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service_homepage_img_container">
                    <img src="">
                    <span>Auditing & Assurance</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="service_homepage_img_container">
                    <img src="">
                    <span>Business Administration</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service_homepage_img_container">
                    <img src="">
                    <span>Business Plans</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service_homepage_img_container">
                    <img src="">
                    <span>Business Advisors</span>
                </div>
            </div>
        </div>
    </div>
<!-- services end -->

<!-- news/publications start -->
    <div id="news_container" class="container">
        <h2 class="section_title">News / Publications</h2>
        <div class="row">
            <div id="news_more" class="col-lg-7">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <div class="right"><a href="">read more</a></div>
            </div>
            <div class="col-lg-5" style="background:#aaa;">
            </div>
        </div>
        <div id="publications_container">
            <div>
            a
            </div>
            <div>
            a
            </div>
            <div>
            a
            </div>
            <div>
            a
            </div>
        </div>
    </div>
<!-- news/publications end -->

<!-- selected clients start -->
    <div id="selected_clients_container" class="container">
        <h2 class="section_title">Selected Clients</h2>
        <div id="auditwise_clients" class="row">
            <div class="col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
            <div class="col-lg-2">
                <div class="homepage_clients">
                    auditwise
                </div>
            </div>
        </div>
        <a href="">see all of our clients</a>
    </div>
<!-- selected clients end -->

<!-- newsletter start -->
    <div id="newsletter_container" class="container homepage_section">
        <div id="newsletter">
            <h2 class="section_title">Newsletter</h2>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <label for="newsletter_email" class="control-label"></label>
                <div class="col-xs-offset-2 col-xs-6">
                    <input type="text" class="form-control" id="newsletter_email" name="newsletter_email" placeholder="enter your email">
                </div>
                <button type="submit" class="col-xs-2 btn btn-default">subscribe</button>
                </div>
            </form>
        </div>
    </div>

<!-- newsletter end -->
@stop
