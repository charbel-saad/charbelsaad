<html>
<style>
body{
    background-image:url('Unknown.jpg');
    background-size:cover;
}

#owner-part{
    width:330px;
    height:480px;
    background-color:black ;
    margin-top:150px;
    border-radius:11%;
    margin-left:250px;
    float:left;
    box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;
   
}

#cust-part{
    width:330px;
    height:480px;
    background-color:#FFFFFF ;
    margin-top:150px;
    border-radius:11%;
    margin-left:250px;
    float:left;
    -webkit-box-shadow: 0 10px 6px -6px #777;
       -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;
}


p{
   position:relative;
    font-size:30px;
}

.circle1{
    margin-top:5px;
    margin-left:60px;
    height:200px;
    width:200px;
    background-color:#088CD1;
    border-radius:100%;
    text-align:center;
    border:4px solid #D7D702 ;
    #F7F712
}
.circle2{
    margin-top:5px;
    margin-left:60px;
    height:200px;
    width:200px;
    background-color:#D7D702;
    border-radius:100%;
    text-align:center;
    border:4px solid #088CD1 ;
    
}

#t1{
    text-align:center;
    font-size:30px;
    color:white;
    
}
#t2{
    text-align:center;
    font-size:30px;
    color:black;
    
}

#bt{
    margin-top:50px;
    margin-left:22%;
    text-align:center;
    height:50px;
    width:200px;
    border-radius:20px;
    background-color:#D7D702;
    border-color:#D7D702;
    font-size:20px;
    color:white;
    box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;
    
}


#bt1{
    margin-top:50px;
    margin-left:22%;
    text-align:center;
    height:50px;
    width:200px;
    border-radius:20px;
    background-color:#088CD1;
    border-color:#088CD1;
    font-size:20px;
    color:white;
    box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;
    
}






#free{
    margin-top:80px;
    font-size:30px;
    color:white;
}
#dollar{
    height:20px;
    width:5px;
    float:left;
    font-size:40px ;
    margin-top:60px;
    margin-left:10px;
    color:white;

}
#cash{

height:10px;
width:10px;
float:left;
font-size:50px;
margin-left:25px;
margin-top:65px;
color:white;
}
#month{
    height:5px;
width:10px;

font-size:30px;
margin-left:40px;
margin-top:55px;
color:white;

}

</style>
<body>


<div id=owner-part>
<h3 id="t1"> CUSTOMER   </h3>

<div class=circle1> 
<p id=free> FREE </p>

</div>
<a href="registerForm.php"><button id=bt>  SIGN UP  </button></a>


</div>

<!-- -------------- -->
<div id=cust-part>
<h3 id="t2"> BUSINESS   </h3>

<div class=circle2> 
<p id=dollar> $</p><p id=cash> 24.99    </p><p id=month>  MONTH    </p>

</div>
<a href="ownerReg.php"><button id=bt1>  SIGN UP  </button></a>


</div>



<body>


</html>