<html>

<head>

    <script src="{{asset('js/app.js')}}"></script>

</head>
<body>

    <form method="POST" action="/alert">
         @csrf
        <input name="text" type="text" placeholder="alert"/>
        <input type="submit" value="Send"/>
    </form>

</body>

</html>