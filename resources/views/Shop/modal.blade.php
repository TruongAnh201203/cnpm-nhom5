<div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12">
        <div class="modal_tab">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                    <div class="modal_tab_img">
                        <a href="{{ route('shop.singleProduct', $product['idProduct']) }}"><img
                                src="{{ $product['imgProduct'] }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="modal_right">
            <div class="modal_title mb-10">
                <h2>{{ $product['nameProduct'] }}</h2>
            </div>
            <div class="modal_price mb-10">
                <span class="new_price">{{ number_format($product['priceProduct']) }}đ</span>
            </div>
            <div class="modal_add_to_cart mb-15">
                <button type="button" class="addModal"><a href="{{ route('user.addCart', ['idProduct' => $product['idProduct']]) }}" style="color: #fff">
                    <i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                    hàng</a> </button>

            </div>
            <div class="modal_description mb-15">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam,</p>
            </div>
            <div class="modal_social">
                <h2>Chia sẻ sản phẩm</h2>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
