<?php
error_reporting(0);
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<html lang="en">
<head>
  <title>Welcome | Life Style Store</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="includes/index.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
     
 </head>
   <body>
    
        <div class="content">
          <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
         ?>
         <div class="container-fluid">
         <div class="col-md-6 col-sm-6">
         <div class="caption">  
          <h2>Live Support</h2>
          <h4>24 hours | 7 days a weeks | 365 a year days Live Technical Support</h4><br>
          <p>Our customer service and sales CRM software is designed to create better customer relationships.
           Build the best customer experiences with Zendesk Photo: Customer support. 
         Product screenshot: Support chat. Live chat and messaging ...</p>
        </div>
         </div><br><br>
         <div class="col-md-6 col-sm-6">
         <div class="caption">  
           <img src="img/customer.jpg" class="thumbnails" alt="" >
         </div>
       </div>
        <div class="col-md-6 col-sm-6">
         <div class="caption">
           <h2>Contact Us</h2>
           <form>
          <div class="form-group">
              <label for="exampleinputname">Name</label>
              <input type="text" class="form-control" id="exampleinputname" arial-describedby="Namehelp" placeholder="Enter Name">
              <small id="Namehelp" class="font-text text-muted"></small>
           </div>
              <div class="form-group">
          <label for="exampleinputEmail">Email</label>
          <input type="email"class="form-control" id="exampleinputEmail" arial-describedby="Emailhelp" placeholder="Enter email">
          <small id="emailhelp" class="font-text text-muted"> We'll never share your email with anyone else.</small>
              </div>
             <div class="form-group">
            <label for="examplefromcontrolTextareal">Message</label>
        <textarea class="form-control" rows="4"></textarea><br>
        <button type="submit" name="submit" class="btn btn-primary" >Submit</button><br><br>
        </form><br><br><br>
        </div>
        </div>
        </div> 
        <div class="col-md-6 col-sm-6">
         <div class="caption">
           <h2>Company Information:</h2>
           <p>Sector:55-D.Chandigarh,N.H44,Near:shukhnalake<br>
             punjab,India<br>Email:rahulestor@gmail.com<br>Mobile no:995543795<br>Fax no:880000 000 00<br>Follow on facebook,twitter,instagram</p>
            
         </div>
       </div>
   </div>
</div>
     <?php include("includes/footer.php"); ?>
</body>
</html>
