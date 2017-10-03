<div class="col-md-12 call_req_wrp">
	<div class="col-md-6 call_mid_wrp">
		ЗАКАЗАТЬ ЗВОНОК: 
		<button id="call_button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			<i class="fa fa-phone" aria-hidden="true"></i>
		</button>
	</div>
	<div class="col-md-6 call_mid_wrp">
		NEW-HORIZON.GE
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ЗАКАЗАТЬ ЗВОНОК</h4>
      </div>
      	<form action="" method="POST">      	
	      <div class="modal-body">
	        <div class="form-group">
	        	<label>ИМЯ И ФАМИЛИЯ</label>
	        	<input type="text" name="full_name" class="form-control">
	        </div>
	        <div class="form-group">
	        	<label>НОМЕР ТЕЛЕФОНА</label>
	        	<input type="text" name="phone" class="form-control">
	        </div>
	      </div>
	      <div class="col-md-12 modal_text">
	      	<p>
	      		Мы свяжемся с вами в ближайшее время
	      	</p>
	      </div>
	      <div class="modal-footer">
	      	<input type="submit" name="submit" class="btn btn-primary" value="ЗАКАЗАТЬ ЗВОНОК">
	      </div>
	    </form>
    </div>
  </div>
</div>

<?php

	if(isset($_POST['submit'])){
		$full_name = $_POST['full_name'];
		$phone 	   = $_POST['phone'];

		$headers = "Content-Type: text/html; charset=utf-8";

		$message = "<html><body>";
		$message .= "<table> <tr><td><strong>FULL NAME</strong> </td><td>" . $full_name."</td></tr></table>";
		$message .= "<table> <tr><td><strong>PHONE</strong> </td><td>" . $phone."</td></tr></table>";
		$message .= "</body></html>";

		mail('office@new-horizon.ge', 'Request A Call',$message, $headers);
	}
?>