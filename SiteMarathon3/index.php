<!-- website to embed :

https://www.tradingsat.com/webmaster.html


 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      text-align: center;
      margin:5px;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner  {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:50px;
  }

.container{
  width: 100%;
  height: 650px;
  margin:auto;
}
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 100px) {
    .carousel-caption {
      display: none; 
    }
    .weller {
      height: 200px;
    }
  }
  #myCarousel {
    width :100%;
    height: 120px;
  }
   
  /* Position of the first menu icon */
  
  #menuIcon1 {
    padding-top: 0;
    padding-right: 75px;
    margin-top: 10px;
    margin-right: 0;
    size: 50%;
  }
  #menuIcon2 {
    padding-top: 0;
    padding-right: 50px;
    margin-top: 10px;
    margin-right: 0; 
    size: 50%;
  }

  #menuIcon3 {
    padding-top: 0;
    padding-right: 15px;
    margin-top: 10px;
    margin-right: 0;
    size: 50%; 
  }


  /*2b376c bleu foncé    4c5795 bleu clair */
  p, .upperBlue {
    text-transform: uppercase;
    color: #2b376c;
    font-family: 'Open Sans', sans-serif;
    font-size: 25px;
  }
  .textIcon {
    text-transform: uppercase;
    color: #2b376c;
    font-family: 'Open Sans', sans-serif;
    font-size: 17px;
  }

  </style>
</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo-twinbroker.png"></a>
      <p class="navbar-brand" ><img style="padding-top: 15px; padding-left: 10px; z-index: 1001;" src="images/BY.png"></p>
      <a class="navbar-brand" href="https://www.twinsol.com/clients"><img style="padding-top: 0; margin-left: -15px; margin-top:-15px; " src="images/logo-twinsol.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar ">
 
      <ul class="nav navbar-nav navbar-right">        
        <li><a href="#"><div id="menuIcon1"><img src="images/icon-coins.png"><div class="textIcon">opportunites <br/>d'achat / vente</div></div></a></li>
        <li><a href="#"><div id="menuIcon2"><img src="images/icon-stats.png"><div class="textIcon">la bourse</div></div></a></li>
        <li><a href="#"><div id="menuIcon3"><img src="images/icon-news.png"><div class="textIcon">actualites<br> boursieres</div></div></a></li>
      </ul>
    <!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div> -->
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/bannerCAC.jpg" alt="images" style="text-align: center; ">
        <!--<script language="javascript" charset="utf-8" type="text/javascript" src="//www.tradingsat.com/divers/webmaster-module.php?e=cours-action&mnemo=ALU"></script>-->
        <!-- <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">    -->
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
     <!--<script language="javascript" charset="utf-8" type="text/javascript" src="//www.tradingsat.com/divers/webmaster-module.php?e=cours-action&mnemo=ALU"></script>-->
      <!--  <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image"> -->
      <img src="images/bannerCAC.jpg" alt="images" style="text-align: center;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <!--
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
</div>
  
<div class="container text-center">    
  <!--<h3>What We Do</h3>--><br><br>
  <div class="row">       
    <div class="col-sm-6">
      <p>Oportunite<br>d'achat / vente</p>
      <div class="weller">
        <!-- Table of bourse title result -->
        <div>
        <form action="http://127.0.0.1:8080/api" method="get" >
          <label  for="periode"><h3>Periode</h3> </label>
          <input  type="number" id = "periode" name="periode" min="1" max="100" step="1" value="1">
          <!--  button -->
          <button id="predict" class="contact100-form-btn">Predire ! </button>
               
        </form>
        </div>
        
        <div >
         <table  class="table">
          <thead>
            <tr >
              <th>Action</th>
              <th>Prix actuel</th>
              <th>Prix predit</th>
              <th>Rendement</th>
            </tr>
          </thead>
          <tbody id="tab_contain">
            
            
          </tbody>
        </table>
        </div>
      </div>
    </div>
    <div class="col-sm-6" MarathonWeb-master/CAC40/temp-plot.html>
      <p>Cours actuel<br>de l'action</p>
      <?php
        include 'MarathonWeb-master/graph.js';
      ?>
    </div>
  </div>
</div>
<div class="container-fluid text-center">
  
  <div id="clickPrevi">
    <img src="images/icon-arrow.png"><br>
    <p class="upperBlue">cours previsionnel</p>
  </div>  
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-6" style="background-color: red; z-index: 1000;">
      <!--<img id="tablePic" src="images/tableBourse.jpg">-->
    </div>
    <div class="col-sm-6" style=" background-color: green; z-index: 1001">
      <?php
        //include 'MarathonWeb-master/graph.js';
      ?>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(function () {
          $("button#predict").click(function(e){
            e.preventDefault();
            /*Get for variabes*/
            var periode = $("#periode").val();
           
            /*create the JSON object*/
            var data = periode;
            /*send the ajax request*/
            $.ajax({
              method : "GET",
              url : 'http://127.0.0.1:5000/' + 'api',
              data : $('form').serialize(),
              success : function(result){
                console.log(data)
                var json_result = JSON.parse(result);
                var price = json_result['act_prix'];
                var pred = json_result['predict'];
                var rend = json_result['rendement'];
                var temp = '';
                  var c=''
                    if(rend > 0){
                      c='class="bg-success"';
                    }else{
                      c='class="bg-danger"';
                    }
                    temp+='<tr '+c+'>'+
                        '<td>'+'CAC40'+'</td>'+
                        '<td>'+price+'</td>'+
                        '<td>'+pred+'</td>'+
                        '<td>'+rend+'</td>'+
                      '</tr>'+
                    '</tbody>';
                   console.log(temp)
                document.getElementById("tab_contain").innerHTML = temp;

              },
              error : function(){
                console.log("error")
              }
            })
          })
      
    });
  </script>

<footer class="container-fluid text-center">
  
</footer>

</body>
</html>
