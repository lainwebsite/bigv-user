@extends('template.layout')

@section('page-title')
Cart - Big V
@endsection

@section('head-extra')
<link href="{{asset('assets/css/style-cart-checkout.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="content">
    <div class="max-width flex vertical">
        <h2 class="text-color-grey ea-top">Your Cart</h2>
        <div class="cart-wrapper">
            <div class="vendors-column">
                @for ($i = 0; $i < 2; $i++)
                <div class="vendors-card ea-left">
                    <div class="flex gap-medium"><img src="{{asset('assets/630193c64ebe68075a463721_profile-005.jpg')}}" loading="lazy" alt="" class="image-17" />
                        <div>
                            <h5 class="text-color-dark-grey">Polia</h5>
                            <div class="text-size-small text-color-grey">Location: East</div>
                        </div>
                    </div>
                    <div class="div-line"></div>
                    @for ($j = 0; $j < 5; $j++)
                    <div class="vendor-item">
                        <div class="flex gap-medium">
                            <input type="checkbox">
                            <img src="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58.jpeg" loading="lazy" srcset="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58.jpeg" alt="" class="image-18" />
                            <div>
                                <h5 class="text-color-dark-grey">Cute Tiger Aroma Stone Set</h5>
                                <div class="text-size-small text-color-grey">Color: white</div>
                                <div class="text-size-small text-color-grey">$10</div>
                            </div>
                        </div>
                        <div class="flex gap-small">
                            <div class="quantity-pill-small">
                                <div class="cursor-pointer quantity-change" logic="sub">-</div>
                                <input type="number" class="product-quantity" value="1" min="1">
                                <div class="cursor-pointer quantity-change" logic="add">+</div>
                            </div>
                            <img src="{{asset('assets/630b4bc5cd03300cd594cf9c_Vector (3).svg')}}" loading="lazy" alt="" class="image-20 cursor-pointer" />
                        </div>
                    </div>
                    @endfor
                </div>
                @endfor
            </div>
            <div class="sticky-summary">
                <div class="cart-summary ea-right">
                    <h4>Summary</h4>
                    <div class="div-block-24">
                        <div class="inline">Pollia (28 items)</div>
                        <div class="inline">$201</div>
                    </div>
                    <div class="div-block-24">
                        <div class="inline">Kue Manis (2 items)</div>
                        <div class="inline">$201</div>
                    </div>
                    <div class="div-line"></div>
                    <div class="div-block-24">
                        <div class="inline text-weight-bold">Total</div>
                        <div class="inline text-weight-bold">$201</div>
                    </div><a href="#" class="checkout-button oh-grow w-button">Proceed to Checkout</a></div>
            </div>
        </div><img src="{{asset('assets/6303b67a5064f05035c5a701_shape 1.svg')}}" loading="lazy" alt="" class="absolute shape-cart" />
        <div class="new-products-section padding-xxlarge ea-fade">
            <div class="heading-large text-align-center margin-bottom margin-large text-color-dark-grey">Suggested Products</div>
            <div class="products-archive-grid" id="productsList">
                <!-- 20 product per page -->
                @for ($i = 0; $i < 15; $i++)
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
            <a href="#" class="button margin-top margin-large ea-grow w-button">See More</a>
            <div data-w-id="1371aed2-3fc5-f904-82f2-4cec36fc3a06" class="product-info"></div>
        </div>
    </div>
</div>
@endsection

@section('javascript-extra')
<script src="{{asset('assets/js/script-cart-checkout.js')}}" type="text/javascript"></script>
<script>
    $(document).on("click", ".quantity-change", function(){
        var qty = $(this).parent().find(".product-quantity");
        if ($(this).attr("logic") == "add"){
            qty.val(parseInt(qty.val()) + 1);
        }
        else{
            if (qty.val() != 1) qty.val(parseInt(qty.val()) - 1);
        }
    });
</script>
@endsection