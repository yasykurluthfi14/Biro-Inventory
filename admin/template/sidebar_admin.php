   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->

      <?php 
   $_SESSION['jenis_user'];
?>
      <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            
                            <div class="sb-sidenav-menu-heading">core</div>

                            <a class="nav-link" href="admin.php?page=main_inventory">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Main Inventaris
                            </a>
                           

                            <a class="nav-link" href="admin.php?page=inventory_admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Inventaris
                            </a>

                           

                          
                            
                            <a class="nav-link" href="admin.php?page=pengembalianbarang_admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pengembalian Barang
                            </a>

                            
                            <div class="sb-sidenav-menu-heading">User</div>

                            <a class="nav-link" href="admin.php?page=kelola_user">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kelola User
                            </a>
                            <div class="sb-sidenav-menu-heading">room</div>

                            <ul class="navbar-nav ms-auto ms-md-5 me-3 me-lg-4">
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" >Room</a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="admin.php?page=room_inventory">Inventaris</a></li>
                                         </ul>
                                 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= $_SESSION['username'] ?>
                    </div>
                </nav>
            </div>