<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeiru Flower Shop</title>
<link rel="icon" href="images/circleLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="fonts/all.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

    <?php require "components/header.php" ?>

    <?php require "auth/login_form.php" ?>

    <?php require "auth/register_form.php" ?>
    

    <div class="hero">
        <div class="heroText-container"  >
            <h1>CRAFTING FRESH STARTS WITH EVERY FLOWER</h1>
            <p>Our skilled florists carefully craft every arrangement with passion and precision, ensuring that each bloom symbolizes a new chapter and a touch of elegance.</p>
            <button>Order Now</button>
        </div>

        <img src="images/florist.jpg" alt=""  >
    </div>


    <div class="aboutUs-section"  >
        <img src="images/florist-2.jpg" alt="">
        <div  >
            <h1 class="heading-title aboutUs-title">EXPERIENCE ELEGANCE AND CHARM AT ZEIRU FLOWER SHOP</h1>
            <p>Welcome to Zeiru Flower Shop, where elegance meets charm in every bouquet. Our curated selection of fresh, vibrant blooms is designed to elevate any occasion, whether it's a heartfelt celebration or a simple moment of beauty. With a passion for floral artistry, our skilled team crafts unique arrangements that reflect the beauty of nature and the individuality of our customers. At Zeiru, we believe that flowers are not just gifts but a way to express emotions and create lasting memories. Step into our enchanting shop and let us help you find the perfect floral expression for every moment.</p>
        </div>
    </div>


    <div class="boquet-section"  >
        <h1 class="heading-title">PERFECT BOUQUET FOR SPECIAL MOMENTS</h1>

        <div class="boquet-container">
            <div class="boquet-binary-container">
                <div class="boquet-card"  >
                    <img src="images/weddingBouquet.jpeg" alt="">
                    <h3>Wedding</h3>
                </div>
    
                <div class="boquet-card"  >
                    <img src="images/birthday.jpg" alt="">
                    <h3>Birthday</h3>
                </div>
            </div>
    
            <div class="boquet-binary-container" >
                <div class="boquet-card"  >
                    <img src="images/aniverssary.jpg" alt="">
                    <h3>Aniverssary</h3>
                </div>
    
                <div class="boquet-card"  >
                    <img src="images/sympathy.jpg" alt="">
                    <h3>Sympathy</h3>
                </div>
            </div>    
        </div>   
    </div>

    
    <div class="flower-section"  >
        <div class="flower-section-container"  >
            <p>Browse our wide selection of fresh, vibrant flowers available by the piece or in bundles of a dozens. Whether you're looking for a single elegant stem or a beautiful bouquet, we have the perfect blooms to brighten any occassion. Customize your order to suit your needs, from intimate gesture to grand floral displays.</p>
            <button>View More</button>
        </div>

        <div class="preview-flower-container">
            <div class="preview-flower"  >
                <img src="images/stargazer.jpg" alt="">
                <h3>Stargazers</h3>
            </div>

            <div class="preview-flower"  >
                <img src="images/tulip.jpg" alt="">
                <h3>Tulips</h3>
            </div>

            <div class="preview-flower previewNone"  >
                <img src="images/rose.jpg" alt="">
                <h3>Roses</h3>
            </div>
        </div>
    </div>


    <h1 class="heading-title"  >WHY CHOOSE OUR US?</h1>
    <div class="assurance-section" >
       <div class="assurance-container"  >
            <div class="assurance-binary-container">
                <img src="images/quality-ilu.png" alt="">
            </div>
    
            <div class="assurance-binary-container">
                <div>
                <h2 >Premium Quality Blooms</h2>
                <p>At Zeiru Flower Shop, we source only the freshest and highest-quality flower to ensure every bouquet is vibrant, long-lasting, and makes a lasting impression.</p>
                </div>     
            </div>
        </div>

        <div class="assurance-container"  >
            <div class="assurance-binary-container">
                <img src="images/custom-ilu.png" alt="">
            </div>
    
            <div class="assurance-binary-container">
                <div>
                <h2>Unique and Custom Design</h2>
                <p>We belive in creating floral arrangement as unique as our customer. Our expert florists work with you to craft stunning, personalized designs tailored to your preferences.</p>
                </div>     
            </div>
        </div>
    </div>


    <div class="assurance-section">
        <div class="assurance-container"  >
             <div class="assurance-binary-container">
                 <img src="images/deliver-ilu.png" alt="">
             </div>
     
             <div class="assurance-binary-container">
                 <div>
                 <h2 >Reliable and Timely Service</h2>
                 <p>We understand the importantce of timing in every occasion. That's why we are committed to delivering your flowers promptly, ensuring your special moments are celebrated right on time.</p>
                 </div>     
             </div>
         </div>
 
         <div class="assurance-container"  >
             <div class="assurance-binary-container">
                 <img src="images/price-ilu.png" alt="">
             </div>
     
             <div class="assurance-binary-container">
                 <div>
                 <h2>Affordable Flower Arrangements</h2>
                 <p>Beautiful flowers shouldn't breal the bank. Zeiru Flower Shopoffers exquisite arrangements at competative prices, providing luxury without compromising your budget.</p>
                 </div>     
             </div>
         </div>
     </div>

     <?php require "components/footer.php" ?>

</body>
</html>