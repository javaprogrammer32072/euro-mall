@extends('layouts.front')
@section('title')
    Single Page
@endsection
@section('content')
    <main>
        <div itemscope="itemscope" itemtype="http://schema.org/Product" id="wrap"
            class="js_sale ecom-zoomable zoomodoo-next ecom-zoomable zoomodoo-next" data-ecom-zoom-auto="1">


            <section class="product-breadcrumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="" href="/shop">Products</a>
                        </li>

                        <li class="breadcrumb-item active">
                            <span>[HL2891] Waterproof Mobile Cover Pouch</span>
                        </li>
                    </ul>
                </div>
            </section>

            <section id="product_detail" class="container py-2 oe_website_sale " data-view-track="1">
                <div class="row d-none">
                    <div class="col-md-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/shop">Products</a>
                            </li>

                            <li class="breadcrumb-item active">
                                <span>[HL2891] Waterproof Mobile Cover Pouch</span>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-8">
                        <div class="form-inline justify-content-end">


                            <div class="dropdown d-none ml-2">

                                <a role="button" href="#" class="dropdown-toggle btn btn-secondary"
                                    data-toggle="dropdown">
                                    Public Pricelist
                                </a>
                                <div class="dropdown-menu" role="menu">

                                    <a role="menuitem" class="dropdown-item" href="#">
                                        <span class="switcher_pricelist" data-pl_id="1">Public Pricelist</span>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row as-product-detail-row">
                    <div class="col-lg-6 as-pd-sticky-box as-product-photos">
                        <div id="o-carousel-product" class="carousel slide" data-ride="carousel" data-interval="0">
                            <div class="carousel-outer position-relative" style="">

                                <div class="carousel-inner h-100">

                                    <div class="carousel-item h-100 active">

                                        <a class="img-gallery-tag" href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="{{ URL::asset('frontend/images/single_product/1.jpg') }}')}}"
                                                    class="img img-fluid product_detail_img mh-100"
                                                    alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                            </div>
                                        </a>

                                    </div>

                                    <div class="carousel-item h-100">

                                        <a class="img-gallery-tag" href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="{{ URL::asset('frontend/images/single_product/2.jpg') }}"
                                                    class="img img-fluid product_detail_img mh-100"
                                                    alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                            </div>
                                        </a>

                                    </div>

                                    <div class="carousel-item h-100">
                                        <a class="img-gallery-tag" href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="{{ URL::asset('frontend/images/single_product/3.jpg') }}"
                                                    class="img img-fluid product_detail_img mh-100"
                                                    alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                            </div>
                                        </a>

                                    </div>

                                    <div class="carousel-item h-100">

                                        <a class="img-gallery-tag" href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="{{ URL::asset('frontend/images/single_product/4.jpg') }}"
                                                    class="img img-fluid product_detail_img mh-100"
                                                    alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                            </div>
                                        </a>

                                    </div>

                                    <div class="carousel-item h-100">

                                        <a class="img-gallery-tag" href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="{{ URL::asset('frontend/images/single_product/5.jpg') }}"
                                                    class="img img-fluid product_detail_img mh-100"
                                                    alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                            </div>
                                        </a>

                                    </div>

                                    <div class="carousel-item h-100">
                                        <a class="img-gallery-tag" href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="{{ URL::asset('frontend/images/single_product/6.jpg') }}"
                                                    class="img img-fluid product_detail_img mh-100"
                                                    alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                            </div>
                                        </a>

                                    </div>

                                    <div class="carousel-item h-100">

                                        <a class="img-gallery-tag" href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img src="{{ URL::asset('frontend/images/single_product/7.jpg') }}"
                                                    class="img img-fluid product_detail_img mh-100"
                                                    alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                            </div>
                                        </a>

                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#o-carousel-product" role="button"
                                    data-slide="prev">
                                    <span class="fa fa-chevron-left p-2" role="img" aria-label="Previous"
                                        title="Previous"></span>
                                </a>
                                <a class="carousel-control-next" href="#o-carousel-product" role="button"
                                    data-slide="next">
                                    <span class="fa fa-chevron-right p-2" role="img" aria-label="Next"
                                        title="Next"></span>
                                </a>
                            </div>
                            <div class="d-none d-md-block text-center">
                                <ol class="carousel-indicators d-inline-block position-static mx-auto my-0 p-1 text-left">
                                    <li data-target="#o-carousel-product" class="d-inline-block m-1 align-top active"
                                        data-slide-to="0">
                                        <div><img src="{{ URL::asset('frontend/images/single_product/8.jpg') }}"
                                                class="img o_image_64_contain"
                                                alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                        </div>

                                    </li>
                                    <li data-target="#o-carousel-product" class="d-inline-block m-1 align-top "
                                        data-slide-to="1">
                                        <div><img src="{{ URL::asset('frontend/images/single_product/9.jpg') }}"
                                                class="img o_image_64_contain"
                                                alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                        </div>

                                    </li>
                                    <li data-target="#o-carousel-product" class="d-inline-block m-1 align-top "
                                        data-slide-to="2">
                                        <div><img src="{{ URL::asset('frontend/images/single_product/10.jpg') }}"
                                                class="img o_image_64_contain"
                                                alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                        </div>

                                    </li>
                                    <li data-target="#o-carousel-product" class="d-inline-block m-1 align-top "
                                        data-slide-to="3">
                                        <div><img src="{{ URL::asset('frontend/images/single_product/11.jpg') }}"
                                                class="img o_image_64_contain"
                                                alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                        </div>

                                    </li>
                                    <li data-target="#o-carousel-product" class="d-inline-block m-1 align-top "
                                        data-slide-to="4">
                                        <div><img src="{{ URL::asset('frontend/images/single_product/12.jpg') }}"
                                                class="img o_image_64_contain"
                                                alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy" />
                                        </div>

                                    </li>

                                </ol>
                            </div>


                        </div>

                    </div>
                    <div class="col-lg-6 as-product-single-info" id="product_details">

                        <h1 itemprop="name">[HL2891] Waterproof Mobile Cover Pouch</h1>





                        <div class="o_not_editable">

                        </div>


                        <!-- <span itemprop="url"
                                            style="display:none;">http://skycarcarek.com/shop/hl2891-waterproof-mobile-cover-pouch-4981</span>
                                        <span itemprop="image"
                                            style="display:none;">http://skycarcarek.com/web/image/product.template/4981/image_1920?unique=bf0240f</span> -->
                        <form action="/shop/cart/update" method="POST">
                            <input type="hidden" name="csrf_token"
                                value="1c46250f16ae777f3dbc3f0eebb5b11e81b0c68eo1717491483" />
                            <div class="js_product js_main_product">

                                <input type="hidden" class="product_id" name="product_id" value="5722" />
                                <input type="hidden" class="product_template_id" name="product_template_id"
                                    value="4981" />

                                <ul class="d-none js_add_cart_variants" data-attribute_exclusions="{'exclusions: []'}">
                                </ul>



                                <div itemprop="offers" itemscope="itemscope" itemtype="http://schema.org/Offer"
                                    class="product_price mt16">
                                    <h4 class="oe_price_h4 css_editable_mode_hidden">
                                        <span data-oe-type="monetary" data-oe-expression="combination_info['list_price']"
                                            style="text-decoration: line-through; white-space: nowrap;"
                                            class="text-danger oe_default_price d-none">₹ <span
                                                class="oe_currency_value">30.00</span></span>
                                        <b data-oe-type="monetary" data-oe-expression="combination_info['price']"
                                            class="oe_price" style="white-space: nowrap;">₹ <span
                                                class="oe_currency_value">30.00</span></b>
                                        <span itemprop="price" style="display:none;">30.0</span>
                                        <span itemprop="priceCurrency" style="display:none;">INR</span>
                                    </h4>
                                    <h4 class="css_non_editable_mode_hidden decimal_precision" data-precision="2">
                                        <span>₹ <span class="oe_currency_value">30.00</span></span>
                                    </h4>
                                </div>

                                <table class="table mt16 table-sm table-striped" style="max-width: 250px;"
                                    id="pricelist_table">
                                    <thead>
                                        <tr>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>4 - 11</td>
                                            <td><span data-oe-type="monetary"
                                                    data-oe-expression="product.list_price - ((product.list_price * pricelist_line.percent_price/100))">₹
                                                    <span class="oe_currency_value">29.10</span></span></td>
                                        </tr>
                                        <tr>
                                            <td>12 - 23</td>
                                            <td><span data-oe-type="monetary"
                                                    data-oe-expression="product.list_price - ((product.list_price * pricelist_line.percent_price/100))">₹
                                                    <span class="oe_currency_value">28.20</span></span></td>
                                        </tr>
                                        <tr>
                                            <td>>= 24</td>
                                            <td><span data-oe-type="monetary"
                                                    data-oe-expression="product.list_price - ((product.list_price * pricelist_line.percent_price/100))">₹
                                                    <span class="oe_currency_value">27.00</span></span></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p class="css_not_available_msg alert alert-warning">This combination does not
                                    exist.</p>

                                <div class="css_quantity input-group" contenteditable="false">
                                    <div class="input-group-prepend">
                                        <a class="btn btn-secondary js_add_cart_json" aria-label="Remove one"
                                            title="Remove one" href="#">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                    <input type="text" class="form-control quantity" data-min="1" name="add_qty"
                                        value="1" />
                                    <div class="input-group-append">
                                        <a class="btn btn-secondary float_left js_add_cart_json" aria-label="Add one"
                                            title="Add one" href="#">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>



                                <a role="button" id="add_to_cart"
                                    class="btn btn-primary btn-lg mt16 js_check_product a-submit as-btn d-none"
                                    href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>


                                <a role="button"
                                    class="btn btn-primary btn-lg mt16 js_check_product d-block d-sm-inline-block js_cart_add_direct"
                                    href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to Cart
                                </a>

                                <button type="button"
                                    class="btn btn-primary btn-lg mt4 ml4 carton_quantity_inquiry_modal"
                                    data-toggle="modal" data-target="#carton_quantity_inquiry_modal"><i
                                        class="fa fa-envelope-o"></i> Bulk Inquiry</button>
                                <div role="dialog" id="carton_quantity_inquiry_modal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <header class="modal-header">
                                                <h4 class="modal-title">Bulk Quantity Inquiry</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">&times;</button>
                                            </header>
                                            <main class="modal-body">
                                                <form class="oe_carton_quantity_inquiry" role="form" method="post">
                                                    <input type="hidden" name="csrf_token"
                                                        value="1c46250f16ae777f3dbc3f0eebb5b11e81b0c68eo1717491483" />
                                                    <input type="hidden" name="carton_product_id" />
                                                    <input type="hidden" name="user_id" value="4" />
                                                    <input type="hidden" name="partner_name" value="GUEST USER" />
                                                    <input type="hidden" name="partner_contact" />
                                                    <div class="form-group">
                                                        <label for="contact_name" class="col-form-label">Name
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="contact_name" id="contact_name"
                                                            class="form-control" required="required" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone" class="col-form-label">Contact
                                                            Number
                                                            <span class="text-danger">*</span></label>
                                                        <input type="tel" name="phone" id="phone"
                                                            class="form-control" required="required" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="quantity" class="col-form-label">Quantity
                                                            <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantity" id="quantity"
                                                            class="form-control" required="required" value="1" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="customer_type" class="col-form-label">I am
                                                            -</label>

                                                        <select name="customer_type" id="customer_type"
                                                            class="form-control" required="required">
                                                            <option value=""></option>

                                                            <option value="4">Corporate Buyer</option>

                                                            <option value="3">E-commerce Seller</option>

                                                            <option value="1">Reseller</option>

                                                            <option value="2">Shop Keeper</option>

                                                        </select>
                                                    </div>
                                                    <div>
                                                        <h5 class="d-none error_carton_inquiry text-danger">Some
                                                            required fields are empty.</h5>
                                                    </div>
                                                    <p><span class="text-danger">*</span> are required fields</p>
                                                </form>
                                            </main>
                                            <footer class="modal-footer">
                                                <a href="#" role="button"
                                                    class="btn btn-primary carton-inquiry-submit" title="Submit">
                                                    Submit</a>
                                                <a role="button" href="#" class="btn btn-link btn-sm"
                                                    data-dismiss="modal">Close</a>
                                            </footer>
                                        </div>
                                    </div>
                                </div>

                                <div role="dialog" id="carton_quantity_inquiry_modal_sucess" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <header class="modal-header">
                                                <h4 class="modal-title">Bulk Quantity Inquiry</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">&times;</button>
                                            </header>
                                            <main class="modal-body">
                                                <p class="text-success">Thank you for showing interest in our
                                                    products. One of our sales executive will get in touch with you
                                                    shortly.</p>
                                            </main>
                                            <footer class="modal-footer">
                                                <a role="button" href="#" class="btn btn-link btn-sm"
                                                    data-dismiss="modal">Close</a>
                                            </footer>
                                        </div>
                                    </div>
                                </div>

                                <div class="availability_messages o_not_editable"></div>


                                <p class="mt16">
                                    <strong>Origin :</strong>
                                    <span>China</span>
                                </p>
                                <p id="product_weight" class="mt16">

                                    <strong>Weight :</strong>
                                    <span>
                                        0.02
                                        kg
                                    </span>

                                </p>
                                <p id="product_volume" class="mt16">

                                </p>
                                <div id="product_option_block">




                                    <button type="button" role="button" class="btn btn-link mt16 o_add_wishlist_dyn"
                                        data-action="o_wishlist" data-product-template-id="4981"
                                        data-product-product-id="5722"><span class="fa fa-heart" role="img"
                                            aria-label="Add to wishlist"></span> Add to wishlist</button>
                                </div>


                                <div id="product_name" style="display:none;">[HL2891] Waterproof Mobile Cover
                                    Pouch
                                </div>


                                <div class="product_share">
                                    <h6 class="text-uppercase font-weight-bold">Share this product</h6>
                                    <a href="#" aria-label="Facebook" title="Share on Facebook"
                                        class="o_facebook">
                                        <i class="fa fa-facebook-square text-facebook"></i>
                                    </a>
                                    <a href="#" aria-label="Twitter" title="Share on Twitter" class="o_twitter">
                                        <i class="fa fa-twitter text-twitter" aria-label="Twitter" title="Twitter"></i>
                                    </a>
                                    <a href="#" aria-label="LinkedIn" title="Share on LinkedIn"
                                        class="o_linkedin">
                                        <i class="fa fa-linkedin text-linkedin" aria-label="LinkedIn"
                                            title="LinkedIn"></i>
                                    </a>
                                    <a href="#" aria-label="Pinterest" title="Share on Pinterest"
                                        class="o_pinterest">
                                        <i class="fa fa-pinterest text-pinterest" aria-label="pinterest"
                                            title="pinterest"></i>
                                    </a>
                                    <a href="#" aria-label="envelope" title="Share on envelope" class="o_mail">
                                        <i class="fa fa-envelope text-envelope" aria-label="o_mail" title="o_mail"></i>
                                    </a>
                                </div>

                            </div>
                        </form>
                        <div>
                        </div>
                        <hr />




                    </div>
                </div>





            </section>

            <div id="product_full_specification_accessory_n_alternative">


                <section class="product-details-tabs">
                    <div class="container">

                        <ul id="as_product_tabs" class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link  active show" id="nav_tabs_link_1" data-toggle="tab"
                                    itemprop="description" href="#nav_tabs_content_1" role="tab"
                                    aria-controls="nav_tabs_content_1" aria-selected="true">Description
                                </a>
                            </li>






                        </ul>



                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav_tabs_content_1" role="tabpanel"
                                aria-labelledby="nav_tabs_link_1">
                                <div itemprop="description" class="oe_structure" id="product_full_description">
                                    <p>
                                        <font color="#515151" face="Raleway, Arial, Helvetica, sans-serif"><span
                                                style="font-size: 12px; font-weight: bolder; letter-spacing: 1px;">Material:
                                            </span><span style="font-size: 12px; letter-spacing: 1px;"><span
                                                    style="font-weight: bolder;">Plastic</span></span></font><br
                                            style='font-family: "Odoo Unicode Support Noto", "Lucida Grande", Helvetica, Verdana, Arial, sans-serif;'>
                                        <font color="#515151" face="Raleway, Arial, Helvetica, sans-serif"><span
                                                style="font-size: 12px; font-weight: bolder; letter-spacing: 1px;">Product
                                                Weight: 2</span><span style="font-size: 12px; letter-spacing: 1px;"><span
                                                    style="font-weight: bolder;">0 gms</span></span></font><br
                                            style='font-family: "Odoo Unicode Support Noto", "Lucida Grande", Helvetica, Verdana, Arial, sans-serif;'>
                                        <font color="#515151" face="Raleway, Arial, Helvetica, sans-serif"><span
                                                style="font-size: 12px; font-weight: bolder; letter-spacing: 1px;">Product
                                                Dimensions: 11</span><span
                                                style="font-size: 12px; letter-spacing: 1px;"><span
                                                    style="font-weight: bolder;"> x 20 Cm</span></span></font><br
                                            style='font-family: "Odoo Unicode Support Noto", "Lucida Grande", Helvetica, Verdana, Arial, sans-serif;'>
                                        <font color="#515151" face="Raleway, Arial, Helvetica, sans-serif"><span
                                                style="font-size: 12px; font-weight: bolder; letter-spacing: 1px;">Packaging
                                                Dimensions: 10</span><span
                                                style="font-size: 12px; letter-spacing: 1px;"><span
                                                    style="font-weight: bolder;"> x 10 x 11 Cm</span></span></font>
                                        <br
                                            style='font-family: "Odoo Unicode Support Noto", "Lucida Grande", Helvetica, Verdana, Arial, sans-serif;'><span
                                            style="color: rgb(81, 81, 81); font-family: Raleway, Arial, Helvetica, sans-serif; font-size: 12px; letter-spacing: 1px; font-weight: bolder;">Package
                                            Content: 1 Pc</span><br>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav_tabs_content_2" role="tabpanel"
                                aria-labelledby="nav_tabs_link_2">
                                <div class="product-specifications" id="product_full_spec">


                                </div>
                            </div>


                        </div>

                    </div>
                </section>


                <div class="recommended_product_slider_main container">
                    <div class="row">






                    </div>
                </div>


            </div>


            <section class="s_wsale_products_recently_viewed pt24 pb24 o_colored_level" style="min-height: 400px;"
                data-snippet="s_products_recently_viewed">
                <div class="container">
                    <div
                        class="alert alert-info alert-dismissible rounded-0 fade show d-print-none css_non_editable_mode_hidden o_not_editable">
                        This is a preview of the recently viewed products by the user.<br>
                        Once the user has seen at least one product this snippet will be visible.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> ×
                        </button>
                    </div>
                    <h3 class="text-center mb32">Recently viewed Products</h3>
                    <div class="slider o_not_editable">
                        <div id="o_carousel_recently_viewed_products_3" class="carousel slide o_not_editable"
                            data-interval="false">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="o_carousel_product_card_wrap col-md-3">
                                            <div class="o_carousel_product_card card h-100">
                                                <input type="hidden" name="product-id" data-product-id="5258">
                                                <a class="o_carousel_product_img_link" href="#">
                                                    <img class="o_carousel_product_card_img_top card-img-top"
                                                        src="{{ URL::asset('frontend/images/all_product/1.jpg') }}"
                                                        alt="">
                                                </a>
                                                <i class="fa fa-trash o_carousel_product_remove js_remove"></i>
                                                <div class="o_carousel_product_card_body card-body border-top">
                                                    <a href="#" class="text-decoration-none">
                                                        <h6 class="card-title mb-0 text-truncate">[HJ028] 7
                                                            Compartment Transparent Clothes Storage Organiser</h6>
                                                    </a>

                                                </div>
                                                <div
                                                    class="o_carousel_product_card_footer card-footer d-flex align-items-center">
                                                    <div class="d-block font-weight-bold">₹&nbsp;<span
                                                            class="oe_currency_value">125.00</span></div>
                                                    <button type="button" role="button"
                                                        class="btn btn-primary js_add_cart ml-auto" title="Add to Cart">
                                                        <i class="fa fa-fw fa-shopping-cart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="o_carousel_product_card_wrap col-md-3">
                                            <div class="o_carousel_product_card card h-100">
                                                <input type="hidden" name="product-id" data-product-id="5722">
                                                <a class="o_carousel_product_img_link" href="#">
                                                    <img class="o_carousel_product_card_img_top card-img-top"
                                                        src="{{ URL::asset('frontend/images/all_product/2.jpg') }}"
                                                        alt="">
                                                </a>
                                                <i class="fa fa-trash o_carousel_product_remove js_remove"></i>
                                                <div class="o_carousel_product_card_body card-body border-top">
                                                    <a href="#" class="text-decoration-none">
                                                        <h6 class="card-title mb-0 text-truncate">[HL2891]
                                                            Waterproof Mobile Cover Pouch</h6>
                                                    </a>

                                                </div>
                                                <div
                                                    class="o_carousel_product_card_footer card-footer d-flex align-items-center">
                                                    <div class="d-block font-weight-bold">₹&nbsp;<span
                                                            class="oe_currency_value">30.00</span></div>
                                                    <button type="button" role="button"
                                                        class="btn btn-primary js_add_cart ml-auto" title="Add to Cart">
                                                        <i class="fa fa-fw fa-shopping-cart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="o_carousel_product_card_wrap col-md-3">
                                            <div class="o_carousel_product_card card h-100">
                                                <input type="hidden" name="product-id" data-product-id="225">
                                                <a class="o_carousel_product_img_link" href="#">
                                                    <img class="o_carousel_product_card_img_top card-img-top"
                                                        src="{{ URL::asset('frontend/images/all_product/3.jpg') }}"
                                                        alt="">
                                                </a>
                                                <i class="fa fa-trash o_carousel_product_remove js_remove"></i>
                                                <div class="o_carousel_product_card_body card-body border-top">
                                                    <a href="#" class="text-decoration-none">
                                                        <h6 class="card-title mb-0 text-truncate">[WJI068-2] 2 in 1
                                                            Multipurpose Mini Window Cleaning Brush &amp; Pan (Pack
                                                            Of 3 )</h6>
                                                    </a>

                                                </div>
                                                <div
                                                    class="o_carousel_product_card_footer card-footer d-flex align-items-center">
                                                    <div class="d-block font-weight-bold">₹&nbsp;<span
                                                            class="oe_currency_value">35.00</span></div>
                                                    <button type="button" role="button"
                                                        class="btn btn-primary js_add_cart ml-auto" title="Add to Cart">
                                                        <i class="fa fa-fw fa-shopping-cart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="o_carousel_product_card_wrap col-md-3">
                                            <div class="o_carousel_product_card card h-100">
                                                <input type="hidden" name="product-id" data-product-id="1989">
                                                <a class="o_carousel_product_img_link" href="#">
                                                    <img class="o_carousel_product_card_img_top card-img-top"
                                                        src="{{ URL::asset('frontend/images/all_product/4.jpg') }}"
                                                        alt="">
                                                </a>
                                                <i class="fa fa-trash o_carousel_product_remove js_remove"></i>
                                                <div class="o_carousel_product_card_body card-body border-top">
                                                    <a href="#" class="text-decoration-none">
                                                        <h6 class="card-title mb-0 text-truncate">[WR0263]
                                                            Waterproof PVC Dining Table Mat (Checks Print) - 157*132
                                                            cm</h6>
                                                    </a>

                                                </div>
                                                <div
                                                    class="o_carousel_product_card_footer card-footer d-flex align-items-center">
                                                    <div class="d-block font-weight-bold">₹&nbsp;<span
                                                            class="oe_currency_value">95.00</span></div>
                                                    <button type="button" role="button"
                                                        class="btn btn-primary js_add_cart ml-auto" title="Add to Cart">
                                                        <i class="fa fa-fw fa-shopping-cart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </div>

    </main>
@endsection
