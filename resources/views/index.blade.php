@extends('layouts/main')
@section('content')
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title merchadise_title">
                        <h2>General Merchandise</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                data-filter="*">all
                            </li>
                            @foreach($categoryMenu as $menu)
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    data-filter=".{{ $menu->id }}">{{ $menu->category_name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid"
                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        @foreach($products as $product)
                            <a href="/product/{{$product->slug}}">
                                <div class="product-item {{$product->category_id}} ">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        {!! $product->thumbs !!}
                                    </div>

                                    <div class="product_info">
                                        <h6 class="product_name"><a
                                                    href="/product/{{$product->slug}}">{{ $product->product_name }}</a>
                                        </h6>

                                        <div class="product_price">{{ number_format($product->product_price) }} Kes</div>

                                        <input type="number" class="quantity" id="quantity" name="quantity" value="1"
                                               style="width: 50px; margin-right: 10px;">
                                    </div>
                                </div>
                                <div class="add_to_cart_button red_button"><a
                                            href="{{ route('basket.create', ['id' => $product->id]) }}">add to cart</a>
                                </div>
                            </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')


    <script>

        $('.add_to_cart_button').find('a').click(function (event) {
            event.preventDefault();
            var quantity = $(this).parent().prev().find('input').val();
            $.ajax({
                type: "POST",
                url: $(this).attr('href'),
                data: {quantity: quantity}
                , success: function (data) {
                    console.log(data);
                    $('#checkout_items').html(data.cartCount);
                }
            });
            return false; //for good measure
        });
    </script>

@endsection
