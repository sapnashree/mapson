<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include_once "header.php"; ?>

<style>
 .flex-container {
            flex: 1;
            display: flex;
            flex-direction: column;  
             align-items: center;
           background: #e1ebf4;
           border-radius:5px;
           box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
           height: 130vh;
           width: 160px;
              position: relative;
              left:315px
        }


.flex-container > div {
    width: 113px;
    margin: 40px;
    text-align: center;
    font-size: 18px;
        }
         /* Responsive styles for smaller screens */
         @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }

            .item,
  .flex-container,
  .box {
    width: 100%; /* Take full width on small screens */
  }
  .flex-container {
            flex: 1;
            display: flex;
            flex-direction: column;   align-items: center;
           background: #e1ebf4;border-radius:5px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
           height: 43vh;
    width: 90%;
    position: relative;
    left: 5%;
        }
}
        
.container3 {
  display: flex;
  flex-direction: row;
}

.box {
  width: 33.3%;
  padding: 10px;
 border-radius:5px;margin:10px;
           /*box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;*/
  display: flex;
  flex-direction: column; 
  align-items: center;
  justify-content: center; 
  text-align: center; 
}

</style>



    <!-- Page Banner Start -->
    <section id="page_banner" class="border_b" style="background: url(images/contact.jpg) no-repeat 0 0;
    background-size: cover;
    background-attachment: fixed;" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-right">
            <ol class="breadcrumb">
              <li><a href="#">You are here:</a></li>
              <li><a href="#">Home</a></li>
              <li class="active">Contact Form</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Banner End -->

    <!-- Contact Us Start -->
    <section id="contact_form" class="p-t-60 p-b-100">
      <div class="container">
        <div class="row">
          <div class="contact-form col-md-8 col-sm-12 p-b-10">
            <div class="heading">
             
              <h2>Contact Form</h2>
              <div class="heading_border bg_red"></div>
            </div>
            <div class="row p-t-40">
                
                                <form action="send-mail-inquiry.php" method="post" class="wpcf7-form"style="    width: 100%;">
                                <div class="contact-form-holder">
                                  <div id="contact-form"> 
                                  <span class="wpcf7-form-control-wrap your-name" >
                                    <input type="text" name="name" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" style="width:49.5%; padding: 7px;    margin: 10px 0;border:1px solid black;border-radius:5px" required/>
                                    </span>
                                 
                                    <span class="wpcf7-form-control-wrap your-number">
                                    <input type="text" name="mobile" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" style="width:49.5%;padding: 7px;    margin: 10px 0;border:1px solid black;border-radius:5px"  aria-invalid="false" placeholder="Phone no"   maxlength="10" required/>
                                    </span><br />
                                      <span class="wpcf7-form-control-wrap your-Company">
                                    <input type="text" name="Company" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required " style="width: 100%;padding: 7px;    margin: 10px 0;border:1px solid black;border-radius:5px"  aria-required="true" aria-invalid="false" placeholder="Company" required/>
                                    </span><br />
                                    <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" style="width: 100%;padding: 7px;    margin: 10px 0;border:1px solid black;border-radius:5px"  aria-required="true" aria-invalid="false" placeholder="E-mail" required/>
                                    </span><br />
                                    <span class="wpcf7-form-control-wrap your-name" >
                                    <input type="text" name="City" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="City" style="width:49.5%; padding: 7px;    margin: 10px 0;border:1px solid black;border-radius:5px" required/>
                                    </span>
                                      <span class="wpcf7-form-control-wrap your-name" >
                                    <input type="text" name="Country" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Country" style="width:49.5%; padding: 7px;    margin: 10px 0;border:1px solid black;border-radius:5px" required/>
                                    </span>
                                    <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="comments" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" style="width: 100%;padding: 7px;    margin: 10px 0;border-radius:5px;border:1px solid black;" placeholder="Message"></textarea>
                                    </span><br />
                                    <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit" id="submit" style="  border-radius: 25px;  background: #00aeee; color: #fff; border: 0; padding: 10px 30px; cursor: pointer; font-weight: 700;    display: block;" />
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                              </form>
            </div>
          </div>
          <div class="flex-container">
        
        <div> <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&emr=1&ifkv=AYZoVhfVPP3fb0a7u14AIvJ3AyWAtWzUblepmzd0nq5zXDqTH0-f3UJlCSfySqmBl7_AybbIlIzRzw&ltmpl=default&ltmplcache=2&osid=1&passive=true&rm=false&scc=1&service=mail&ss=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1207123742%3A1696234097340164&theme=glif" target="_blank"> <i class="fa fa-envelope" style="font-size:24px;color:#002e5b" ></i></a> <br><span style="font-size:13px;color:#002e5b">CONTACT</span> </div>
         <div><a href="tel:+498684181267"><i class="fa fa-phone" style="font-size:24x;color:#002e5b;margin-top: 6px;"></i></a> <br><span style="font-size:13px;color::#002e5b">PHONE</span></div> 
          
</div>
</div>
          <!--<div class="col-md-4 col-sm-12 col-xs-12">-->
          <!--  <div class="form_left">-->
          <!--    <h3 class="text-uppercase"><span>&#9742;</span>Social Media</h3>-->
          <!--    <p>If you have any query please contact us</p>-->
          <!--    <div class="social-icons_1 p-t-30">-->
          <!--      <ul>-->
          <!--        <li>-->
          <!--          <a-->
          <!--            href="https://www.facebook.com/Mapsons-Process-Equipment-PVT-LTD-469662736934940/"-->
          <!--            ><i aria-hidden="true" class="fa fa-facebook"></i-->
          <!--          ></a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <a href="https://twitter.com/mapsonsindia"-->
          <!--            ><i aria-hidden="true" class="fa fa-twitter"></i-->
          <!--          ></a>-->
          <!--        </li>-->
          <!--        <li>-->
          <!--          <a href="https://www.linkedin.com/company/14733811/"-->
          <!--            ><i aria-hidden="true" class="fa fa-linkedin"></i-->
          <!--          ></a>-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </div>-->
          <!--  </div>-->

          <!--  <div class="form_left p-t-80">-->
          <!--    <h3 class="text-uppercase"><span>&#9742;</span>Get in Touch</h3>-->
          <!--    <div class="over_image">-->
          <!--      <img src="images/update_bg.png" alt="image" />-->
          <!--    </div>-->

          <!--    <div class="updates">-->
          <!--      <p>-->
          <!--        Subscribe to our newsletters to receive latest news and-->
          <!--        updates.-->
          <!--      </p>-->
          <!--      <form class="p-t-25">-->
          <!--        <div class="col-md-12">-->
          <!--          <input type="text" placeholder="Name" />-->
          <!--        </div>-->
          <!--        <div class="col-md-10">-->
          <!--          <input type="email" class="email" placeholder="Email" />-->
          <!--        </div>-->
          <!--        <div class="col-md-2">-->
          <!--          <input type="submit" class="submit" value="" />-->
          <!--          <span-->
          <!--            ><a href="#"><i class="icon-mail-envelope-closed3"></i></a-->
          <!--          ></span>-->
          <!--        </div>-->
          <!--      </form>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </section>
    <!-- Contact Us End -->
   <div class="container3">
     <div class="box">
            <div><a href="tel:+498684181267"><i class="fa fa-phone" style="font-size:24px;color:#002e5b;margin-top: 6px;"></i></a> <br><span style="font-size:15px;color::#002e5b">PHONE</span>
 </div> 
     </div>
    <div class="box"> 
        <div> <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&emr=1&ifkv=AYZoVhfVPP3fb0a7u14AIvJ3AyWAtWzUblepmzd0nq5zXDqTH0-f3UJlCSfySqmBl7_AybbIlIzRzw&ltmpl=default&ltmplcache=2&osid=1&passive=true&rm=false&scc=1&service=mail&ss=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1207123742%3A1696234097340164&theme=glif" target="_blank"> <i class="fa fa-envelope" style="font-size:24px;color:#002e5b" ></i></a> <br><span style="font-size:15px;color:#002e5b">CONTACT</span>
       </div>
     </div>
     <div class="box"> 
        <div> <a href="http://mapsons.vedhindia.com/" target="_blank"> <img src="images/website.png" style="width:25px;"></a> <br><span style="font-size:15px;color:#002e5b">WEBSITE</span>
       </div>
     </div>
   
  </div><br>
     
        <?php include_once "footer.php" ;?>
     </body>
</html>













































