<html>
    <head>
       <script type="text/javascript" src="csspopup.js"></script>
       <link rel="stylesheet" type="text/css" href="popupcss.css">
    </head>
 <body>
     <div style="background-color:red  ; color:white; padding:20px;">
          Welcome <?php echo $_POST["userid"]; ?><br>
     <h2>Verizon Wallet</h2>
     </div> 
<div id="blanket" style="display: block; height: 324px;"></div>
  <div style="background-color:grey  ; color:black; padding:20px;">
	<div id="popUpDiv" style="display: block; top: 12px; left: 532px;">
		<a href="#" onclick="popup('popUpDiv')">Click Me To Close</a>
	</div>	
      <a href="#" onclick="popup('popUpDiv')">Add Money</a></br>
      </br>
      <a href="#" onclick="popup('popUpDiv')">Transfer Money</a></br></br>
      
      <a href="#" onclick="popup('popUpDiv')">Wallet History</a></br></br>
       
        <a href="#" onclick="popup('popUpDiv')">Pay Bill</a>
      </div>

 </body>
 </html> 