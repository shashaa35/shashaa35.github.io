<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>Our Playlist</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

 <script src="js/jquery.min.js"></script> 
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

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
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
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

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

</head>
<body>

<div id="container " class="col-md-12 col-lg-12 col-sm-12">
	<h2 style="text-align:center;">Our Playlist</h2>
	
	<ul class="list-group" id="list">
	<?php 

	foreach($links as $row)
		echo "<li class='list-group-item'><a href='".$row['link']."' target='_blank'>".$row['name']."</a></li>";
	?>
	</ul>
</div>
<div id="container " class="col-md-12 col-lg-12 col-sm-12">
	<h2 style="text-align:center;">Add New One</h2>
	
	<div class="form-group col-sm-12 col-md-6">
  		<label for="name">Name:</label>
  		<input type="text" class="form-control" id="name">
	</div>
	<div class="form-group col-sm-12 col-md-6">
  		<label for="link">Link:</label>
  		<input type="text" class="form-control" id="link">
	</div>
	<div class="form-group col-sm-12 col-md-12"><button type="button" id="add" class="col-sm-12 col-md-12 btn btn-success">Add it</button></div>
</div>

	<script type="text/javascript">
	 $("#add").click(function(){
	 	var name=document.getElementById('name').value;
      	var link=document.getElementById('link').value;
	 if(name!="" && link!="")
	 {
       var xhttp=new XMLHttpRequest();
       xhttp.onreadystatechange=function()
       {
        if(xhttp.readyState==4 && xhttp.status==200)
        {
        data=xhttp.responseText;
        list=document.getElementById("list");
        
        var song = document.createElement('li');
        song.className="list-group-item";
        
        var x = document.createElement("A");
    	var t = document.createTextNode(name);
    	x.setAttribute("href", link);
    	
    	x.appendChild(t);
    	song.appendChild(x);
        list.appendChild(song);

     	document.getElementById('name').value="";
      	document.getElementById('link').value="";
	    
        }
      }
       
       xhttp.open("POST","index.php/add?name="+name+"&link="+link,true);
       xhttp.send();
  		}
      else
      	alert("Abe kuch toh daal de!!");
      
    });

   </script>
</body>
</html>