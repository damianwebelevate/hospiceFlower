<?php
/*
Plugin Name: Send Custom Email
Plugin URI: https://hospicvirtualflowergarden.com
Description: A custom plugin to allow administrator to resend an email to a customer should they not receive one
Author: Damian O'Rourke
Version: 1.0
Author URI: https://damianorourke.info
*/


function send_email_admin(){
  include( 'send-email-admin.php' );
}

function sfh_add_admin_actions_panel(){
  add_options_page("Send Custom Email", "Send Custom Email", "administrator", "Send Custom Email", "send_email_admin");
}
add_action( 'admin_menu', 'sfh_add_admin_actions_panel' );

add_action( 'wp_ajax_getEmailAddress', 'getEmailAddress' );

add_action( 'wp_ajax_sendCustomerReceipt', 'sendCustomerReceipt' );


function getEmailAddress(){

  $responce = array();
  $email = isset($_POST['whosEmail']);
  if($email){
    $responce['emailEntered'] = $_POST['whosEmail'];
    $mailAdd = $_POST['whosEmail'];
  }

  // quick check to see we have an order for this email address
  // if not return an empty string;
  $customerIs = array(
    'customer' => $mailAdd,
  );
  $customerOrder = wc_get_orders($customerIs);
  $customerOk = sizeof($customerOrder);
  $responce['haveCustomer'] = $customerOk;

  if($customerOk == 0){
    $responce['iscustomer'] = false;
  }else {
    $responce['iscustomer'] = true;
    // removing the limit param here will show all results for that email Address
    // could make a loop and build an orders object to return for admin
    $args = array(
      'limit' => 1,
      'orderby' => 'date',
      'order' => 'DESC',
      'customer' => $mailAdd,
      'return' => 'ids',
    );

    $query = new WC_Order_Query($args);
    $orders = $query->get_orders();
    // if doing a loop start here when setting the limit above
    $ids = $orders[0];

    $info = wc_get_order($ids);
    $stas = $info->get_status();
    $infoData = $info->get_data();
    $fName = $infoData['billing']['first_name'];
    $sName = $infoData['billing']['last_name'];
    $billEmail = $infoData['billing']['email'];
    $dCreated = $infoData['date_created']->date('Y-m-d H:i:s');
    $amountPaid = $info->get_formatted_order_total();
    $responce['fName'] = $fName;
    $responce['sName'] = $sName;
    $responce['dateCreated'] = $dCreated;
    $responce['billingEmail'] = $billEmail;
    $responce['amountPaid'] = $amountPaid;
    $responce['productName'] = $productName;
    $responce['orders'] = $ids;
    $responce['stat'] = $stas;

    // Get $order object from order ID

      $order = wc_get_order( $ids );
        // Get and Loop Over Order Items
      foreach ( $order->get_items() as $item_id => $item ) {
         $product_id = $item->get_product_id();
      }

      $actualProductName = giveMeAName($product_id);
      $responce['dummyInfoForTestingName'] = giveMeAName(1748);
      $responce['dummyInfoForID'] = 1748;
      $responce['productName'] = $actualProductName;
      $responce['productId'] = $product_id;

    }//close else

  echo json_encode($responce);
  exit;
}

function giveMeAName($prodId){
  $prodName = "";
  switch ($prodId) {
    case 48:
      $prodName = 'Sunflower';
      break;
    case 1748:
      $prodName = 'Camellia';
      break;
    case 1955:
      $prodName = 'Daisy';
      break;
    case 1963:
      $prodName = 'Gardenia';
      break;
    case 1970:
      $prodName = 'Red Rose';
      break;
    case 1975:
      $prodName = 'Tulip';
      break;
    case 1981:
      $prodName = 'Lilly';
      break;
    default:
      $prodName = "defalut";
      break;
  }
  return $prodName;

}


function sendCustomerReceipt(){
  // callCustomEmail($recipient, $productId, $fName);
  $responce = array();
  $responce['called'] = "called";
  $valName = $_POST['hiddenFirstName'];
  $valEmail = $_POST['hiddenEmailAddress'];
  $valOrderName = $_POST['hiddenOrderName'];
  $valOrderNumber = $_POST['hiddenOrderNumber'];
  $ischecked = $_POST['checkme'];
  $responce['passedInName'] = $valName;
  $responce['passedInEmail'] = $valEmail;
  $responce['passedInOrderName'] = $valOrderName;
  $responce['passedInOrderNumber'] = $valOrderNumber;
  $responce['ischecked'] = $ischecked;
  // email, productNumber, firstName
  $didEmail = reSendEmailReceipt($valEmail, $valOrderNumber, $valName);
  $didEmail = json_decode($didEmail);
  $responce['whatsInDidEmail'] = $didEmail;
  echo json_encode($responce);
  exit;
}

function send_email_load_scripts(){
  global $arr;
  wp_enqueue_script('jquery');
  wp_register_script( 'send-email-js', plugin_dir_url(__FILE__).'/js/send-email.js', array('jquery'));
  wp_enqueue_script('send-email-js');

  wp_localize_script ('send-email-js', 'send_array_data', $arr);
  wp_localize_script( 'send-email-js', 'send_email_ajax', array( 'ajax_url' => admin_url('admin-ajax.php')) );
  wp_localize_script( 'send-email-js', 'do_send_email_ajax', array( 'do_ajax_url' => admin_url('admin-ajax.php')) );
}
add_action( 'admin_enqueue_scripts', 'send_email_load_scripts');

// enqueue styles
function send_email_enqueue_styles() {
  wp_enqueue_style( 'send-email-style', plugin_dir_url(__FILE__).'/css/custom-email.css' );
}
add_action( 'admin_enqueue_scripts', 'send_email_enqueue_styles' );


function reSendEmailReceipt($recipient, $productId, $fName){
  $returningMessage = array();
	$subject = 'Donate, Share and Show you Care';
	$name = 'Hospice Virtual Flower Garden';
	$headers = 'Content-Type: text/html; charset=UTF-8' ."\r\n";
	$headers .= "From: $name <info@hospicevirtualflowergarden.com>" ."\r\n";
	$message = '<!DOCTYPE html><html lang="en-GB"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>hospicevirtualflowergarden.com</title></head><body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="padding: 0;">
<div id="wrapper" dir="ltr" style="background-color: #ffffff; margin: 0; padding: 70px 0; width: 100%; -webkit-text-size-adjust: none;">
	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="backgroud-color: #fff;">
	  <tbody>
	    <tr>
	      <td align="center" valign="top">
	        <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff;border:1px solid #e5e5e5;border-bottom:none;border-radius:3px">
	  				<tbody>
	            <tr>
	              <td align="center" style="background-color:#ffffff; padding:30px">
	                <img data-imagetype="External" src="https://hospicevirtualflowergarden.com/wp-content/uploads/2020/04/logo.png" width="200">
	              </td>
	            </tr>
	            <tr>
	              <td style="background-color:#ffffff; padding:20px; text-align:center">
	                <h3 style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:24px;font-weight:300;line-height:150%;margin:0;text-align:center;color:#000;">Hospice Virtual Flower Garden</h3>
	              </td>
	            </tr>
	            </tr>
	          </tbody>
	        </table>
	        <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff;border:1px solid #e5e5e5; border-top: none; border-bottom: none;" >
	          <tbody>
	            <tr>
	              <td valign="top" id="m_6874048694757159589body_content" style="background-color:#ffffff">
	                <table border="0" cellpadding="20" cellspacing="0" width="100%">
	                  <tbody>
	                    <tr>
	                      <td valign="top" style="padding:48px 48px 32px; color: black;">
	                        <img width="600" style="min-width: 300px; max-width: 100%; height: auto;" src="https://hospicevirtualflowergarden.com/wp-content/themes/flowerGarden/viewInBrowser/viewInBrowserGenImage.php/?productId='.$productId.'&fName='.$fName.'" alt="Donate, Share and Show You Care Image">
	                      </td>
	                    </tr>
	                  </table>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	          <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff;border:1px solid #e5e5e5;border-top:none;border-radius:3px">
	    				<tbody>
	              <tr>
	                <td align="center" style="background-color:#ffffff; padding:30px">
	                </td>
	              </tr>
	              <tr>
	                <td style="background-color:#ffffff; padding:20px; text-align:center">
	                  <p style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:12px;font-weight:300;line-height:150%;margin:0;text-align:center;color:#000;">Copyright <sup>&copy;</sup>'.Date('Y').'<strong> St. Francis Hospice</strong></p>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	        </td>
				</tr>
	  </tbody>
	</table></div></body></html> ';
  $isMail = false;
	$isMail = wp_mail( $recipient, $subject, $message, $headers);
  $returningMessage['sent'] = $isMail;
	return json_encode($returningMessage);
}

?>
