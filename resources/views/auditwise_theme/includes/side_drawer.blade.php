<input type="checkbox" id="toggle-right">

<div class="main_menu">
    <div class="close_drawer">
        <img src="/images/icons/close_menu.svg">
    </div>
    <nav>
        <ul>
            <li class="list_item <?php if(strpos(Route::getCurrentRoute()->getPath(),'about')===0)echo 'active'; ?>">
                <a href="/about/history">Who We Are</a>
            </li>
            <li class="list_item <?php if(strpos(Route::getCurrentRoute()->getPath(),'services')===0)echo 'active'; ?>">
                <a href="/services">Services</a>
            </li>
            <li class="list_item">
                <a href="">Our Clients</a>
            </li>
            <li class="list_item">
                <a href="">News / Publications</a>
            </li>
            <li class="career_menu_link list_item"><p>Career</p></li>
            <li class="list_item">
                <a href="">Links</a>
            </li>
            <li class="list_item <?php if(Route::getCurrentRoute()->getPath()=='contact')echo 'active'; ?>">
                <a href="/contact">Who We Are</a>
            </li>
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
