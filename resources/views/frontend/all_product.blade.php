@extends('layouts.front')
@section('title')
    All-Product
@endsection
@section('content')
    <main style="">
        <div id="wrap" class="js_sale">
            <div class="oe_structure oe_empty" id="oe_structure_website_sale_products_1"
                data-editor-message="DRAG BUILDING BLOCKS HERE" spellcheck="false">

            </div>
            <div class="container oe_website_sale">
                <div class="products_pager form-inline flex-md-nowrap justify-content-between justify-content-md-center">

                    <ul class=" pagination m-0 mt-2 ml-md-2">
                        <li class="page-item disabled">
                            <a href="" class="page-link ">Prev</a>
                        </li>

                        <li class="page-item active"> <a href="#" class="page-link ">1</a></li>

                        <li class="page-item "> <a href="#" class="page-link ">2</a></li>

                        <li class="page-item "> <a href="#" class="page-link ">3</a></li>

                        <li class="page-item "> <a href="#" class="page-link ">4</a></li>

                        <li class="page-item "> <a href="#" class="page-link ">5</a></li>

                        <li class="page-item "> <a href="#" class="page-link ">6</a></li>

                        <li class="page-item "> <a href="#" class="page-link ">7</a></li>

                        <li class="page-item ">
                            <a href="#" class="page-link ">Next</a>
                        </li>
                    </ul>

                    <div class="dropdown mt-2 ml-md-2 dropdown_sorty_by">
                        <a role="button" href="#" class="dropdown-toggle btn btn-secondary" data-toggle="dropdown">
                            <span class="d-none d-lg-inline">

                                Sort by

                            </span>
                            <i class="fa fa-sort-amount-asc d-lg-none"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">

                            <a role="menuitem" rel="noindex,nofollow" class="dropdown-item" href="#">
                                <span>Catalog price: High to Low</span>
                            </a>

                            <a role="menuitem" rel="noindex,nofollow" class="dropdown-item" href="#">
                                <span>Catalog price: Low to High</span>
                            </a>

                            <a role="menuitem" rel="noindex,nofollow" class="dropdown-item" href="#">
                                <span>Name: A to Z</span>
                            </a>

                            <a role="menuitem" rel="noindex,nofollow" class="dropdown-item" href="#">
                                <span>Name: Z to A</span>
                            </a>

                            <a role="menuitem" rel="noindex,nofollow" class="dropdown-item" href="#">
                                <span>Newest First</span>
                            </a>

                        </div>
                    </div>

                    <div class="as-aside-filter">
                        <button class="as_aside_filter_open">
                            <i class="icon"></i>
                            <span>Filters</span>
                        </button>
                    </div>
                </div>

                <div class="as-aside-filter-close">
                    <button class="as_aside_filter_close">
                        <i class="icon"></i>
                        <span>Filter</span>
                    </button>
                </div>
                <div class="row o_wsale_products_main_row">

                    <div id="products_grid_before" class="col-lg-3">
                        <button type="button" class="btn btn-link d-lg-none"
                            data-target="#wsale_products_categories_collapse" data-toggle="collapse">
                            Show categories
                        </button>
                        <div class="collapse d-lg-block" id="wsale_products_categories_collapse">


                            <div class="as-category-title">
                                <span>Product Category</span>
                                <i class="icon"></i>
                            </div>

                            <ul class="nav nav-pills flex-column mb-2" id="o_shop_collapse_category">
                                <li class="nav-item">
                                    <a href="/shop" class="nav-link active o_not_editable">All Products</a>
                                </li>


                                <li class="nav-item">

                                    <i role="img" class="text-primary fa fa-chevron-right" title="Fold"
                                        aria-label="Fold"></i>
                                    <a href="#" class="nav-link ">Home &amp; Kitchen</a>
                                    <ul class="nav nav-pills flex-column nav-hierarchy" style="display:none;">


                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Baking Products</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Home Decor</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Storage &amp; Organizers</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Cleaning Supplies</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Kitchen Tools</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Water Bottles</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Home Utility</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Bathroom Accessories</a>

                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item">


                                    <a href="#" class="nav-link ">Super Saver
                                        Combo</a>

                                </li>



                                <li class="nav-item">


                                    <a href="#" class="nav-link ">Stock Out Sale</a>

                                </li>



                                <li class="nav-item">

                                    <i role="img" class="text-primary fa fa-chevron-right" title="Fold"
                                        aria-label="Fold"></i>
                                    <a href="#" class="nav-link ">Bags</a>
                                    <ul class="nav nav-pills flex-column nav-hierarchy" style="display:none;">


                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Lunch
                                                Bags</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Travel
                                                Bags</a>

                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item">

                                    <i role="img" class="text-primary fa fa-chevron-right" title="Fold"
                                        aria-label="Fold"></i>
                                    <a href="#" class="nav-link ">Personal Care</a>
                                    <ul class="nav nav-pills flex-column nav-hierarchy" style="display:none;">


                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">Fitness</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">For Womens</a>

                                        </li>



                                        <li class="nav-item">


                                            <a href="#" class="nav-link ">For
                                                Mens</a>

                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item">


                                    <a href="#" class="nav-link ">Organizers</a>

                                </li>



                                <li class="nav-item">


                                    <a href="#" class="nav-link ">Baby &amp; Kids</a>

                                </li>



                                <li class="nav-item">


                                    <a href="#" class="nav-link ">Car
                                        Accessories</a>

                                </li>



                                <li class="nav-item">


                                    <a href="#" class="nav-link ">Under 99/-</a>

                                </li>



                                <li class="nav-item">


                                    <a href="#" class="nav-link ">Under 49/-</a>

                                </li>


                            </ul>
                        </div>

                        <button type="button" class="btn btn-link d-lg-none"
                            data-target="#wsale_products_attributes_collapse" data-toggle="collapse">
                            Show options
                        </button>
                        <div class="collapse d-lg-block" id="wsale_products_attributes_collapse">
                            <form class="js_attributes mb-2" method="get">

                                <input type="hidden" name="search" value="">
                                <input type="hidden" name="order">
                                <ul class="nav nav-pills flex-column">


                                    <li class="nav-item">

                                        <div class="as_attribute_name as-collapse-widget">
                                            <span>Color</span>
                                            <i class="icon"></i>

                                        </div>


                                        <ul class="nav nav-pills flex-column as_f_close">

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-1">
                                                    <span style="font-weight: normal">Dark Brown</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-2">
                                                    <span style="font-weight: normal">Dark Pink</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-3">
                                                    <span style="font-weight: normal">Golden</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-4">
                                                    <span style="font-weight: normal">Green</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-5">
                                                    <span style="font-weight: normal">Grey</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-6">
                                                    <span style="font-weight: normal">Maroon</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-7">
                                                    <span style="font-weight: normal">Rose</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-8">
                                                    <span style="font-weight: normal">Wine</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-9">
                                                    <span style="font-weight: normal">Black</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-10">
                                                    <span style="font-weight: normal">Navy Blue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-11">
                                                    <span style="font-weight: normal">Pink</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-12">
                                                    <span style="font-weight: normal">Red</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-13">
                                                    <span style="font-weight: normal">White</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-14">
                                                    <span style="font-weight: normal">Yellow</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-15">
                                                    <span style="font-weight: normal">Brown</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-16">
                                                    <span style="font-weight: normal">Light Pink</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-17">
                                                    <span style="font-weight: normal">Off-white</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-18">
                                                    <span style="font-weight: normal">Beige</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-19">
                                                    <span style="font-weight: normal">Light Blue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-20">
                                                    <span style="font-weight: normal">Soft Beige</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-21">
                                                    <span style="font-weight: normal">Blue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-22">
                                                    <span style="font-weight: normal">Squirrel Grey</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-23">
                                                    <span style="font-weight: normal">Peach</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-24">
                                                    <span style="font-weight: normal">Dark Orange</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-25">
                                                    <span style="font-weight: normal">Orange</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-26">
                                                    <span style="font-weight: normal">Dark Blue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-27">
                                                    <span style="font-weight: normal">Light Green</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-28">
                                                    <span style="font-weight: normal">Copper Gold</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-29">
                                                    <span style="font-weight: normal">Silver</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-30">
                                                    <span style="font-weight: normal">Sky Blue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-31">
                                                    <span style="font-weight: normal">Purple</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-32">
                                                    <span style="font-weight: normal">Magenta</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-33">
                                                    <span style="font-weight: normal">Pista</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-34">
                                                    <span style="font-weight: normal">Dark Purple</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-35">
                                                    <span style="font-weight: normal">Pearl</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-36">
                                                    <span style="font-weight: normal">Ocean</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-37">
                                                    <span style="font-weight: normal">Cream</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-38">
                                                    <span style="font-weight: normal">Olive</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-39">
                                                    <span style="font-weight: normal">Violet</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-40">
                                                    <span style="font-weight: normal">Dark Green</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-41">
                                                    <span style="font-weight: normal">Light Brown</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-42">
                                                    <span style="font-weight: normal">Tan</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-75">
                                                    <span style="font-weight: normal">Gold Yellow</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-76">
                                                    <span style="font-weight: normal">Gold Brown</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-77">
                                                    <span style="font-weight: normal">Rust</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-78">
                                                    <span style="font-weight: normal">Mustard</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-81">
                                                    <span style="font-weight: normal">Gray</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-88">
                                                    <span style="font-weight: normal">Dark Red</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-89">
                                                    <span style="font-weight: normal">Dark Maroon</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-90">
                                                    <span style="font-weight: normal">SkyBlue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-91">
                                                    <span style="font-weight: normal">light red</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-92">
                                                    <span style="font-weight: normal">navy</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-95">
                                                    <span style="font-weight: normal">Skay Blue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-96">
                                                    <span style="font-weight: normal">Cream Colour</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-98">
                                                    <span style="font-weight: normal">Black &amp; White</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-99">
                                                    <span style="font-weight: normal">Blue Green Leaf,
                                                        Standard</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-115">
                                                    <span style="font-weight: normal">warm white</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-116">
                                                    <span style="font-weight: normal">Black Flower</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-117">
                                                    <span style="font-weight: normal">Aqua Green Lucky Cat</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-118">
                                                    <span style="font-weight: normal">Pure White</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-119">
                                                    <span style="font-weight: normal">Black Walnut</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-120">
                                                    <span style="font-weight: normal">Asako Walnut</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-121">
                                                    <span style="font-weight: normal">Light Walnut</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-122">
                                                    <span style="font-weight: normal">Ivory </span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-129">
                                                    <span style="font-weight: normal">Light Purple</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-130">
                                                    <span style="font-weight: normal">Grey Color Star Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-131">
                                                    <span style="font-weight: normal">Blue Color Swan Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-132">
                                                    <span style="font-weight: normal">Green &amp; Red</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-133">
                                                    <span style="font-weight: normal">Light Grey</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-134">
                                                    <span style="font-weight: normal">Black &amp; Red</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-145">
                                                    <span style="font-weight: normal">Wine Red</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-158">
                                                    <span style="font-weight: normal">rose pink</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-159">
                                                    <span style="font-weight: normal">Rose Pink</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-160">
                                                    <span style="font-weight: normal">white (smooth surface)</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-161">
                                                    <span style="font-weight: normal">Black (smooth surface)</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-162">
                                                    <span style="font-weight: normal">Deep Bule (smooth
                                                        surface)</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-163">
                                                    <span style="font-weight: normal">Red (smooth surface)</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-164">
                                                    <span style="font-weight: normal">Yellow (smooth surface)</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-165">
                                                    <span style="font-weight: normal">Deep Bule</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-166">
                                                    <span style="font-weight: normal">Deep Blue</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-167">
                                                    <span style="font-weight: normal">Rose Gold</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="1-170">
                                                    <span style="font-weight: normal">Ivory</span>
                                                </label>
                                            </li>

                                        </ul>


                                    </li>



                                    <li class="nav-item">

                                        <div class="as_attribute_name as-collapse-widget">
                                            <span>Size</span>
                                            <i class="icon"></i>

                                        </div>


                                        <ul class="nav nav-pills flex-column as_f_close">

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-46">
                                                    <span style="font-weight: normal">5 Inch</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-47">
                                                    <span style="font-weight: normal">7 Inch</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-48">
                                                    <span style="font-weight: normal">11 Inch</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-49">
                                                    <span style="font-weight: normal">A</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-50">
                                                    <span style="font-weight: normal">B</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-51">
                                                    <span style="font-weight: normal">C</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-52">
                                                    <span style="font-weight: normal">Small</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-53">
                                                    <span style="font-weight: normal">Big</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-56">
                                                    <span style="font-weight: normal">N2</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-57">
                                                    <span style="font-weight: normal">N4</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-58">
                                                    <span style="font-weight: normal">N5</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-59">
                                                    <span style="font-weight: normal">800 ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-60">
                                                    <span style="font-weight: normal">1000 ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-61">
                                                    <span style="font-weight: normal">1 Ltr</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-62">
                                                    <span style="font-weight: normal">1.5 Ltr</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-63">
                                                    <span style="font-weight: normal">2 Layer</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-64">
                                                    <span style="font-weight: normal">3 Layer</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-65">
                                                    <span style="font-weight: normal">1 No</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-66">
                                                    <span style="font-weight: normal">3 No</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-69">
                                                    <span style="font-weight: normal">700 ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-70">
                                                    <span style="font-weight: normal">1100 ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-71">
                                                    <span style="font-weight: normal">XL</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-73">
                                                    <span style="font-weight: normal">Junior</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-74">
                                                    <span style="font-weight: normal">900 ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-79">
                                                    <span style="font-weight: normal">10 Inch</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-80">
                                                    <span style="font-weight: normal">12 Inch</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-82">
                                                    <span style="font-weight: normal">Medium</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-83">
                                                    <span style="font-weight: normal">1500</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-84">
                                                    <span style="font-weight: normal">1500ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-85">
                                                    <span style="font-weight: normal">600ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-86">
                                                    <span style="font-weight: normal">1100ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-87">
                                                    <span style="font-weight: normal">500ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-93">
                                                    <span style="font-weight: normal">100ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-94">
                                                    <span style="font-weight: normal">300ml</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="4-114">
                                                    <span style="font-weight: normal">Large</span>
                                                </label>
                                            </li>

                                        </ul>


                                    </li>



                                    <li class="nav-item">

                                        <div class="as_attribute_name as-collapse-widget">
                                            <span>Print</span>
                                            <i class="icon"></i>

                                        </div>


                                        <ul class="nav nav-pills flex-column as_f_close">

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-106">
                                                    <span style="font-weight: normal">Flower Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-107">
                                                    <span style="font-weight: normal">Carrot Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-108">
                                                    <span style="font-weight: normal">Deer Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-123">
                                                    <span style="font-weight: normal">Tree Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-124">
                                                    <span style="font-weight: normal">Bear Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-125">
                                                    <span style="font-weight: normal">Whale Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-126">
                                                    <span style="font-weight: normal">Owl Print</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-127">
                                                    <span style="font-weight: normal">Strip Line</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="10-128">
                                                    <span style="font-weight: normal">Porcupine Print</span>
                                                </label>
                                            </li>

                                        </ul>


                                    </li>

                                    <li class="nav-item">


                                        <div class="as_attribute_name as-collapse-widget">
                                            <span>books</span>
                                            <i class="icon"></i>

                                        </div>


                                        <ul class="nav nav-pills flex-column as_f_close">

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="20-139">
                                                    <span style="font-weight: normal">Animal</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="20-140">
                                                    <span style="font-weight: normal">Fruit</span>
                                                </label>
                                            </li>

                                            <li class="nav-item">
                                                <label style="margin: 0 20px;" class="nav-link">
                                                    <input name="attrib" type="checkbox" value="20-141">
                                                    <span style="font-weight: normal">Number</span>
                                                </label>
                                            </li>

                                        </ul>


                                    </li>
                                </ul>


                                <input id="min_val" name="min_val" type="hidden">
                                <input id="max_val" name="max_val" type="hidden">

                            </form>

                            <div class="slider-price-filter">
                                <div class="div_class_price_filter_heading spf-title as-collapse-widget ">
                                    <span class="refined-by-attr">Price</span>
                                    <i class="icon"></i>
                                </div>

                                <div class="form_class price_filter_main spf-box hide_price_section">

                                    <div data-role="rangeslider">


                                        <div id="slider-range">
                                            <div class="slider slider-horizontal" id="">
                                                <div class="slider-track">
                                                    <div class="slider-track-low" style="left: 0px; width: 0%;">
                                                    </div>
                                                    <div class="slider-selection" style="left: 0%; width: 100%;">
                                                    </div>
                                                    <div class="slider-track-high" style="right: 0px; width: 0%;">
                                                    </div>
                                                </div>
                                                <div class="tooltip tooltip-main top" role="presentation"
                                                    style="left: 50%;">
                                                    <div class="tooltip-arrow"></div>
                                                    <div class="tooltip-inner">1 : 4500</div>
                                                </div>
                                                <div class="tooltip tooltip-min top" role="presentation"
                                                    style="left: 0%;">
                                                    <div class="tooltip-arrow"></div>
                                                    <div class="tooltip-inner">1</div>
                                                </div>
                                                <div class="tooltip tooltip-max top" role="presentation"
                                                    style="left: 100%;">
                                                    <div class="tooltip-arrow"></div>
                                                    <div class="tooltip-inner">4500</div>
                                                </div>
                                                <div class="slider-handle min-slider-handle round" role="slider"
                                                    aria-valuemin="1" aria-valuemax="4500" aria-valuenow="1"
                                                    tabindex="0" style="left: 0%;"></div>
                                                <div class="slider-handle max-slider-handle round" role="slider"
                                                    aria-valuemin="1" aria-valuemax="4500" aria-valuenow="4500"
                                                    tabindex="0" style="left: 100%;"></div>
                                            </div><input class="span2" data-provide="slider" data-slider-step="1"
                                                id="price_filter_input" name="price_filter" type="text"
                                                value="1,4500" data-slider-max="4500" data-slider-min="1"
                                                data-slider-value="[1.0, 4500.0]" data-value="1,4500"
                                                style="display: none;">
                                        </div>
                                        <div class="spf-action" id="priceform">
                                            <div class="price_filter_details">
                                                <span class="text_min_val">1</span>
                                                <span>&nbsp;-&nbsp;</span>
                                                <span class="text_max_val">4500</span>
                                            </div>
                                            <button class="apply_price_filter">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div id="products_grid" class="col ">

                        <div class="o_wsale_products_grid_table_wrapper">
                            <table class="table table-borderless m-0" data-ppg="20" data-ppr="4">
                                <colgroup>

                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                </colgroup>
                                <tbody>
                                    <tr>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">

                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image">

                                                        <a class="d-block h-100" itemprop="url"
                                                            href="single_page.html">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/1.jpg') }}"
                                                                    class="img img-fluid" alt=""
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="">[WR0263]
                                                                    Waterproof PVC Dining Table Mat (Checks Print) -
                                                                    157*132 cm</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1989">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1989">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1989"
                                                                data-product_template_id="1989">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1989"
                                                                data-product-product-id="1989"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">92.15</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">89.30</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">85.50</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1989">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="/shop/cart/update" method="post"
                                                    class="card oe_product_cart" itemscope="itemscope" itemtype=""
                                                    data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/2.jpg') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0354-1] Strainer With Basket (Random Colors)"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0354-1] Strainer With Basket (Random Colors)">[WD0354-1]
                                                                    Strainer With Basket (Random Colors)</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1965">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1965">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1965"
                                                                data-product_template_id="1965">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1965"
                                                                data-product-product-id="1965"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">116.40</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">112.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">108.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1965">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>





                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="/shop/cart/update" method="post"
                                                    class="card oe_product_cart" itemscope="itemscope" itemtype=""
                                                    data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">
                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/3.jpg') }}"
                                                                    class="img img-fluid" alt="[WD0166] Step Exerciser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                        <div class="sticker-position top-left"
                                                            style="height: ; width: ; margin-top: auto; margin-bottom: auto; margin-left: auto; margin-right: auto;">
                                                            <span><img
                                                                    src="{{ URL::asset('frontend/images/all_product/Sale-Image.png') }}"
                                                                    class="img img-fluid" alt="Sale-Image"
                                                                    loading="lazy" style=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0166] Step Exerciser">[WD0166] Step
                                                                    Exerciser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="#">
                                                                <del data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['list_price']"
                                                                    style="white-space: nowrap;"
                                                                    class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></del>
                                                                <span data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></span>
                                                                <span itemprop="price"
                                                                    style="display:none;">3000.0</span>
                                                                <span itemprop="priceCurrency"
                                                                    style="display:none;">INR</span>
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1963">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1963">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1963"
                                                                data-product_template_id="1963">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1963"
                                                                data-product-product-id="1963"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,910.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,820.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,700.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>

                                                        </div>

                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1963">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>



                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/4.jpg') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0292] Stainless Steel Tea Filter Infuser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0292] Stainless Steel Tea Filter Infuser">[WD0292]
                                                                    Stainless Steel Tea Filter Infuser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1951">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1951">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1951"
                                                                data-product_template_id="1951">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1951"
                                                                data-product-product-id="1951"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">38.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">37.60</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>
                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">36.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1951">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>

                                                </form>

                                            </div>
                                        </td>


                                    </tr>
                                    <tr>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">

                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/5.jpg') }}"
                                                                    class="img img-fluid" alt=""
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="">[WR0263]
                                                                    Waterproof PVC Dining Table Mat (Checks Print) -
                                                                    157*132 cm</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1989">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1989">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1989"
                                                                data-product_template_id="1989">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1989"
                                                                data-product-product-id="1989"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">92.15</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">89.30</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">85.50</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1989">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="/shop/cart/update" method="post"
                                                    class="card oe_product_cart" itemscope="itemscope" itemtype=""
                                                    data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/7.jpg') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0354-1] Strainer With Basket (Random Colors)"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0354-1] Strainer With Basket (Random Colors)">[WD0354-1]
                                                                    Strainer With Basket (Random Colors)</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1965">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1965">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1965"
                                                                data-product_template_id="1965">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1965"
                                                                data-product-product-id="1965"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">116.40</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">112.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">108.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1965">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>
                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">
                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/8.jpg') }}"
                                                                    class="img img-fluid" alt="[WD0166] Step Exerciser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                        <div class="sticker-position top-left"
                                                            style="height: ; width: ; margin-top: auto; margin-bottom: auto; margin-left: auto; margin-right: auto;">
                                                            <span><img
                                                                    src="{{ URL::asset('frontend/images/all_product/Sale-Image.png') }}"
                                                                    class="img img-fluid" alt="Sale-Image"
                                                                    loading="lazy" style=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0166] Step Exerciser">[WD0166] Step
                                                                    Exerciser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="#">
                                                                <del data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['list_price']"
                                                                    style="white-space: nowrap;"
                                                                    class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></del>
                                                                <span data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></span>
                                                                <span itemprop="price"
                                                                    style="display:none;">3000.0</span>
                                                                <span itemprop="priceCurrency"
                                                                    style="display:none;">INR</span>
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1963">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1963">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1963"
                                                                data-product_template_id="1963">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1963"
                                                                data-product-product-id="1963"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,910.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,820.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,700.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>

                                                        </div>

                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1963">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>



                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/9.jpg') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0292] Stainless Steel Tea Filter Infuser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0292] Stainless Steel Tea Filter Infuser">[WD0292]
                                                                    Stainless Steel Tea Filter Infuser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1951">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1951">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1951"
                                                                data-product_template_id="1951">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1951"
                                                                data-product-product-id="1951"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">38.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">37.60</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>
                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">36.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1951">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>

                                                </form>

                                            </div>
                                        </td>


                                    </tr>
                                    <tr>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">

                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/10.jpg') }}"
                                                                    class="img img-fluid" alt=""
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="">[WR0263]
                                                                    Waterproof PVC Dining Table Mat (Checks Print) -
                                                                    157*132 cm</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1989">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1989">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1989"
                                                                data-product_template_id="1989">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1989"
                                                                data-product-product-id="1989"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">92.15</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">89.30</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">85.50</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1989">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="/shop/cart/update" method="post"
                                                    class="card oe_product_cart" itemscope="itemscope" itemtype=""
                                                    data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/11.jpg') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0354-1] Strainer With Basket (Random Colors)"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0354-1] Strainer With Basket (Random Colors)">[WD0354-1]
                                                                    Strainer With Basket (Random Colors)</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1965">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1965">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1965"
                                                                data-product_template_id="1965">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1965"
                                                                data-product-product-id="1965"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">116.40</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">112.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">108.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1965">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">
                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/12.jpg') }}"
                                                                    class="img img-fluid" alt="[WD0166] Step Exerciser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                        <div class="sticker-position top-left"
                                                            style="height: ; width: ; margin-top: auto; margin-bottom: auto; margin-left: auto; margin-right: auto;">
                                                            <span><img
                                                                    src="{{ URL::asset('frontend/images/all_product/Sale-Image.png') }}"
                                                                    class="img img-fluid" alt="Sale-Image"
                                                                    loading="lazy" style=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0166] Step Exerciser">[WD0166] Step
                                                                    Exerciser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="#">
                                                                <del data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['list_price']"
                                                                    style="white-space: nowrap;"
                                                                    class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></del>
                                                                <span data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></span>
                                                                <span itemprop="price"
                                                                    style="display:none;">3000.0</span>
                                                                <span itemprop="priceCurrency"
                                                                    style="display:none;">INR</span>
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1963">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1963">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1963"
                                                                data-product_template_id="1963">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1963"
                                                                data-product-product-id="1963"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,910.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,820.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,700.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>

                                                        </div>

                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1963">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>



                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/13.jpg') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0292] Stainless Steel Tea Filter Infuser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0292] Stainless Steel Tea Filter Infuser">[WD0292]
                                                                    Stainless Steel Tea Filter Infuser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1951">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1951">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1951"
                                                                data-product_template_id="1951">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1951"
                                                                data-product-product-id="1951"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">38.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">37.60</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>
                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">36.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1951">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>

                                                </form>

                                            </div>
                                        </td>


                                    </tr>
                                    <tr>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">

                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/14.jpg') }}"
                                                                    class="img img-fluid" alt=""
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="">[WR0263]
                                                                    Waterproof PVC Dining Table Mat (Checks Print) -
                                                                    157*132 cm</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1989">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1989">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1989"
                                                                data-product_template_id="1989">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1989"
                                                                data-product-product-id="1989"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">92.15</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">89.30</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">85.50</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1989">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="/shop/cart/update" method="post"
                                                    class="card oe_product_cart" itemscope="itemscope" itemtype=""
                                                    data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/15.jpg') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0354-1] Strainer With Basket (Random Colors)"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0354-1] Strainer With Basket (Random Colors)">[WD0354-1]
                                                                    Strainer With Basket (Random Colors)</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1965">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1965">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>
                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1965"
                                                                data-product_template_id="1965">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1965"
                                                                data-product-product-id="1965"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">116.40</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">112.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">108.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1965">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>
                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="/shop/cart/update" method="post"
                                                    class="card oe_product_cart" itemscope="itemscope" itemtype=""
                                                    data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">
                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/16.jpg') }}"
                                                                    class="img img-fluid" alt="[WD0166] Step Exerciser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                        <div class="sticker-position top-left"
                                                            style="height: ; width: ; margin-top: auto; margin-bottom: auto; margin-left: auto; margin-right: auto;">
                                                            <span><img
                                                                    src="{{ URL::asset('frontend/images/all_product/Sale-Image.png') }}"
                                                                    class="img img-fluid" alt="Sale-Image"
                                                                    loading="lazy" style=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">

                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>

                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0166] Step Exerciser">[WD0166] Step
                                                                    Exerciser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="#">
                                                                <del data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['list_price']"
                                                                    style="white-space: nowrap;"
                                                                    class="text-danger mr-2 d-none">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></del>
                                                                <span data-oe-type="monetary"
                                                                    data-oe-expression="combination_info['price']">₹&nbsp;<span
                                                                        class="oe_currency_value">3,000.00</span></span>
                                                                <span itemprop="price"
                                                                    style="display:none;">3000.0</span>
                                                                <span itemprop="priceCurrency"
                                                                    style="display:none;">INR</span>
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1963">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1963">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1963"
                                                                data-product_template_id="1963">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1963"
                                                                data-product-product-id="1963"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,910.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,820.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">2,700.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>

                                                            </div>

                                                        </div>

                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1963">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>



                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>
                                                </form>

                                            </div>
                                        </td>

                                        <td class="oe_product oe_image_full">
                                            <div class="o_wsale_product_grid_wrapper o_wsale_product_grid_wrapper_1_1">
                                                <form action="" method="post" class="card oe_product_cart"
                                                    itemscope="itemscope" itemtype="" data-publish="on">
                                                    <div class="card-body p-1 oe_product_image" style="">
                                                        <input type="hidden" name="csrf_token" value="">

                                                        <a class="d-block h-100" itemprop="url" href="#">
                                                            <span
                                                                class="d-flex h-100 justify-content-center align-items-center"><img
                                                                    src="{{ URL::asset('frontend/images/all_product/17.png') }}"
                                                                    class="img img-fluid"
                                                                    alt="[WD0292] Stainless Steel Tea Filter Infuser"
                                                                    loading="lazy" style=""></span>
                                                            <span class="o_ribbon " style=""></span>
                                                        </a>

                                                    </div>
                                                    <div class="card-body p-0 text-center o_wsale_product_information">
                                                        <div class="p-2 o_wsale_product_information_text">
                                                            <div></div>
                                                            <div class="prod_rating">
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <span>0.0 / 5</span>
                                                            </div>
                                                            <h6 class="o_wsale_products_item_title">
                                                                <a itemprop="name" href="#"
                                                                    content="[WD0292] Stainless Steel Tea Filter Infuser">[WD0292]
                                                                    Stainless Steel Tea Filter Infuser</a>

                                                            </h6>
                                                            <div class="product_price" itemprop="offers"
                                                                itemscope="itemscope" itemtype="">
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
                                                            </div>


                                                        </div>
                                                        <div class="o_wsale_product_btn">

                                                            <input name="product_id" type="hidden" value="1951">
                                                            <input type="hidden" name="product-id"
                                                                data-product-id="1951">
                                                            <a href="#" role="button"
                                                                aria-label="Shopping cart" title="Shopping cart"
                                                                class="btn btn-secondary js_cart ">
                                                                <span class="fa fa-shopping-cart"></span>
                                                            </a>

                                                            <a class="btn o_quick_view" title="Quick View"
                                                                type="button" data-product-product-id="1951"
                                                                data-product_template_id="1951">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                            <button type="button" role="button"
                                                                class="btn btn-secondary o_add_wishlist"
                                                                title="Add to Wishlist" data-action="o_wishlist"
                                                                data-product-template-id="1951"
                                                                data-product-product-id="1951"><span class="fa fa-heart"
                                                                    role="img"
                                                                    aria-label="Add to wishlist"></span></button>
                                                        </div>
                                                        <div class="row">

                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">38.80</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class="fa fa-shopping-basket"></span> 4 - 11
                                                                </p>

                                                            </div>


                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">37.60</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span> 12 - 23</p>

                                                            </div>
                                                            <div style="width:33.33%; display: inline-block;">
                                                                <strong class="text-center">
                                                                    <span data-oe-type="monetary"
                                                                        data-oe-expression="">₹&nbsp;<span
                                                                            class="oe_currency_value">36.00</span></span>
                                                                </strong>

                                                                <p><span title="Quantity" style="font-size:11px"
                                                                        class=""></span>&gt;= 24</p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="product-id"
                                                            data-product-id="1951">
                                                        <a href="#" role="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 js_cart_shop_list"
                                                            aria-label="Shopping cart" title="Shopping cart">
                                                            <span class="fa fa-shopping-cart"></span>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-primary btn-lg mt4 ml4 mb8 carton_quantity_inquiry_modal"
                                                            data-toggle="modal"
                                                            data-target="#carton_quantity_inquiry_modal"><i
                                                                class="fa fa-envelope-o"></i> Bulk Inquiry</button>

                                                    </div>

                                                </form>

                                            </div>
                                        </td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="dialog" id="carton_quantity_inquiry_modal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <header class="modal-header">
                                    <h4 class="modal-title">Bulk Quantity Inquiry</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                </header>
                                <main class="modal-body">
                                    <form class="oe_carton_quantity_inquiry" role="form" method="post">
                                        <input type="hidden" name="csrf_token"
                                            value="6376f85c6a3e9606034a8d7ed144819bf304a049o1717494524">
                                        <input type="hidden" name="c_user_id" value="4">
                                        <input type="hidden" name="carton_product_id">
                                        <input type="hidden" name="user_id" value="4">
                                        <input type="hidden" name="partner_name" value="GUEST USER">
                                        <input type="hidden" name="partner_contact">
                                        <div class="form-group">
                                            <label for="contact_name" class="col-form-label">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="contact_name" id="contact_name"
                                                class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-form-label">Contact Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="tel" name="phone" id="phone" class="form-control"
                                                required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity" class="col-form-label">Quantity <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" name="quantity" id="quantity"
                                                class="form-control" required="required" value="1">
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_type" class="col-form-label">I am -</label>

                                            <select name="customer_type" id="customer_type" class="form-control"
                                                required="required">
                                                <option value=""></option>

                                                <option value="4">Corporate Buyer</option>

                                                <option value="3">E-commerce Seller</option>

                                                <option value="1">Reseller</option>

                                                <option value="2">Shop Keeper</option>

                                            </select>
                                        </div>
                                        <div>
                                            <h5 class="d-none error_carton_inquiry text-danger">Some required fields
                                                are empty.</h5>
                                        </div>
                                        <p><span class="text-danger">*</span> are required fields</p>
                                    </form>
                                </main>
                                <footer class="modal-footer">
                                    <a href="#" role="button" class="btn btn-primary carton-inquiry-submit"
                                        title="Submit"> Submit</a>
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
                                    <h4 class="modal-title">Carton Quantity Inquiry</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                </header>
                                <main class="modal-body">
                                    <p class="text-success">Thank you for showing interest in our products. One of
                                        our sales executive will get in touch with you shortly.</p>
                                </main>
                                <footer class="modal-footer">
                                    <a role="button" href="#" class="btn btn-link btn-sm"
                                        data-dismiss="modal">Close</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="products_pager form-inline justify-content-center py-3">

                    <ul class=" pagination m-0 ">
                        <li class="page-item disabled">
                            <a href="" class="page-link ">Prev</a>
                        </li>

                        <li class="page-item active"> <a href="/shop?attrib_price=1.0-4500.0" class="page-link ">1</a>
                        </li>

                        <li class="page-item "> <a href="/shop/page/2?attrib_price=1.0-4500.0"
                                class="page-link ">2</a></li>

                        <li class="page-item "> <a href="/shop/page/3?attrib_price=1.0-4500.0"
                                class="page-link ">3</a></li>

                        <li class="page-item "> <a href="/shop/page/4?attrib_price=1.0-4500.0"
                                class="page-link ">4</a></li>

                        <li class="page-item "> <a href="/shop/page/5?attrib_price=1.0-4500.0"
                                class="page-link ">5</a></li>

                        <li class="page-item "> <a href="/shop/page/6?attrib_price=1.0-4500.0"
                                class="page-link ">6</a></li>

                        <li class="page-item "> <a href="/shop/page/7?attrib_price=1.0-4500.0"
                                class="page-link ">7</a></li>

                        <li class="page-item ">
                            <a href="/shop/page/2?attrib_price=1.0-4500.0" class="page-link ">Next</a>
                        </li>
                    </ul>

                </div>
                <div class="o_product_feature_panel d-none css_editable_mode_hidden o_bottom_fixed_element">
                    <span class="o_product_panel" id="comparelist">
                        <span class="o_product_panel_header" data-original-title="" title="">
                            <span class="o_product_icon"><i class="fa fa-exchange" role="img"
                                    aria-label="Product" title="Product"></i></span>
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
            <div class="oe_structure oe_empty" id="oe_structure_website_sale_products_2"
                data-editor-message="DRAG BUILDING BLOCKS HERE"></div>
        </div>

    </main>
@endsection
