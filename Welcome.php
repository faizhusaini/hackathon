<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Super Simple Modal Popups Demo</title>
<!--<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">-->
<style>
html {
  font-family: "roboto", helvetica;
  position: relative;
  height: 100%;
  font-size: 100%;
  line-height: 1.5;
  color: #444;
}
.body{
margin:0px;
}
h2 {
  margin: 1.75em 0 0;
  font-size: 5vw;
}

h3 { font-size: 1.3em; }

.v-center {
  height: 100vh;
  width: 100%;
  display: table;
  position: relative;
  text-align: center;
}

.v-center > div {
  display: table-cell;
  vertical-align: middle;
  position: relative;
  top: -10%;
}

.btn {
  font-size: 3vmin;
  padding: 0.75em 1.5em;
  background-color: #fff;
  border: 1px solid #bbb;
  color: #333;
  text-decoration: none;
  display: inline;
  border-radius: 4px;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn:hover {
  background-color: #ddd;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn-small {
  padding: .75em 1em;
  font-size: 0.8em;
}

.modal-box {
  display: none;
  position: absolute;
  z-index: 1000;
  width: 98%;
  background: white;
  border-bottom: 1px solid #aaa;
  border-radius: 4px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}
@media (min-width: 32em) {

.modal-box { width: 70%; }
}

.modal-box header,
.modal-box .modal-header {
  padding: 1.25em 1.5em;
  border-bottom: 1px solid #ddd;
}

.modal-box header h3,
.modal-box header h4,
.modal-box .modal-header h3,
.modal-box .modal-header h4 { margin: 0; }

.modal-box .modal-body { padding: 2em 1.5em; }

.modal-box footer,
.modal-box .modal-footer {
  padding: 1em;
  border-top: 1px solid #ddd;
  background: rgba(0, 0, 0, 0.02);
  text-align: right;
}

.modal-overlay {
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 900;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3) !important;
}

a.close {
  line-height: 1;
  font-size: 1.5em;
  position: absolute;
  top: 5%;
  right: 2%;
  text-decoration: none;
  color: #bbb;
}

a.close:hover {
  color: #222;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  transition: color 1s ease;
}
.content{
margin-left: 30px;
}
    table.tableSection {
        display: table;
        width: 100%;
    }
    table.tableSection thead, table.tableSection tbody {
        float: left;
        width: 100%;
    }
    table.tableSection tbody {
        overflow: auto;
        height: 150px;
    }
    table.tableSection tr {
        width: 100%;
        display: table;
        text-align: left;
    }
    table.tableSection th, table.tableSection td {
        width: 33%;
    }
</style>
</head>

<body>
<!--<section class="v-center">
  <div>
    <h2></h2>
    <div class="jquery-script-ads" style="margin:20px auto" align="center"><script type="text/javascript">
</script>
<div>
    <br/>
    <a class="js-open-modal btn" href="#" data-modal-id="popup1"> Pop Up One</a> <a class="js-open-modal btn" href="#" data-modal-id="popup2"> Pop Up Two</a> </div>
</section>-->

 <div style="background-color:red  ; color:white; padding:20px;">
          Welcome <?php echo $_POST["userid"]; ?><br>
     <h3>Verizon Wallet</h3>
 </div> 
<div class="content">
<p> Verizon Wallet provides a seamless experience to user for all the transactions. Makes your wireless and wireline bill payments easy!!</p>
<br>
 <a  href="#" data-modal-id="addMoney"> Add Money</a>
</br>
<br>
 <a href="#" data-modal-id="transferDiv"> Transfer Money</a>
</br>
<br>
 <a  href="#" data-modal-id="transactions"> Transactions History</a>
</br>

<div>
<div id="addMoney" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Add Money</h3>
  </header>
  <div class="modal-body">
    <p>Amount :  <input type="text">
	</p>
	Select Bank : <select><option>HDFC Bank</option>
	<option>CITY Bank</option>
	<option>KOTAK Bank</option>
	<option>YES Bank</option>
	</select>
	<p><button class="js-open-modal btn" >Add</button></p>
  </div>
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>
<div id="transferDiv" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
   <h3>Transfer Money</h3>
  </header>
    <div>Transfer to : <select>
              <option>VZ-Ram</option>
              <option>VZ-Mahesh</option>
              <option>VZ-Nithin</option>
              <option>VZ-Goutham</option>
          </select>
          </div>
          
          <div>Amount : <input type="text" /></div>
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>
 <div id="transferDiv" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
   <h3>Transactions History</h3>
  </header>
    <table class="tableSection">
    <thead>
        <tr>
            <th><span class="text">Transaction ID</span>

            </th>
            <th><span class="text">Description</span>

            </th>
			
            <th><span class="text">Amount</span>

            </th>
            <th><span class="text">Date</span>

            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>20-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill
			<td>19-09-2015</td>
        </tr>
        
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>19-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>VOD Purchase</td>
            <td>$100</td>
			<td>19-09-2015</td>
        </tr>
		
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>18-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>18-09-2015</td>
        </tr>
		
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>18-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>18-09-2015</td>
        </tr>
		
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>18-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>18-09-2015</td>
        </tr>
		
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>18-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>18-09-2015</td>
        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>18-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>18-09-2015</td>
        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>15-09-2015</td>
        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#123445435</td>
            <td>VOD Purchase</td>
            <td>$1000</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#345345456</td>
            <td>FDV Bill</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#345345456</td>
            <td>VOD Purchase</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#123445435</td>
            <td>To vz-Hema</td>
            <td>$1000</td>
			<td>15-09-2015</td>

        </tr>
        <tr>
            <td>#345345456</td>
            <td>WIFI Bill</td>
            <td>$100</td>
			<td>15-09-2015</td>

        </tr>	
		</tbody>
</table>
      
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>

<script src="jquery.js"></script> 
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(100, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(100, function() {
        $(".modal-overlay").remove();
   });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>
<script type="text/javascript">
</script>

</body>
</html>
