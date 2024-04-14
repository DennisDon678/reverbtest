<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @vite('resources/js/app.js')
    <div id="main">
        <h1>Login</h1>
        <br>
        <form action="" style="margin-top: 5px;" method="POST">
            @csrf
            <input type="text" name="email"  placeholder="email">
            <br>
            <br>
            <input type="text" name="password"  placeholder="password">
            <br>
            <br>
            <button type="button" id="send" >Submit</button>
        </form>
    </div>
</body>

<script type="module">
     window.Echo.channel('test').listen('test',(e)=>{
            console.log(e);
        })
</script>
</html>