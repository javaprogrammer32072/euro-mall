@extends('layouts.front')
@section('title')
    contact-us
@endsection
@section('content')
    <main style="">
        <div id="wrap" class="oe_website_sale">
            <div class="oe_structure">
                <section class="s_title parallax s_parallax_is_fixed bg-black-50 pt24 pb24" data-vcss="001"
                    data-snippet="s_title" data-scroll-background-ratio="1">
                    <span class="s_parallax_bg oe_img_bg"
                        style="background-image: url('{{ URL::asset('frontend/images/banner/website.s_banner_default_image') }}'); background-position: 50% 0;"></span>
                    <div class="o_we_bg_filter bg-black-50"></div>
                    <div class="container">
                        <h1>Contact us</h1>
                    </div>
                </section>
            </div>
            <div class="container mt-4 mb-5">
                <div class="row">
                    <div class="col-lg-7 col-xl-6 mr-lg-auto">
                        <div class="oe_structure">
                            <section class="s_text_block" data-snippet="s_text_block">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>
                                                Contact us about anything related to our company or services.<br>
                                                We'll do our best to get back to you as soon as possible.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <span class="hidden" data-for="contactus_form" data-values="#"></span>
                        <div id="contactus_section">
                            <section class="s_website_form" data-vcss="001" data-snippet="s_website_form">
                                <div class="container">
                                    <form id="contactus_form" action="" method="post" enctype="multipart/form-data"
                                        data-model_name="crm.lead" data-success-mode="redirect" data-success-page=""
                                        class="o_mark_required" data-mark="*" data-editable-form="false">
                                        <div class="s_website_form_rows row s_col_no_bgcolor">
                                            <div class="form-group col-12 s_website_form_field s_website_form_required"
                                                data-type="char" data-name="Field">
                                                <div class="row s_col_no_resize s_col_no_bgcolor">
                                                    <label class="col-form-label col-sm-auto s_website_form_label"
                                                        style="width: 200px" for="opportunity1">
                                                        <span class="s_website_form_label_content">Your Name</span>
                                                        <span class="s_website_form_mark"> *</span>
                                                    </label>
                                                    <div class="col-sm">
                                                        <input id="opportunity1" type="text"
                                                            class="form-control s_website_form_input" name="contact_name"
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 s_website_form_field" data-type="char"
                                                data-name="Field">
                                                <div class="row s_col_no_resize s_col_no_bgcolor">
                                                    <label class="col-form-label col-sm-auto s_website_form_label"
                                                        style="width: 200px" for="opportunity2">
                                                        <span class="s_website_form_label_content">Phone
                                                            Number</span>
                                                    </label>
                                                    <div class="col-sm">
                                                        <input id="opportunity2" type="tel"
                                                            class="form-control s_website_form_input" name="phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 s_website_form_field s_website_form_required"
                                                data-type="char" data-name="Field">
                                                <div class="row s_col_no_resize s_col_no_bgcolor">
                                                    <label class="col-form-label col-sm-auto s_website_form_label"
                                                        style="width: 200px" for="opportunity3">
                                                        <span class="s_website_form_label_content">Email</span>
                                                        <span class="s_website_form_mark"> *</span>
                                                    </label>
                                                    <div class="col-sm">
                                                        <input id="opportunity3" type="text"
                                                            class="form-control s_website_form_input" name="email_from"
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 s_website_form_field" data-type="char"
                                                data-name="Field">
                                                <div class="row s_col_no_resize s_col_no_bgcolor">
                                                    <label class="col-form-label col-sm-auto s_website_form_label"
                                                        style="width: 200px" for="opportunity4">
                                                        <span class="s_website_form_label_content">Your
                                                            Company</span>
                                                    </label>
                                                    <div class="col-sm">
                                                        <input id="opportunity4" type="text"
                                                            class="form-control s_website_form_input" name="partner_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 s_website_form_field s_website_form_model_required"
                                                data-type="char" data-name="Field">
                                                <div class="row s_col_no_resize s_col_no_bgcolor">
                                                    <label class="col-form-label col-sm-auto s_website_form_label"
                                                        style="width: 200px" for="opportunity5">
                                                        <span class="s_website_form_label_content">Subject</span>
                                                    </label>
                                                    <div class="col-sm">
                                                        <input id="opportunity5" type="text"
                                                            class="form-control s_website_form_input" name="name"
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 s_website_form_field s_website_form_required"
                                                data-type="text" data-name="Field">
                                                <div class="row s_col_no_resize s_col_no_bgcolor">
                                                    <label class="col-form-label col-sm-auto s_website_form_label"
                                                        style="width: 200px" for="opportunity6">
                                                        <span class="s_website_form_label_content">Your
                                                            Question</span>
                                                        <span class="s_website_form_mark"> *</span>
                                                    </label>
                                                    <div class="col-sm">
                                                        <textarea id="opportunity6" class="form-control s_website_form_input" name="description" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 s_website_form_submit"
                                                data-name="Submit Button">
                                                <div style="width: 200px;" class="s_website_form_label"></div>
                                                <a href="#" role="button"
                                                    class="btn btn-primary btn-lg s_website_form_send as-btn">Submit</a>
                                                <span id="s_website_form_result"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">

                        <address itemscope="itemscope" itemtype="">

                            <div>
                                <address class="mb-0" itemscope="itemscope" itemtype="">
                                    <div>

                                        <span itemprop="name">skycarcarek.com</span>
                                    </div>


                                    <div itemprop="address" itemscope="itemscope" itemtype="">
                                        <div class="d-flex align-items-baseline">
                                            <i class="fa fa-map-marker fa-fw" role="img" aria-label="Address"
                                                title="Address"></i>
                                            <span class="w-100 o_force_ltr d-block" itemprop="streetAddress">Plot
                                                No. 3, Green Park II, Poman,<br>Nr. Mathura Hotel, Tal.
                                                Vasai,<br>Vasai 401208<br>Maharashtra MH<br>India</span>
                                        </div>

                                        <div><i class="fa fa-phone fa-fw" role="img" aria-label="Phone"
                                                title="Phone"></i> <span class="o_force_ltr" itemprop="telephone">90
                                                5625 5625</span></div>



                                        <div><i class="fa fa-envelope fa-fw" role="img" aria-label="Email"
                                                title="Email"></i> <span itemprop="email">support@skycarcarek.com</span>
                                        </div>
                                    </div>
                                    <div>



                                    </div>



                                </address>
                            </div>

                            <span class="fa fa-map-marker fa-fw mt16" role="img" aria-label="Address"
                                title="Address"></span> <a target="_BLANK" href="#">
                                Google Maps</a>

                        </address>



                    </div>
                </div>
            </div>
            <div class="oe_structure mt-2"></div>
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
                                            title="Warning"></i> You can compare max 4 products.</span>
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

    </main>
@endsection
