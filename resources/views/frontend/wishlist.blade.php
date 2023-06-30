@extends('layouts.front')
@section('title')
    Wishlist
@endsection
@section('content')
    <main>
        <div id="wrap" class="js_sale">
            <div class="oe_structure" id="oe_structure_website_sale_wishlist_product_wishlist_1"></div>
            <div class="container oe_website_sale">
                <section class="container wishlist-section">
                    <h3>My Wishlist</h3>
                    <div class="checkbox">
                        <label class="text-muted"><input type="checkbox" id="b2b_wish" value="1" class="mr8">Add
                            product to my cart but keep it in my wishlist</label>
                    </div>
                    <table class="table table-bordered table-striped table-hover text-center mt16 table-comparator "
                        style="table-layout:auto" id="o_comparelist_table">


                        <tbody>
                            <tr data-wish-id="241511" data-product-id="5719">
                                <td class="td-img">
                                    <a href="#">
                                        <img class="img img-fluid" style="margin: auto;" alt="Product image"
                                            src="{{ URL::asset('frontend/images/wishlist/1.jpg') }}" loading="lazy">
                                    </a>
                                </td>
                                <td class="text-left">
                                    <strong><a href="#">[HL2888] 2Pcs Gas Cleaning Brush</a></strong>
                                    <small class="d-none d-md-block"></small>
                                    <button type="button" class="btn btn-link o_wish_rm no-decoration"><small><i
                                                class="fa fa-trash-o"></i> Remove</small></button>
                                </td>
                                <td>

                                    ₹&nbsp;<span class="oe_currency_value">40.00</span>
                                </td>
                                <td class="text-center td-wish-btn">
                                    <input name="product_id" type="hidden" value="5719">
                                    <button type="button" role="button"
                                        class="btn btn-secondary btn-block o_wish_add mb4 as-btn">Add <span
                                            class="d-none d-md-inline">to Cart</span></button>
                                </td>
                            </tr>

                            <tr data-wish-id="241521" data-product-id="1989">
                                <td class="td-img">
                                    <a href="#">
                                        <img class="img img-fluid" style="margin: auto;" alt="Product image"
                                            src="{{ URL::asset('frontend/images/wishlist/2.jpg') }}" loading="lazy">
                                    </a>
                                </td>
                                <td class="text-left">
                                    <strong><a href="#">[WR0263] Waterproof PVC Dining Table Mat (Checks
                                            Print) -
                                            157*132 cm</a></strong>
                                    <small class="d-none d-md-block"></small>
                                    <button type="button" class="btn btn-link o_wish_rm no-decoration"><small><i
                                                class="fa fa-trash-o"></i> Remove</small></button>
                                </td>
                                <td>

                                    ₹&nbsp;<span class="oe_currency_value">95.00</span>
                                </td>
                                <td class="text-center td-wish-btn">
                                    <input name="product_id" type="hidden" value="1989">
                                    <button type="button" role="button"
                                        class="btn btn-secondary btn-block o_wish_add mb4 as-btn">Add <span
                                            class="d-none d-md-inline">to Cart</span></button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </section>
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
        </div>

    </main>
@endsection
