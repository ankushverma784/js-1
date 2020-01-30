<?php include_once("index.html"); ?>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
    <script>  
    $(document).ready(function(){  
        $("button").click(function(){  
            $("p").css("color","red" );
            $("p").html("Hello <b>Pwd</b>");  
        });  
    });  
    </script>  
  </head>
  <body>
      <button> Click Here to Change the Paragraph </button>
      <p> This is paragraph 1</p>
      <p> This is paragraph 2</p>
  </body>
</html>