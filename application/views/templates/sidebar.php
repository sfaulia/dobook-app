<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Do'Book</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider --> 

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/index') ?>">
                    <i class="fas fa-fw fa-user-alt" ></i></i>
                    <span>Profile </span></a> 
            </li>
 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('donee/index') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Donee </span></a> 
            </li>

            <!-- Nav Item - Donation Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('donation/index') ?>" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-hand-holding-heart"></i>
                    <span>Donation</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Donee's Place:</h6>
                        <a class="collapse-item" href="<?php echo base_url('kategori/Jawa') ?>">Jawa</a>
                        <a class="collapse-item" href="<?php echo base_url('kategori/Kalimantan') ?>">Kalimantan</a>
                        <a class="collapse-item" href="<?php echo base_url('kategori/Papua') ?>">Papua</a>
                        <a class="collapse-item" href="<?php echo base_url('kategori/Sulawesi') ?>">Sulawesi</a>
                        <a class="collapse-item" href="<?php echo base_url('kategori/Sumatra') ?>">Sumatra</a>
                    </div>
                </div>
            </li>
          
          <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('chat/send_message') ?>">
                    <i class="fas fa-fw fa-comments" ></i></i>
                    <span>Feedback</span></a>
          </li>
		   <!-- Divider -->
            <hr class="sidebar-divider">
		   
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
			
			 <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <p class="text-center mb-2"><strong><h5>Contact Us</h5></strong><br><center> Silahkan hubungi kami jika ada kendala.</center></p>
               	<?php $no_wa = 6285717061202;?>
			   <a href ="https://wa.me/<?php echo $no_wa?>?text= Hai! Saya ingin bertanya." target="_blank" class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Chat Now!</a>
			</div>	

			<div class="sidebar-card d-none d-lg-flex">
                <p class="text-center mb-2"><strong><h5>About Us</h5></strong></p>
                <center>
                <a href ="https://www.instagram.com/dobookofficial/ " target="_blank"  class='fab fa-instagram fa-lg' style='color:#0a0a0a'></a>
                <br><br>
                <a href ="https://www.facebook.com/dobookofficial/ " target="_blank"  class='fab fa-facebook-square fa-lg' style='color:#0a0a0a'></a>
                <br><br>
                <a href ="https://www.youtube.com/dobookofficial/ " target="_blank"  class='fab fa-youtube-square fa-lg' style='color:#0a0a0a'></a>
                <br><br>
                <a href ="https://www.gmail.com/dobookofficial/ " target="_blank" class='fab fa-google fa-lg' style='color:#0a0a0a'></a>
                </center>
            </div>
	
        </ul>
		
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
						
						<div class= "navbar">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<?php $keranjang = 'Donation:' .$this->cart->total_items().''?>
								    <?php echo anchor ('dashboard/detail_keranjang',$keranjang) ?>
								</li>
							</ul>
							
							 <div class="topbar-divider d-none d-sm-block"></div>

								<ul class="na navbar-nav navbar-right">
									<?php if($this->session->userdata('username')) {?>
										<li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                        </li>

										<li class="ml-2" ><?php echo anchor('auth/logout','Logout') ?></li>
									<?php } else { ?>	
										<li><?php echo anchor('auth/login', 'Login'); ?></li>

									<?php } ?>
								
							     </ul>
							
                       
							</ul>
						
                </nav>
		
                <!-- End of Topbar -->
			
                