<?php
require 'header.php';

 ?>

 <?php
 require 'db.php';
 $select_query5="SELECT * FROM notice WHERE status=1 ";
 $result5=mysqli_query($db_connection,$select_query5);
  ?>
  ?>
        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>contact-us</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.html"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="index.html">contact-us</a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-8 col-sm-12 col-12 pr-md-0">
                    <div class="contact">
                        <div class="row m-0">
                            <div class="col-12 p-0">
                                <h2>contact-us</h2>
                            </div>
                            <div class="col-md-5 col-12 p-0">

                                <p>All the Lorem Ipsum generators on the era Internet tend.</p>
                                <a href="tel:+880-1112-333-444"><i class="fa fa-phone"></i><b>phone:</b>  +880-1112-333-444</a>
                                <a href="mailto:Support@domain.com"><i class="fa fa-envelope"></i><b>e-mail:</b> Support@domain.com</a>
                                <a href="#"><i class="fa fa-location-arrow"></i><b>address:</b> Dhanmondi, Dhaka</a>
                            </div>
                            <div class="col-md-6 col-12 offset-md-1 p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.271641853991!2d90.37955299999999!3d23.7449576!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b21137d315%3A0x1f6d618c700fc342!2z4KaV4Kay4Ka-4Kas4Ka-4KaX4Ka-4KaoIOCmquCmvuCmsOCnjeCmlQ!5e0!3m2!1sbn!2sbd!4v1551250911790" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-12 p-0">
                                <h2 class="h">send us a message</h2>
                            </div>
                            <div class="col-md-12 p-0">

                                <p>All the Lorem Ipsum generators on the era Internet tend.</p>

                            </div>

                          <?php
                           if (isset($_SESSION['success'])) {


                           ?>

                          <div class="alert alert-success col-lg-12" role"alert">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                             ?>
                          </div>
                        <?php } ?>
                            <div class="col-12 ">
                               <form action="contact_post.php" method="post" enctype="multipart/form-data">
                                  <div class="row m-0">

                                  <div class="col-6 p-0" style="text-transform:lowercase">
                                      <input class="name" name="fname" type="text" placeholder="your name">
                                  </div>
                                  <div class="col-6 p-0">
                                      <input type="email" name="email" placeholder="your E-mail">
                                  </div>
                                  <div class="col-12 p-0">
                                      <input type="text" name="subject" placeholder="subject">
                                  </div>
                                  <div class="col-12 p-0">
                                      <textarea id="" name="message" cols="30" rows="10" placeholder="message"></textarea>
                                      <div class="">
                                        <?php
                                          if(isset($_GET['success'])){
                                            echo $_GET['success'];
                                          }
                                         ?>
                                      </div>
                                  </div>
                                  <div class="col-lg-12 p-0">
                                    <input type="file" name="contact_img">
                                      <button type="submit">send</button>
                                  </div>

                                  </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- narrow starts -->
                <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">
                        <div class="col-md-12 col-12 col-sm-4">
                          <div class="notice">
                              <h3>notice board</h3>

                              <?php
                                foreach ($result5 as $value) {


                               ?>
                              <div class="note-slick">
                                  <div class="note col-md-12 col-sm-12 col-12">
                                      <div class="row">
                                          <div class="col-md-1 col-1 col-sm-1 p-0">
                                            <?php $icon=explode(',',$value['icon']); ?>

                                              <i class="<?php echo $icon['0']; ?>"></i>
                                          </div>
                                          <div class="col-md-11 col-sm-11 col-11 p-0 n">
                                              <h6 style="display: inline-block"><?php echo $value['notice']; ?></h6>
                                              <p><i class="<?php echo $icon['1']; ?>"></i> <?php echo $value['notice_date']; ?></p>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                              <?php  } ?>
                          </div>
                        </div>
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="s-area">
                                <h3>student area</h3>

                                <ul>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>admission</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>examination</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>results</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>class routine</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>syllabus</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic calander</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>academic programs</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>activity</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>scholarship</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i>rover scout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="link">
                                <h3>useful links</h3>
                                <ul>
                                    <li><a href="#">ministry of education</a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">directorate of technical education board </a></li>
                                    <li><a href="#">skills &amp; Training enhancement project</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content part ends -->
<?php
require 'footer.php';
 ?>
