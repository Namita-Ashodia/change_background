
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>

<script>
    
function colorbg()
{
    var x=document.getElementById("selectid");
    var bgcolor=x.options[x.selectedIndex].value;
    document.body.style.backgroundColor=bgcolor;
}

</script>
   
<style>
.pink{
    background-color:pink;
}
.red
{
    background-color:red;
}
.black
{
    background-color:black;
}
.green
{
    background-color:green;
}
.white
{
    background-color:white;
}
.image1
{
    background-image:url(adjust.jpg);
}
</style>
</head>

<body>
<center>
<h2>Select color for</h2>
<h2>background</h2>
<hr/>
<select id="selectid" class="my-select" >
<option class="white">white</option>
<option class="image1" style="background-image:url(adjust.jpg); width:100px; height:100px;" >2</option>

<option class="red">red</option>
<option class="black">black</option>
<option class="green">green</option>
<option class="pink">pink</option>

</select>
<button class="btn btn-primary" onclick="colorbg()">Change background</button>
</center>
</body>
</html>