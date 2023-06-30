<header id="top" data-anchor="true" data-name="Header" class="  o_header_standard">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <span alt="Logo of skycarcare" title=""><img
                            src="{{ asset('frontend/images/logo/skycarcare.png') }}" class="img img-fluid"
                            alt="Logo" loading="lazy" /></span>
                </a>


            </div>
            <div class="header-search">

                <form method="get" class="o_wsale_products_searchbar_form o_wait_lazy_js " action="">
                    <div role="search" class="input-group">




                        <div class="nav-search-scope dropdown">
                            <input type="hidden" id="selectedCat" name="category" />
                            <button class="btn dropdown-toggle" type="button" id="dropdownCatMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownCatMenuButton"
                                x-placement="bottom-start">

                                <label type="button" class="dropdown-item text-primary selected-cat">All</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="1">Home
                                    &amp;
                                    Kitchen</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="2">Super
                                    Saver
                                    Combo</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="86">Stock
                                    Out
                                    Sale</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="3">Bags</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="4">Personal
                                    Care</label>

                                <label class="dropdown-item selected-cat" type="button"
                                    data-id="49">Organizers</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="57">Baby
                                    &amp;
                                    Kids</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="75">Car
                                    Accessories</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="98">Under
                                    99/-</label>

                                <label class="dropdown-item selected-cat" type="button" data-id="99">Under
                                    49/-</label>

                            </div>
                        </div>

                        <input type="search" name="search" class="search-query form-control oe_search_box"
                            placeholder="Search..." />
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary oe_search_button" aria-label="Search"
                                title="Search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <input name="order" type="hidden" class="o_wsale_search_order_by" value="" />



                </form>

            </div>
            <div class="ht-phone">
                <a href="tel: 90 5625 5625">
                    <span>90 5625 5625</span>
                </a>
                <label>Call Us</label>
            </div>
            <div class="ht-right">



                <div id="my_cart" class="h-col h-cart js-toggle-cart">

                    <div class="o_wsale_my_cart nav-link my_cart_btn">
                        <i class="lnr lnr-cart"></i>
                        <span>My Cart</span> <sup class="my_cart_quantity badge badge-primary"></sup>
                    </div>

                </div>
                <div class="o_wsale_my_wish h-col h-wishlist">
                    <a href="{{ url('/wishlist') }}" class="nav-link">
                        <i class="lnr lnr-heart"></i>
                        <span>Wishlist</span> <sup class="my_wish_quantity o_animate_blink badge badge-primary">0</sup>
                    </a>
                </div>

                <div class="h-col h-user">
                    <a href="http://127.0.0.1:8000/signin" class="h-link nav-link" data-theme_name="theme_alan">
                        <i class="lnr lnr-user"></i>
                        <span>Sign in</span>
                    </a>
                </div>

                <div class="h-col h-toggle">
                    <button class="mobile-menu-toggle" data-toggle="collapse" data-target="#top_menu_collapse">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <nav data-name="Navbar"
        class="navbar navbar-expand-lg navbar-light o_colored_level o_cc shadow-sm as-header-navbar">
        <div id="top_menu_container" class="container justify-content-start justify-content-lg-between">
            <button type="button" data-toggle="collapse" data-target="#top_menu_collapse"
                class="navbar-toggler ml-auto">
                <span class="navbar-toggler-icon o_not_editable"></span>
            </button>
            <div id="top_menu_collapse" class="collapse navbar-collapse order-last order-lg-0">
                <ul id="top_menu" class="nav navbar-nav o_menu_loading flex-grow-1">
                    <li class="nav-item">
                        <a role="menuitem" href="{{ url('/') }}" class="nav-link active">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="menuitem" href="{{ url('/all_product') }}" class="nav-link ">
                            <span>All Products</span>
                        </a>
                    </li>
                    <li class="nav-item  mm-mega-menu">
                        <a class="nav-link o_mega_menu_toggle" href="#">
                            <span>Categories</span>
                        </a>
                        <span class="mob_menu"></span>
                        <div class="mm-maga-main mm-mega-cat-level mm-mega-list mm-mega-2">
                            <div class="mm-maga-main-width">
                                <div class="mmc-body">
                                    <ul class="mm-category-level">

                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="{{ url('/all_product') }}">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image.jpg') }}"
                                                            alt="Under 49/-" loading="lazy" />
                                                    </span>
                                                    <span>Under 49/-</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (1).jpg') }}"
                                                            alt="Under 99/-" loading="lazy" />
                                                    </span>
                                                    <span>Under 99/-</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (2).jpg') }}"
                                                            alt="Stock Out Sale" loading="lazy" />
                                                    </span>
                                                    <span>Stock Out Sale</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (3).jpg') }}"
                                                            alt="Super Saver Combo" loading="lazy" />
                                                    </span>
                                                    <span>Super Saver Combo</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (4).jpg') }}"
                                                            alt="Home &amp; Kitchen" loading="lazy" />
                                                    </span>
                                                    <span>Home &amp; Kitchen</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Water Bottles</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Bathroom Accessories</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Kitchen Tools</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Cleaning Supplies</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Storage &amp; Organizers</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Home Decor</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Baking Products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (5).jpg') }}"
                                                            alt="Bags" loading="lazy" />
                                                    </span>
                                                    <span>Bags</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">
                                                    <ul class="mm-cat-list mm-col">
                                                        <li class="mm-label">
                                                            <a class="mm-title" href="#">
                                                                <span>Lunch Bags</span>
                                                            </a>
                                                        </li>

                                                    </ul>


                                                </div>
                                            </div>
                                        </li>

                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (6).jpg') }}"
                                                            alt="Organizers" loading="lazy" />
                                                    </span>
                                                    <span>Organizers</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">


                                                </div>
                                            </div>
                                        </li>

                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (7).jpg') }}"
                                                            alt="Personal Care" loading="lazy" />
                                                    </span>
                                                    <span>Personal Care</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">


                                                </div>
                                            </div>
                                        </li>

                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (8).jpg') }}"
                                                            alt="Baby &amp; Kids" loading="lazy" />
                                                    </span>
                                                    <span>Baby &amp; Kids</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">


                                                </div>
                                            </div>
                                        </li>

                                        <li class="mm-cat-level-1">
                                            <div class="cat-level-title">
                                                <a class="mm-title" href="#">
                                                    <span class="icon">
                                                        <img src="{{ URL::asset('frontend/images/icons/image (9).jpg') }}"
                                                            alt="Car Accessories" loading="lazy" />
                                                    </span>
                                                    <span>Car Accessories</span>
                                                </a>
                                            </div>
                                            <div class="mm-cat-level-2">
                                                <div class="mm-cat-level-2-inner row">


                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a role="menuitem" href="{{ url('/contactus') }}" class="nav-link ">
                            <span>Contact us</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="cart js-cart cart_lines_popup ">
        <div class="m_c_fixed m_c_close"></div>
        <div class="m_c_box">
            <div class="min-cart-head">
                <h5>Your Cart</h5>
                <button class="close m_c_close js-toggle-cart">
                    <i class="ti-close"></i>
                </button>
            </div>


            <ul class="mini_cart">

                <li class="mini_cart_lines">
                    <div class="m_c_img">

                        <span><img src="{{ URL::asset('frontend/images/all_product/1.jpg') }}"
                                class="img rounded o_image_64_max mb-2" alt="[HL2882] 6 Pcs Comb"
                                loading="lazy"></span>

                    </div>
                    <div class="m_c_info">
                        <h2 class="m_c_prod_name">
                            [HL2882] 6 Pcs Comb
                        </h2>
                        <div class="m_c_prod_price">


                            <div itemprop="offers" itemscope="itemscope" itemtype="http://schema.org/Offer"
                                class="product_price">
                                <h6 class="oe_price_h4 css_editable_mode_hidden">
                                    <span data-oe-type="monetary" data-oe-expression="combination_info['list_price']"
                                        style="text-decoration: line-through; white-space: nowrap;"
                                        class="text-danger oe_default_price te_shop_del d-none">₹&nbsp;<span
                                            class="oe_currency_value">70.00</span></span>
                                    <b data-oe-type="monetary" data-oe-expression="combination_info['price']"
                                        class="oe_price" style="white-space: nowrap;">₹&nbsp;<span
                                            class="oe_currency_value">70.00</span></b>
                                    <span itemprop="price" style="display:none;">70.0</span>
                                    <span itemprop="priceCurrency" style="display:none;">INR</span>
                                </h6>
                                <h6 class="css_non_editable_mode_hidden decimal_precision" data-precision="2">
                                    <span>₹&nbsp;<span class="oe_currency_value">70.00</span></span>
                                </h6>
                            </div>
                        </div>
                        <div class="m_c_qty">
                            <div class="css_quantity input-group">
                                <div class="input-group-prepend">
                                    <a class="btn btn-link js_add_cart_json d-none d-md-inline-block"
                                        aria-label="Remove one" title="Remove one" href="#">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </div>
                                <input type="text" class="js_quantity form-control quantity p-1 text-center"
                                    data-line-id="1286662" data-product-id="5708" value="1">
                                <div class="input-group-append">
                                    <a class="btn btn-link float_left js_add_cart_json d-none d-md-inline-block"
                                        aria-label="Add one" title="Add one" href="#">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" aria-label="Remove from cart" title="Remove from cart"
                                class="js_delete_product no-decoration"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                </li>

                <li class="mini_cart_lines">
                    <div class="m_c_img">

                        <span><img src="{{ URL::asset('frontend/images/all_product/2.jpg') }}"
                                class="img rounded o_image_64_max mb-2"
                                alt="[WR0263] Waterproof PVC Dining Table Mat (Checks Print) - 157*132 cm"
                                loading="lazy"></span>

                    </div>
                    <div class="m_c_info">
                        <h2 class="m_c_prod_name">
                            [WR0263] Waterproof PVC Dining Table Mat (Checks Print) - 157*132 cm
                        </h2>
                        <div class="m_c_prod_price">


                            <div itemprop="offers" itemscope="itemscope" itemtype="http://schema.org/Offer"
                                class="product_price">
                                <h6 class="oe_price_h4 css_editable_mode_hidden">
                                    <span data-oe-type="monetary" data-oe-expression="combination_info['list_price']"
                                        style="text-decoration: line-through; white-space: nowrap;"
                                        class="text-danger oe_default_price te_shop_del d-none">₹&nbsp;<span
                                            class="oe_currency_value">95.00</span></span>
                                    <b data-oe-type="monetary" data-oe-expression="combination_info['price']"
                                        class="oe_price" style="white-space: nowrap;">₹&nbsp;<span
                                            class="oe_currency_value">95.00</span></b>
                                    <span itemprop="price" style="display:none;">95.0</span>
                                    <span itemprop="priceCurrency" style="display:none;">INR</span>
                                </h6>
                                <h6 class="css_non_editable_mode_hidden decimal_precision" data-precision="2">
                                    <span>₹&nbsp;<span class="oe_currency_value">95.00</span></span>
                                </h6>
                            </div>
                        </div>
                        <div class="m_c_qty">
                            <div class="css_quantity input-group">
                                <div class="input-group-prepend">
                                    <a class="btn btn-link js_add_cart_json d-none d-md-inline-block"
                                        aria-label="Remove one" title="Remove one" href="#">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </div>
                                <input type="text" class="js_quantity form-control quantity p-1 text-center"
                                    data-line-id="1287133" data-product-id="1989" value="2">
                                <div class="input-group-append">
                                    <a class="btn btn-link float_left js_add_cart_json d-none d-md-inline-block"
                                        aria-label="Add one" title="Add one" href="#">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" aria-label="Remove from cart" title="Remove from cart"
                                class="js_delete_product no-decoration"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                </li>

                <li class="mini_cart_lines">
                    <div class="m_c_img">

                        <span><img src="{{ URL::asset('frontend/images/all_product/3.jpg') }}"
                                class="img rounded o_image_64_max mb-2" alt="[HL2891] Waterproof Mobile Cover Pouch"
                                loading="lazy"></span>

                    </div>
                    <div class="m_c_info">
                        <h2 class="m_c_prod_name">
                            [HL2891] Waterproof Mobile Cover Pouch
                        </h2>
                        <div class="m_c_prod_price">


                            <div itemprop="offers" itemscope="itemscope" itemtype="http://schema.org/Offer"
                                class="product_price">
                                <h6 class="oe_price_h4 css_editable_mode_hidden">
                                    <span data-oe-type="monetary" data-oe-expression="combination_info['list_price']"
                                        style="text-decoration: line-through; white-space: nowrap;"
                                        class="text-danger oe_default_price te_shop_del d-none">₹&nbsp;<span
                                            class="oe_currency_value">30.00</span></span>
                                    <b data-oe-type="monetary" data-oe-expression="combination_info['price']"
                                        class="oe_price" style="white-space: nowrap;">₹&nbsp;<span
                                            class="oe_currency_value">30.00</span></b>
                                    <span itemprop="price" style="display:none;">30.0</span>
                                    <span itemprop="priceCurrency" style="display:none;">INR</span>
                                </h6>
                                <h6 class="css_non_editable_mode_hidden decimal_precision" data-precision="2">
                                    <span>₹&nbsp;<span class="oe_currency_value">30.00</span></span>
                                </h6>
                            </div>
                        </div>
                        <div class="m_c_qty">
                            <div class="css_quantity input-group">
                                <div class="input-group-prepend">
                                    <a class="btn btn-link js_add_cart_json d-none d-md-inline-block"
                                        aria-label="Remove one" title="Remove one" href="#">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </div>
                                <input type="text" class="js_quantity form-control quantity p-1 text-center"
                                    data-line-id="1287140" data-product-id="5722" value="1">
                                <div class="input-group-append">
                                    <a class="btn btn-link float_left js_add_cart_json d-none d-md-inline-block"
                                        aria-label="Add one" title="Add one" href="#">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" aria-label="Remove from cart" title="Remove from cart"
                                class="js_delete_product no-decoration"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                </li>



            </ul>
            <div class="mini_cart_total text-center cart_subtotal">

                <div id="cart_total" class="">
                    <table class="table">
                        <tbody>
                            <tr id="empty">
                                <td rowspan="10" class="border-0"></td>
                                <td class="col-md-2 col-3 border-0"></td>
                                <td class="col-md-2 col-3 border-0"></td>
                            </tr>




                            <tr id="order_total_untaxed">
                                <td class="text-right border-0">Subtotal:</td>
                                <td class="text-xl-right border-0">
                                    <span class="monetary_field" style="white-space: nowrap;">₹&nbsp;<span
                                            class="oe_currency_value">330.00</span></span>
                                </td>
                            </tr>
                            <tr id="order_total_taxes">
                                <td class="text-right border-0">Taxes:</td>
                                <td class="text-xl-right border-0">
                                    <span class="monetary_field" style="white-space: nowrap;">₹&nbsp;<span
                                            class="oe_currency_value">0.00</span></span>
                                </td>
                            </tr>

                            <tr id="order_total" class="">
                                <td class="text-right"><strong>Total:</strong></td>
                                <td class="text-xl-right">
                                    <strong class="monetary_field">₹&nbsp;<span
                                            class="oe_currency_value">330.00</span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="mini_cart_buttons">
                <a href="/shop/cart" class="m_c_btn as-btn as-btn-theme">View Cart</a>

            </div>

        </div>
    </div>
</header>
