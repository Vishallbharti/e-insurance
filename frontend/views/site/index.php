<?php



$this->title = 'My Yii Application';
?>
<head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<section>
    <div class="container custom-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/car4.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/car5.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/car6.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
      </section>
      <br>
      <!-- About Us -->
       <section>
         <div class="container">
           <div class="row">
             <div class="col-md-12 col-lg-4">
              <div class="card" style="height: 95%;">
                <img class="card-img-top" src="images/rampal1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">RamPal Gautam</h5>
                  <p class="card-text">"A brand is no longer what we tell the customer it is – it is what customers tell each other it is."</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
             </div>
             <div class="col-md-12 col-lg-8">
              <div class="card" style="height: 95%;">
                <div class="card-body">
                  <h5 class="card-title">I am <span style="color: darkgreen;">R</span>ampal <span style="color: darkgreen;">G</span>autam...</h5>
                  <p class="card-text">Policy or policy study may also refer to the process of making important 
                    organizational decisions, including the identification of different alternatives such as 
                    programs or spending priorities, and choosing among them on the basis of the impact they 
                    will have. Policies can be understood as political, managerial, financial, and administrative 
                    mechanisms arranged to reach explicit goals. In public corporate finance, a critical accounting 
                    policy is a policy for a firm/company or an industry that is considered to have a notably high
                    subjective element, and that has a material impact on the financial statements.</p>
                    <p>Policies can be understood as political, managerial, financial, and administrative 
                    mechanisms arranged to reach explicit goals. In public corporate finance, a critical accounting 
                    policy is a policy for a firm/company or an industry that is considered to have a notably high
                    subjective element, and that has a material impact on the financial statements.</p>
                    <p>Policy or policy study may also refer to the process of making important 
                    organizational decisions, including the identification of different alternatives such as 
                    programs or spending priorities, and choosing among them on the basis of the impact they 
                    will have. Policies can be understood as political, managerial, financial, and administrative 
                    mechanisms arranged to reach explicit goals. In public corporate finance, a critical accounting 
                    policy is a policy for a firm/company or an industry that is considered to have a notably high
                    subjective element, and that has a material impact on the financial statements.</p>
                 
                </div>
              </div>
            </div>
           </div>
         </div>
       </section>
      <!-- Types of insurance -->
    <section>
      <div class="container">
       <div class="row">
          <div class="col-md-4 col-lg-4">
            <div class="card">
              <img class="card-img-top" src="images/car1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
             </div>
            </hr>
             <div class="col-md-4 col-lg-4">
              <div class="card">
                <img class="card-img-top" src="images/car2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
             </div>
            </hr>
             <div class="col-md-4 col-lg-4">
              <div class="card">
                <img class="card-img-top" src="images/car3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
           </div>
        </div>
      </div>
    </section>
    <!-- Contact form  -->
  </br>
    <section>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title custom-title">Make contact with us</h5>
            <form>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Enter Your Name">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Enter Your Email Id">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputMobile" class="col-sm-2 col-form-label">Mobile No.</label>
                <div class="col-sm-10">
                  <input type="int" class="form-control" id="inputMobile" placeholder="Enter Your Mobile No.">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Comment:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- footer  -->


    <div class="container-fluid">
      <div class="card">
          <div class="heading text-center">
              <div class="head1">Just Scratching the Surface</div>
              <p class="bdr"></p>
          </div>
          <div class="card-body">
              <div class="row m-0 pt-5">
                  <div class="card col-12 col-md-3">
                      <div class="card-content custom-card-content"> <i class="fas fa-hand-holding-usd fa-3x"></i>
                          <div class="card-title custom-card-title"> RECHARGE REPEAT CUSTOMER </div>
                          <p><small>Save customers' cards for future phone orders</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
                  <div class="card col-12 col-md-3">
                      <div class="card-content custom-card-content"> <i class="far fa-handshake fa-3x"></i>
                          <div class="card-title custom-card-title"> ACCEPT ELECTRONIC CHECK </div>
                          <p><small>Save customers' cards for future phone orders</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
                  <div class="card col-12 col-md-3">
                      <div class="card-content custom-card-content"> <i class="fas fa-mobile-alt fa-3x"></i>
                          <div class="card-title custom-card-title"> STREAMLINE PHONE PAYMENTS </div>
                          <p><small>Save customers' cards for future phone orders</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
                  <div class="card col-12 col-md-3">
                      <div class="card-content custom-card-content"> <i class="fas fa-user-secret fa-3x"></i>
                          <div class="card-title custom-card-title"> STAY<br /> SECURE </div>
                          <p><small>Save customers' cards for future phone orders</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-footer row m-0">
              <p> <label> <i class="fas fa-phone fa-rotate-90 text-primary"></i> </label> 800-601-0230</p>
              <div>
                  <p> <small class="follow-text">FOLLOW US ON SOCIAL MEDIA</small> <label class="footer-right"> <i class="fab fa-instagram"></i> <i class="fab fa-facebook-square"></i> <i class="fab fa-linkedin"></i> <i class="fab fa-twitter-square"></i> </label> </p>
              </div>
          </div>
      </div>
  </div>
   
    <style>
         .wrap > .container {
                padding: 0px;
            }
    </style> 