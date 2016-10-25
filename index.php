<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Host Name</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  There are no external links to css or js-->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="dist/css/custom.css">
  <script src="dist/jquery/jquery.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
<!--  add a menu here -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
</div>

</body>
</html>

Find a menu on w3schools and paste it here. <br />
Add the following links: <br />
&nbsp;&nbsp;&nbsp;downloads/&nbsp;&nbsp;&nbsp;phocode/&nbsp;&nbsp;&nbsp;javascript/&nbsp;&nbsp;&nbsp;pma/&nbsp;&nbsp;&nbsp;contact.html
All the above except contact.html ar folders.
<br />
<br />You will add more later.
<br />If you wish to develop templates add a link to a folder called templates/
<br />
<!-- end of menu if is the iframe-->
<a href = "contact.html" target = "if"> Contact</a>
<!-- do not change the following until you have met localhost checkoff #2 -->
<div class="jumbotron text-center">
  <h1>Web Page Requirement</h1>
  <pre>
  - Solid color background.
  - Page must use bootstrap
  - All pages can not have external links to css, js and anything else.
  - External links must be approved. eg: http://www.w3schools.com/bootstrap/default.asp
  - Page must inlcude a responsive iframe.
  - Index will be index.php
  - No animations on index.php
  - One custom professional graphic.
  - index.php must include a  Nato Alphabet flag from the graphics provided.(Nothing custom.)
  </pre>
  
  <p></p>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <div class="container">
		<h2>Responsive Iframe</h2>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe  class="embed-responsive-item" name="if" src="intro.html"  ></iframe>
			</div>
	</div>

    </div>
   
</div>

</body>
</html>
