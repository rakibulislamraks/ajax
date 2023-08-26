<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/jquery.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    
    <div id="test">
    <h3>hello everyone</h3>
   
    </div>
    <button id="button">Button</button>
    <button id="pbutton">unwrap</button>
    <script>
      $('document').ready(function(){
        $('#button').click(function(){
            $('#test').append('<p>hhh</p>');
        });
      });
    </script>
</body>
</html>
