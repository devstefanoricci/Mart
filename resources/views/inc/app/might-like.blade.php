<div class="might-like-section">
  <div class="container">
      <h3>You might also like...</h3>
      <div class="card h-100">
        <div class="card-body">
            <div class="row h-100"> 
                @foreach ($mightAlsoLike as $index => $product)
                <div class="col-sm-6 col-md-3 col-6">
                    <a href="{{route('shop.show',['id'=>$product])}}">
                        <div class="card shadow-hover">
                            <img src="{{$product->productImage->first()->original}}" alt="product" class="card-img-top">
                            <div class="card-body">
                                <h4>{{ $product->title }}</h4>
                                <p class="text-orange font-weight-bold my-0 py-0">Rs.{{ number_format($product->price) }}</p>
                                @if($product->onSale)
                                <small class="line-through">Rs.{{ number_format($product->sale_price) }}</small>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
      </div>
  
  </div>
</div>
