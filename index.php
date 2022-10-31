<?php
require_once('header.php');
 require_once('nav.php');
session_start();
// require_once('config .php');

?>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider1.jpg);">
                    <div class="content">
                        <span>upto 75% off</span>
                        <h3>plant big sale special offer</h3>
                        <a href="https://tech-code24.net/" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider2.jpg);">
                    <div class="content">
                        <span>upto 45% off</span>
                        <h3>plant make people happy</h3>
                        <a href="https://tech-code24.net/" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider3.jpg);">
                    <div class="content">
                        <span>upto 65% off</span>
                        <h3>decorate your home now</h3>
                        <a href="https://tech-code24.net/" class="btn">shop now</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<!-- <section class="banner-container">

    <div class="banner">
        <img src="images/banner1.jpg" alt="">
        <div class="content">
            <span>new arrivals</span>
            <h3>house plants</h3>
            <a href="https://tech-code24.net/" class="btn">shop now</a>
        </div>
    </div>
    <div class="banner">
        <img src="images/banner2.jpg" alt="">
        <div class="content">
            <span>new arrivals</span>
            <h3>office plants</h3>
            <a href="https://tech-code24.net/" class="btn">shop now</a>
        </div>
    </div>

</section> -->

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

<h1 class="heading"> shop by category </h1>

<div class="box-container">
<?php 
require_once("config.php");
$sql = "select * from cateogry order by cat_id desc";
$cat_result = mysqli_query($conn,$sql);
if (!$cat_result){

    die("Selected Error");

}
while($row = mysqli_fetch_assoc($cat_result)){
$cat_name = $row['cat_name'];
$cat_img = $row['cat_img'];
echo "

<div class='box'>
<img src='./dashboard/cat_uplode/$cat_img' alt=''>
<div class='content'>
    <h3>$cat_name</h3>
    <a href='#' class='btn'>shop now</a>
</div>
</div>

";
}

?>
    <div class="box">
        <img src="images/cat1.jpg" alt="">
        <div class="content">
            <h3>bonsai</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat2.jpg" alt="">
        <div class="content">
            <h3>plants for house</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat3.jpg" alt="">
        <div class="content">
            <h3>plants for office</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat4.jpg" alt="">
        <div class="content">
            <h3>gift plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</div>

</section>

<!-- category section ends -->
<br><br>
<!-- product section starts  -->

<section class="product" id="product">

<h1 class="heading"> new products </h1>

<div class="box-container">
<?php 
require_once("config.php");
$sql = "select * from product order by pro_id desc";
$pro_result = mysqli_query($conn,$sql);
if (!$pro_result){

    die("Selected Error");

}
while($row = mysqli_fetch_assoc($pro_result)){
$pro_name = $row['pro_name'];
$pro_img = $row['pro_img'];
echo"
<div class='box'>
    <span class='discount'>-10%</span>

    
    <img src='dashboard/pro_uplode/$pro_img' alt=''>
    <h3>$pro_name</h3>


    <div class='quantity'>
        <span> quantity : </span>
        <input type='number' min='1' max='100' value='1'>
    </div>
    <div class='price'>$14.70 <span>$18.20</span></div>
   
</div>
";
}
?>
    <div class="box">
        <span class="discount">-25%</span>
    
        <img src="images/product2.jpg" alt="">
        <h3>latest plants</h3>
        <!-- <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div> -->
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
       
    </div>

    <div class="box">
        <span class="discount">-7%</span>
        <!-- <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div> -->
        <img src="images/product3.jpg" alt="">
        <h3>latest plants</h3>
        <!-- <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div> -->
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
       
    </div>

    <!-- <div class="box">
        <span class="discount">-4%</span>
         <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div> --> 
        <!-- <img src="images/product4.jpg" alt="">
        <h3>latest plants</h3> -->
        <!-- <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div> -->
        <!-- <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>
 -->




    <!-- <div class="box">
        <span class="discount">-13%</span> -->
        <!-- <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div> -->
        <!-- <img src="images/product5.jpg" alt="">
        <h3>latest plants</h3> -->
        <!-- <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div> -->
        <!-- <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-20%</span> -->
        <!-- <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div> -->
        <!-- <img src="images/product6.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a> 





    </div>

</div>-->

</section>

<!-- product section ends -->
<!-- deal section starts  -->
<hr> 
<br>
<section class="deal" id="deal">

    <h1 class="heading"> deal of the day </h1>

    <div class="row">

        <div class="content">
            <h3 class="title">don't miss the deal</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae rem eligendi repudiandae pariatur. Aut, esse molestias laborum sunt reprehenderit repellat officiis aspernatur consequatur nemo! Veritatis, ex architecto! Eligendi, iste nulla.</p>
            <div class="count-down">
                <div class="box">
                    <h3 id="day">00</h3>
                    <span>day</span>
                </div>
                <div class="box">
                    <h3 id="hour">00</h3>
                    <span>hour</span>
                </div>
                <div class="box">
                    <h3 id="minute">00</h3>
                    <span>minute</span>
                </div>
                <div class="box">
                    <h3 id="second">00</h3>
                    <span>second</span>
                </div>
            </div>
          
        </div>

        <div class="image">
            <img src="images/deal-img.jpg" alt="">
        </div>

    </div>
<br>
<br>
</section>

<hr>
<!-- deal section ends -->
<!-- .icons section starts  -->

<section class="icons-container">

    <div class="icon">
        <img src="images/icon1.png" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping on order</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon2.png" alt="">
        <div class="content">
            <h3>100% Money Back</h3>
            <p>You’ve 30 days to Return</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon3.png" alt="">
        <div class="content">
            <h3>Payment Secure</h3>
            <p>100% secure payment</p>
        </div>
    </div>


</section>

<!-- .icons section ends -->



<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">Contact us</h1>

<div class="row">

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.895920873054!2d72.83196972644954!3d19.141670564195152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1621609263469!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

    <form action="" method="post">

        <div class="inputBox">
            <input type="text" name="cont_name" required>
            <label>name</label>
        </div>
        <div class="inputBox">
            <input type="email"name="cont_email" required>
            <label>email</label>
        </div>
        
        <div class="inputBox">
            <textarea  name="message" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" value="send message" name="send" class="btn">
         
    </form>

     <?php
         if(isset($_POST['send'])){
             require_once('config.php');
             $name = $_POST['cont_name'];
             $email = $_POST['cont_email'];
             $text = $_POST['message'];
             $textr = str_replace("'", "''", "$text");
             $sql = "insert into contact(cont_name,cont_email,message)values('$name','$email','$textr')";
             $result = mysqli_query($conn,$sql);
             if(!$result){
                 echo "Erorr";
             }
             mysqli_close($conn);
         }
        
        ?>

</div>

</section>

<!-- contact section ends -->
<!-- about us section starts-->

<br><br><br><br>

<section class="about_us" id="about_us">
        
<h1 class="heading"> About us </h1>
<div class="box-container">
           <!-- <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo hic eum veniam aut nisi. Libero autem nemo amet recusandae eveniet?</h2>  -->
          
           <!-- main  -->
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
       
        <?php
        require_once('config.php');
        $about_sql = "select * from about order by about_id desc";
        $about_result = mysqli_query($conn,$about_sql);
        if(!$about_result){
            die("Selected Erorr");
        }
        $row = mysqli_fetch_assoc($about_result);
        $text = $row['about_text'];
        echo "<p>$text</p>";
        mysqli_close($conn);
        ?>
   
        
    </div>
    <div class="col-2"></div>
</div>
          
          
           <br><br><br><br>
        </div>
        </section>

<!-- scroll top button  -->
<a href="#home" class="scroll-top fas fa-angle-up"></a>

        <!-- about us section ends -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php
require_once('footer.php');
?>