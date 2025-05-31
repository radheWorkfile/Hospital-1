  <!-- <?//php $activeIcon = $this->router->fetch_class() . $this->router->fetch_function();?> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">

<style>
  .text-b{color:rgba(0, 0, 0, 0.9);}
</style>



    <div class="page-wrapper">
      <div class="main-container">
        <nav id="sidebar" class="sidebar-wrapper">
          <div class="brand-container d-flex align-items-center justify-content-between">
            <div class="app-brand ms-3">
              <a href="index-2.html">
                <img src="<?php echo base_url();?>soft_assets/img/Logo.png" class="logo" alt="Medicare Admin Template">
              </a>
            </div>
            <button type="button" class="pin-sidebar me-3">
              <i class="ri-menu-line"></i>
            </button>
          </div>
         



          <div class="sidebarMenuScroll" style="height:72vh;">
            <ul class="sidebar-menu">
              
              <li class="current-page">
              <a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fas fa-tv text-b"></i>
              <span class="menu-text font-f">Dashboard</span></a>
              </li>

               <li><a href="<?php echo base_url('admin/dashboard');?>">
              <i class="fa fa-medkit text-b" aria-hidden="true"></i><span class="menu-text font-f">Docter</span></a>
              </li>

              <li><a href="<?php echo base_url('admin/dashboard');?>">
              <i class="fa fa-medkit text-b" aria-hidden="true"></i><span class="menu-text font-f">Patient</span></a>
              </li>

              <li><a href="doc-appointments.html">
             <i class="fa fa-calendar-check text-b" aria-hidden="true"></i><span class="menu-text font-f">Appointments</span></a>
              </li>


              <li>
                <a href="dashboard3.html">
                 <i class="fa-solid fa-stethoscope text-b"></i>
                  <span class="menu-text font-f">OPD Out-Patient</span>
                </a>
              </li>

              <li>
                <a href="doctors-grid.html">
                  <i class="fas fa-procedures text-b"></i>
                  <span class="menu-text font-f">IPD In-Patient</span>
                </a>
              </li>

               <li><a href="<?php echo base_url('admin/dashboard');?>">
              <i class="fas fa-file-invoice text-b"></i><span class="menu-text font-f">Billing</span></a>
              </li>

                <li>
                <a href="doctors-grid.html">
                 <i class="fas fa-mortar-pestle text-b"></i>
                  <span class="menu-text font-f">Pharmacy</span>
                </a>
              </li>

                <li>
                <a href="doctors-grid.html">
                  <i class="fa fa-flask text-b" aria-hidden="true"></i>
                  <span class="menu-text font-f">Pathology</span>
                </a>
              </li>


              <li>
                <a href="doctors-grid.html">
                 <i class="fa-solid fa-microscope text-b"></i>
                  <span class="menu-text font-f">Radiology</span>
                </a>
              </li>

              <li>
                <a href="doctors-grid.html">
                  <i class="fa fa-tint text-b" aria-hidden="true"></i>
                  <span class="menu-text font-f">Blood Bank</span>
                </a>
              </li>

              <li>
                <a href="doctors-grid.html">
                  <i class="fa fa-ambulance text-b" aria-hidden="true"></i>
                  <span class="menu-text font-f">Ambulance</span>
                </a>
              </li>

                            
              <li class="treeview">
                <a href="#!">
                 <i class="fa fa-birthday-cake text-b" aria-hidden="true"></i>
                  <span class="menu-text">Birth-Death Recorde</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="salaries.html">Birth Record</a>
                  </li>
                  <li>
                    <a href="payslip.html">Death Record</a>
                  </li>
                </ul>
              </li>


              <li>
                <a href="doctors-grid.html">
                  <i class="fa fa-users text-b" aria-hidden="true"></i>
                  <span class="menu-text font-f">Referal</span>
                </a>
              </li>

              <li>
                <a href="doctors-grid.html">
                 <i class="fa-solid fa-bullhorn text-b"></i>
                  <span class="menu-text font-f">Message</span>
                </a>
              </li>

              <li>
                <a href="doctors-grid.html">
                  <i class="fa fa-line-chart text-b" aria-hidden="true"></i>
                  <span class="menu-text font-f">Report</span>
                </a>
              </li>

<!--               
              <li class="treeview">
                <a href="#!">
                  <i class="ri-money-dollar-circle-line"></i>
                  <span class="menu-text">Salaries</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="salaries.html">Salary List</a>
                  </li>
                  <li>
                    <a href="payslip.html">Payslip</a>
                  </li>
                </ul>
              </li> -->


            </ul>
          </div>




    <div class="sidebar-contact log-out">
   <a href="<?php echo base_url('login/logout');?>">
     <h5 class="fw-normal text-nowrap text-truncate pb-1 text-white"><b>Logout</b></h5>
    <i class="ri-login-circle-line text-white"></i>
   </a>
    </div>
      
    </nav>
    <div class="app-container">