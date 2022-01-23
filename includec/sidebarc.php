<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <?php echo $name; ?>
        
    </div>
  </div>
  <hr>
   
  <div class="w3-bar-block">
    
    <a href="dashboardc.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home "></i>  Home</a>
    <a href="insurance.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users" aria-hidden="true"></i></i> Insurance</a>
    <!---<a href="agent.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users" aria-hidden="true"></i></i> Agents</a>
      --->
         <a href="client_pay.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money" aria-hidden="true"></i>Payment</a>
        <a href="bills.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search" aria-hidden="true"></i> My bills </a>
   <!---      <a href="searcha.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search" aria-hidden="true"></i> Search Agent </a>
    
   
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-question"></i>  Customer Support</a>--->
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa  fa-sign-out"></i>  Logout</a><br><br>
  </div>
</nav>