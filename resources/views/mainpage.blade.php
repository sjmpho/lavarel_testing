<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
</head>
<body>
@auth<!--checks if the user is logged in  -->
<!--if user is logged in , this will run  -->
<h2>
    What a wow you are logged in buddy

</h2>
@else
    <!-- if user is not logged in this will run -->

    <h2> you really need to get logged in buddy !</h2>
    <a> log me in </a>
@endauth


</body>
</html>
