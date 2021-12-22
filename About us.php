<?php
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
      <div class="container">
         <div class="content">
           <?php include 'includes/header.php'; ?>
             <div class="container-fluid">
              <div class="col-md-3 col-sm-12">
                 <div class="caption">
              <h4>Key Highlights</h4>
            <img src="img/about-img.jpg" class="thumbnails" alt="" >
               <p> 

                 Pan India presence: Services offered all over India across 250+ cities.
                First-mover advantage: Being the industry pioneer, Justdial has a robust presence in all cities and towns of India including deep penetration in Tier II and III cities.
                Advanced and scalable technology platform: A vast range of features for a more engaging user experience with 23 transaction oriented search plus verticals, JD Social – Justdial's own social sharing platform, and a Real Time Chat Messenger, on a single platform.
                Large Online community of engaged users: With over 161.3 million users (quarterly average unique users) as of September 30, 2019, who have contributed to 106,605,740 ratings and reviews till date. Justdial's online community continues to be more engaged than ever.
                Attractive value proposition for local MSMEs: Justdial's value-added offerings of huge online visibility, payment solutions, customized website, mobile site and mobile app; all packaged together, make it an attractive value proposition for MSMEs, several of whom have continuous associations with Justdial.
                
                  </p>
          </div>
      </div>
           <div class="col-md-3 col-sm-12">
              <div class="caption">
                 <h4>Location and Overview:</h4>
                <p>
                  Established in the year 2007, Estore in Sarabha Nagar , Ludhiana is a top player in the category Mobile Phone Dealers in the Ludhiana. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Ludhiana. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Ludhiana, this establishment occupies a prominent location in Sarabha Nagar . It is an effortless task in commuting to this establishment as there are various modes of transport readily available. The popularity of this business is evident from the 100+ reviews it has received from Justdial users. It is known to provide top service in the following categories: Mobile Phone Dealers, Mobile Phone Repair & Services, Computer Repair & Services, Computer Dealers, Laptop Dealers, Laptop Repair & Services, Mobile Phone Dealers-iPhone, Mobile Phone Accessory Dealers.
                </p>
           </div>
      </div>
          <div class="col-md-3 col-sm-12">
            <div class="caption">
              <h4>WHO WE ARE</h4>
               <p> About UsJust Dial Limited is India's No. 1 Local Search engine that provides local search related services to users across India through multiple platforms such as website, mobile website, Apps (Android, iOS, Windows), over the telephone (voice, pan India number 8888888888) and text (SMS).Justdial has also initiated ‘Search Plus’ services for its users. These services aim at making several day-to-day tasks conveniently actionable and accessible to users through one App. By doing so, it has transitioned from being purely a provider of local search and related information to being an enabler of such transactions. Justdial has also recently launched JD Omni, an end-to-end business management solution for SMEs, through which it intends to transition thousands of SMEs to efficiently run their business online and have adequate online presence via their own website and mobile site. Apart from this, it has also launched JD Pay, a unique solution for quick digital payments for its users and vendors, and JD Social, its official social sharing platform to provide curated content on latest happenings to users. The organisation also aims to make communication between users and businesses seamless through its Real Time Chat Messenger.
                      </p>
                    </div>
                  </div>
                   <div class="col-md-3 col-sm-12">
                 <div class="caption">
                 <h4>Customer Care Services</h4>
                 <img src="img/contact.png" class="thumbnails" alt="" ><br>
                 <h4>24/7 Support</h4><br>
                 <p> 
                    Our offices around the world provide unparalleled support in every time zone, 24 hours a day, 7 days a week.
                </p>
                    </div>
                  </div>
      
             </div> 

              <?php include("includes/footer.php"); ?>
      
      
    

</body>
</html>
