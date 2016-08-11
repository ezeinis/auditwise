@extends('auditwise_theme.layouts.default')

@section('title')
Auditwise - News
@stop

@section('content')
<div id="news_container_page" class="about_container">
    @for($i=0;$i<7;$i++)
        <div class="single_new_container">
            <div class="signle_new_date">12/06/2016</div>
            <div class="row">
                <div class="col-xs-10">
                    <h4 class="single_new_title">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4>
                </div>
                <div class="col-xs-2">
                    <div class="single_new_read_more_container">
                        <a class="single_new_read_more" href="/news/1">read more</a>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>
<div id="more_news">
    <a href="">more news<br><i class="fa fa-angle-down" aria-hidden="true"></i>
</a>
</div>
<div class="page_sidemenu page_sidemenu_news">
    <ul>
        <a href="/news">
            <li class="active">
                <div class="sidemenu_inner_li_container">News
                    <img class="arrow_img" src="/images/icons/arrow.svg">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </li>
        </a>
        <a href="/services/tax">
            <li>
                <div class="sidemenu_inner_li_container">Publications
                    <img class="arrow_img" src="/images/icons/arrow.svg">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </li>
        </a>
    </ul>
</div>
@stop
