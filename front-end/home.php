<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
   <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
       

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
      .slider .indicators .indicator-item.active {
        background-color: #79807a;
    }


      .slider .slides {   
      position: absolute !important;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }


    </style>

<body>

   <div class="slider">
    <ul class="slides">
      <li>
        <img src="../imagens/pintura.jpg"> 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../imagens/eletrica.jpg"> 
        <div class="caption left-align">
          <h3 class="black-text">Left Aligned Caption</h3>
          <h5 class="black-text">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
 
  <script src="../materialize/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
      </script>

    <script type="text/javascript">
      // Or with jQuery
      $(document).ready(function(){
      $('.slider').slider({
        height: 675
      });
      });
    </script>
 
</body>
</html>