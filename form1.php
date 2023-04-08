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
echo "<body>"
echo "Welcome ".$_POST["fname"]." ".$_POST["lname"];
echo "<br>Your Gender: ".$_POST["sex"];
echo "<br>Your package will be delivered to: ".$_POST["dept"];
?>
