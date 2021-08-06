
<section class="arrival" id="arrival">

<h1 class="heading"> <span>new arrivals</span> </h1>

<div class="box-container">

   
   @foreach($relatives as $relative)


    <div class="box">
        <div class="image">
            <img src="images/arr_img6.jpg" alt="">
        </div>
        <div class="info">
            <h3>{{ $relative->name }}</h3>
            <div class="subInfo">
                <strong class="price"> {{ $relative->selling_price }} </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a class="fas fa-shopping-cart" href="{{route('cart.add', $relative->id)}}">add to cart</a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>
@endforeach
</div>

</section>
