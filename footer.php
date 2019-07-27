<?php
require 'db.php';
$select_query6="SELECT * FROM logo WHERE status=1 ";
$result6=mysqli_query($db_connection,$select_query6);
$after2 = mysqli_fetch_assoc($result6);

 ?>
<!-- foot starts -->
<section id="foot">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-6">
                <img src="uploads/logo/<?php echo $after2['logo']; ?>" alt="" width="50" class="img-fluid">
                <p>Institute Of Computer Science & Technology</p>


                <a href="#"><i class="fa fa-facebook-f"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>

            </div>
            <div class="col-md-1 offset-1 p-0 col-sm-5 col-5">
                <h5>quick links</h5>
                <ul>
                    <li><a href="#">admission</a></li>
                    <li><a href="#">results</a></li>
                    <li><a href="#">academics</a></li>
                    <li><a href="#">faculty</a></li>
                    <li><a href="#">news &amp; events</a></li>
                </ul>
            </div>
            <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                <h5>contact us</h5>
                <div class="row soc">
                    <div class="col-md-2 col-sm-2 col-1">

                        <ul>
                            <li><i class="fa fa-phone"></i></li>
                            <li><i class="fa fa-envelope"></i></li>
                            <li><i class="fa fa-location-arrow"></i></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-8 col-8">
                        <ul>
                            <li><a href="tel:+880-1112-333-444">+880-1112-333-444</a></li>
                            <li><a href="mailto:Support@domain.com">Support@domain.com</a></li>
                            <li><a href="#">Dhanmondi, Dhaka, Bangladesh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-1 col-sm-5 col-5">
                <h5>find us</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03694485038!2d90.36710723558421!3d23.747050044430356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2z4Kan4Ka-4Kao4Kau4Kao4KeN4Kah4Ka_LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1550813533531" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!-- foot ends -->
<!-- top to -->
<div>
    <i class="fa fa-angle-up" id="return-to-top"></i>
</div>


<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
