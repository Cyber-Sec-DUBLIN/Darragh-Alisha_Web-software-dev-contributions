<html>
    <head>
        <link rel="stylesheet" href="css/home.css">
        <script get ="https://books-api7.p.rapidapi.com/books/get/random/"></script>
        <script src="js/product.js" type="module"></script>
    </head>
    <header>
        <div class="heading">Go Reader</div>
        <div class=nav-bar>
            <nav >
                <div class="nav-1">
                    <a href="home.html">
                    <div class="nav-1-img"><img src="images/icons/home.png"></div>
                    <div class="nav-1-title">Home</div></a>
                </div>
                
                <div class="nav-2">
                    <a href="products.html">
                    <div class="nav-2-img"><img src="images/icons/books.png"></div>
                    <div class="nav-2-title">Products</div>
                    </a>
                </div>
                
                <div class="nav-3">
                    <a href="gallery.html">
                    <div class="nav-3-img"><img src="images/icons/galler.png"></div>
                    <div class="nav-3-title">Gallery</div>
                    </a>
                </div>
                
                <div class="cart">
                    <a href="cart.html">
                    <div class="cart-img"><img src="images/icons/cart.png"></div>
                    <div class="cart-title">cart</div> 
                    </a>
                </div>
                                       
            </nav>
        

        </div>  
        
    
    </header>
    <body>
        <main>
    

    <div class="container">
        <h1>Our Products</h1>
        <div class="product">
            <div class="product-item">
                <img class="pro" alt="Product 1">
                <h3>Product 1</h3>
                <p class="author"></p>
                <p >Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $10.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $12.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="product3.jpg" alt="Product 3">
                <h3>Product 3</h3>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $15.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="product4.jpg" alt="Product 4">
                <h3>Product 4</h3>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $8.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product-item">
                <img src="product5.jpg" alt="Product 5">
                <h3>Product 5</h3>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Price: $20.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

            
            <script>
            function addToCart(image, name, price) {
                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                cartItems.push({image:image , name: name, price: price, });
                localStorage.setItem('cartItems', JSON.stringify(cartItems));
            }
            </script>
        
        </main>
    
    </body>
    <footer>        
       <div class=newl>
           <label for="newl">Subscribe to our newsletter today</label>
           <input type=email id="email" placeholder="Enter your email">           
        
        </div>
        <div class="contact">
            <div class="contact-title">Get in touch</div>
            <div class="contact-img"><img src="images/icons/email.png"></div>
            
        </div>
        <div class="follow">
            <div class="follow-title">Follow us</div>
            <div class="follow-img"><img src="images/icons/ig.png"></div>
        
        </div>
    </footer>

</html>