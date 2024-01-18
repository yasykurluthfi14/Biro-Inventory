   
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
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="officer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                          
                            <a class="nav-link" href="officer.php?page=inventory_officer">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Inventory
                            </a>

            

                            <a class="nav-link" href="officer.php?page=pengembalianbarang_officer">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Pengembalian Barang 
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= $_SESSION['username'] ?>
                    </div>
                </nav>
            </div>