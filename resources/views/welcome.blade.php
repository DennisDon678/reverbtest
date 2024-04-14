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
        <h1>Mini Chat {{Auth::user()->name}}</h1>
        <br>
        <div class="display" style="height: 100px; border: 1px solid red; margin:5px; padding:5px">
            <div id="home"></div>
        </div>
        <br>
        <form action="" style="margin-top: 5px;">
            <input type="text" name="" id="message" placeholder="message">
            <button type="button" id="send" >Submit</button>
        </form>
    </div>
</body>

<script type="module">
     window.Echo.channel('test').listen('test',(e)=>{
            var home = document.getElementById('home');
            home.innerText = e.message;
        })

        window.Echo.private('private.1').listen('privateEvent',(e)=>{
            var home = document.getElementById('home');
            home.innerText = e.message;
        })
</script>
</html>