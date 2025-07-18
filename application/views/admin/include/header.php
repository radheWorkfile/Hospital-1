
          <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Brand container sm starts -->
            <div class="brand-container-sm d-xl-none d-flex align-items-center">

              <!-- App brand starts -->
              <div class="app-brand">
                <a href="index-2.html">
                  <img src="<?php echo base_url();?>soft_assets/img/Logo.png" class="logo" alt="Medicare Admin Template">
                </a>
              </div>
              <!-- App brand ends -->

              <!-- Toggle sidebar starts -->
              <button type="button" class="toggle-sidebar">
                <i class="ri-menu-line"></i>
              </button>
              <!-- Toggle sidebar ends -->

            </div>
            <!-- Brand container sm ends -->

            <!-- Search container starts -->
            <div class="search-container d-xl-block d-none">
              <input type="text" class="form-control" id="searchId" placeholder="Search">
              <i class="ri-search-line"></i>
            </div>
            <!-- Search container ends -->

            <!-- App header actions starts -->
            <div class="header-actions">

              <!-- Header actions starts -->
              <div class="d-lg-flex d-none gap-2">

                <!-- Select country dropdown starts -->
                <div class="dropdown">
                  <a class="dropdown-toggle header-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="<?php echo base_url();?>soft_assets/images/flags/1x1/fr.svg" class="header-country-flag" alt="Bootstrap Dashboards">
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-mini">
                    <div class="country-container">
                      <a href="index-2.html" class="py-2">
                        <img src="<?php echo base_url();?>soft_assets/images/flags/1x1/us.svg" alt="Admin Panel">
                      </a>
                      <a href="index-2.html" class="py-2">
                        <img src="<?php echo base_url();?>soft_assets/images/flags/1x1/in.svg" alt="Admin Panels">
                      </a>
                      <a href="index-2.html" class="py-2">
                        <img src="<?php echo base_url();?>soft_assets/images/flags/1x1/br.svg" alt="Admin Dashboards">
                      </a>
                      <a href="index-2.html" class="py-2">
                        <img src="<?php echo base_url();?>soft_assets/images/flags/1x1/tr.svg" alt="Admin Templatess">
                      </a>
                      <a href="index-2.html" class="py-2">
                        <img src="<?php echo base_url();?>soft_assets/images/flags/1x1/gb.svg" alt="Google Admin">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Select country dropdown ends -->

                <!-- Bookmarks starts -->
                <div class="dropdown">
                  <a class="dropdown-toggle header-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ri-star-line"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">
                    <h5 class="fw-semibold px-3 py-2 text-primary">Bookmarks</h5>

                    <div class="d-flex justify-content-center gap-3">
                      <a href="doctors-cards.html" class="text-center">
                        <div class="icon-box lg bg-primary-subtle rounded-5 mb-1">
                          <i class="ri-stethoscope-line text-primary fs-4"></i>
                        </div>
                        Doctors
                      </a>
                      <a href="staff.html" class="text-center">
                        <div class="icon-box lg bg-primary-subtle rounded-5 mb-1">
                          <i class="ri-nurse-line text-primary fs-4"></i>
                        </div>
                        Staff
                      </a>
                      <a href="patients-list.html" class="text-center">
                        <div class="icon-box lg bg-primary-subtle rounded-5 mb-1">
                          <i class="ri-group-2-line text-primary fs-4"></i>
                        </div>
                        Patients
                      </a>
                    </div>

                    <!-- View all button starts -->
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Add New Bookmark</a>
                    </div>
                    <!-- View all button ends -->

                  </div>
                </div>
                <!-- Bookmarks ends -->

                <!-- Notifications dropdown starts -->
                <div class="dropdown">
                  <a class="dropdown-toggle header-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ri-list-check-3"></i>
                    <span class="count-label warning"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">
                    <h5 class="fw-semibold px-3 py-2 text-primary">Activity</h5>

                    <!-- Scroll starts -->
                    <div class="scroll300">

                      <!-- Activity List Starts -->
                      <div class="p-3">
                        <ul class="p-0 activity-list2">
                          <li class="activity-item pb-3 mb-3">
                            <a href="#!">
                              <h5 class="fw-regular">
                                <i class="ri-circle-fill text-danger me-1"></i>
                                Invoices.
                              </h5>
                              <div class="ps-3 ms-2 border-start">
                                <div class="d-flex align-items-center mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="<?php echo base_url();?>soft_assets/images/products/1.jpg" class="img-3x rounded-1"
                                      alt="Hospital Admin Templates">
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    23 invoices have been paid to the MediCare Labs.
                                  </div>
                                </div>
                                <p class="m-0 small">10:20AM Today</p>
                              </div>
                            </a>
                          </li>
                          <li class="activity-item pb-3 mb-3">
                            <a href="#!">
                              <h5 class="fw-regular">
                                <i class="ri-circle-fill text-info me-1"></i>
                                Purchased.
                              </h5>
                              <div class="ps-3 ms-2 border-start">
                                <div class="d-flex align-items-center mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="<?php echo base_url();?>soft_assets/images/products/2.jpg" class="img-3x rounded-1"
                                      alt="Hospital Admin Templates">
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    28 new surgical equipments have been purchased.
                                  </div>
                                </div>
                                <p class="m-0 small">04:30PM Today</p>
                              </div>
                            </a>
                          </li>
                          <li class="activity-item pb-3 mb-3">
                            <a href="#!">
                              <h5 class="fw-regular">
                                <i class="ri-circle-fill text-success me-1"></i>
                                Appointed.
                              </h5>
                              <div class="ps-3 ms-2 border-start">
                                <div class="d-flex align-items-center mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="<?php echo base_url();?>soft_assets/images/products/8.jpg" class="img-3x rounded-1"
                                      alt="Hospital Admin Templates">
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    36 new doctors and 28 staff members appointed.
                                  </div>
                                </div>
                                <p class="m-0 small">06:50PM Today</p>
                              </div>
                            </a>
                          </li>
                          <li class="activity-item">
                            <a href="#!">
                              <h5 class="fw-regular">
                                <i class="ri-circle-fill text-warning me-1"></i>
                                Requested
                              </h5>
                              <div class="ps-3 ms-2 border-start">
                                <div class="d-flex align-items-center mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="<?php echo base_url();?>soft_assets/images/products/9.jpg" class="img-3x rounded-1"
                                      alt="Hospital Admin Templates">
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    Requested for 6 new vehicles for medical emergency. .
                                  </div>
                                </div>
                                <p class="m-0 small">08:30PM Today</p>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- Activity List Ends -->

                    </div>
                    <!-- Scroll ends -->

                    <!-- View all button starts -->
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                    </div>
                    <!-- View all button ends -->

                  </div>
                </div>
                <!-- Notifications dropdown ends -->

                <!-- Notifications dropdown starts -->
                <div class="dropdown">
                  <a class="dropdown-toggle header-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ri-alarm-warning-line"></i>
                    <span class="count-label success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">
                    <h5 class="fw-semibold px-3 py-2 text-primary">Alerts</h5>

                    <!-- Scroll starts -->
                    <div class="scroll300">

                      <!-- Alert list starts -->
                      <div class="p-3">
                        <div class="d-flex py-2">
                          <div class="icon-box md bg-primary rounded-circle me-3">
                            <span class="fw-bold fs-6 text-white">BS</span>
                          </div>
                          <div class="m-0">
                            <h6 class="mb-1 fw-semibold">Becky Shah</h6>
                            <p class="mb-1">
                              Appointed as a new President 2014-2025
                            </p>
                            <p class="small m-0 opacity-50">Today, 07:30pm</p>
                          </div>
                        </div>
                        <div class="d-flex py-2">
                          <div class="icon-box md bg-primary rounded-circle me-3">
                            <span class="fw-bold fs-6 text-white">UF</span>
                          </div>
                          <div class="m-0">
                            <h6 class="mb-1 fw-semibold">Ursula Frazier</h6>
                            <p class="mb-1">
                              Congratulate, James for new job.
                            </p>
                            <p class="small m-0 opacity-50">Today, 08:00pm</p>
                          </div>
                        </div>
                        <div class="d-flex py-2">
                          <div class="icon-box md bg-primary rounded-circle me-3">
                            <span class="fw-bold fs-6 text-white">MK</span>
                          </div>
                          <div class="m-0">
                            <h6 class="mb-1 fw-semibold">Myra Kane</h6>
                            <p class="mb-1">
                              Lewis added new doctors training schedule.
                            </p>
                            <p class="small m-0 opacity-50">Today, 09:30pm</p>
                          </div>
                        </div>
                      </div>
                      <!-- Alert list ends -->

                    </div>
                    <!-- Scroll ends -->

                    <!-- View all button starts -->
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                    </div>
                    <!-- View all button ends -->

                  </div>
                </div>
                <!-- Notifications dropdown ends -->

                <!-- Messages dropdown starts -->
                <div class="dropdown">
                  <a class="dropdown-toggle header-icon" href="#!" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ri-message-3-line"></i>
                    <span class="count-label"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">
                    <h5 class="fw-semibold px-3 py-2 text-primary">Messages</h5>

                    <!-- Scroll starts -->
                    <div class="scroll300">

                      <!-- Messages list starts -->
                      <div class="p-3">
                        <div class="d-flex py-2">
                          <img src="<?php echo base_url();?>soft_assets/images/doctor3.png" class="img-3x me-3 rounded-5"
                            alt="Hospital Admin Templates">
                          <div class="m-0">
                            <h6 class="mb-1 fw-semibold">Albert Winters</h6>
                            <p class="mb-1">
                              Appointed as a new President 2014-2025
                            </p>
                            <p class="small m-0 opacity-50">Today, 07:30pm</p>
                          </div>
                        </div>
                        <div class="d-flex py-2">
                          <img src="<?php echo base_url();?>soft_assets/images/doctor1.png" class="img-3x me-3 rounded-5"
                            alt="Hospital Admin Templates">
                          <div class="m-0">
                            <h6 class="mb-1 fw-semibold">Van Robinson</h6>
                            <p class="mb-1">
                              Congratulate, James for new job.
                            </p>
                            <p class="small m-0 opacity-50">Today, 08:00pm</p>
                          </div>
                        </div>
                        <div class="d-flex py-2">
                          <img src="<?php echo base_url();?>soft_assets/images/doctor4.png" class="img-3x me-3 rounded-5"
                            alt="Hospital Admin Templates">
                          <div class="m-0">
                            <h6 class="mb-1 fw-semibold">Mara Coffey</h6>
                            <p class="mb-1">
                              Lewis added new doctors training schedule.
                            </p>
                            <p class="small m-0 opacity-50">Today, 09:30pm</p>
                          </div>
                        </div>
                      </div>
                      <!-- Messages list ends -->

                    </div>
                    <!-- Scroll ends -->

                    <!-- View all button starts -->
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                    </div>
                    <!-- View all button ends -->

                  </div>
                </div>
              </div>
              <!-- Header actions ends -->

              <!-- Header user settings starts -->
              <div class="dropdown ms-3">
                <a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="avatar-box">
                    <img src="<?php echo base_url();?>soft_assets/images/doctor5.png" class="img-2xx rounded-5" alt="Medical Dashboard">
                    <span class="status busy"></span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">
                  <div class="px-3 py-2">
                    <span class="small">Admin</span>
                    <h6 class="m-0">Max Goodwin</h6>
                  </div>
                  <div class="mx-3 my-2 d-grid">
                    <a href="login.html" class="btn btn-danger">Logout</a>
                  </div>
                </div>
              </div>
              <!-- Header user settings ends -->

            </div>
            <!-- App header actions ends -->

          </div>
          <!-- App header ends -->

      