<?php
date_default_timezone_set('Your/Timezone'); 
$time = date("H:i:s");
?>    
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-center">
    <ol class="breadcrumb"><li class="breadcrumb-item font-f"> <a href="index-2.html">
    <i class="ri-home-3-line"></i> </a>&nbsp; <?php echo $title;?></li> </ol>
    <div class="ms-auto d-lg-flex d-none flex-row"><div class="input-group">
    <span class="input-group-text bg-primary-lighten"> <i class="ri-calendar-2-line text-primary"></i>&nbsp;<span class="fw-bold text-succss"><?= date('Y-m-d');?></span>&nbsp;|&nbsp;<span class="fw-bold" id="clock"><?= $time ?></span>
    </span>  </div> </div> </div>
    <!-- App Hero header ends --> 


<section class="mt-3">
  <div class="container">
    <div class="row">


      <!-- ------------------------------------- -->
      <div class="col-md-8">
        <div class="d-flex" style="background-color:#73cccd; border-radius:10px 10px 0px 0px;">
        <h4 class="mt-3 fw-bold px-4 text-white font-phi text-shadow"><i class="fa fa-cog text-small" aria-hidden="true"></i>&nbsp;Basic Setting</h4>
        <p class="mt-3 px-4 text-white ms-auto"><i class="fa fa-arrow-left py-2 px-2" style="background-color:rgba(32, 175, 139, 1); border-radius:0.5rem;" aria-hidden="true"></i></p>
        </div>
        <!-- ------------------------------------- -->
         <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Company Name <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="fa fa-user t-das" aria-hidden="true"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>


                      <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Mobile Number <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="ri-account-circle-line"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>

                      <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Email-Id <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="ri-account-circle-line"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>

                      <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Address <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="ri-account-circle-line"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>


                      <div class="col-xxl-12 col-lg-12 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">@ All right Reserved<span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="ri-account-circle-line"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>


                      <div class="col-xxl-12 col-lg-12 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">About Company <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="fa fa-map-marker t-das" aria-hidden="true"></i>
                          </span>
                           <textarea name="" id="" class="form-control" row=""></textarea>
                          </div>
                          </div>
                      </div>


                      <div class="col-sm-12">
                            <div class="d-flex gap-2 justify-content-end">
                              <a href="patients-list.html" type="button" class="btn btn-outline-secondary">
                                Cancel
                              </a>
                              <a href="patients-list.html" type="button" class="btn btn-primary">
                                Create Patient Profile
                              </a>
                            </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
        <!-- ------------------------------------- -->


         <div class="row gx-3 my-3">
              <div class="col-sm-12">
                <div class="card" style="border-top:4px solid #28a6a7;">
          <h4 class="px-4 py-2 font-f t-das fw-bold">Social Media </h3><hr class="m-top-1">
                  <div class="card-body">
                    <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Fasbook Link <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="fas fa-link t-das"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>


                      <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Instagram Link <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                           <i class="fas fa-link t-das"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>

                      <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Teligram Link <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="fas fa-link t-das"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>

                       <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Youtube Link <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                           <i class="fas fa-link t-das"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>

                       <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">Linkdin Link <span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                           <i class="fas fa-link t-das"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>

                       <div class="col-xxl-6 col-lg-6 col-sm-12">
                          <div class="mb-3">
                          <label class="form-label t-das" for="a1">About Company<span class="text-danger">*</span></label>
                          <div class="input-group m-top-1">
                          <span class="input-group-text">
                          <i class="fas fa-link t-das"></i>
                          </span>
                          <input type="text" class="form-control" id="a1" placeholder="Enter First Name">
                          </div>
                          </div>
                      </div>


                      <div class="col-sm-12">
                            <div class="d-flex gap-2 justify-content-end">
                              <a href="patients-list.html" type="button" class="btn btn-outline-secondary">
                                Cancel
                              </a>
                              <a href="patients-list.html" type="button" class="btn btn-primary">
                                Create Patient Profile
                              </a>
                            </div>
                      </div>

                      


                    </div>
                  </div>
                </div>
              </div>
            </div>



        <!-- ------------------------------------- -->


      </div>
      <!-- ------------------------------------- -->



    <div class="col-md-4">


        <div class="card">
        <div class="d-flex" style="background-color:#73cccd; border-radius:10px 10px 0px 0px;">
        <h4 class="mt-3 fw-bold px-4 text-white font-phi text-shadow"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;Update Logo</h4>
        <p class="mt-3 px-4 text-white ms-auto"><i class="fa fa-arrow-left py-2 px-2" style="background-color:rgba(32, 175, 139, 1); border-radius:0.5rem;" aria-hidden="true"></i></p>
        </div>
        <div class="row px-3 py-2">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident rem voluptatibus necessitatibus dolore blanditiis unde minus, maiores sit, sed repellendus et aperiam suscipit libero distinctio consequatur odio ex optio ea rerum maxime praesentium?</p>
        </div>
        </div>


        <div class="card p-3 my-3"style="border-top:4px solid #28a6a7;">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident rem voluptatibus necessitatibus dolore blanditiis unde minus, maiores sit, sed repellendus et aperiam suscipit libero distinctio consequatur odio ex optio ea rerum maxime praesentium?</p>
        </div>


        <div class="card p-3 my-3"style="border-top:4px solid #28a6a7;">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident rem voluptatibus necessitatibus dolore blanditiis unde minus, maiores sit, sed repellendus et aperiam suscipit libero distinctio consequatur odio ex optio ea rerum maxime praesentium?</p>
        </div>


        <div class="card p-3 my-3"style="border-top:4px solid #28a6a7;">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident rem voluptatibus necessitatibus dolore blanditiis unde minus, maiores sit, sed repellendus et aperiam suscipit libero distinctio consequatur odio ex optio ea rerum maxime praesentium?</p>
        </div>



    


    </div>

    


    </div>
  </div>
</section>