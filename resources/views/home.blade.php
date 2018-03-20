@extends('app')

@section('content_main')
    <div class="body-top">
        <div class="main">
            <div class="top-title">
                More effectively <span class="color-green">working</span> codes<br/>
                than any other coupon sites
            </div>
            <div class="body-main text-center">
                <div class="list-img">
                    <a href="#">
                        <img src="image/img1.png">
                    </a>
                    <a href="#">
                        <img src="image/img2.png">
                    </a>
                    <a href="#">
                        <img src="image/img3.png">
                    </a>
                    <a href="#">
                        <img src="image/img4.png">
                    </a>
                    <a href="#">
                        <img src="image/img5.png">
                    </a>
                    <a href="#">
                        <img src="image/img6.png">
                    </a>
                    <a href="#">
                        <img src="image/img7.png">
                    </a>
                    <a href="#">
                        <img src="image/img8.png">
                    </a>
                </div>
                <div class="row">
                    <div class="search-body input-group">
                            <input placeholder="search items...">
                            <div class="input-group-append">
                                <button type="button"><em class="fa fa-search fa-lg"></em></button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content -->
    <div class="main">
        <div class="main-col">
            <h1 class="title">Online Coupons, Promo Codes & Discounts</h1>
            <div class="coupon-list">
                <!-- start a item -->
                @foreach(range(0,10) as $v)
                    @if(rand(0,1)==0)
                        @include('elements.coupon_items')
                        @else
                        @include('elements.coupon_items_sale')
                    @endif
                @endforeach
                <!--end a items -->
            </div>
        </div>

        <div class="main footer">
            <h1 class="title">
                Popular Store
            </h1>
            <div class="row link-popular">
                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                        <a href="#">Link text</a><br/>
                        <a href="#">Link text</a><br/>
                        <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>

                <div class="col">
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a><br/>
                    <a href="#">Link text</a>
                </div>
            </div>
        </div>
@endsection