<!-- header -->
<?php include_once '../components/header.php'; ?>

<div id="search_page">

    <div class="cont_wrapper" id="search_page_breadcrumb">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Search Result</li>
        </ul>
    </div>
    <div class="cont_wrapper">

        <div class="container-fluid">
            <div class="row d-none py-2 search_apply_ctrl_wrapper">
                <div class="col">
                    <div class="text-right bg-white py-2">
                        <button class="px-4" id="search_apply_ctrl">Apply</button>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-md-3 filter_sidenav">
                    <h6 class="text-center text-md-left search_item_title">Search Results - Washing Machine</h6>
                    <section class="mr-1 toggledNavItem d-none d-md-block">
                        <div class="filt_title_cont">
                            <h6 class="m-0 text_upper">Category</h6>
                        </div>
                        <ul>
                            <li class="list_sect">
                                <h6 class="m-0 searched_product product_category">Household Appliances</h6>
                            </li>
                            <li class="list_sect">
                                <ul class="pl-4">
                                    <li>Washing machine</li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                    <section class="mr-1 toggledNavItem d-none d-md-block">
                        <form>
                            <div class="filt_title_cont">
                                <h6 class="m-0 text_upper">Brand</h6>
                            </div>
                            <ul>
                                <li class="list_sect">
                                    <input type="checkbox" name="Nexus" id="nexusCheckbox" class="check_rej">
                                    <label for="nexusCheckbox">
                                        <span class="custom_check"></span>
                                        Nexus</label>
                                </li>
                                <li class="list_sect">
                                    <input type="checkbox" name="Scanfrost" id="scanfrostCheckbox" class="check_rej">
                                    <label for="scanfrostCheckbox">
                                        <span class="custom_check"></span> Scanfrost</label>
                                </li>
                            </ul>
                        </form>
                    </section>
                    <section class="mr-1 toggledNavItem d-none d-md-block">
                        <div class="filt_title_cont">
                            <h6 class="m-0 text_upper">Price</h6>
                        </div>
                        <ul>
                            <li class="container list_sect">
                                <form class="row" action="#">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-6">
                                                <input class="width_full" type="number" name="priceFrom"
                                                    placeholder="From" id="priceFrom">
                                            </div>
                                            <div class="col-6">
                                                <input class="width_full" type="number" name="priceTo" placeholder="To"
                                                    id="priceTo">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button
                                                    class="btn-block text_upper mt-2 py-1 light_grn_btn">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </section>
                    <section class="mr-1 toggledNavItem d-none d-md-block">
                        <form>
                            <div class="filt_title_cont">
                                <h6 class="m-0 text_upper">Rating</h6>
                            </div>
                            <ul>
                                <li class="list_sect">
                                    <br />
                                    <input type="checkbox" name="four_stars" id="four_starsCheckbox" class="check_rej">
                                    <label for="four_starsCheckbox">
                                        <span class="custom_check"></span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <br />
                                    </label>
                                    <br />
                                    <input type="checkbox" name="three_stars" id="three_starsCheckbox"
                                        class="check_rej">
                                    <label for="three_starsCheckbox">
                                        <span class="custom_check"></span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <br />
                                    </label>
                                    <br />
                                    <input type="checkbox" name="two_stars" id="two_starsCheckbox" class="check_rej">
                                    <label for="two_starsCheckbox">
                                        <span class="custom_check"></span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <br />
                                    </label>
                                    <br />
                                    <input type="checkbox" name="one_stars" id="one_starsCheckbox" class="check_rej">
                                    <label for="one_starsCheckbox">
                                        <span class="custom_check"></span>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <br />
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </section>
                    <!-- tv sizes -->
                    <section class="mr-1 toggledNavItem d-none d-md-block">
                        <form>
                            <div class="filt_title_cont">
                                <h6 class="m-0 text_upper">Screen Sizes</h6>
                            </div>
                            <ul>
                                <li class="">

                                    <ul>
                                        <li class="list_sect">
                                            <input type="checkbox" name="32_inches" id="32" class="check_rej">
                                            <label for="32">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">32</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="55_inches" id="55" class="check_rej">
                                            <label for="55">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">55</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="43_inches" id="43" class="check_rej">
                                            <label for="43">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">43</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="65_inches" id="65" class="check_rej">
                                            <label for="65">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">65</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="40_inches" id="40" class="check_rej">
                                            <label for="40">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">40</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="50_inches" id="50" class="check_rej">
                                            <label for="50">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">50</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="75_inches" id="75" class="check_rej">
                                            <label for="75">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">75</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="49_inches" id="49" class="check_rej">
                                            <label for="49">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">49</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="24_inches" id="24" class="check_rej">
                                            <label for="24">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">24</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="90_inches" id="90" class="check_rej">
                                            <label for="90">
                                                <span class="custom_check"></span>
                                                <span class="tv_size">90</span>
                                            </label>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </form>
                    </section>
                    <!-- operating system -->
                    <section class="mr-1 toggledNavItem d-none d-md-block">
                        <form>
                            <div class="filt_title_cont">
                                <h6 class="m-0 text_upper">Screen Sizes</h6>
                            </div>
                            <ul>
                                <li class="">

                                    <ul>
                                        <li class="list_sect">
                                            <input type="checkbox" name="android" id="android" class="check_rej">
                                            <label for="android">
                                                <span class="custom_check"></span>
                                                <span class="os_name">Android</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="linux" id="linux" class="check_rej">
                                            <label for="linux">
                                                <span class="custom_check"></span>
                                                <span class="os_name">Linus</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="other" id="other" class="check_rej">
                                            <label for="other">
                                                <span class="custom_check"></span>
                                                <span class="os_name">Other</span>
                                            </label>
                                        </li>
                                        <li class="list_sect">
                                            <input type="checkbox" name="none" id="none" class="check_rej">
                                            <label for="none">
                                                <span class="custom_check"></span>
                                                <span class="os_name">None</span>
                                            </label>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </form>
                    </section>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row sorting_comp_wrapper d-none d-md-block">
                        <div class="col">
                            <div class="">
                                <!-- <form action="#">
                                    <label for="price_range">Sort By:</label>
                                    <select class="p-1" name="price_range" id="price_range">
                                        <option value="Price: Low to High">Price: Low to High</option>
                                        <option value="Price: High to Low">Price: High to Low</option>
                                        <option value="New Arrival">New Arrival</option>
                                    </select>
                                </form> -->
                                <!--  -->

                                <form action="#" class="items_sorting_form">

                                    <div class="form_inner_wrapper">
                                        <div>
                                            Sort By: &nbsp;
                                        </div>

                                        <div>
                                            <input type="radio" class="radio_rej" name="sorting" id="newArrival">
                                            <label for="newArrival">
                                                <span class="custom_radio"></span>
                                                <span class="label_text">New Arrival</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" class="radio_rej" name="sorting" id="lowToHigh">
                                            <label for="lowToHigh">
                                                <span class="custom_radio"></span>
                                                <span class="label_text">Price: Low to High</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" class="radio_rej" name="sorting"
                                                id="Price: High to low">
                                            <label for="Price: High to low">
                                                <span class="custom_radio"></span>
                                                <span class="label_text">Price: High to low</span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row sorting_comp_wrapper d-none d-md-block">
                        <div class="col">
                            <div class="flex_just_flexend">
                                <form action="#" class="items_sorting_form">

                                    <div class="form_inner_wrapper">

                                        <div>
                                            <input type="radio" class="radio_rej" name="sorting" id="newArrival">
                                            <label for="newArrival">
                                                <span class="custom_radio"></span>
                                                <span class="label_text">New Arrival</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" class="radio_rej" name="sorting" id="lowToHigh">
                                            <label for="lowToHigh">
                                                <span class="custom_radio"></span>
                                                <span class="label_text">Price: Low to High</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" class="radio_rej" name="sorting"
                                                id="Price: High to low">
                                            <label for="Price: High to low">
                                                <span class="custom_radio"></span>
                                                <span class="label_text">Price: High to low</span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <div class="row no-gutters product_search_items">
                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="card product_card product_card_search_output shadow border-0 m-1">
                                <div class="row no-gutters">
                                    <div class="col-6 col-sm-12">
                                        <form class="wish_form flex_just_flexend p-1">
                                            <div>
                                                <input class="wish_toggler" type="hidden" name="wish">
                                                <button class="wish_btn" for="wish">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-6 col-sm-12">
                                        <div class="card-body">
                                            <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto
                                                Twin-Tub ...
                                            </h6>
                                            <p class="card-text prod_price">₦ 71,000
                                                <br />
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                                <small class="rating_info">(No ratings yet)</small>
                                            </p>
                                            <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="card product_card product_card_search_output shadow border-0 m-1">
                                <div class="row no-gutters">
                                    <div class="col-6 col-sm-12">
                                        <form class="wish_form flex_just_flexend p-1">
                                            <div>
                                                <input class="wish_toggler" type="hidden" name="wish">
                                                <button class="wish_btn" for="wish">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-6 col-sm-12">
                                        <div class="card-body">
                                            <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto
                                                Twin-Tub ...
                                            </h6>
                                            <p class="card-text prod_price">₦ 71,000
                                                <br />
                                                <span>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i></span>
                                                <small class="rating_info">(No ratings yet)</small>
                                            </p>
                                            <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="card product_card product_card_search_output shadow border-0 m-1">
                                <div class="row no-gutters">
                                    <div class="col-6 col-sm-12">
                                        <form class="wish_form flex_just_flexend p-1">
                                            <div>
                                                <input class="wish_toggler" type="hidden" name="wish">
                                                <button class="wish_btn" for="wish">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <img src="../images/Nexus_1000VA_Digital_Stabilizer_With_AVR_Function.png"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-6 col-sm-12">
                                        <div class="card-body">
                                            <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto
                                                Twin-Tub ...
                                            </h6>
                                            <p class="card-text prod_price">₦ 71,000
                                                <br />
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i></span>
                                                <small class="rating_info">(No ratings yet)</small>
                                            </p>
                                            <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="card product_card product_card_search_output shadow border-0 m-1">
                                <div class="row no-gutters">
                                    <div class="col-6 col-sm-12">
                                        <form class="wish_form flex_just_flexend p-1">
                                            <div>
                                                <input class="wish_toggler" type="hidden" name="wish">
                                                <button class="wish_btn active" for="wish">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <img src="../images/Scanfrost_5.1_Channel Home_Theatre_System_1200W.png"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-6 col-sm-12">
                                        <div class="card-body">
                                            <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto
                                                Twin-Tub ...
                                            </h6>
                                            <p class="card-text prod_price">₦ 71,000
                                                <br />
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i></span>
                                                <small class="rating_info">(No ratings yet)</small>
                                            </p>
                                            <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ********************************** -->



                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="card product_card product_card_search_output shadow border-0 m-1">
                                <div class="row no-gutters">
                                    <div class="col-6 col-sm-12">
                                        <form class="wish_form flex_just_flexend p-1">
                                            <div>
                                                <input class="wish_toggler" type="hidden" name="wish">
                                                <button class="wish_btn" for="wish">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <img src="../images/Nexus_7KG_Washing_Machine_Semi_Auto.png"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-6 col-sm-12">
                                        <div class="card-body">
                                            <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto
                                                Twin-Tub ...
                                            </h6>
                                            <p class="card-text prod_price">₦ 71,000
                                                <br />
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i></span>
                                                <small class="rating_info">(No ratings yet)</small>
                                            </p>
                                            <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- ********************************** -->
                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="card product_card product_card_search_output shadow border-0 m-1">
                                <div class="row no-gutters">
                                    <div class="col-6 col-sm-12">
                                        <form class="wish_form flex_just_flexend p-1">
                                            <div>
                                                <input class="wish_toggler" type="hidden" name="wish">
                                                <button class="active wish_btn" for="wish">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-6 col-sm-12">
                                        <div class="card-body">
                                            <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto
                                                Twin-Tub ...
                                            </h6>
                                            <p class="card-text prod_price">₦ 71,000
                                                <br />
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <small class="rating_info">(No ratings yet)</small>
                                            </p>
                                            <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pagination_wrapper">
                        <div class="col">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mt-3">
                                    <li class="page-item disabled nav_ctrl">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item nav_ctrl">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <div class="row d-block d-md-none filter_sort_wrapper">
                        <div class="col">
                            <div class="py-2 bg-white">
                                <div class="m-auto flex_just_spb filter_sort_inner">
                                    <div>
                                        <button class="px-3 py-2 serch_ctrl_btn text_upper"
                                            id="filter_btn">Filter</button>
                                    </div>
                                    <div>
                                        <button class="px-3 py-2 serch_ctrl_btn text_upper" id="sort_btn">Sort</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<?php include_once '../components/footer.php'; ?>