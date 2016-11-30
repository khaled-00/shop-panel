<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 25px;
		font-weight: bold;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
        text-align: center;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Webservices!</h1>


	<div id="body">

	<h1> Register </h1>
 
     <h1>Pramter: mobile (unique)</h1>
    <h1>Method: POST</h1>


		<form method="post" action="<?php echo base_url();?>admin/webservice/home/register">

		<label>mobile </label><input type="text" name="mobile"><br><br>
		
		<input type="submit" name="submit" value="send">

		</form>
	</div>

    <hr><hr><hr><hr>
    <div id="body">

    <h1> active user </h1>
     <h1>Pramter: user_id</h1>
     <h1>Pramter: active_code</h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/activation_user">
        <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>active_code </label><input type="text" name="active_code"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr><hr><hr>
    <div id="body">

    <h1> edit name </h1>
     <h1>Pramter: user_id</h1>
     <h1>Pramter: name</h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/edit_name">
        <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>name </label><input type="text" name="name"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
    <div id="body">

    <h1> edit profile </h1>
     <h1>Pramter: user_id</h1>
     <h1>Pramter: name</h1>
     <h1>Pramter: email</h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/edit_profile">
        <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>name </label><input type="text" name="name"><br><br>
       <label>email </label><input type="text" name="email"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
    <div id="body">

    <h1> change password </h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/change_password">
        <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>old_password </label><input type="text" name="old_password"><br><br>
       <label>new_password </label><input type="text" name="new_password"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
    <div id="body">

    <h1> change image </h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/change_image" enctype="multipart/form-data">
        <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>image </label><input type="file" name="image"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
    <div id="body">

    <h1> change work state </h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/change_work_status" enctype="multipart/form-data">
        <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>work_state </label><input type="text" name="work_state"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> contact us </h1>
     <h1>Pramter: name</h1>
     <h1>Pramter: email</h1>
     <h1>Pramter: mobile</h1>
     <h1>Pramter: msg</h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/contact_us">
       <label>name </label><input type="text" name="name"><br><br>
       <label>email </label><input type="text" name="email"><br><br>
       <label>msg </label><input type="text" name="msg"><br><br>
       <label>mobile </label><input type="text" name="mobile"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

     <hr><hr>

     <div id="body">

    <h1> contact us driver</h1>
    
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/contact_us_driver">
       <label>name </label><input type="text" name="name"><br><br>
       <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>msg </label><input type="text" name="msg"><br><br>
       <label>mobile </label><input type="text" name="mobile"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

     <hr><hr>
     <div id="body">

    <h1> complain </h1>
    
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/complain">
       <label>name </label><input type="text" name="name"><br><br>
       <label>user_id </label><input type="text" name="user_id"><br><br>
       <label>msg </label><input type="text" name="msg"><br><br>
       <label>mobile </label><input type="text" name="mobile"><br><br>

        <input type="submit" name="submit" value="send">

        </form>
    </div>

     <hr><hr>

    <div id="body">

    <h1> search </h1>
     <h1>Pramter: food_id</h1>
     <h1>Pramter: area_id</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/search">
       <label>food_id </label><input type="text" name="food_id"><br><br>
       <label>area_id </label><input type="text" name="area_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

     <hr><hr>

<!-- <div id="body">

    <h1> menus </h1>
     <h1>Pramter: restaurant_id</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/menus">
       <label>restaurant_id </label><input type="text" name="restaurant_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div> -->

    <hr><hr>

<div id="body">

    <h1> GetAllSearchData </h1>
     <h1>Pramter: </h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/GetAllSearchData">       
        <input type="submit" name="submit" value="send">

        </form>
    </div>
<hr><hr>
    <div id="body">

    <h1> area </h1>
     <h1>Pramter: </h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/area">       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <div id="body">

    <h1> list_addresses </h1>
     <h1>Pramter: client_id</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/list_addresses">
       <label>client_id </label><input type="text" name="client_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> delete_address </h1>
     <h1>Pramter: address_id</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/delete_address">
       <label>address_id </label><input type="text" name="address_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> edit_address </h1>
     

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/edit_address">
       <label>address_id </label><input type="text" name="address_id"><br><br>
       <label>address_type </label><input type="text" name="address_type"><br><br>
       <label>address_name </label><input type="text" name="address_name"><br><br>
       <label>floor </label><input type="text" name="floor"><br><br>
       <label>street </label><input type="text" name="street"><br><br>
       <label>area_id </label><input type="text" name="area_id"><br><br>
       <label>region_id </label><input type="text" name="region_id"><br><br>
       <label>house_name_number </label><input type="text" name="house_name_number"><br><br>
       <label>judda </label><input type="text" name="judda"><br><br>
       <label>block </label><input type="text" name="block"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
    <div id="body">

    <h1> add_address </h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/add_address">
       <label>client_id </label><input type="text" name="client_id"><br><br>
       <label>address_type </label><input type="text" name="address_type"><br><br>
       <label>address_name </label><input type="text" name="address_name"><br><br>
       <label>floor </label><input type="text" name="floor"><br><br>
       <label>street </label><input type="text" name="street"><br><br>
       <label>area_id </label><input type="text" name="area_id"><br><br>
       <label>region_id </label><input type="text" name="region_id"><br><br>
       <label>house_name_number </label><input type="text" name="house_name_number"><br><br>
       <label>judda </label><input type="text" name="judda"><br><br>
       <label>block </label><input type="text" name="block"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
    <div id="body">

    <h1> restaurant </h1>
     <h1>Pramter: restaurant_id</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/restaurant">
       <label>restaurant_id </label><input type="text" name="restaurant_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> client_orders </h1>
     <h1>Pramter: client_id</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/client_orders">
       <label>client_id </label><input type="text" name="client_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>



    <div id="body">

    <h1> driver_orders </h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/driver_orders">
       <label>driver_id </label><input type="text" name="driver_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> driver_archived_orders </h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/driver_archived_orders">
       <label>driver_id </label><input type="text" name="driver_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> accept_order </h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/accept_order">
       <label>order_id </label><input type="text" name="order_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

     <div id="body">

    <h1> cancel_order </h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/cancel_order">
       <label>order_id </label><input type="text" name="order_id"><br><br>
       <label>cancellation_note </label><input type="text" name="cancellation_note"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> order_detail </h1>
     <h1>Pramter: order_id</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/order_detail">
       <label>order_id </label><input type="text" name="order_id"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>

    <div id="body">

    <h1> add order </h1>
     <h1>Pramter: array of json ( meals )</h1>

     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/add_order">
       <label>order_id </label><input type="text" name="order_id"><br><br>
       <label>client_id </label><input type="text" name="client_id"><br><br>
       <label>address_id </label><input type="text" name="address_id"><br><br>
       <label>sub_total </label><input type="text" name="sub_total"><br><br>
       <label>notes </label><input type="text" name="notes"><br><br>
       <label>payment_type </label><input type="text" name="payment_type"><br><br>
       
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
  
  <div id="body">

    <h1> rate restaurant </h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/rate_restaurant">
       <label>restaurant_id </label><input type="text" name="restaurant_id"><br><br>
       <label>user_id </label><input type="text" name="user_id"><br><br>
      <label>rate </label><input type="text" name="rate"><br><br>
      <label>comment </label><input type="text" name="comment"><br><br>
      
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>


    <div id="body">

    <h1> list rate </h1>
     
    <h1>Method: POST</h1>


        <form method="post" action="<?php echo base_url();?>admin/webservice/home/list_rate">
       <label>user_id </label><input type="text" name="user_id"><br><br>
      
        <input type="submit" name="submit" value="send">

        </form>
    </div>

    <hr><hr>
    







	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
