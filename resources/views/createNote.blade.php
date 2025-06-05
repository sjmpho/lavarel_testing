<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Note</title>
</head>
<body>
<h1>Create a new Note </h1>



<div>
    @foreach(\App\Utils\Utility::getGlobalNotes() as $note)
        <p><strong>Title:</strong> {{ $note->title }}</p>

    @endforeach

</div>

<div>

    <form action="/SaveNote" method="POST">
        @csrf
        <label for="message" style="margin-top: 15px">Titsle:</label><br>
        <input type="text" name="title" id="title" style="margin-top: 15px"><br>
        <label for="message" style="margin-top: 15px">Your Note:</label><br>
        <textarea id="message" name="message" rows="5" cols="30" placeholder="Type your message here..." style="margin-top: 15px">


        </textarea><br>
        <input type="submit" value="Save" style="margin-top: 25px">
    </form>



</div>
</body>


</html>
