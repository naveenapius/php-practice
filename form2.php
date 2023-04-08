<style>
    body {
        background-color:black;
        color: white;
        font-family: sans-serif;
        font-size: 14;
        line-height:30px;
        margin-left:50px;
        margin-right:50px;
        margin-top:20px;
        font-weight:bold;
    }
    h1 {
        font-size: 25px;
        text-align: center;
        text-decoration: underline;
    }
    .button{
        padding-left:5px;
        padding-right:5px;
        border-radius:8px;
        font-size:14px;
        font-weight: bold;
    }
</style>
<?php
function square($n){
    return $n*$n;
}
function product($a, $b){
    return $a*$b;
}
echo "<body>";
echo "Entered Number: ".$_GET["n1"]."<br>"; 
echo "Product: ".Product($_GET["n1"], $_GET["n2"])."<br>"; 
// echo "Entered Number: ".$_GET["number"]."<br>"; 
?>