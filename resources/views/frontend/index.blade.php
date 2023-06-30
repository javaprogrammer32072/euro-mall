@extends('layouts.front')
@section('title')
    Index
@endsection
@section('content')
    <main>
        <div id="wrap" class="oe_structure oe_website_sale">
            <section
                class="s_image_gallery s_image_gallery_show_indicators s_image_gallery_indicators_rounded o_colored_level pt0 o_slideshow"
                data-vcss="001" data-columns="3" style="overflow: hidden; height: 708px;" data-snippet="s_image_gallery"
                data-name="Image Gallery">
                <div class="container-fluid">
                    <div id="slideshow_1678438980181" class="carousel slide" data-ride="carousel" data-interval="5000"
                        style="margin: 0 12px;">
                        <div class="carousel-inner" style="padding: 0;">
                            <div class="carousel-item" style="">
                                <img class="img img-fluid d-block"
                                    src="{{ URL::asset('frontend/images/banner/WD-banner (8).png') }}" style=""
                                    alt="" data-name="Image" data-index="0" loading="lazy" />
                            </div>
                            <div class="carousel-item undefined" style="">
                                <img class="img img-fluid d-block"
                                    src="{{ URL::asset('frontend/images/banner/WD-banner (7).png') }}" style=""
                                    alt="" data-name="Image" data-index="1" loading="lazy" />
                            </div>
                            <div class="carousel-item undefined" style="">
                                <img class="img img-fluid d-block"
                                    src="{{ URL::asset('frontend/images/banner/banner.jpg') }}" style=""
                                    alt="" data-name="Image" data-index="2" loading="lazy" />
                            </div>
                            <div class="carousel-item undefined" style="">
                                <img class="img img-fluid d-block"
                                    src="{{ URL::asset('frontend/images/banner/Website-banners.png') }}" style=""
                                    alt="" data-name="Image" data-index="3" loading="lazy" />
                            </div>
                            <div class="carousel-item undefined" style="">
                                <img class="img img-fluid d-block"
                                    src="{{ URL::asset('frontend/images/banner/Website-banners (2).png') }}" style=""
                                    alt="" data-name="Image" data-index="4" loading="lazy" />
                            </div>
                            <div class="carousel-item undefined active" style="">
                                <a href="#" target="_blank">
                                    <img class="img img-fluid d-block"
                                        src="{{ URL::asset('frontend/images/banner/Website-banners (3).png') }}"
                                        style="" alt="" data-name="Image" data-index="5"
                                        data-original-title="" title="" aria-describedby="tooltip155482"
                                        loading="lazy" data-resize-width="1280" />
                                </a>
                            </div>
                        </div>
                        <ul class="carousel-indicators">
                            <li class="o_indicators_left text-center d-none" aria-label="Previous" title="Previous">
                                <i class="fa fa-chevron-left"></i>
                            </li>
                            <li data-target="#slideshow_1678438980181" data-slide-to="0"
                                style="background-image: url({{ URL::asset('frontend/images/banner/WD-banner\ \(1\).png') }})">
                            </li>
                            <li data-target="#slideshow_1678438980181" data-slide-to="1"
                                style="background-image: url({{ URL::asset('frontend/images/banner/WD-banner\ \(7\).png') }})">
                            </li>
                            <li data-target="#slideshow_1678438980181" data-slide-to="2"
                                style="background-image: url({{ URL::asset('frontend/images/banner/WD-banner\ \(8\).png') }})">
                            </li>
                            <li data-target="#slideshow_1678438980181" data-slide-to="3"
                                style="background-image: url({{ URL::asset('frontend/images/banner/WD-banner\ \(1\).png') }})">
                            </li>
                            <li data-target="#slideshow_1678438980181" data-slide-to="4"
                                style="background-image: url({{ URL::asset('frontend/images/banner/Website-banner\ \(4\).png') }})">
                            </li>
                            <li data-target="#slideshow_1678438980181" data-slide-to="5"
                                style="background-image: url(&quot;https://www.linkpicture.com/q/Website-banners.png&quot;);"
                                class="active"></li>
                            <li class="o_indicators_right text-center d-none" aria-label="Next" title="Next">
                                <i class="fa fa-chevron-right"></i>
                            </li>
                        </ul>
                        <a class="carousel-control-prev o_we_no_overlay" href="#slideshow_1678438980181"
                            data-slide="prev" aria-label="Previous" title="Previous">
                            <span class="fa fa-chevron-left fa-2x text-white"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next o_we_no_overlay" href="#slideshow_1678438980181"
                            data-slide="next" aria-label="Next" title="Next">
                            <span class="fa fa-chevron-right fa-2x text-white"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>


            <section class="as-category-snippet as-category-snippet-1">
                <div class="container">
                    <div class="owl-carousel  my-carousel " id="as_category_slider_1">




                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(3\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Bags</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(5\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Organizers</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(4\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Personal
                                        Care</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(6\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Baby &amp; Kids</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(7\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Car
                                        Accessories</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(5\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Home
                                        Decor</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(4\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Storage
                                        &amp; Organizers</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(5\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Water
                                        Bottles</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920.jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Stock Out
                                        Sale</a>
                                </div>
                            </div>
                        </div>
                        <div class="my-carousel-item">
                            <div class="as-category-style-5">

                                <div class="cat-img">
                                    <a href="#"
                                        style="background-image: url({{ URL::asset('frontend/images/icons/image_1920\ \(1\).jpg') }});"></a>
                                </div>
                                <div class="cat-name">
                                    <a class="h1" href="#">Super Saver
                                        Combo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="as-product-slider-snippet as-product-slider-style-4">
                <div class="container">

                    <div class="as-product-tab-title">
                        <h4> New Arrivals </h4>
                    </div>
                    <div class="as_data_container as-product-tab-content">
                        <div class="as_collection_data as-product-tab" filter-id="1">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="#" method="post">

                                        <input type="hidden" name="csrf_token"
                                            value="1fbc4f041bd0f0a6ad8a4817fccfcbcaf011e8fdo1717482739">
                                        <input type="hidden" class="product_id" name="product_id" value="5722">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4981">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">

                                                <a class="asp-img" href="single_page.html">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/1.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">

                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4981" data-product-product-id="5722">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">
                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4981">
                                                        <i class="fa fa-eye"></i>
                                                    </a>


                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>


                                                </div>
                                                <div class="as-product-title">

                                                    <a href="#">
                                                        [HL2891] Waterproof Mobile Cover Pouch
                                                    </a>
                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope" itemtype="#"
                                                        class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">30.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">30.00</span></span>
                                                            <span itemprop="price" style="display:none;">30.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token" value="">
                                        <input type="hidden" class="product_id">
                                        <input type="hidden" class="product_template_id">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb"> <a class="asp-img" href="#">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/2.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">

                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4980" data-product-product-id="5721">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">
                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4980">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>
                                                </div>
                                                <div class="as-product-title">

                                                    <a href="#">
                                                        [HL2890] Sink &amp; Drain Cleaning Brush
                                                    </a>
                                                </div>
                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">50.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">50.00</span></span>
                                                            <span itemprop="price" style="display:none;">50.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">

                                        <input type="hidden" name="csrf_token"
                                            value="1fbc4f041bd0f0a6ad8a4817fccfcbcaf011e8fdo1717482739">
                                        <input type="hidden" class="product_id" name="product_id" value="5719">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4978">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">
                                                <a class="asp-img" href="#">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/3.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">

                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4978" data-product-product-id="5719">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">
                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4978">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>
                                                </div>
                                                <div class="as-product-title">

                                                    <a href="">
                                                        [HL2888] 2Pcs Gas Cleaning Brush
                                                    </a>
                                                </div>
                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">40.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">40.00</span></span>
                                                            <span itemprop="price" style="display:none;">40.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="#" method="post">

                                        <input type="hidden" name="csrf_token"
                                            value="1fbc4f041bd0f0a6ad8a4817fccfcbcaf011e8fdo1717482739">
                                        <input type="hidden" class="product_id" name="product_id" value="5718">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4977">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">
                                                <a class="asp-img" href="#">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/4.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">
                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4977" data-product-product-id="5718">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4977">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>
                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/hl2887-6pcs-baby-safety-protector-cover-4977">
                                                        [HL2887] 6Pcs Baby Safety Protector Cover
                                                    </a>


                                                </div>
                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">45.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">45.00</span></span>
                                                            <span itemprop="price" style="display:none;">45.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="#" method="post">
                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5716">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4975">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">
                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/5.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">
                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4975" data-product-product-id="5716">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4975">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>
                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/hl2885-jade-roller-massager-4975">
                                                        [HL2885] Jade Roller Massager
                                                    </a>


                                                </div>
                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">79.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">79.00</span></span>
                                                            <span itemprop="price" style="display:none;">79.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">
                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5714">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4973">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">

                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/6.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">
                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4973" data-product-product-id="5714">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4973">
                                                        <i class="fa fa-eye"></i>
                                                    </a>

                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>
                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/wr0409-food-grain-storage-bag-pack-of-2-4973">
                                                        [WR0409] Food Grain Storage Bag (Pack of 2)
                                                    </a>


                                                </div>
                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">90.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">90.00</span></span>
                                                            <span itemprop="price" style="display:none;">90.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5713">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4972">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">
                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/7.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">
                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4972" data-product-product-id="5713">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">
                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4972">
                                                        <i class="fa fa-eye"></i>
                                                    </a>

                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>
                                                </div>
                                                <div class="as-product-title">

                                                    <a
                                                        href="/shop/product/wr0387-silicone-hand-burn-protector-for-oven-4972">
                                                        [WR0387] Silicone Hand Burn Protector For Oven
                                                    </a>
                                                </div>
                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">80.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">80.00</span></span>
                                                            <span itemprop="price" style="display:none;">80.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">
                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5712">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4970">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">

                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/8.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">
                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4970" data-product-product-id="5712">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4970">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>
                                                </div>
                                                <div class="as-product-title">

                                                    <a
                                                        href="/shop/product/hl2884-cockroach-repellent-tablesmaterial-iron-wire-nylon-bristles-product-weight-50-gms-product-dimensions-70-cm-packaging-dimensions-21-x-13-x-6-cm-package-content-1-pc-4970">
                                                        [HL2884] Cockroach Repellent TablesMaterial: Iron wire +
                                                        Nylon bristles Product Weight: 50 gms Product Dimensions: 70
                                                        Cm Packaging Dimensions: 21 x 13 x 6 Cm Package Content: 1
                                                        Pc
                                                    </a>

                                                </div>
                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">30.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">30.00</span></span>
                                                            <span itemprop="price" style="display:none;">30.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">
                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5710">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4968">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">

                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/9.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">

                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4968" data-product-product-id="5710">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4968">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a
                                                        href="/shop/product/hl2883-gas-stove-cleaning-brush-with-scraper-blade-4968">
                                                        [HL2883] Gas Stove Cleaning Brush With Scraper Blade
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">35.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">35.00</span></span>
                                                            <span itemprop="price" style="display:none;">35.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5708">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4966">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">




                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/10.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">






                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4966" data-product-product-id="5708">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4966">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/hl2882-6-pcs-comb-4966">
                                                        [HL2882] 6 Pcs Comb
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">70.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">70.00</span></span>
                                                            <span itemprop="price" style="display:none;">70.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5707">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4965">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">




                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/11.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">






                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4965" data-product-product-id="5707">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4965">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/hl2881-2-pcs-plastic-bowl-4965">
                                                        [HL2881] 2 Pcs Plastic Bowl
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">49.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">49.00</span></span>
                                                            <span itemprop="price" style="display:none;">49.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5706">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4964">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">




                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/12.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">






                                                    <button type="button" role="button" class="as-p-btn o_add_wishlist"
                                                        title="Add to Wishlist" data-action="o_wishlist"
                                                        data-product-template-id="4964" data-product-product-id="5706">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4964">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/hl2880-cute-fruit-design-luggage-tag-1-pc-4964">
                                                        [HL2880] Cute Fruit Design Luggage Tag - 1 Pc
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">50.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">50.00</span></span>
                                                            <span itemprop="price" style="display:none;">50.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5705">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4963">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">




                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/13.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">






                                                    <button type="button" role="button"
                                                        class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                        data-action="o_wishlist" data-product-template-id="4963"
                                                        data-product-product-id="5705">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4963">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/wr0377-cute-animal-design-cotton-socks-4963">
                                                        [WR0377] Cute Animal Design Cotton Socks
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">75.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">75.00</span></span>
                                                            <span itemprop="price" style="display:none;">75.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5704">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4962">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">




                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/14.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">






                                                    <button type="button" role="button"
                                                        class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                        data-action="o_wishlist" data-product-template-id="4962"
                                                        data-product-product-id="5704">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4962">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/wr0344-funny-designs-cute-women-socks-4962">
                                                        [WR0344] Funny Designs Cute Women Socks
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">80.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">80.00</span></span>
                                                            <span itemprop="price" style="display:none;">80.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5702">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4960">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">




                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/15.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">






                                                    <button type="button" role="button"
                                                        class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                        data-action="o_wishlist" data-product-template-id="4960"
                                                        data-product-product-id="5702">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4960">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/wr0343-women-fancy-cotton-socks-4960">
                                                        [WR0343] Women Fancy Cotton Socks
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">90.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">90.00</span></span>
                                                            <span itemprop="price" style="display:none;">90.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3">
                                    <form action="" method="post">



                                        <input type="hidden" name="csrf_token"
                                            value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                        <input type="hidden" class="product_id" name="product_id" value="5701">
                                        <input type="hidden" class="product_template_id" name="product_template_id"
                                            value="4959">
                                        <div class="as-product-style-4">
                                            <div class="as-product-thumb">




                                                <a class="asp-img" href="">
                                                    <img title="" alt=""
                                                        src="{{ URL::asset('frontend/images/arival/16.jpg') }}"
                                                        loading="lazy">
                                                </a>

                                                <div class="as-cart-action">

                                                    <button type="button" role="button"
                                                        class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                        data-action="o_wishlist" data-product-template-id="4959"
                                                        data-product-product-id="5701">
                                                        <span class="fa fa-heart" role="img"
                                                            aria-label="Add to wishlist"></span>
                                                    </button>



                                                </div>
                                            </div>
                                            <div class="as-product-info">
                                                <div class="as-product-action">



                                                    <a type="button" title="Quick View" class="as-p-btn o_quick_view"
                                                        data-product_template_id="4959">
                                                        <i class="fa fa-eye"></i>
                                                    </a>








                                                    <a href="#" role="button"
                                                        class="as-p-btn as-btn-cart a-submit" aria-label="Shopping cart"
                                                        title="Shopping cart">
                                                        <i class="fa fa-shopping-cart"></i> <span>Add to
                                                            cart</span>
                                                    </a>





                                                </div>
                                                <div class="as-product-title">

                                                    <a href="/shop/product/wr0391-fancy-comb-duck-print-4959">
                                                        [WR0391] Fancy Comb Duck Print
                                                    </a>


                                                </div>



                                                <div class="as-product-price">
                                                    <div itemprop="offers" itemscope="itemscope"
                                                        itemtype="http://schema.org/Offer" class="product_price">
                                                        <b>
                                                            <del data-oe-type="monetary"
                                                                data-oe-expression="combination_info['list_price']"
                                                                style="white-space: nowrap;"
                                                                class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                    class="oe_currency_value">95.00</span></del>
                                                            <span data-oe-type="monetary"
                                                                data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                    class="oe_currency_value">95.00</span></span>
                                                            <span itemprop="price" style="display:none;">95.0</span>
                                                            <span itemprop="priceCurrency"
                                                                style="display:none;">INR</span>
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-0 mb32 text-center o_colored_level">
                <a class="as-btn as-btn-dark btn btn-outline-primary" href="#" data-original-title=""
                    title="" aria-describedby="tooltip691747"> View more </a>
            </section>
            <section class="as_product_slider o_colored_level" data-collection_id="2"
                data-collection_name="Restocked Product" data-slider_type="slider_layout_7"
                data-snippet="as_product_slider" data-name="Product Slider" data-prod-count=""
                data-prod-auto="false" data-slider_time="" data-add_to_cart="true" data-quick_view="true"
                data-pro_compare="false" data-pro_wishlist="true" data-pro_ribbon="false" data-pro_ratting="false"
                data-product_list="2">
                <div class="container">
                    <section class="as-product-slider-snippet as-product-slider-style-4">
                        <div class="container">
                            <div class="as-product-tab-title">
                                <h4> Restocked Product

                                </h4>
                            </div>
                            <div class="as_data_container as-product-tab-content">
                                <div class="as_collection_data as-product-tab" filter-id="2">
                                    <div class="row">
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="/shop/cart/update" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="0f9a184a83a3d308782b232aa8cb558d0308f3c2o1709977094" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="661" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="661" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/20.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="661"
                                                                data-product-product-id="661">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="661">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HJ010] Cartoon Toothbrush Box
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">35.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">35.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">35.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action=" " method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="0f9a184a83a3d308782b232aa8cb558d0308f3c2o1709977094" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="4647" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3936" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/19.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="3936"
                                                                data-product-product-id="4647">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="3936">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HL2608] Craft ZigZag Paper Shaper Scissor (Pack Of
                                                                5)
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype=" " class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">95.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">95.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">95.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="0f9a184a83a3d308782b232aa8cb558d0308f3c2o1709977094" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="4643" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3932" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/18.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="3932"
                                                                data-product-product-id="4643">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="3932">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HL2607] 2 Pcs Cabinet Garbage Bag Hanger
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">70.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">70.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">70.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action=" " method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="0f9a184a83a3d308782b232aa8cb558d0308f3c2o1709977094" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="4293" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3728" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/17.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="3728"
                                                                data-product-product-id="4293">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="3728">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HL2570] Purse Pouch Car Purse Storage
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">120.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">120.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">120.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="0f9a184a83a3d308782b232aa8cb558d0308f3c2o1709977094" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="71" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="71" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/16.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="71"
                                                                data-product-product-id="71">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="71">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [WN1-15-2] 24 Grid Folding Underwear Socks Sorting
                                                                Storage Organizer
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">180.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">180.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">180.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="0f9a184a83a3d308782b232aa8cb558d0308f3c2o1709977094" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="1032" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="1032" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/15.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="1032"
                                                                data-product-product-id="1032">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="1032">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HL0111] Stainless Steel Hanging Basket
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">225.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">225.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">225.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="0f9a184a83a3d308782b232aa8cb558d0308f3c2o1709977094" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="760" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="760" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/14.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="760"
                                                                data-product-product-id="760">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="760">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [WD1012] Cute Cat Suction Mobile Stand (Pack of 2)
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">75.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">75.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">75.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="3546" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3055" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/13.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="3055"
                                                                data-product-product-id="3546">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="3055">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HL2442] Stainless Steel Pepper Mill Grinder
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">200.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">200.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">200.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="3626" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3127" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/12.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="3127"
                                                                data-product-product-id="3626">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="3127">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [WD0642] Round Carry Bag Hanger
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">90.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">90.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">90.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="3741" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3234" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/11.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="3234"
                                                                data-product-product-id="3741">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="3234">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [WJI252] Bear Design Hair Wrap
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">80.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">80.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">80.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="4804" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="4116" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/10.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="4116"
                                                                data-product-product-id="4804">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="4116">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HJ081] 38 Cm Bedsheet Mattress Lifter Stand
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">85.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">85.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">85.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="4115" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3559" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/9.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="3559"
                                                                data-product-product-id="4115">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="3559">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [WJI937] Wall Mounted Hanging Storage Basket (Random
                                                                Color)
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">90.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">90.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">90.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="1946" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="1946" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/8.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="1946"
                                                                data-product-product-id="1946">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="1946">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [WR0015] 5 Layer Stainless Steel Herb Scissor
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">100.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">100.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">100.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="5245" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="4508" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/7.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="4508"
                                                                data-product-product-id="5245">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="4508">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [WJI206] 2 Set Self Adhesive Remote Plastic Hook
                                                                (Random)
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">30.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">30.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">30.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="5337" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="4595" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/6.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="4595"
                                                                data-product-product-id="5337">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="4595">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HL2765] Acupressure Hand Roller Massager
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">50.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">50.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">50.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">
                                                <input type="hidden" name="csrf_token"
                                                    value="14074c065b5c22675a603aad5fcc4bf9ab6877f4o1709977095" />
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="5336" />
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="4594" />
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">
                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/5.jpg') }}"
                                                                loading="lazy" />
                                                        </a>
                                                        <div class="as-cart-action">
                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[1]/div[1]/t[2]/t[2]/t[1]/button[1]"
                                                                data-product-template-id="4594"
                                                                data-product-product-id="5336">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">
                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view" data-oe-model="ir.ui.view"
                                                                data-oe-id="2929" data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[1]/t[2]/t[1]/a[1]"
                                                                data-product_template_id="4594">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                data-oe-model="ir.ui.view" data-oe-id="2929"
                                                                data-oe-field="arch"
                                                                data-oe-xpath="/t[1]/section[1]/div[1]/div[1]/div[1]/div[1]/t[2]/div[1]/form[1]/div[1]/div[2]/div[1]/t[2]/t[2]/t[1]/a[1]">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to cart</span>
                                                            </a>
                                                        </div>
                                                        <div class="as-product-title">
                                                            <a href="#">
                                                                [HL2764] Rudra Electric Kapoor Dani
                                                            </a>
                                                        </div>
                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">75.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">75.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">75.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <section class="as-product-slider-snippet pb-0">
                <div class="as-product-tab-title pb-0">
                    <h4>Hot Selling</h4>
                </div>
            </section>
            <section class="as_best_seller o_colored_level" data-collection_id="0"
                data-collection_name="NO LAYOUT SELECTED" data-snippet="as_best_seller"
                data-name="Best Seller Product Slider" data-slider-style-id="7"
                data-slider-style-name="Grid Layout 3">
                <div class="container">
                    <section class="as-product-slider-snippet as-product-slider-style-4">
                        <div class="container">
                            <div class="as_data_container as-product-tab-content">
                                <div class="as_collection_data as-product-tab">
                                    <div class="row">


                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="1fbc4f041bd0f0a6ad8a4817fccfcbcaf011e8fdo1717482739">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="3135">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="2683">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/arival/21.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="2683"
                                                                data-product-product-id="3135">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="2683">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a
                                                                href="/shop/product/hj056-anti-slip-bathroom-floor-mat-1-pc-random-colors-2683">[HJ056]
                                                                Anti Slip Bathroom Floor Mat - 1 Pc (Random
                                                                Colors)</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">55.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">55.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">55.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="1fbc4f041bd0f0a6ad8a4817fccfcbcaf011e8fdo1717482739">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="5258">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="4521">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/arival/22.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="4521"
                                                                data-product-product-id="5258">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="4521">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a
                                                                href="/shop/product/hj028-7-compartment-transparent-clothes-storage-organiser-4521">[HJ028]
                                                                7 Compartment Transparent Clothes Storage
                                                                Organiser</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">125.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">125.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">125.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="4521">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3812">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/arival/23.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="3812"
                                                                data-product-product-id="4521">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="3812">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a
                                                                href="/shop/product/hj005-1-360-rotating-multipurpose-tray-without-box-3812">[HJ005-1]
                                                                360° Rotating Multipurpose Tray (Without Box)</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">55.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">55.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">55.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="3803">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3294">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/arival/24.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="3294"
                                                                data-product-product-id="3803">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="3294">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a
                                                                href="/shop/product/ke0015-plastic-desktop-multipurpose-organiser-3294">[KE0015]
                                                                Plastic Desktop Multipurpose Organiser</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">60.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">60.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">60.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="620">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="620">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/arival/25.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="620"
                                                                data-product-product-id="620">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="620">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a
                                                                href="/shop/product/wd0265-canvas-desktop-storage-organiser-random-620">[WD0265]
                                                                Canvas Desktop Storage Organiser (Random)</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">55.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">55.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">55.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="5291">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="4554">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src=" {{ URL::asset('frontend/images/arival/26.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="4554"
                                                                data-product-product-id="5291">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="4554">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a href="/shop/product/hl2732-emergency-usb-flash-light-4554">[HL2732]
                                                                Emergency USB Flash Light</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">125.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">125.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">125.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="4229">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="3670">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/arival/27.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="3670"
                                                                data-product-product-id="4229">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="3670">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a
                                                                href="/shop/product/wr0083-new-quilt-storage-bag-random-small-size-3670">[WR0083]
                                                                New Quilt Storage Bag (Random)(Small Size)</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">95.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">95.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">95.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6 col-md-4 col-lg-3">
                                            <form action="" method="post">



                                                <input type="hidden" name="csrf_token"
                                                    value="c91b7ab73897a782ea6bfd2b74ba7918f845f064o1717482740">
                                                <input type="hidden" class="product_id" name="product_id"
                                                    value="5118">
                                                <input type="hidden" class="product_template_id"
                                                    name="product_template_id" value="4399">
                                                <div class="as-product-style-4">
                                                    <div class="as-product-thumb">



                                                        <a class="asp-img" href="#">
                                                            <img title="" alt=""
                                                                src="{{ URL::asset('frontend/images/arival/28.jpg') }}"
                                                                loading="lazy">
                                                        </a>
                                                        <div class="as-cart-action">


                                                            <button type="button" role="button"
                                                                class="as-p-btn o_add_wishlist" title="Add to Wishlist"
                                                                data-action="o_wishlist" data-product-template-id="4399"
                                                                data-product-product-id="5118">
                                                                <span class="fa fa-heart" role="img"
                                                                    aria-label="Add to wishlist"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="as-product-info">
                                                        <div class="as-product-action">


                                                            <a type="button" title="Quick View"
                                                                class="as-p-btn o_quick_view"
                                                                data-product_template_id="4399">
                                                                <i class="fa fa-eye"></i>
                                                            </a>



                                                            <a href="#" role="button"
                                                                class="as-p-btn as-btn-cart a-submit"
                                                                aria-label="Shopping cart" title="Shopping cart">
                                                                <i class="fa fa-shopping-cart"></i> <span>Add to
                                                                    cart</span>
                                                            </a>




                                                        </div>

                                                        <div class="as-product-title">
                                                            <a
                                                                href="/shop/product/hl2686-silicone-face-ice-roller-random-colour-4399">[HL2686]
                                                                Silicone Face Ice Roller (Random Colour)</a>
                                                        </div>







                                                        <div class="as-product-price">
                                                            <div itemprop="offers" itemscope="itemscope"
                                                                itemtype="http://schema.org/Offer"
                                                                class="product_price">
                                                                <b>
                                                                    <del data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['list_price']"
                                                                        style="white-space: nowrap;"
                                                                        class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                            class="oe_currency_value">50.00</span></del>
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                            class="oe_currency_value">50.00</span></span>
                                                                    <span itemprop="price"
                                                                        style="display:none;">50.0</span>
                                                                    <span itemprop="priceCurrency"
                                                                        style="display:none;">INR</span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
@endsection
