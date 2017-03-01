
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CarFaqs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
    background-color: oldlace;
}

h1 {
    color: maroon;
    margin-left: 40px;
} 
</style>
  </head>

  <body>

    <ul class="nav nav-pills">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="form.php">Form</a></li>
      <li class="Top cars"><a href="Analytics.php">Analytics</a></li>
      <li class="Categories">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
          Categories <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>

  <H1>Analytics Page</H1>

      
    <div id="test" height="500"></div>
       <div id="donut-example"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
      <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
    <STYLE>
        
     #test {
    float:left;
}

#donut-example {
    float:left; 
      </STYLE>
      
<div class="col-md-6"> 
    <script>
    
    Morris.Line({
      element: 'test',
      data: [
        { y: '2006', a: 100, b: 90 },
        { y: '2007', a: 75,  b: 65 },
        { y: '2008', a: 50,  b: 40 },
        { y: '2009', a: 75,  b: 65 },
        { y: '2010', a: 50,  b: 40 },
        { y: '2011', a: 75,  b: 65 },
        { y: '2012', a: 100, b: 90 },
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B']
    });
    </script>
</div>
<div class="col-md-6"> 
  <script>
    Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20},
  ],
});
    
    

    </script>
</div>
  

    

  

    

    </body>
  </html>
