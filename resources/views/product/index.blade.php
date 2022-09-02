@extends('template.layout')

@section('page-title')
Product Name - Big V
@endsection

@section('head-extra')
<link href="{{asset('assets/css/style-product-list.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="content">
    <div class="flex flex-vertical row-gap margin-large" style="width: 85%; min-width: 980px; position:relative;">
        <div class="text-align-center orange-text">Showing search result for</div>
        <h3 class="text-align-center">Search Result Name</h3>
        <div class="sort-right">
            <div class="text-rich-text text-size-small text-color-grey" style="margin-right: 20px;">Sort By</div>
            <select name="" id="" style="padding: 5px 15px; border-radius: 18px;">
                <option value="">Highest Price</option>
                <option value="">Lowest Price</option>
                <option value="">Items Sold</option>
            </select>
            
        </div>
    </div>
    <div style="width: 85%; min-width: 980px;">
        <div class="flex flex-center top-align relative archive-flex" style="width: 100%;">
            <div class="filter card27 padding-small text-color-grey sticky-filter" style="padding: 2rem;">
                <h4>Categories</h4>
                <div class="w-form">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="form-2 w-clearfix">
                        <label class="w-checkbox">
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                            <input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox">Cooked Food</span></label>
                        <label class="w-checkbox">
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                            <input type="checkbox" id="checkbox-6" name="checkbox-6" data-name="Checkbox 6" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-6">Bakery</span></label>
                        <label class="w-checkbox">
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                            <input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-5">Vegan &amp; Gluten Free</span></label>
                        <label class="w-checkbox">
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                            <input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-4">Muslim Owned</span></label>
                        <label class="w-checkbox">
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                            <input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-3">Beauty</span></label>
                        <label class="w-checkbox">
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                            <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-2">Others</span></label>
                        <label for="email">Price</label>
                        <div class="flex justify-left" style="gap: 5px;">
                            <div class="relative">
                                <input type="number" class="quantity-pill-small price-range-filter" min="0">
                                <p class="float-price">$</p>
                            </div>
                            <p class="margin-0">-</p>
                            <div class="relative">
                                <input type="number" class="quantity-pill-small price-range-filter" min="0">
                                <p class="float-price">$</p>
                            </div>
                        </div>
                        <input type="submit" value="Filter" class="submit-button atc-button margin-top w-button" style="margin-top: 20px;" />
                    </form>
                </div>
            </div>
            <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-4 w-nav">
                <div class="container-3 w-container">
                    <nav role="navigation" class="nav-menu-3 w-nav-menu">
                        <div class="filter card27 padding-small text-color-grey filter-hamburger">
                            <h3>Categories</h3>
                            <div class="w-form">
                                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="form-2 w-clearfix">
                                    <label class="w-checkbox">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                        <input type="checkbox" id="checkbox-7" name="checkbox-7" data-name="Checkbox 7" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-7">Cooked Food</span></label>
                                    <label class="w-checkbox">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                        <input type="checkbox" id="checkbox-6" name="checkbox-6" data-name="Checkbox 6" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-6">Bakery</span></label>
                                    <label class="w-checkbox">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                        <input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-5">Vegan &amp; Gluten Free</span></label>
                                    <label class="w-checkbox">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                        <input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-4">Muslim Owned</span></label>
                                    <label class="w-checkbox">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                        <input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-3">Beauty</span></label>
                                    <label class="w-checkbox">
                                        <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div>
                                        <input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1" /><span class="text-size-small w-form-label" for="checkbox-2">Others</span></label>
                                        <label for="email">Price</label>
                                        <div class="flex justify-left" style="gap: 5px;">
                                            <input type="number" class="quantity-pill-small price-range-filter">
                                            <p class="margin-0">-</p>
                                            <input type="number" class="quantity-pill-small price-range-filter">
                                        </div>
                                        <input type="submit" value="Filter" class="submit-button atc-button margin-top w-button" style="margin-top: 20px;" />
                                </form>
                            </div>
                        </div>
                    </nav>
                    <div class="menu-button-2 w-nav-button">
                        <div class="text-color-light-grey text-size-medium">Filter</div>
                    </div>
                    <div data-hover="false" data-delay="0" class="w-dropdown">
                        <div class="text-color-light-grey w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle"></div>
                            <div class="text-size-medium">Sort</div>
                        </div>
                        <nav class="dropdown-list w-dropdown-list">
                            <a href="#" class="text-color-grey w-dropdown-link">Highest Price</a>
                            <a href="#" class="text-color-grey w-dropdown-link">Lowest Price</a>
                            <a href="#" class="text-color-grey w-dropdown-link">Items Sold</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="products-archive-grid" id="productsList">
            <!-- <div style="display: flex; flex-wrap: wrap; width: calc(100% - 288px); gap: 18px; justify-content: center;"> -->
                @for ($i = 0; $i < 30; $i++)
                <a href="https://www.google.com" class="text-style-none">
                    <div id="w-node-_98aa59c7-5c20-8fcb-852c-972bad093e75-fac73a6c" class="product-card padding-small">
                        <div class="text-rich-text text-size-small text-color-grey">Cak Har</div><img src="{{asset('assets/62fc7f0ee2b4118e2f35c5d6_image%2034.png')}}" loading="lazy" alt="" class="product-image" />
                        <div class="product-card-stars"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" class="card-stars" /></div>
                        <div class="product-card-title text-rich-text text-size-regular text-weight-bold text-color-dark-grey">Macaroni</div>
                        <div class="product-card-low-div">
                            <div class="card-discount">
                                <div class="discount">50%</div>
                            </div>
                            <div id="w-node-_98aa59c7-5c20-8fcb-852c-972bad093e85-fac73a6c" class="sale-price text-color-light-grey">$24.00</div>
                            <div class="text-rich-text text-color-orange text-weight-bold">$12.00</div>
                        </div>
                    </div>
                </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="pagination flex justify-center margin-large">
        <a href="#" class="pagination-selected text-style-none">
            <div class="text-color-white">1</div>
        </a>
        <a href="#" class="pagination-not-selected text-style-none">
            <div class="orange-text">1</div>
        </a>
    </div>
</div>
<div class="cursor">
    <div data-w-id="f4b78bbc-ea93-bb5a-a490-cac406bb401d" class="dot"></div>
</div>
@endsection

@section('javascript-extra')
<script src="{{asset('assets/js/script-product-list.js')}}" type="text/javascript"></script>
@endsection