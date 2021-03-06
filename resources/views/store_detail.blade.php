@extends('app')

@section('content_main')
    <div class="coupon" id="coupon-brand" data-brand="kohls.com" data-id="3940" data-slug="kohls-coupon" itemscope="" itemtype="http://schema.org/Store">
        <div class="c-ccontent-top">
            @include('elements.store_info')
        </div>


        <div class="coupon-wrap">
            <div class="coupon-store">
                <div class="m-c-w col-wrap">
                    @include('elements.submit_col_left')

                    <div class="main-col">
                        <div class="m-c-l">
                            <div class="c-r-list">
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


                            <div class="more-coupon">
                                <p>Showing <span class="size">50</span> of <span class="length">6264</span></p>
                                <button class="show-coupon-btn">Show Next <span class="next">50</span> Coupons</button>
                            </div>


                        </div>
                    </div>
                    <!--end main col -->
                </div>
            </div>
        </div>

@endsection