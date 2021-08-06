


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Project</title>

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/styleHome.css">
<style>
	
h2{
    text-align:left;
    padding-top: 70px;
}

.error {
    color: red;
    border-color: red;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -10px;
}

.col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
}

.col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
}

.col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
}

.col-25,.col-50,.col-75 {
    padding: 0 16px;
}

.container {
    background-color: #FFFFFF;
    padding: 3px 18px 13px 18px;
    border: 1px solid lightgrey;
    border-radius: 3px;
    box-shadow: 0 0 2rem 0 rgba(168, 180, 194, 0.37);
}


input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid rgb(130, 26, 26);
    border-radius: 1px;
}

label {
    margin-bottom: 10px;
    display: block;
}

.icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
}

.btn {
    background-color: #01BAEF;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);

}

.btn:hover {
    background-color: #0CBABA;
}

a {
    color: #2196F3;
}

hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns 
    stack on top of each other instead of next to each other (also change the direction 
    - make the "cart" column go on top) 
*/
@media (max-width: 800px) {
    .row {
        flex-direction: column-reverse;
    }
    .col-25 {
        margin-bottom: 20px;
    }
}
</style>
</head>
<body>

<!-- header section starts  -->



<header>

<div class="nav-container">

<div class="menu">
	<nav>
		<input type="checkbox" id="show-search">
		<input type="checkbox" id="show-menu">
		<label for="show-menu" class="menu-icon"><i class="fas fa-bars    "></i></label>
	<div class="menu-items">
	<div class="logo">
		<a href="home.html">E-com</a>
	</div>
	<ul class="menu-links">
		<li><a href="/home">Home</a></li>
		<li>
		 <a href="#" class="desktop-links">Shop</a>
		 <input type="checkbox" id="show-features">
		 <label for="show-features">Shop</label>
		 <ul>                    @foreach($shops as $shop)
			 <li>  <a href="{{ route('shops.show',$shop->id) }}">{{ $shop->name }}</a></li>
@endforeach

			
		 </ul>
	 </li>
	 <li>
		 <a href="#" class="desktop-links">categoriess</a>
		 <input type="checkbox" id="show-products">
		 <label for="show-products">categoriess</label>
		 <ul>
			 @foreach($categories as $category)
		 
	  
			 <li>
				 <a href="{{route('products.index', ['category_id' => $category->id])}}" class="desktop-links">{{ $category->name }}</a>
				 <input type="checkbox" id="show-mens">
				 <label for="show-mens">{{ $category->name }}</label>
				 
				 @php
									 $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
								 @endphp

							@if($children->isNotEmpty())
				 <ul>
					 @foreach($children as $child)
					 <li><a href="{{route('products.index', ['category_id' => $child->id])}}">{{$child->name}}</a></li>
					@endforeach
				 </ul>
				 @endif
			 </li>
			 @endforeach
			 
		 </ul>
	 </li>
	 <li>
		 <a href="#" class="desktop-links">Gift</a>
		 <input type="checkbox" id="show-features">
		 <label for="show-features">Gift</label>
		 <ul>                    @foreach($gifts as $gift)
			 <li>  <a href="{{ route('products.index',$gift->id) }}">{{ $gift->particular }}</a></li>
@endforeach

			
		 </ul>
	 </li>
		<li><a href="#">About US</a></li>
		<li><a href="#">Feedback</a></li>
	</ul>
 </div>
 <a href="{{ route('cart.index') }}" class="menu-search"><i class="fas fa-shopping-cart"></i></a>
 <label for="show-search" class="menu-search"><i class="fas fa-search    "></i></label>
 <form action="{{route('products.search')}}" class="search-box">
	 <input type="text" placeholder="Type Something to Search" required>
	 <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right    "></i></button>
 </form>

 </nav>
</div>
 
</div>
</header>



<h2></h2>
<div class="row">
    <div class="col-75">
        <div class="container">
         
<form class="form" id="validate" method="post" action="{{ route('orders.store') }}">
                            @csrf
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="shipping_fullname" placeholder="Anushil Karki" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="karki420@gmail.com" required>
						<label for="city"><i class="fa fa-institution"></i> Phone no </label>
                        <input type="text" id="city" name="shipping_phone" placeholder="9849594857" required>

						<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="shipping_address" placeholder="balkumari " required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="shipping_city" placeholder="Lalitpur" required>
						<label for="country"><i class="fa fa-institution"></i> Country</label>
                        <input type="text" id="city" name="country_name" placeholder="Lalitpur" required>

                        <div class="row">
                            <div class="col-50">
                               
								<label for="state">State / Divition</label>
											<select name="shipping_state" id="state-province">
												<option value="divition" selected="selected">1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
											</select>
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="shipping_zipcode" placeholder="44600"required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment :</h3>
                        <br>
                        <br>
                        
                        <input name="payment_method" type="checkbox" value="cash_on_delivery"> Cash On Delivery</label></h3>
                        
                      
                        
                    </div>
					<div class="col-50">
                        <h3>Cart Total : </h3>
                        <br>
                        <br>

										
										<h3>Rs : {{\Cart::session(auth()->id())->getTotal()}}</h3>
                        
                      
                        
                    </div>
                </div>
              
            
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
    
</div>
<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i> cyberlife </a>
            <p>welcome to global cyberlife where your shopping is made easier and more secure</p>
        </div>

        <div class="box">
            <h3>links</h3>
            <a href="#">home</a>
            <a href="#">arrival</a>
            <a href="#">featured</a>
            <a href="#">gallery</a>
            <a href="#">deal</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-home"></i>
               kaushaltar,bahktapur
            </p>
            <p> <i class="fas fa-phone"></i>
                9849594857
            </p>
            <p> <i class="fas fa-globe"></i>
              www.globalcyberlife.com
            </p>
        </div>

    </div>



</section>

<!-- footer section ends -->






<!-- footer section ends -->
<script>
	$('#validate').validate({
    roles: {
        shipping_fullname: {
            required: true,
        },
        email: {
            required: true,
        },
        shipping_address: {
            required: true,
        },
        shipping_city: {
            required: true,
        },
        shipping_state: {
            required: true,
        },
        shipping_zipcode: {
            required: true,
        },
		shipping_phone: {
            required: true,
        },
        country_name: {
            required: true,
        },
		payment_method: {
            required: true,
        },
      
       
    },
    messages: {
        shipping_fullname:"Please input full name*",
        email:"Please input email*",
        shipping_city:"Please input city*",
        shipping_address:"Please input address*",
        shipping_state:"Please input state*",
        shipping_zipcode:"Please input address*",
		shipping_phone:"please input shipping phone number*",
		payment_method:"please input payment method*",
		country_name:"please input country name*"
       
    },
});
</script>
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="/js/home.js"></script>
    
</body>
</html>
