<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
</head>
<body>
<h1 style="color: aqua"><?=\App\Utils\Utility::$title?></h1>
@auth<!--checks if the user is logged in  -->
<!--if user is logged in , this will run it willl pull the users data   -->

<H1> Your notes below </H1>

<ul>

    @foreach(\App\Utils\Utility::getGlobalNotes() as $note)
        <li>

            <a href="{{ route('openNote', ['id' => $note['title']]) }}">
                {{ $note['title'] }}
            </a>

        </li>
    @endforeach

</ul>



<form action="/CreateNote" method="GET">
    <button >
        Create a note
    </button>
</form>
<form action="/ClearNote" method="GET">
    <button style="color: red">
        Clear Notes
    </button>
</form>

@else

    <H1>Hmm! , seems like you are not logged in yet </H1>
    <form action="/toRegisterScreen" method="GET">
            @csrf
        <button>GO to Login</button>
    </form>
    <!-- if user is not logged in this will run -->
    <h1>Well still nothing on your wall yet </h1>
    <form action="" METHOD="get">
        @csrf
        <button>
            Create a note
        </button>
    </form>

@endauth




</body>
</html>
