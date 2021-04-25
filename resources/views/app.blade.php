<!DOCTYPE html>
<html>

<head>
  <title>Qr-Gen | Arikun@IndoSec </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap');

  body{
    background-image: url('{{asset("gam/792238.png")}}');
    position: fixed; 
  top: 0; 
  left: 0; 

  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
    font-family: 'Original Surfer'
  }
  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   
   color: white;
   text-align: center;
}
</style>
<body>

    @inertia

    <footer class="footer bg-dark">
      <div class="container mt-2 mb-2">
        <span class="text-muted ">Copyright @ Arikun | IndoSec - 2021</span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>
