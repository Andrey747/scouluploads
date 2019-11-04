<div id="right_body">
<h1><?=$query_message?></h1>
<form action="<?=base_url("welcome/saveupload")?>" method="post" enctype="multipart/form-data">
<table>
<tr><td>Ticket Number</td></tr>
<tr><td><input type="text" value="<?=$this->session->userdata('emp_code')?>" name="ticket_no" required /></td><td><input type="file" name="file_name" required/></td></tr>
<tr><td><button type="submit">Save</button></td></tr>
</table>
</form>
</div>