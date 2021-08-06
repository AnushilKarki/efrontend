

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
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/footer.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/styleHome.css">

    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

<!-- Box icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

<!-- Custom StyleSheet -->
<link rel="stylesheet" href="/css/styles.css" />
<link rel="stylesheet" type="text/css" href="/css/styled.css">

</head>
<body>

<!-- header section starts  -->





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



<!-- header section ends -->
<main>
		<header>
			<ul class="indicator">
				<li data-filter="all" class="active"><a href="#">All</a></li>
				<li data-filter="Blazer"><a href="#">Blazzer</a></li>
				<li data-filter="Watch"><a href="#">Watch</a></li>
				<li data-filter="Shoes"><a href="#">Shoes</a></li>
				<li data-filter="Mobile"><a href="#">Mobiles</a></li>
				<li data-filter="Accessories"><a href="#">Accessories</a></li>
			</ul>
			<div class="filter-condition">
				<span>View As a</span>
				<select name="" id="select">
					<option value="Default">Default</option>
					<option value="LowToHigh">Low to high</option>
					<option value="HighToLow">High to low</option>
				</select>
			</div>
		</header>
		<div class="product-field">
			<ul class="items">
				<li data-category="" data-price="">
					<picture>
						<img src="image/wa1.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Watch</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$45.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/bz1.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Blazer</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$35.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/wa2.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Watch</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$40.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/bz2.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Blazer</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$42.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/wa3.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Watch</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$46.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/bz4.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Blazer</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$55.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/so.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Shoes</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$25.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/samsung.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Mobile</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$20.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/so1.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Shoes</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$15.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/so2.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Shoes</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$22.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/one.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Mobile</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$33.78</h4>
				</li>
				<li data-category="" data-price="">
					<picture>
						<img src="image/so3.png" alt="">
					</picture>
					<div class="detail">
						<p class="icon">
						   <span><i class="far fa-heart"></i></span>
						   <span><i class="far fa-share-square"></i></span>
						   <span><i class="fas fa-shopping-basket"></i></span>
						</p>
						<strong>Shoes</strong>
						<span>Lorem, ipsum dolor sit amet consectetur.</span>
						<small>Buy now</small>
					</div>
					<h4>$44.78</h4>
				</li>
			</ul>
		</div>
	</main>
<!-- home section starts  -->

<section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>
            <form>
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="3">Sort By Popularity</option>
                    <option value="4">Sort By Sale</option>
                    <option value="5">Sort By Rating</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
        </div>
     
        <div class="product-center container">
            @foreach($products as $arrival)
            <div class="product">
                <div class="product-header">
                    <img src="{{asset('storage/'.$arrival->image)}}" alt="">
                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <a href=""> <span><i class="bx bx-shopping-bag"></i></span>
                        </a>
                        <a href="{{route('products.show', $arrival)}}" style="--i:3;">   <span><i class="bx bx-search"></i></span></a>
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.html">
                        <h3>{{ $arrival->name }}</h3>
                    </a>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">{{ $arrival->selling_price }}</h4>
                </div>
            </div>
            @endforeach
         
        </div>
    </section>

    <section class="pagination">
        <div class=" container">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span><i class='bx bx-right-arrow-alt'></i></span>
        </div>
    </section>

<!-- home section ends -->

<section class="section featured">
    <div class="top container">
      <h1>Related Products</h1>
      <a href="#" class="view-more">View more</a>
    </div>

    <div class="product-center container">
      <div class="product">
        <div class="product-header">
          <img src="./images/pic1.jpg" alt="">
          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Boy’s T-Shirt</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$50</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/pic2.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Boy’s T-Shirt</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$50</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/pic3.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Boy’s T-Shirt</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$50</h4>
        </div>
      </div>
      <div class="product">
        <div class="product-header">
          <img src="./images/pic4.jpg" alt="">

          <ul class="icons">
            <span><i class="bx bx-heart"></i></span>
            <span><i class="bx bx-shopping-bag"></i></span>
            <span><i class="bx bx-search"></i></span>
          </ul>
        </div>
        <div class="product-footer">
          <a href="#"><h3>Boy’s T-Shirt</h3></a>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <h4 class="price">$50</h4>
        </div>
      </div>
    </div>
  </section>
<!-- arrival section starts  -->


<!-- arrival section ends -->





<!-- gallery section ends -->

<!-- deal section starts  -->


<!-- deal section ends -->

<!-- newsletter section starts  -->


<!-- newsletter section ends -->

<!-- footer section starts  -->

<footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

   <!-- End Footer -->

    <!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="js/home.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="/js/index.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>

  

</body>
</html>