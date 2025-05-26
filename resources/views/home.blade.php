<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
</head>
<body>
<h1>Testing page </h1>

<div style="border:3px solid black; ">
    <h2>Register </h2>
    <form action="/register" method="POST">
        @csrf<!---fix for  page expired -->
        <input name = "name" type="text" placeholder="name...">
        <input name = "email" type="text" placeholder="email...">
        <input name = "password" type="password" placeholder="password...">
        <button>Register</button>

    </form>


</div>
</body>


</html>
