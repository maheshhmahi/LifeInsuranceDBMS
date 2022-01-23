<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <?php echo $name; ?>
        
    </div>
  </div>
  <hr>
   
  <div class="w3-bar-block">
    
    <a href="dashboard.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home "></i>  Home</a>
    <a href="displayclients.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users" aria-hidden="true"></i></i>  Clients</a>
   

          <!--- <a href="search.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money" aria-hidden="true"></i> CheckOut</a>--->
        <a href="search.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search" aria-hidden="true"></i> Search Client </a>
         <a href="displayagents.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users" aria-hidden="true"></i> Agents</a>
         <a href="messages.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comments-o" aria-hidden="true"></i> Messages </a>
         <a href="clientlogs.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book" aria-hidden="true"></i>Client Logs </a>
         <a href="paymentadmin.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money" aria-hidden="true"></i> Payments</a>
    
   <!---
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-question"></i>  Customer Support</a>--->
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa  fa-sign-out"></i>  Logout</a><br><br>
  </div>
</nav>