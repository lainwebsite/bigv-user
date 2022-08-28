@extends('template.layout')

@section('page-title')
Product Name - Big V
@endsection

@section('head-extra')
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
@endsection

@section('content')
<div class="content">
<div style="margin-bottom: 1rem;">
    <img src="{{asset('assets/6303b67a5064f05035c5a701_shape 1.svg')}}" loading="lazy" alt="" class="absolute shape-1 ea-right" />
    <div class="product-hero" id="productDetail">
        <div class="content-col col--width-50 display-none">
            <img src="{{asset('assets/6308e8ded34a4e6728a0f147_image%2031.jpg')}}" sizes="100vw" srcset="{{asset('assets/6308e8ded34a4e6728a0f147_image%2031.jpg')}}" alt="" class="image-9 card27" />
            <img src="{{asset('assets/6308e8dff31701dadd206186_image%2032.jpg')}}" sizes="100vw" srcset="{{asset('assets/6308e8dff31701dadd206186_image%2032.jpg')}}" alt="" class="image-9 card27" />
            <img src="{{asset('assets/6308e8ded34a4e6728a0f147_image%2031.jpg')}}" sizes="100vw" srcset="{{asset('assets/6308e8ded34a4e6728a0f147_image%2031.jpg')}}" alt="" class="image-9 card27" />
        </div>
        <div id="productImage" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58-300x300.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58-300x300.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://bigvsg.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-12-28-at-11.47.58-300x300.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#productImage" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productImage" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="content-col col--width-50">
            <div class="div-block-5 ea-up">
                <div class="product-info">
                    <h5 class="heading-4 inline text-weight-normal padding-right padding-xsmall text-color-grey">Food and Beverage</h5>
                    <h5 class="heading-4 inline text-weight-normal padding-right padding-xsmall text-color-grey"> &gt; </h5>
                    <h5 class="heading-4 inline text-weight-normal padding-right padding-xsmall text-color-grey">Chinese New Year</h5>
                    <h2 class="product-name heading-2 text-color-grey margin-vertical margin-xsmall">Shield Pearl Gi (Men)</h2>
                    <div class="c-product-rating">
                        <div class="flex">
                            <div class="c-product-rating__star">
                                <div class="icon">
                                    <div class="fas fa-star">
                                        <img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="c-product-rating__star">
                                <div class="icon">
                                    <div class="fas fa-star">
                                        <img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="c-product-rating__star">
                                <div class="icon">
                                    <div class="fas fa-star">
                                        <img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="c-product-rating__star">
                                <div class="icon">
                                    <div class="fas fa-star">
                                        <img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="c-product-rating__star">
                                <div class="icon">
                                    <div class="fas fa-star">
                                        <img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="heading-4 p-beside-star">4.9 (300 rating)</h5>
                        <h5 class="heading-4 p-beside-star">1.000 sold</h5>
                    </div>
                    <h3 class="heading-3 margin-vertical margin-xsmall">$129.99</h3>
                    <p class="paragraph-2 text-color-grey">Farewell to the year of Ox, and the Year of Tiger on the way! Over here we launch our cute “Cute Tiger Aroma Stone Set” to welcome the New Year.The stone set is decorated with the festive red dried flowers paired with a blessed essential oil blend and a cute tiger aroma stone! It signifies peace, prosperity, good health, good luck, good dreams, happiness, wealth and all the good things come to you in the “Tiger year”</p>
                    <div class="div-line"></div>
                    <h5 class="heading-4 padding-bottom padding-small">Variants</h5><a href="#" class="button-secondary-copy w-button">Default</a><a href="#" class="button-secondary-copy w-button">2nd Option</a><a href="#" class="button-secondary-copy w-button">3rd Option</a><a href="#" class="button-secondary-copy w-button">4th and so on</a>
                    <div class="div-line"></div>
                </div>
                <div data-w-id="e5486bd2-858d-5f10-525d-cc969625544d" class="product-info flex actionSectionProductDetail">
                    <div class="quantity-pill">
                        <div class="cursor-pointer quantity-change" id="subQuantity">-</div>
                        <input type="number" class="product-quantity" value="1" min="1">
                        <div class="cursor-pointer quantity-change" id="addQuantity">+</div>
                    </div>
                    <div class="upper-product-buttons"><a href="#" class="atc-product-page oh-grow w-button">Add to Cart</a><a href="#" class="button-secondary oh-grow w-button">Buy Now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-vendor-n-info ea-up">
    <div class="div-block-8">
        <div class="vendor-product-detail" >
            <img src="https://bigvsg.com/wp-content/uploads/2021/12/Mont-Delizioso-300x276.png" loading="lazy" alt="" class="image-10" />
            <div class="vendor-detail-product-detail">
                <h4 class="text-color-dark-grey">Vendor Name</h4>
                <div class="text-color-grey" style="font-size: 0.8rem;">Location: <b>East</b></div>
                <div class="c-product-rating">
                    <div class="flex">
                        <div class="c-product-rating__star">
                            <div class="icon">
                                <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                            </div>
                        </div>
                        <div class="c-product-rating__star">
                            <div class="icon">
                                <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                            </div>
                        </div>
                        <div class="c-product-rating__star">
                            <div class="icon">
                                <div class="fas fa-star"><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" /></div>
                            </div>
                        </div>
                        <div class="c-product-rating__star">
                            <div class="icon">
                                <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                            </div>
                        </div>
                        <div class="c-product-rating__star">
                            <div class="icon">
                                <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                            </div>
                        </div>
                    </div>
                    <h5 class="heading-4 p-beside-star">4.9 (300 rating)</h5>
                    <h5 class="heading-4 p-beside-star">1.000 sold</h5></div>
            </div>
        </div>
        <a href="#" class="text-style-link margin-right div-block-7">
                <div class="text-color-grey">Visit Vendor</div>
        </a>
    </div>
    <div class="div-line"></div>
    <div class="div-block-9">
        <div id="w-node-_274f20e5-cf76-d21b-b2d2-1fb0375edc27-fac73a6b">
            <h4 class="text-color-grey">Additional Information</h4>
            <div class="paragraph-2 text-color-grey">Information: Cute Tiger Aroma Stone Set come with special essential oil blend 2ml
                <br/>Product Ingredient: “Handcraft grade plaster powder, Dried flowers, Aromatherapy grade essential oil, Aromatherapy grade base oil”
                <br/>The product images shown are for illustration purposes only and may not be an exact representation of the product.</div>
        </div>
        <div id="w-node-_84a64200-c92a-b6c2-6879-3576d907de5e-fac73a6b">
            <h4 class="text-color-grey">Shipping &amp; Delivery</h4>
            <div class="paragraph-2 text-color-grey">$10 island wide delivery except off-shore islands
                <br/>Delivery only starts from 1 week from purchase date
                <br/>Delivery time from 11am – 9pm
                <br/>No deliveries available during Sunday and PH</div>
        </div>
    </div>
</div>
<div class="flex relative max-width-full align-center"><img src="{{asset('assets/6303b7b9afc8585f7943565c_shape 2.svg')}}" loading="lazy" alt="" class="absolute bottom-left ea-left" />
    <div class="flex top-align max-width relative">
        <div class="card27 padding-small margin-small sticky-top ea-left" id="reviewSummary">
            <h4 class="text-color-dark-grey">Reviews</h4>
            <div class="flex gap-small"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" />
                <h5 class="heading-4 p-beside-star">4.9</h5>
                <h5 class="heading-4 p-beside-star">/</h5>
                <h5 class="heading-4 p-beside-star">5</h5></div>
            <h5 class="heading-4 p-beside-star">300 Rating</h5>
            <div class="div-block-16">
                <div class="flex gap-small"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="image-11" />
                    <h5 class="heading-4 p-beside-star text-weight-medium">5</h5>
                    <div class="div-block-10">
                        <div class="div-block-11"></div>
                    </div>
                    <h5 class="heading-4 p-beside-star text-weight-medium">121</h5></div>
                <div class="flex gap-small"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="image-11" />
                    <h5 class="heading-4 p-beside-star text-weight-medium">4</h5>
                    <div class="div-block-10">
                        <div class="div-block-12"></div>
                    </div>
                    <h5 class="heading-4 p-beside-star text-weight-medium">40</h5></div>
                <div class="flex gap-small"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="image-11" />
                    <h5 class="heading-4 p-beside-star text-weight-medium">3</h5>
                    <div class="div-block-10">
                        <div class="div-block-13"></div>
                    </div>
                    <h5 class="heading-4 p-beside-star text-weight-medium">13</h5></div>
                <div class="flex gap-small"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="image-11" />
                    <h5 class="heading-4 p-beside-star text-weight-medium">2</h5>
                    <div class="div-block-10">
                        <div class="div-block-14"></div>
                    </div>
                    <h5 class="heading-4 p-beside-star text-weight-medium">8</h5></div>
                <div class="flex gap-small"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="image-11" />
                    <h5 class="heading-4 p-beside-star text-weight-medium">1</h5>
                    <div class="div-block-10">
                        <div class="div-block-15"></div>
                    </div>
                    <h5 class="heading-4 p-beside-star text-weight-medium">2</h5></div>
            </div>
        </div>
        <div class="text-color-dark-grey ea-right">
            <div class="card27 padding-small margin-small">
                <div class="div-block-17">
                    <h4>Chris William</h4>
                    <h5 class="heading-4 p-beside-star">29-10-2022</h5></div>
                <div class="flex">
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                </div>
                <h5 class="heading-4 p-beside-star">300 Rating</h5>
                <div class="text-size-tiny text-color-grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</div>
            </div>
            <div class="card27 padding-small margin-small">
                <div class="div-block-17">
                    <h4>Neilson Soeratman</h4>
                    <h5 class="heading-4 p-beside-star">29-10-2022</h5></div>
                <div class="flex">
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                </div>
                <h5 class="heading-4 p-beside-star">300 Rating</h5>
                <div class="text-size-tiny text-color-grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</div>
            </div>
            <div class="card27 padding-small margin-small">
                <div class="div-block-17">
                    <h4>Christian Lim</h4>
                    <h5 class="heading-4 p-beside-star">29-10-2022</h5></div>
                <div class="flex">
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                </div>
                <h5 class="heading-4 p-beside-star">300 Rating</h5>
                <div class="text-size-tiny text-color-grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</div>
            </div>
            <div class="card27 padding-small margin-small">
                <div class="div-block-17">
                    <h4>Arnold Ronaldo</h4>
                    <h5 class="heading-4 p-beside-star">29-10-2022</h5></div>
                <div class="flex">
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                </div>
                <h5 class="heading-4 p-beside-star">300 Rating</h5>
                <div class="text-size-tiny text-color-grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</div>
            </div>
        </div>
    </div>
</div>
</div>
<div data-w-id="1469b1e8-77d5-4eda-0931-cc24293decef" style="-webkit-transform:translate3d(0, -100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="atc-popup">
<div class="c-product-form w-form">
    <div class="c-product-form__row">
        <div class="c-product-form__col col-sizing--grow">
            <h3 class="product-name heading-2 text-color-grey">Shield Pearl Gi (Men)</h3>
            <div class="popup-atc-price-n-star">
                <h4 class="heading-3">$129.99</h4>
                <div class="flex">
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                    <div class="c-product-rating__star">
                        <div class="icon">
                            <div class="fas fa-star"><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-product-form__col">
            <a href="#productDetail" class="button-3 button-size--small oh-jiggle w-inline-block">
                <div class="text-color-white">Add to Your Cart</div>
            </a>
        </div>
    </div>
</div>
</div>
<div class="new-products-section padding-xxlarge ea-fade">
<div class="heading-large text-align-center margin-bottom margin-large">Suggested Products</div>
<div class="products-archive-grid margin-auto">
    @for ($i=0; $i < 10; $i++)
    <a href="#">
        <div id="w-node-_6b6feb56-ca1c-a712-de43-c09a32981649-fac73a6b" class="product-card padding-small">
            <div class="text-rich-text text-size-small text-color-grey">Cak Har</div><img src="{{asset('assets/62fc7f0ee2b4118e2f35c5d6_image%2034.png')}}" loading="lazy" alt="" class="product-image" />
            <div class="product-card-stars"><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 1.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 2.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" class="card-stars" /><img src="{{asset('assets/Star 3.svg')}}" loading="lazy" alt="" class="card-stars" /></div>
            <div class="product-card-title text-rich-text text-size-regular text-weight-bold text-color-dark-grey">Macaroni</div>
            <div class="product-card-low-div">
                <div class="card-discount">
                    <div class="discount">50%</div>
                </div>
                <div id="w-node-_6b6feb56-ca1c-a712-de43-c09a32981656-fac73a6b" class="sale-price text-color-light-grey">$24.00</div>
                <div class="text-rich-text text-color-orange text-weight-bold">$12.00</div>
            </div>
        </div>
    </a>
    @endfor
    </div><a href="#" class="button margin-top margin-large ea-grow w-button">See More</a>
    <div data-w-id="2763fafa-9663-7a88-db5c-9d4056894d11" class="product-info"></div>
</div>
@endsection

@section('javascript-extra')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(".quantity-change").on('click', function(){
        var qty = parseInt($(".product-quantity").val());
        if ($(this).attr("id") == "addQuantity"){
            $(".product-quantity").val(qty + 1);
        }
        else {
            if (qty - 1 >= 1){
                $(".product-quantity").val(qty -1);
            }
        }
    });
</script>
@endsection