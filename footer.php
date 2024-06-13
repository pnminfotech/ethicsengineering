<!-- footer-area -->

   <!-- call-back-area -->
   <section class="call-back-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="call-back-content">
                            <div class="section-title white-title mb-10 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title">Request A Call Back</h2>
                            </div>
                            <p>At Ethics, we are committed to help our clients create a positive health, seftly and environmental culture within their organisations anywhere in the world.</p>
                            <div class="shape">
                                <img src="https://ik.imagekit.io/9ibvi4pru/images/call_back_shape.png" alt="" data-aos="fade-right" data-aos-delay="400">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-back-form">
                            	 <?php
                                        if(isset($_POST['enquiry-submit'])){
                                         
                                           $name       = @trim(stripslashes($_POST['name']));
                                           $email      =  @trim(stripslashes($_POST['email']));
                                           $phone      =  @trim(stripslashes($_POST['phone']));
                                       //    $message1  =  @trim(stripslashes($_POST['message']));
                                         
                                          $to = "response@ethicsconsultancy.net"; // this is your Email address
                                      //   $to = "tirupackindustries@gmail.com"; // this is your Email address
                                           $subject = @trim(stripslashes($_POST['subject']));
                                        
                                           $headers = "From: Contact Ethics Engineering <noreply@ethicsengineering.in>\r\n";
                                           $headers .= "Reply-To: noreply@ethicsengineering.in\r\n";
                                           $headers .= "MIME-Version: 1.0\r\n";
                                           $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                           $returnpath = '-f noreply@ethicsengineering.in';
                                        
                                           $message = 'Hello Sir <Br> You have received new Contact Enquiry From Ethics Engineering Website ';
                                           $message .= '<h3>Follwing are the Contact details</h3>';
                                           $message .= '<table><tr><td>Date :</td><td>'.date("d-m-Y").'</td></tr><tr><td>Name :</td><td>'.$name.'</td></tr><tr><td>Phone :</td><td>'.$phone.'</td></tr><tr><td>Mail :</td><td>'.$email.'</td></tr>';
                                         //  $message .= '<tr><td>Message :</td><td>'.$message1.'</td></tr>';
                                           $message .= '</table><br><br>Thank You <br><b>This is auto Generated Email.Plase do not reply on this mail</b>';
                                           /*$success = @mail($email_to, $name, $body, 'From: <'.$email_from.'>');*/
                                           
                                         if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $message1)) {
                                        
                                        echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                          }
                                          else{
                                           $mail= mail($to,$subject,$message,$headers,$returnpath);
                                           if($mail == 1){
                                            echo "<script type='text/javascript'>alert('Thank You. We will contact you soon')</script>";
                                           
                                        }else{
                                            echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                        }
                                          }
                                         }
                                        ?>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Name *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="E-mail *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="number" name="phone" placeholder="Phone *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit"  name="enquiry-submit" class="btn">Send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call-back-area-end -->
<footer>
        <div class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <div class="fw-logo">
                                    <a href='/'><img src="https://ik.imagekit.io/9ibvi4pru/logo/logo.webp" alt=""></a>
                                </div>
                                <div class="footer-content">
                                    <p>We ensure a Hands-On approach in Consultation, Auditing, and Training, providing effective outcomes to meet the varied requirements of our esteemed clientele to help them attain their business excellence goals.</p>
                                    <div class="footer-social">
                                        <ul class="list-wrap">
                                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Information</h4>
                                <div class="footer-info-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <a href="tel:0123456789">+91 9923645571</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <a href="mailto:response@ethicsconsultancy.net">response@ethicsconsultancy.net</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-pin"></i>
                                            </div>
                                            <div class="content">
                                                <p> A2 704, Rahul Park, Gate No.1, Near Vinayak Hospital, Warje-411058, Maharashtra, India.</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-pin"></i>
                                            </div>
                                            <div class="content">
                                                <p> Office 504, KP Square, Chinchwad, Pune, 411019</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Top Links</h4>
                                <div class="footer-link-list">
                                    <ul class="list-wrap">
                                        <li><a href='index.php'>Home</a></li>
                                        <li><a href='about.php'>About</a></li>
                                        <li class=""><a href="activities.php">Activities & Achievements</a></li>
                                        <li class=""><a href="awards.php">Awards & Recognition</a></li>
                                        <li class=""><a href="blog.php">Blog</a> </li>
                                        <li><a href='contact.php'>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">ISO Services</h4>
                                <div class="footer-instagram">
                                    <ul class="list-wrap">
                                        <li class="fw-bolder"><a href="iso9001.php">ISO 9001</a></li>
                                        <li class="fw-bolder"><a href="iso14001.php">ISO 14001</a></li>
                                        <li class="fw-bolder"><a href="iso27001.php">ISO 27001</a></li>
                                        <li class="fw-bolder"><a href="iso13485.php">ISO 13485</a></li>
                                        <li class="fw-bolder"><a href="iso50001.php">ISO 50001</a></li>
                                        <li class="fw-bolder"><a href="iso17025.php">ISO 17025</a></li>
                                        <li class="fw-bolder"><a href="iso31000.php">ISO 31000</a></li>
                                        <li class="fw-bolder"><a href="iso21001.php">ISO 21001</a></li>
                                        <li class="fw-bolder"><a href="iso22000.php">ISO 22000</a></li>
                                        <li class="fw-bolder"><a href="iso22301.php">ISO 22301</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                       
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <p>Copyright © <a >Ethics Consultancy</a> | All Right Reserved . 
                               Designed By  <a href="https://pnminfotech.com">PNM INFOTECH</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </footer>