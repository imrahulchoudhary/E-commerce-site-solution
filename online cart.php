<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<?php
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
    //Request hash
    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';   
    if(strcasecmp($contentType, 'application/json') == 0){
        $data = json_decode(file_get_contents('php://input'));
        $hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
        $json=array();
        $json['success'] = $hash;
        echo json_encode($json);
    
    }
    exit(0);
}
 
function getCallbackUrl()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "hhttp://" : "http://";
    return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] .'response.php';
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart | Life Style Store | Transaction</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">

<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test //-->
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
<!-- BOLT Production/Live //-->
<!--// script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script //-->
<script src="js/bootstrap.min.js"></script>

</head>

<body>
<div class="main">
    <?php
        include 'includes/header.php';
        ?>
    
    <center><div>
        <img src="img/payumoney.png" />
    </div>
    <div class="panel-heading">
    <h4>Pay here</h4>
    </div>
    
    </center>
    <div class="container">
    <div class="col-md-4 col-md-offset-4">
    <form action="#" id="payment_form">
    <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
    <input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
    <div class="form-group">
    <span class="text"><label>Merchant Key:</label></span>
    <span><input type="text" id="key" class="form-control" name="key" placeholder="Merchant Key" value="" /></span>
    </div>
    
    <div class="form-group">
    <span class="text"><label>Merchant Salt:</label></span>
    <span><input type="text" id="salt" class="form-control" name="salt" placeholder="Merchant Salt" value="" /></span>
    </div>
    
    <div class="form-group">
    <span class="text"><label>Transaction/Order ID:</label></span>
    <span><input type="text" id="txnid" class="form-control" name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" /></span>
    </div>

    
    <div class="form-group">
    <span class="text"><label>Amount:</label></span>
    <span><input type="text" id="amount" class="form-control" name="amount" placeholder="Amount" value="6.00" /></span>    
    </div>
    
    <div class="form-group">
    <span class="text"><label>Product Info:</label></span>
    <span><input type="text" id="pinfo" class="form-control" name="pinfo" placeholder="Product Info" value="P01,P02" /></span>
    </div>
    
    <div class="form-group">
    <span class="text"><label>First Name:</label></span>
    <span><input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" value="" /></span>
    </div>
    
    <div class="form-group">
    <span class="text"><label>Email ID:</label></span>
    <span><input type="text" id="email" class="form-control" name="email" placeholder="Email ID" value="" /></span>
    </div>
    
    <div class="form-group">
    <span class="text"><label>Mobile/Cell Number:</label></span>
    <span><input type="text" id="mobile" class="form-control" name="mobile" placeholder="Mobile/Cell Number" value="" /></span>
    </div>
    
    <div class="form-group">
    <span class="text"><label>Hash:</label></span>
    <span><input type="text" id="hash" name="hash" class="form-control" placeholder="Hash" value="" /></span>
    </div>
    <div><input type="submit" class="btn btn-primary" value="Pay" onclick="launchBOLT(); return false;" /></div>
    </form>
</div>
</div>
</div>

<script type="text/javascript"><!--
$('#payment_form').bind('keyup blur', function(){
    $.ajax({
          url: 'online cart.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
            salt: $('#salt').val(),
            txnid: $('#txnid').val(),
            amount: $('#amount').val(),
            pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
            email: $('#email').val(),
            mobile: $('#mobile').val(),
            udf5: $('#udf5').val()
          }),
          contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
             $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
            else if (json['success']) { 
                $('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>
<script type="text/javascript"><!--
function launchBOLT()
{
    bolt.launch({
    key: $('#key').val(),
    txnid: $('#txnid').val(), 
    hash: $('#hash').val(),
    amount: $('#amount').val(),
    firstname: $('#fname').val(),
    email: $('#email').val(),
    phone: $('#mobile').val(),
    productinfo: $('#pinfo').val(),
    udf5: $('#udf5').val(),
    surl : $('#surl').val(),
    furl: $('#surl').val(),
    mode: 'dropout' 
},{ responseHandler: function(BOLT){
    console.log( BOLT.response.txnStatus );     
    if(BOLT.response.txnStatus != 'CANCEL')
    {
        //Salt is passd here for demo purpose only. For practical use keep salt at server side only.
        var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
        '<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
        '<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
        '<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
        '<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
        '<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
        '<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
        '<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
        '<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
        '<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
        '<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
        '<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
        '</form>';
        var form = jQuery(fr);
        jQuery('body').append(form);                                
        form.submit();
    }
},
    catchException: function(BOLT){
        alert( BOLT.message );
    }
});
}
//--
</script>
  

<?php include("includes/footer.php"); ?> 
    </body>
</html>