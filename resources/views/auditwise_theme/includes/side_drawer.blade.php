<input type="checkbox" id="toggle-right">

<div class="main_menu">
    <div class="close_drawer">
        <img src="/images/icons/close_menu.svg">
    </div>
    <nav>
        <ul>
            <a href="/about/history"><li class="list_item <?php if(Route::getCurrentRoute()->getPath()=='about')echo 'active'; ?>">Who We Are</li></a>
            <a href="/services"><li class="list_item <?php if(strpos(Route::getCurrentRoute()->getPath(),'services')===0)echo 'active'; ?>">Services</li></a>
            <a href=""><li class="list_item">Our Clients</li></a>
            <a href=""><li class="list_item">News / Publications</li></a>
            <li class="career_menu_link list_item">Career</li>
            <a href=""><li class="list_item">Links</li></a>
            <a href=""><li class="list_item">Contact</li></a>
        </ul>
    </nav>
    <div id="main_menu_social">
        <div class="row">
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
