<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
@include('css')
</head>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        @include('nav')

                    <!--== Start Product Area Wrapper ==-->
                    <section class="page-header-area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-lg-7 col-xl-5">
                                    <div class="page-header-content">
                                        <div class="title-img"><img src="assets/images/photos/about-title.webp" alt="Image"></div>
                                        <h2 class="page-header-title">nejema</h2>
                                        <h4 class="page-header-sub-title">nejema produit</h4>
                                        <p class="page-header-desc">للمساعدة يمكنك الاتصال بنا على البريد الإلكتروني nejema.company@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-5 col-xl-7">
                                    <div class="page-header-thumb">
                                        <img style="border-radius:10% " src="assets/images/photos/about1.png" width="570" height="669" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

        @include('footer')

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

        <!--== Start Product Quick Wishlist Modal ==-->
        <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Added to wishlist successfully!
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Wishlist Modal ==-->

        <!--== Start Product Quick Add Cart Modal ==-->
        <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Added to cart successfully!
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="assets/images/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick Add Cart Modal ==-->

        <!--== Start Aside Search Form ==-->
        <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-close"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="container pt--0 pb--0">
                    <div class="search-box-form-wrap">
                        <div class="search-note">
                            <p>Start typing and press Enter to search</p>
                        </div>
                        <form action="#" method="post">
                            <div class="aside-search-form position-relative">
                                <label for="SearchInput" class="visually-hidden">Search</label>
                                <input id="SearchInput" type="search" class="form-control" placeholder="Search entire store…">
                                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Aside Search Form ==-->

        <!--== Start Product Quick View Modal ==-->
        <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-quick-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </button>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--== Start Product Thumbnail Area ==-->
                                        <div  class="product-single-thumb">
                                            <img  src="assets/images/shop/quick-view1.webp" width="95" height="68" alt="Image-HasTech">
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-lg-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-details-content">
                                            <h5 class="product-details-collection">Premioum collection</h5>
                                            <h3 class="product-details-title">Offbline Instant Age Rewind Eraser.</h3>
                                            <div class="product-details-review mb-5">
                                                <div class="product-review-icon">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <button type="button" class="product-review-show">150 reviews</button>
                                            </div>
                                            <p class="mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, repellendus. Nam voluptate illo ut quia non sapiente provident alias quos laborum incidunt, earum accusamus, natus. Vero pariatur ut veniam sequi amet consectetur.</p>
                                            <div class="product-details-pro-qty">
                                                <div class="pro-qty">
                                                    <input type="text" title="Quantity" value="01">
                                                </div>
                                            </div>
                                            <div class="product-details-action">
                                                <h4 class="price">$254.22</h4>
                                                <div class="product-details-cart-wishlist">
                                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Info Area ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--== End Product Quick View Modal ==-->

        <!--== Start Aside Cart ==-->
        <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
                <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul class="aside-cart-product-list">
                    <li class="aside-product-list-item">
                        <a href="#/" class="remove">×</a>
                        <a href="product-details.html">
                            <img  src="assets/images/shop/cart1.webp" width="68" height="84" alt="Image">
                            <span class="product-title">Leather Mens Slipper</span>
                        </a>
                        <span class="product-price">1 × £69.99</span>
                    </li>
                    <li class="aside-product-list-item">
                        <a href="#/" class="remove">×</a>
                        <a href="product-details.html">
                            <img src="assets/images/shop/cart2.webp" width="68" height="84" alt="Image">
                            <span class="product-title">Quickiin Mens shoes</span>
                        </a>
                        <span class="product-price">1 × £20.00</span>
                    </li>
                </ul>
                <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
                <a class="btn-total" href="product-cart.html">View cart</a>
                <a class="btn-total" href="product-checkout.html">Checkout</a>
            </div>
        </aside>
        <!--== End Aside Cart ==-->

        <!--== Start Aside Menu ==-->
        @include('menu')
        <!--== End Aside Menu ==-->

    </div>
    <!--== Wrapper End ==-->

@include('js')

</body>

</html>
