@props(['product'])
@if($product)
<div {{ $attributes->merge(['class' => 'col-xl-3 col-sm-6 col-lg-4']) }} >
    <div class="wsus__product_item">
        @if(productType($product->product_type))
        <span class="wsus__new">{{productType($product->product_type)}}</span>
        @endif
        @if($product->checkDiscount())
            <span class="wsus__minus">-{{calculateDiscountPercent($product->price, $product->offer_price)}}%</span>
        @endif
        <a class="wsus__pro_link" href="{{route('product.show', $product->slug)}}">
            <img src="{{asset($product->thumb_image)}}" alt="product" class="img-fluid w-100 img_1"/>
            <img src="
                        @if(isset($product->productImageGalleries[0]->image))
                            {{asset($product->productImageGalleries[0]->image)}}
                        @else
                            {{asset($product->thumb_image)}}
                        @endif
                        " alt="product" class="img-fluid w-100 img_2"/>
        </a>
        <ul class="wsus__single_pro_icon">

            <li><a href="" class="add_to_wishlist" data-id="{{$product->id}}"><i
                        class="far fa-heart"></i></a></li>
            <li><a href="#"><i class="far fa-random"></i></a>
        </ul>
        <div class="wsus__product_details">
            <a class="wsus__category" href="#">{{$product->category->name}} </a>

            <p class="wsus__pro_rating">
                @php
                    $avgRating = $product->reviews()->avg('rating');
                    $fullRating = round($avgRating);
                @endphp

                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $fullRating)
                        <i class="fas fa-star"></i>
                    @else
                        <i class="far fa-star"></i>
                    @endif
                @endfor

                <span>({{count($product->reviews)}} review)</span>
            </p>
            <a class="wsus__pro_name"
               href="{{route('product.show', $product->slug)}}">{{limitText($product->name, 52)}}</a>
            @if($product->checkDiscount())
                <p class="wsus__price">{{$settings->currency_icon}}{{$product->offer_price}}
                    <del>{{$settings->currency_icon}}{{$product->price}}</del>
                </p>
            @else
                <p class="wsus__price">{{$settings->currency_icon}}{{$product->price}}</p>
            @endif
            <form class="shopping-cart-form">
                <input type="hidden" name="product_id" value="{{$product->id}}">
                @foreach ($product->variants as $variant)
                    @if ($variant->status != 0)
                        <select class="d-none" name="variants_items[]">
                            @foreach ($variant->productVariantItems as $variantItem)
                                @if ($variantItem->status != 0)
                                    <option
                                        value="{{$variantItem->id}}" {{$variantItem->is_default == 1 ? 'selected' : ''}}>{{$variantItem->name}}
                                        (${{$variantItem->price}})
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    @endif
                @endforeach
                <input class="" name="qty" type="hidden" min="1" max="100" value="1"/>
                <button class="add_cart" type="submit">add to cart</button>
            </form>
        </div>
    </div>
</div>
@endif
