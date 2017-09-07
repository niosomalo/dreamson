<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Landing Zero Free Bootstrap Theme with Video</title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
</head>

<body>
   @include('navbar')
   

  @yield('content')
 

 @include('footer')
    <!--scripts loaded here -->
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>