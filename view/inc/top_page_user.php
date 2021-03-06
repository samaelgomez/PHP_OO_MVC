<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Game List</title>
		<link rel="stylesheet" href="view/js/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
		<link href="view/css/style.css" rel="stylesheet" type="text/css"/>
		<script src="view/js/jquery/jquery-2.2.4.min.js"></script>
    	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script> -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
		<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

		<!-- Popper js -->
		<script src="view/js/bootstrap/popper.min.js"></script>
		<!-- Bootstrap js -->
		<script src="view/js/bootstrap/bootstrap.min.js"></script>
		<!-- All Plugins js -->
		<script src="view/js/plugins/plugins.js"></script>
		<!-- Active js -->
		<script src="view/js/active.js"></script>

		<script type="text/javascript" src="utils/utils.js"></script>
		<script type="text/javascript" src="module/lang/lang.js"></script>
		<script type="text/javascript" src="view/js/scripts/demos.js"></script>
		<script type="text/javascript" src="view/js/jqwidgets/jqxcore.js"></script>
		<script type="text/javascript" src="view/js/jqwidgets/jqxdata.js"></script>
		<script type="text/javascript" src="view/js/jqwidgets/jqxbuttons.js"></script>
		<script type="text/javascript" src="view/js/jqwidgets/jqxscrollbar.js"></script>
		<script type="text/javascript" src="view/js/jqwidgets/jqxlistbox.js"></script>
		<script type="text/javascript" src="view/js/jqwidgets/jqxdropdownlist.js"></script>
		<script type="text/javascript" src="view/js/jqwidgets/jqxdatatable.js"></script>
		<script type="text/javascript" src="module/user/model/validate_user.js"></script>
		<script type="text/javascript" src="module/user/controller/controller_js.js"></script>
		<script type="text/javascript" src="module/user/model/filter_page.js"></script>
		<script type="text/javascript" src="module/shop/model/shop.js"></script>
		<script type="text/javascript" src="module/inicio/model/carousel.js"></script>
		<script type="text/javascript" src="module/inicio/model/cards.js"></script>
		<script type="text/javascript" src="module/contact/view/map.js" ></script>
		<script type="text/javascript" src="module/auth/auth_js.js" ></script>
		

    	<script type="text/javascript">
        	$(function() {
        		$('#fecha').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '1900:2020',
        			onSelect: function(selectedDate) {
        			}
        		});
        	});
	    </script>
    </head>
    <body>