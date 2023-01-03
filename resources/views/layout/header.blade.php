<!--header area start-->

<!--Offcanvas menu area end-->

<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                    
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-right">
                            <ul>
                                @if(Auth::guest())
                                <li><a href="/register"> Register </a></li>
                                <li><a href="/login"> Login </a></li>
                                @else
                                <li><a href="/profile">{{Auth::user()->name}} </a></li>
                                <li>                                 
                                        <a href="/logout"> Logout </a>                                    
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="/"><img src="assets/img/logo/logobuat.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search_container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
                                <div class="header_wishlist">
                                    <a href="#"><img src="assets/img/user.png" alt=""></a>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)"><img src="assets/img/shopping-bag.png" alt=""></a>
                                    
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        

                                        <div class="mini_cart_footer">
                                            <div class="cart_button">
                                                <a href="/cart">View cart</a>
                                            </div>
                                            <div class="cart_button">
                                                <a href="/checkout">Checkout</a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        <!--header bottom satrt-->
        <div class="main_menu_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="main_menu menu_position">
                            <nav>
                                <ul>
                                    <li><a href="/">home</a></li>
                                    <li><a href="/productlist">Product</a></li>

                                    <li><a class="active" href="#">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/cart">cart</a></li>
                                            <li><a href="/checkout">checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
<!--header area end-->