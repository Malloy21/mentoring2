<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AppMentoring</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- Styles -->

<style>
.tombol{
  background:#2C97DF;
  color:white !important;
  border-top:0;
  border-left:0;
  border-right:0;
  border-bottom:5px solid #2A80B9;
  padding:10px 20px !important;
  text-decoration:none;
  font-family:sans-serif;
  font-size:11pt;
  margin: 10px;
}
    
    html, body {
        background: #87e0fd; /* Old browsers */
        background: -moz-linear-gradient(top, #87e0fd 0%, #53cbf1 40%, #05abe0 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top, #87e0fd 0%,#53cbf1 40%,#05abe0 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, #87e0fd 0%,#53cbf1 40%,#05abe0 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#87e0fd', endColorstr='#05abe0',GradientType=0 ); /* IE6-9 */
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;

    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 72px;
        color: white;
        font-weight: bold;
    }

    .links > a {
        color: #fff;
        padding: 0 25px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    
    .m-b-md {
        margin-bottom: 30px;
    }
</style>

</head>

<body>
    <div class="flex-center position-ref full-height">
 
    <div class="content">
        <div class="title animated rubberBand">
            <span style="font-weight: 400;">Mentoring</span><strong>UTS</strong>
        </div>
        <h3 style="color: #fff;">Sumbawa<br>
        Nusa Tenggara Barat</h3>
        
        @if (Route::has('login'))
        <div class="links" style="border-top: 1px solid #fff; padding-top: 10px;">
            @auth
            <a href="{{ route('login') }}">
                Login
            </a>

            
        @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
        @endif

    </div>
</div>
</body>
</html>