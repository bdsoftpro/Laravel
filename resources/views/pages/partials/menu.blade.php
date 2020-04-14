<div id="loader-wrapper">
    <div class="loader">
        <!-- the component -->
        <div class="pre-loader"></div>
    </div>
</div>

<!-- **Header Top Bar** -->
<div id="bbar-wrapper">
    <div class="container">
        <div class="column dt-sc-one-half first">
            <p class="contact"> Call-us on : <span>845.180.1530</span> </p>
        </div>

        <div class="column dt-sc-one-half alignright">
            <div class="buttons">
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login <i class="fa fa-caret-right"></i></a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register <i class="fa fa-caret-right"></i></a>
                            @endif
                        @endauth
                @endif
            </div>
        </div>
    </div>
</div> <!-- **Header Top Bar Ends** -->

<!-- **Header Wrapper** -->
<div id="header-wrapper">
    <!-- **Header** -->
    <header id="header" class="header5">
        <div class="container">
            <!-- **Logo** -->
            <div id="logo">
                <a href="index.html"> <img src="images/logo.png" alt="logo"> </a>
            </div><!-- **Logo Ends** -->

            <!-- **Main-Menu Navigation** -->
            <div id="primary-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                <nav id="main-menu">
                    <ul id="menu-main-menu" class="menu">
                        <li class="current_page_item menu-item-simple-parent menu-item-depth-0"> <a href="index.html" title=""> <span class="menu-icon fa fa-home"> </span> Home </a>
                            <ul class="sub-menu">
                                <li> <a href="index-v2.html" title=""> Home Layout 2 </a> </li>
                                <li> <a href="index-v3.html" title=""> Home Layout 3 </a> </li>
                                <li> <a href="index-v4.html" title=""> Home Layout 4 </a> </li>
                                <li> <a href="one-page.html" title=""> One Page Layout </a> </li>
                            </ul>
                            <a class="dt-menu-expand">+</a>
                        </li>

                        <li class="menu-item-simple-parent menu-item-depth-0"> <a href="about.html" title=""> <span class="menu-icon fa fa-book"> </span> Pages </a>
                            <ul class="sub-menu">
                                <li> <a href="about.html" title="">  Company </a> </li>
                                <li> <a href="faq.html" title=""> FAQ </a> </li>
                                <li> <a href="shortcodes.html" title=""> Shortcodes </a> </li>
                                <li> <a href="side-navigation.html" title=""> Features </a> </li>
                                <li> <a href="404.html" title=""> 404 </a> </li>
                            </ul>
                            <a class="dt-menu-expand">+</a>
                        </li>

                        <li class="menu-item-megamenu-parent fullwidth megamenu-5-columns-group menu-item-depth-0"><a href="blog-three-column.html">Blog</a>
                            <div class="megamenu-child-container">
                                <ul class="sub-menu">
                                    <li class="first"> <a href="blog-three-column.html" title=""> Three Column </a>
                                        <ul class="sub-menu">
                                            <li> <a href="blog-three-column.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="blog-three-column-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="blog-three-column-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="blog-two-column.html" title=""> Two Column </a>
                                        <ul class="sub-menu">
                                            <li> <a href="blog-two-column.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="blog-two-column-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="blog-two-column-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="blog-fullwidth.html" title=""> Fullwidth image </a>
                                        <ul class="sub-menu">
                                            <li> <a href="blog-fullwidth.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="blog-fullwidth-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="blog-fullwidth-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="blog-thumb.html" title=""> Thumb image </a>
                                        <ul class="sub-menu">
                                            <li> <a href="blog-thumb.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="blog-thumb-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="blog-thumb-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="blog-single.html" title=""> Blog Single </a>
                                        <ul class="sub-menu">
                                            <li> <a href="blog-single.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="blog-single-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="blog-single-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="dt-menu-expand">+</a>
                        </li>

                        <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0"><a href="portfolio-four-column.html">Portfolio</a>
                            <div class="megamenu-child-container">
                                <ul class="sub-menu">
                                    <li class="first"> <a href="portfolio-four-column.html" title=""> Four Column </a>
                                        <ul class="sub-menu">
                                            <li> <a href="portfolio-four-column.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="portfolio-four-column-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="portfolio-four-column-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="portfolio-three-column.html" title=""> Three Column </a>
                                        <ul class="sub-menu">
                                            <li> <a href="portfolio-three-column.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="portfolio-three-column-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="portfolio-three-column-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="portfolio-two-column.html" title=""> Two Column </a>
                                        <ul class="sub-menu">
                                            <li> <a href="portfolio-two-column.html" title=""> Without Sidebar </a> </li>
                                            <li> <a href="portfolio-two-column-with-left-sidebar.html" title=""> With Left Sidebar </a> </li>
                                            <li> <a href="portfolio-two-column-with-right-sidebar.html" title=""> With Right Sidebar </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="portfolio-single.html" title=""> Portfolio Single </a>
                                        <ul class="sub-menu">
                                            <li> <a href="portfolio-single.html" title=""> Fullwidth Gallery </a> </li>
                                            <li> <a href="portfolio-single-left-gallery.html" title=""> Left Gallery </a> </li>
                                            <li> <a href="portfolio-single-right-gallery.html" title=""> Right Gallery </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="dt-menu-expand">+</a>
                        </li>

                        <li class="menu-item-megamenu-parent megamenu-3-columns-group menu-item-depth-0 hasImage-bg right-aligned"><a href="#">Websites</a>
                            <div class="megamenu-child-container">
                                <ul class="sub-menu">
                                    <li class="first"> <a href="#">Domain Services</a>
                                        <ul class="sub-menu">
                                            <li> <a href="#"> Single user Domains </a> </li>
                                            <li> <a href="#"> Multi-user Domains </a> </li>
                                            <li> <a href="#"> Reseller Domains </a> </li>
                                            <li> <a href="#"> Promos and Services </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <span class="nolink-menu">Web Hosting</span>
                                        <ul class="sub-menu">
                                            <li> <a href="#"> Dedicated Servers </a> </li>
                                            <li> <a href="#"> Shared Hosting </a> </li>
                                            <li> <a href="#"> Wordpress Hosting </a> </li>

                                            <li> <a href="#"> NextGen VPS Hosting </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li> <a href="">Cloud Servers</a>
                                        <ul class="sub-menu">
                                            <li> <a href="#"> Ensured Speed Plans </a> </li>
                                            <li> <a href="#"> Instant FTP Setup </a> </li>
                                            <li> <a href="#"> Cloud Hosting Objects </a> </li>
                                            <li> <a href="#"> Safe & Highly Secured </a> </li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="dt-menu-expand">+</a>
                        </li>

                        <li class="menu-item-simple-parent menu-item-depth-0"> <a href="contact.html" title=""> <span class="menu-icon fa fa-envelope"> </span> Contact </a>
                            <ul class="sub-menu">
                                <li> <a href="contact.html" title=""> Layout 1 </a> </li>
                                <li> <a href="contact2.html" title=""> Layout 2 </a> </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> <!-- **Main-Menu Navigation Ends** -->
        </div>
    </header> <!-- **Header Ends** -->
</div> <!-- **Header Wrapper Ends** -->
