<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
}

.navbar {
  display: flex;
  align-items: center;
  padding: 20px;
}

nav {
  flex: 1;
  text-align: right;
}

nav ul {
  display: inline-block;
  list-style-type: none;
}

nav ul li {
  display: inline-block;
  margin-right: 20px;
}

a {
  text-decoration: none;
  color: #555;
}

p {
  color: #555;
}

.container {
  max-width: 1300px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
}

.row {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
}

.col-2 {
  flex-basis: 50%;
  min-width: 300px;
}

.col-2 img {
  max-width: 100%;
  padding: 50px 0;
}

.col-2 h1 {
  font-size: 50px;
  line-height: 60px;
  margin: 25px 0;
}

.btn {
  display: inline-block;
  background: #ff523b;
  color: #ffffff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
}

.btn:hover {
  background: #563434;
}

.header {
  background: radial-gradient(#fff, #ffd6d6);
}

.header .row {
  margin-top: 70px;
}

.categories {
  margin: 70px 0;
}

.col-3 {
  flex-basis: 30%;
  min-width: 250px;
  margin-bottom: 30px;
}

.col-3 img {
  width: 100%;
}

.small-container {
  max-width: 1080px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
}

.col-4 {
  flex-basis: 25%;
  padding: 10px;
  min-width: 200px;
  margin-bottom: 50px;
  transition: transform 0.5s;
}

.col-4 img {
  width: 100%;
}

.title {
  text-align: center;
  margin: 0 auto 80px;
  position: relative;
  line-height: 60px;
  color: #555;
}
.title::after {
  content: "";
  background: #ff523b;
  width: 80px;
  height: 5px;
  border-radius: 5px;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translate(-50%);
}

h4 {
  color: #555;
  font-weight: normal;
}

.col-4 p {
  font-size: 14px;
}

.rating .fas {
  color: #ff523b;
}

.rating .far {
  color: #ff523b;
}

.col-4:hover {
  transform: translateY(-5px);
}

/* Offer */

.offer {
  background: radial-gradient(#fff, #ffd6d6);
  margin-top: 80px;
  padding: 30px 0;
}

.col-2 .offer-img {
  padding: 50px;
}

small {
  color: #555;
}

/* testimonial */

.testimonial {
  padding-top: 100px;
}

.testimonial .col-3 {
  text-align: center;
  padding: 40px 20px;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: transform 0.5s;
}

.testimonial .col-3 img {
  width: 100px;
  margin-top: 20px;
  border-radius: 50%;
}

.testimonial .col-3:hover {
  transform: translateY(-10px);
}

.fa-quote-left {
  font-size: 34px;
  color: #ff523b;
}

.col-3 p {
  font-size: 14px;
  margin: 12px 0;
  color: #777777;
}

.testimonial .col-3 h3 {
  font-weight: 600;
  color: #555;
  font-size: 16px;
}

.brands {
  margin: 100px auto;
}

.col-5 {
  width: 160px;
}

.col-5 img {
  width: 100%;
  cursor: pointer;
  filter: grayscale(100%);
}

.col-5 img:hover {
  width: 100%;
  cursor: pointer;
  filter: grayscale(0);
}

/* footer */

.footer {
  background: #000;
  color: #8a8a8a;
  font-size: 14px;
  padding: 60px 0 20px;
}

.footer p {
  color: #8a8a8a;
}

.footer h3 {
  color: #ffffff;
  margin-bottom: 20px;
}

.footer-col-1,
.footer-col-2,
.footer-col-3,
.footer-col-4 {
  min-width: 250px;
  margin-bottom: 20px;
}

.footer-col-1 {
  flex-basis: 30%;
}

.footer-col-2 {
  flex: 1;
  text-align: center;
}

.footer-col-2 img {
  width: 180px;
  margin-bottom: 20px;
}

.footer-col-3,
.footer-col-4 {
  flex-basis: 12%;
  text-align: center;
  line-height:25px;
}

ul {
  list-style-type: none;
}

.app-logo {
  margin-top: 20px;
}
.app-logo img {
  width: 140px;
}

.footer hr {
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
}

.copyright {
  text-align: center;
}

.menu-icon {
  width: 28px;
  margin-left: 20px;
  display: none;
}

/* media query for menu */

@media only screen and (max-width: 800px) {
  nav ul {
    position: absolute;
    top: 70px;
    left: 0;
    background: #333;
    width: 100%;
    overflow: hidden;
    transition: max-height 0.5s;
  }
  nav ul li {
    display: block;
    margin-right: 50px;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  nav ul li a {
    color: #fff;
  }
  .menu-icon {
    display: block;
    cursor: pointer;
  }
}

/* all products page */


/* media query for less than 600 screen size */

@media only screen and (max-width: 600px) {
  .row {
    text-align: center;
  }
  .col-2,
  .col-3,
  .col-4 {
    flex-basis: 100%;
  }

  .single-product .row {
    text-align: left;
  }

  .single-product .col-2 {
    padding: 20px 0;
  }
  .single-product h1 {
    font-size: 26px;
    line-height: 32px;
  }
  .cart-info p {
    display: none;
  }
}

.one h1{

	   text-align:center;
	   margin-top: 3%;
}


.my-layout {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-left: 25px;
        }

        .content {
            flex: 1;
            padding: 20px;
            
        }

        .image {
            flex: 1;
            padding: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-left: 35px;
        }

        .content h2{

        	       width:65%;
        }
    

      .content p{

        	       font-size: 18px;
        	       color:black;
        }
  
      .content li{

        	       font-size: 16px;
        	       color:black;
        }

span {

	  color:black;
	  font-size: 18px;
	  font-weight: bold;
}


.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    width: 45%;
     animation: fadeIn 5s ease-in-out;
     background: radial-gradient(#fff, #ffd6d6);
  }
  .left {
    float: left;
  }
  .right {
    float: right;
  }
  .card img {
    width: 100%;
    border-radius: 5px 5px 0 0;
  }


  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }



 .two {
    text-align: center;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: fadeIn 2s ease-in-out;
  }

  .two h1 {
    font-family: 'Arial', sans-serif;
    font-size: 36px;
    color: #333;
    margin: 0;
    padding: 10px;
    animation: slideIn 2s ease-in-out;
  }

  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  @keyframes slideIn {
    0% {
      transform: translateY(-50px);
    }
    100% {
      transform: translateY(0);
    }
  }

 .service-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .service-card {
    width: 320px;
    height: 230px; /* Set a fixed height for all cards */
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px;
    position: relative;
    overflow: hidden;
  }
  .service-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: -50%;
    width: 200%;
    height: 5px;
    background-color: #007bff; /* Change this to whatever color you prefer */
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    animation: moveBorder 2s infinite linear;
  }
  @keyframes moveBorder {
    0% {
      transform: translateX(-50%);
    }
    100% {
      transform: translateX(50%);
    }
  }
  .icon {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #fff;
    padding: 5px;
    border-radius: 50%;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }
 .service-card h2 {
    margin-top: 2px;
    color: #333;
    line-height:44px;
     font-size:26px;
  }
 .service-card p {
    color: #666;
    text-indent: 0; /* Ensures all paragraphs start from the left edge */
    padding-top: 22%;
  }


  .three h1{

  	            padding-top: 4%;
  	            text-align: center;
  	            padding-bottom: 3%;
  }

    </style>
</head>
<body>
<div class="header">
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <a href="index.html"><img src="C:\xampp\htdocs\meta\tanki-high-resolution-logo-transparent.png" alt="" width="125px" /></a>
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a href="index.html">Home</a></li>
          <li><a href="product.html">Products</a></li>
          <li><a href="#">About</a></li>
          <li><a href="http://localhost/meta/contact.php">Contact</a></li>
          <li><a href="account.html">Account</a></li>
        </ul>
      </nav>
      <a href="cart.html"><img src="https://cdn-icons-png.flaticon.com/512/4613/4613884.png" alt="" width="30px" height="30px" /></a>
      <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
    </div>
    <div class="row">
      <div class="col-2">
        <h1>
          Tanki Setup<br>
           Your Solution for Reliable Water Storage and Emergency Preparedness
        </h1>
        <p>
          
Water storage tanks are essential for ensuring a reliable and consistent water supply, especially in areas with unreliable water sources or during emergencies.  <br />They come in various sizes and materials, designed to store water safely and efficiently.
        </p>
        <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Explore Now &#8594;</a>
      </div>
      <div class="col-2">
        <img src="C:\Users\DELL\Downloads\images-removebg-preview.png" alt="" />
      </div>
    </div>
  </div>
</div>

<!-- Featured categories -->

<div class="one">
	<h1>Exploring Water Storage Tanks</h1>
</div>

<!-- Featured categories -->
<div class="categories">
  <div class="small-container">
    <div class="row">
      <div class="col-3">
        <img src="#" alt="image" />
      </div>
      <div class="col-3">
        <img src="#" alt="image" />
      </div>
      <div class="col-3">
        <img src="#" alt="tanki image" />
      </div>
    </div>
  </div>
</div>




<div class="my-layout">
        <div class="content">
            <h2>Embracing the Wisdom of Water Storage: A Necessity for Every Home</h2><br>
            <p>Storing water in a tank is necessary for several reasons:</p><br>
<ul>
<li><span>Water Supply Stability</span>: A tank allows for the storage of water during times of low demand (such as at night) or during periods of high demand (such as during a drought or peak usage times). This ensures a consistent supply of water to meet the needs of the community.</li><br>

<li><span>Pressure Regulation</span>: Water tanks can help regulate water pressure in the distribution system. By storing water at a higher elevation, gravity can be used to create pressure in the system, which helps ensure that water reaches all areas of the community at an adequate pressure.</li><br>

<li><span>Emergency Preparedness</span>: In the event of a natural disaster or other emergency, having a supply of stored water can be critical. It can provide a backup source of water for drinking, sanitation, and firefighting.</li><br>

<li><span>Water Treatment</span>: Water treatment facilities often need to store water temporarily as part of the treatment process. This allows for the settling of solids and the removal of impurities before the water is distributed to consumers.</li><br>

<li><span>Water Conservation</span>: Storing water can also help conserve water by capturing and storing rainwater or other sources of water that might otherwise be lost.</li></ul>
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/400" alt="Placeholder Image">
        </div>
    </div>

    <hr>


<div class="two">
	
	<h1>
		Discover the Benefits of Installing a Water Tanki in Your Home or Business
	</h1>

</div>
<br>
<br>
 <div class="card left">
   
    <ul>
      <li><span>Cost Savings</span>: Installing a water tanki can lead to significant savings on water bills by                             collecting and storing rainwater for various non-potable uses.</li><br>
      <li><span>Water Conservation</span>: By using rainwater for tasks like watering gardens, flushing toilets, or washing cars, you reduce your reliance on municipal water sources, contributing to overall water conservation efforts.</li><br>
      <li><span>Emergency Backup</span>: In the event of a water shortage or emergency, having a water tanki ensures you have a backup supply of water for essential needs.</li><br>
    <li><span>Sustainable Living</span>: Utilizing rainwater for non-potable purposes is an eco-friendly practice that reduces your carbon footprint and promotes sustainable living.</li>
    </ul>
  </div>
  <div class="card right">

    
    <ul>
      <li><span>Garden Health</span>: Rainwater is often better for plants than tap water, as it is free of chemicals like chlorine and fluoride that can harm plant growth.</li><br>
      <li><span>Reduced Flood Risk</span>: By capturing and redirecting rainwater, you can reduce the risk of flooding around your property.</li><br>
      <li><span>Independence</span>: Installing a water tanki gives you greater independence from municipal water supplies, which can be especially beneficial in areas with water restrictions or unreliable water sources.</li><br>
      <li><span>Customization</span>: Water tanki systems can be customized to fit your specific needs and space requirements, ensuring maximum efficiency and convenience.</li>
    </ul>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <br><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <div class="three">
  	
  	  <h1>Tanki Setup: Making Your Services Better</h1>
  </div>




<div class="service-container">
  <div class="service-card">
    <div class="icon">🖥️</div>
    <h2>Tanki Installation</h2>
    <p>We can install water tanks of various sizes and types, depending on the needs of our customers..</p>
  </div>
  
    <div class="service-card">
    <div class="icon">🖥️</div>
    <h2>Tanki Maintenance</h2>
    
    <p>We offer regular maintenance services to ensure that water tanks are in good working condition and free from leaks or other issues.
</p>
  </div>

  <div class="service-card">
    <div class="icon">🖥️</div>
    <h2>Tanki Cleaning</h2>
    <p>We provide professional cleaning services to remove any sediment, algae, or other contaminants that may accumulate in a water tank over time.</p>
  </div>

  <div class="service-card">
    <div class="icon">🖥️</div>
    <h2>Tanki Repair</h2>
    <p>If a water tank is damaged or needs repairs, we can provide repair services to fix the issue and restore the tank to proper working order.</p>
  </div>

</div>


<!-- offer -->
<div class="offer">
  <div class="small-container">
    <div class="row">
      <div class="col-2">
        <img src="#" alt="" class="offer-img" />
      </div>
      <div class="col-2">
        <p>Exclusively Available on Tanki Setup</p>
        <h1>Expert Water Tanki Solutions for Homes and Businesses</h1>
        <small>Experienced Water Tank Setup Professionals at Your Service.</small>
        <br />
        <a href="#" class="btn">Grab Now &#8594;</a>
      </div>
    </div>
  </div>
</div>

<!-- Testimonial -->
<div class="testimonial">
  <div class="small-container">
    <div class="row">
      <div class="col-3">
        <i class="fas fa-quote-left"></i>
        <p>
          Tanki Setup did an excellent job installing our water tank. They were professional, efficient, and the tank was installed exactly where we wanted it. I'm confident it will serve us well for years to come, We're very happy with their service and would highly recommend them to anyone looking for water tank installation.
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <img src="https://i.ibb.co/zfXD2Tx/user-1.png" alt="" />
        <h3>Marta W.</h3>
      </div>

      <div class="col-3">
        <i class="fas fa-quote-left"></i>
        <p>
          Tanki Setup exceeded my expectations. Their team was punctual, courteous, and knowledgeable. They took the time to explain the installation process and answered all my questions. The tank was installed flawlessly, and I'm confident it will serve us well for years to come. I highly recommend Tanki Setup for all your water tank needs.
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <img src="https://i.ibb.co/FVyK1KM/user-2.png" alt="" />
        <h3>Rula P.</h3>
      </div>

      <div class="col-3">
        <i class="fas fa-quote-left"></i>
        <p>
          Tanki Setup provided exceptional service from start to finish. Their team was professional, efficient, and went above and beyond to ensure our water tank was installed perfectly. They even helped us choose the right tank size and location. We're extremely satisfied with their work and would definitely use their services again.
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <img src="https://i.ibb.co/jZ3tQqK/user-3.png" alt="" />
        <h3>Vika Z.</h3>
      </div>
    </div>
  </div>
</div>
<!-- brands -->
<div class="brands">
  <div class="small-container">
    <div class="row">
      <div class="col-5">
        <img src="https://cdn-icons-png.flaticon.com/512/4613/4613884.png" alt="" />
      </div>

      <div class="col-5">
        <img src="https://cdn-icons-png.flaticon.com/512/3341/3341311.png" alt="" />
      </div>

      <div class="col-5">
        <img src="https://cdn-icons-png.flaticon.com/512/3485/3485963.png" alt="" />
      </div>

      <div class="col-5">
        <img src="https://cdn-icons-png.freepik.com/512/8018/8018594.png" alt="" />
      </div>

      <div class="col-5">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/014/657/686/small_2x/water-tank-icon-design-template-isolated-illustration-free-vector.jpg" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Tanki Setup</h3>
        <p>We are just a call away from you.</p>
        <div class="app-logo">
          <img src="#" alt="" />
          <img src="#" alt="" />
        </div>
      </div>

      <div class="footer-col-2">
        <img src="#" alt="" />
        <p>
          Our Purpose Is To Sustainably Make the Pleasure and Benefits
        </p>
      </div>

      <div class="footer-col-3">
        <h3>Contact-Us</h3>
        <ul>
          <li>358 Marshall Street</li>
          <li>Churchville ,  Maryland</li>
          <li>+1 (856) 554-9137</li>
          <!-- <li>Join Affiliate</li> -->
        </ul>
      </div>

      <div class="footer-col-4">
        <h3>Follow us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram</li>
          <li>YouTube</li>
        </ul>
      </div>
    </div>
    <hr />
    <p class="copyright">Copyright &copy; 2022 - Tanki Setup</p>
  </div>
</div>

<!-- js for toggle menu -->
<script>
  var MenuItems = document.getElementById('MenuItems');
  MenuItems.style.maxHeight = '0px';

  function menutoggle() {
    if (MenuItems.style.maxHeight == '0px') {
      MenuItems.style.maxHeight = '200px';
    } else {
      MenuItems.style.maxHeight = '0px';
    }
  }
</script>
</body>
</html>
