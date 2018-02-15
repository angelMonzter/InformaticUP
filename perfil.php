<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/up-styles-inicio.css">
</head>
<body>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');

      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');
</script>

<!--tab script-->
<script>
        function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
</script>
<!--tab script-->

<div class="">
  	<div align="center" id="menu">
        <img style="width: 250px" src="img/InformaticUP.png">
        <ul>
            <li><a href=""><img style="width: 50px" src="img/casa.png">Inicio</a></li>
            <li><a href="perfil.php"><img style="width: 50px" src="img/perfil.png">Perfil</a></li>
            <li><a href=""><img style="width: 50px" src="img/buscar.png">Buscar</a></li>
            <li><a href="index.html"><img style="width: 50px" src="img/close.png"></a></li>
        </ul>
    </div>
</div>

<br>

<div class="row medium-uncollapse" id="posteo">
  <div class="large-6 columns">
    <img style="width: 600px" src="img/InformaticUP1.jpg">
  </div>
  <div class="large-6 columns">
    <img style="width: 600px" src="img/curriculum.png">
    <div id="boton" class="button">Descargar</div>
  </div>
</div>

<br><br>

<div class="row medium-uncollapse" id="posteo">
	<div class="large-3 columns">
  		<div id >
          <img style="width: 250px" src="img/InformaticUP1.jpg">  
      </div>
	</div>
	<div class="large-9 columns">
		<h4>nombre de la persona</h4>
		<label>Titulo de Post:
    <input type="text" placeholder="Titulo">  
    </label>
		<label>Descripcion:
    <input type="text" placeholder="Descripcion">  
    </label>
    <label>Agrega link del Trabajo:
    <input type="text" placeholder="http:/mega.esteesmmitrabajo/isndua-&SF$sda44ravd">  
    </label>
		<div class="button">Postear</div>
	</div>
</div>

<br><br>

<footer class="row">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sed cum consectetur excepturi, placeat ea! Tempore repellendus debitis corrupti, quasi iusto delectus dolore commodi, harum in autem quod laborum vel! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aspernatur ea neque esse. Iste, architecto! Dolorum dolorem ducimus voluptas ab, odio doloremque dolores, quisquam cumque animi illo sed aspernatur doloribus.</p>
</footer>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>window.$ = window.jQuery = require('js/jquery.js');</script>
<script src="js/jquery.flipster.min.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
