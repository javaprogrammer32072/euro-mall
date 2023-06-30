@extends('layouts.front')
@section('title')
    Cart
@endsection
@section('content')
    <main style="">



        <div id="wrap">
            <div class="container oe_website_sale py-2">
                <div class="row">
                    <div class="col-12">

                        <div class="row">
                            <div class="col-xl">
                                <div class="wizard">
                                    <div class="progress-wizard">
                                        <a class="no-decoration" href="#">
                                            <div id="wizard-step10" class="progress-wizard-step active">
                                                <div class="progress-wizard-bar d-none d-md-block"></div>
                                                <span class="progress-wizard-dot d-none d-md-inline-block"></span>
                                                <div class="text-center progress-wizard-steplabel">Review Order
                                                </div>
                                            </div>
                                        </a>
                                        <a class="no-decoration" href="#">
                                            <div id="wizard-step20" class="progress-wizard-step disabled">
                                                <div class="progress-wizard-bar d-none d-md-block"></div>
                                                <span class="progress-wizard-dot d-none d-md-inline-block"></span>
                                                <div class="text-center progress-wizard-steplabel">Address</div>
                                            </div>
                                        </a>
                                        <a class="no-decoration" href="#">
                                            <div id="wizard-step40" class="progress-wizard-step disabled">
                                                <div class="progress-wizard-bar d-none d-md-block"></div>
                                                <span class="progress-wizard-dot d-none d-md-inline-block"></span>
                                                <div class="text-center progress-wizard-steplabel">Confirm Order
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-xl-8 oe_cart">
                        <div class="row">
                            <div class="col-lg-12">

                                <table class="mb16 table table-striped table-sm js_cart_lines" id="cart_products">
                                    <thead>
                                        <tr>
                                            <th class="td-img">Product</th>
                                            <th></th>
                                            <th class="text-center td-qty">Quantity</th>
                                            <th class="text-center td-price">Price</th>
                                            <th class="text-center td-action"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td align="center" class="td-img">

                                                <span><img src="{{ URL::asset('frontend/images/wishlist/3.jpg') }}"
                                                        class="img rounded o_image_64_max" alt="[HL2882] 6 Pcs Comb"
                                                        loading="lazy" style=""></span>


                                            </td>
                                            <td class="td-product_name">
                                                <div>

                                                    <a href="#">

                                                        <strong>[HL2882] 6 Pcs Comb</strong>

                                                    </a>

                                                </div>



                                            </td>
                                            <td class="text-center td-qty">
                                                <div class="css_quantity input-group mx-auto">
                                                    <div class="input-group-prepend">
                                                        <a class="btn btn-link js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Remove one" title="Remove one" href="#">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                    <input type="text" class="js_quantity form-control quantity"
                                                        data-line-id="1286662" data-product-id="5708" value="1"
                                                        data-max="1.0">
                                                    <div class="input-group-append">

                                                        <a class="btn btn-link float_left js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Add one" title="Add one" href="#">
                                                            <i class="fa fa-plus"></i>
                                                        </a>


                                                    </div>
                                                </div>


                                                <div class="availability_messages"></div>



                                            </td>
                                            <td class="text-center td-price" name="price">







                                                <span style="white-space: nowrap;">₹&nbsp;<span
                                                        class="oe_currency_value">70.00</span></span>
                                            </td>
                                            <td class="td-action">
                                                <a href="#" aria-label="Remove from cart" title="Remove from cart"
                                                    class="js_delete_product no-decoration"> <small><i
                                                            class="fa fa-trash-o"></i></small></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td align="center" class="td-img">

                                                <span><img src="{{ URL::asset('frontend/images/wishlist/4.jpg') }}"
                                                        class="img rounded o_image_64_max"
                                                        alt="[WR0263] Waterproof PVC Dining Table Mat (Checks Print) - 157*132 cm"
                                                        loading="lazy" style=""></span>


                                            </td>
                                            <td class="td-product_name">
                                                <div>

                                                    <a href="#">

                                                        <strong>[WR0263] Waterproof PVC Dining Table Mat (Checks
                                                            Print) - 157*132 cm</strong>

                                                    </a>

                                                </div>



                                            </td>
                                            <td class="text-center td-qty">
                                                <div class="css_quantity input-group mx-auto">
                                                    <div class="input-group-prepend">
                                                        <a class="btn btn-link js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Remove one" title="Remove one" href="#">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                    <input type="text" class="js_quantity form-control quantity"
                                                        data-line-id="1287133" data-product-id="1989" value="2"
                                                        data-max="108.0">
                                                    <div class="input-group-append">

                                                        <a class="btn btn-link float_left js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Add one" title="Add one" href="#">
                                                            <i class="fa fa-plus"></i>
                                                        </a>


                                                    </div>
                                                </div>


                                                <div class="availability_messages"></div>



                                            </td>
                                            <td class="text-center td-price" name="price">







                                                <span style="white-space: nowrap;">₹&nbsp;<span
                                                        class="oe_currency_value">95.00</span></span>
                                            </td>
                                            <td class="td-action">
                                                <a href="#" aria-label="Remove from cart" title="Remove from cart"
                                                    class="js_delete_product no-decoration"> <small><i
                                                            class="fa fa-trash-o"></i></small></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td align="center" class="td-img">

                                                <span><img src="{{ URL::asset('frontend/images/wishlist/5.jpg') }}"
                                                        class="img rounded o_image_64_max"
                                                        alt="[HL2891] Waterproof Mobile Cover Pouch" loading="lazy"
                                                        style=""></span>


                                            </td>
                                            <td class="td-product_name">
                                                <div>

                                                    <a href="#">

                                                        <strong>[HL2891] Waterproof Mobile Cover Pouch</strong>

                                                    </a>

                                                </div>



                                            </td>
                                            <td class="text-center td-qty">
                                                <div class="css_quantity input-group mx-auto">
                                                    <div class="input-group-prepend">
                                                        <a class="btn btn-link js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Remove one" title="Remove one" href="#">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                    <input type="text" class="js_quantity form-control quantity"
                                                        data-line-id="1287140" data-product-id="5722" value="1"
                                                        data-max="69.0">
                                                    <div class="input-group-append">

                                                        <a class="btn btn-link float_left js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Add one" title="Add one" href="#">
                                                            <i class="fa fa-plus"></i>
                                                        </a>


                                                    </div>
                                                </div>


                                                <div class="availability_messages"></div>



                                            </td>
                                            <td class="text-center td-price" name="price">







                                                <span style="white-space: nowrap;">₹&nbsp;<span
                                                        class="oe_currency_value">30.00</span></span>
                                            </td>
                                            <td class="td-action">
                                                <a href="#" aria-label="Remove from cart" title="Remove from cart"
                                                    class="js_delete_product no-decoration"> <small><i
                                                            class="fa fa-trash-o"></i></small></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td align="center" class="td-img">

                                                <span><img src="{{ URL::asset('frontend/images/wishlist/6.jpg') }}"
                                                        class="img rounded o_image_64_max"
                                                        alt="[HL2888] 2Pcs Gas Cleaning Brush" loading="lazy"
                                                        style=""></span>


                                            </td>
                                            <td class="td-product_name">
                                                <div>

                                                    <a href="#">

                                                        <strong>[HL2888] 2Pcs Gas Cleaning Brush</strong>

                                                    </a>

                                                </div>



                                            </td>
                                            <td class="text-center td-qty">
                                                <div class="css_quantity input-group mx-auto">
                                                    <div class="input-group-prepend">
                                                        <a class="btn btn-link js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Remove one" title="Remove one" href="#">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                    <input type="text" class="js_quantity form-control quantity"
                                                        data-line-id="1287169" data-product-id="5719" value="1"
                                                        data-max="38.0">
                                                    <div class="input-group-append">

                                                        <a class="btn btn-link float_left js_add_cart_json d-none d-md-inline-block"
                                                            aria-label="Add one" title="Add one" href="#">
                                                            <i class="fa fa-plus"></i>
                                                        </a>


                                                    </div>
                                                </div>


                                                <div class="availability_messages"></div>



                                            </td>
                                            <td class="text-center td-price" name="price">







                                                <span style="white-space: nowrap;">₹&nbsp;<span
                                                        class="oe_currency_value">40.00</span></span>
                                            </td>
                                            <td class="td-action">
                                                <a href="#" aria-label="Remove from cart" title="Remove from cart"
                                                    class="js_delete_product no-decoration"> <small><i
                                                            class="fa fa-trash-o"></i></small></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>


                                <div class="clearfix"></div>
                                <a role="button" href="#"
                                    class="btn btn-secondary mb32 d-none d-xl-inline-block as-btn">
                                    <span class="fa fa-chevron-left"></span>
                                    <span class="">Continue Shopping</span>
                                </a>


                                <span class="h-col h-user d-none d-xl-inline-block float-right">
                                    <span class="loginpop btn btn-secondary as-btn as-btn-theme" data-toggle="modal"
                                        data-target="#loginPopTemp" data-theme_name="theme_alan">
                                        <span>Process Checkout</span>
                                        <span class="fa fa-chevron-right"></span>
                                    </span>
                                </span>


                                <div class="oe_structure" id="oe_structure_website_sale_cart_1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4" id="o_cart_summary">

                        <div class="card js_cart_summary">
                            <div class="card-body">
                                <h4 class="d-none d-xl-block">Order Total</h4>
                                <hr class="d-none d-xl-block">
                                <div>

                                    <div id="cart_total" class="">
                                        <table class="table">
                                            <tbody>
                                                <tr id="empty">

                                                    <td class="col-md-2 col-3 border-0"></td>
                                                    <td class="col-md-2 col-3 border-0"></td>
                                                </tr>




                                                <tr id="order_total_untaxed">
                                                    <td class="text-right border-0">Subtotal:</td>
                                                    <td class="text-xl-right border-0">
                                                        <span class="monetary_field"
                                                            style="white-space: nowrap;">₹&nbsp;<span
                                                                class="oe_currency_value">330.00</span></span>
                                                    </td>
                                                </tr>
                                                <tr id="order_total_taxes">
                                                    <td class="text-right border-0">Taxes:</td>
                                                    <td class="text-xl-right border-0">
                                                        <span class="monetary_field"
                                                            style="white-space: nowrap;">₹&nbsp;<span
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


                                                <tr>
                                                    <td colspan="3" class="text-center text-xl-right border-0">
                                                        <span class="">


                                                            <a href="#"
                                                                class="show_coupon btn btn-group border border-primary text-primary">I
                                                                have a promo code</a>

                                                            <div class="coupon_form d-none">

                                                                <form method="post" name="coupon_code"
                                                                    action="/shop/pricelist">
                                                                    <input type="hidden" name="csrf_token"
                                                                        value="40a6ccea1f2c67c5b2bc85c0721b4f5eaac8ac8eo1717497751">
                                                                    <div class="input-group w-100">
                                                                        <input name="promo" class="form-control"
                                                                            type="text" placeholder="code...">
                                                                        <div class="input-group-append">
                                                                            <a href="#" role="button"
                                                                                class="btn btn-secondary a-submit">Apply</a>
                                                                        </div>
                                                                    </div>
                                                                </form>







                                                            </div>
                                                        </span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>



                                    <div class="text-center">
                                        <span class="mb32 d-none d-xl-inline-block h-col h-user">
                                            <span class="loginpop btn btn-secondary as-btn as-btn-theme"
                                                data-toggle="modal" data-target="#loginPopTemp"
                                                data-theme_name="theme_alan">
                                                <span>Process Checkout</span>
                                            </span>
                                        </span>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="d-xl-none mt8">
                            <a role="button" href="#" class="btn btn-secondary mb32"><span
                                    class="fa fa-chevron-left"></span>
                                Continue<span class="d-none d-md-inline"> Shopping</span>
                            </a>


                            <span class="h-col h-user float-right">
                                <span class="loginpop btn btn-primary" data-toggle="modal" data-target="#loginPopTemp"
                                    data-theme_name="theme_alan">
                                    <span>Process Checkout</span>
                                    <span class="fa fa-chevron-right"></span>
                                </span>
                            </span>


                        </div>
                    </div>
                </div>
                <div class="o_product_feature_panel d-none css_editable_mode_hidden o_bottom_fixed_element">
                    <span class="o_product_panel" id="comparelist">
                        <span class="o_product_panel_header" data-original-title="" title="">
                            <span class="o_product_icon"><i class="fa fa-exchange" role="img" aria-label="Product"
                                    title="Product"></i></span>
                            <span class="o_product_text">Compare</span>
                            <span class="o_product_circle o_animate_blink badge badge-primary">0</span>
                        </span>
                        <span class="o_product_panel_content">
                            <div class="o_comparelist_products">
                                <div class="o_comparelist_limit_warning" style="display:none">
                                    <div class="o_shortlog alert alert-warning" role="alert">
                                        <span><i class="fa fa-warning text-danger" role="img" aria-label="Warning"
                                                title="Warning"></i> You can compare max 4
                                            products.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="o_comparelist_button" style="display:none">
                                <a role="button" class="btn btn-primary btn-block" href="#"><i
                                        class="fa fa-exchange mr4"></i>Compare</a>
                            </div>
                        </span>
                    </span>
                </div>
            </div>
            <div class="oe_structure" id="oe_structure_website_sale_cart_2"></div>
        </div>

    </main>
@endsection
