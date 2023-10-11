<!--shop tab product-->
<div class="shop_tab_product">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="large" role="tabpanel">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="{{ route('shop.singleProduct', $product->idProduct) }}"><img
                                        src="{{ asset($product->imgProduct) }}" alt=""></a>
                                <div class="img_icone">
                                    <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                </div>
                                <div class="product_action">
                                    <a href="{{ route('user.addCart', ['idProduct' => $product->idProduct]) }}">
                                        <i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                        hàng</a>
                                </div>
                            </div>
                            <div class="product_content">
                                <span class="product_price">{{ number_format($product->priceProduct) }}đ</span>
                                <h3 class="product_title"><a
                                        href="{{ route('shop.singleProduct', $product->idProduct) }}">{{ $product->nameProduct }}</a>
                                </h3>
                            </div>
                            <div class="product_info">
                                <ul>
                                    <li><a href="#" title=" Add to Wishlist ">Yêu thích</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="Quick view">Xem chi tiết</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="tab-pane fade" id="list" role="tabpanel">
            @foreach ($products as $product)
                <div class="product_list_item mb-35">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product_thumb">
                                <a href="{{ route('shop.singleProduct', $product->idProduct) }}"><img
                                        src="{{ asset($product->imgProduct) }}" alt=""></a>
                                <div class="hot_img">
                                    <img src="{{ asset('assets\img\cart\span-hot.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-6">
                            <div class="list_product_content">
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="list_title">
                                    <h3><a
                                            href="{{ route('shop.singleProduct', $product->idProduct) }}">{{ $product->nameProduct }}</a>
                                    </h3>
                                </div>
                                <p class="design"> in quibusdam accusantium qui nostrum consequuntur,
                                    officia,
                                    quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam
                                    vitae
                                    blanditiis quae perferendis minus eligendi</p>
                                <div class="content_price">
                                    <span>{{ number_format($product->priceProduct) }}đ</span>
                                </div>
                                <div class="add_links">
                                    <ul>
                                        <li><a href="{{ route('user.addCart', ['idProduct' => $product->idProduct]) }}"
                                                title="add to cart"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#" title="add to wishlist"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--shop tab product end-->

<!--pagination style start-->
<div class="pagination_style" style="border: 0; justify-content: flex-end;">
    {{ $products->links() }}
</div>
<!--pagination style end-->
