<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="new.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="style.js"></script>

</head>
<style>
    body {
        background-color: #101010;
    }
</style>
<style>




    .container{
        width:80%;
    }

    #jumbo
    {
        border:1px solid #CCC;
        background-color:#101010;
    }

    .cartIcon
    {
        background-color:#999;
        padding:5px 5px 5px 5px;
        border-radius:10px;
        color:#000;
    }

    #image
    {
        background-color:#000;
        color:#fff;
    }
    #image:hover
    {
        background-color:#333;
        border:1px solid #fff;
        color:#fff;
    }

    #h4
    {
        color:#fff;
    }

    .console {
        font-family:Courier;
        color: #007500;
        background: #000000;
        border: 3px double #CCCCCC;
        padding: 10px;
</style>
<body>

<nav class="navbar navbar-inverse navbar-static-top">


    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                	<li class="active"><a href="dashboard.php">Dashboard</a></li>
                    <!-- <li><a href="index.html">Home</a></li> -->
                    <li class=""><a href="about.html">About us</a></li>
                    <!-- <li><a href="index.html">CTF</a></li> -->
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
</nav>

<div class="container">
<div class="well"><h1> CTF Dashboard </h1>
	<table class="table">
    <thead>
      <tr>
        <th>Level</th>
        <th>Flag</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level1.html';">Level 1</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>      
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level2.html';">Level 2</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level3.html';">Level 3</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="info">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level4.html';">Level 4</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level5.html';">Level 5</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 6</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button class="form-control" type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 7</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button class="form-control" type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 8</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="warning">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 9</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 10</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 11</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 12</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 13</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 14</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
      <tr class="danger">
        <td><button type="button" class="btn btn-primary" onclick="location.href='level6.html';">Level 15</button></td>
        <td>
        	<form class="form-inline" action="/action_page.php">
			  <div class="form-group">
			    <input class="form-control" type="email" class="form" id="email">
			  	<button type="submit" class="btn btn-default">Submit</button>
			  </div>
			</form> 
        </td>
        <td>Not Captured</td>
      </tr>
    </tbody>
  </table>
</div>
</div>

</body>
</html>
