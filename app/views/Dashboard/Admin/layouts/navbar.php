 <!-- Navbar -->
 <!-- <section class="home-section"> -->
 <nav>
     <div class="sidebar-button">
         <i class="bx bx-menu sidebarBtn"></i>

     </div>
     <div class="search-box">
         <input type="text" placeholder="Recherche..." />
         <i class="bx bx-search"></i>
     </div>
     <div class="dashboard">
         <?php
            echo $_SESSION['email'];
             ?>
     </div>
 </nav>
 <!-- </section> -->
 <!-- Fin Navbar -->