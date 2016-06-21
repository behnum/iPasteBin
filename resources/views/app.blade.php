<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Behnam Baharmand">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
    .%%%%%...%%%%%%..%%..%%..%%..%%..%%..%%..%%...%%.
    .%%..%%..%%......%%..%%..%%%.%%..%%..%%..%%%.%%%.
    .%%%%%...%%%%....%%%%%%..%%.%%%..%%..%%..%%.%.%%.
    .%%..%%..%%......%%..%%..%%..%%..%%..%%..%%...%%.
    .%%%%%...%%%%%%..%%..%%..%%..%%...%%%%...%%...%%.
    .................................................
                   Behnam Baharmand
                 behnam@baharmand.com
    -->

    <title>PasteBin - {{ $data['title'] }}</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/ipastebin.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      body {
        padding-top: 20px;
        padding-bottom: 20px;
      }

      .navbar {
        margin-bottom: 20px;
      }

    .footer {
      position: absolute;
      padding: 7px;
      bottom: 0;
      width: 100%;
      /* Set the fixed height of the footer here */
      height: 50px;
      background-color: #f5f5f5;
    }
    </style>

</head>

<body id="page-top" class="index">

@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ipastebin.js"></script>
</body>
</html>
