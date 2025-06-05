<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
</head>
<body>
<h1>Testing page </h1>

@php

@endphp

<div style="border:3px solid black; ">
    @if(isset($showElement) && $showElement)
        <h2>Register </h2>
    @else
        <h2>Login </h2>
    @endif

    <form action="{{isset($showElement) && $showElement ? '/register' : '/login'}}" method="POST">
        @csrf<!---fix for  page expired -->

        @if(isset($showElement) && $showElement)
            <input name="name" type="text" placeholder="name...">

        @endif

        <input name = "email" type="text" placeholder="email...">
        <input name = "password" type="password" placeholder="password...">
        <button>
            {{isset($showElement) && $showElement ? 'Register' : 'Login' }}
        </button>

    </form>


    @if(isset($showElement) && $showElement)
        <form action="/toLogin" method="GET">
            @csrf<!---fix for  page expired -->
            <label >Have an Account?</label>
            <button>got to Login</button>

        </form>

    @else

        <form action="/toRegForm" method="GET">
            @csrf<!---fix for  page expired -->
            <label >Dont Have an Account?</label>
            <button>Register</button>

        </form>

    @endif





</div>
</body>


</html>
