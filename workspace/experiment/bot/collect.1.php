<html>
  <head>
    <title>CodeClassChat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="http://codeclasschat.herokuapp.com/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://codeclasschat.herokuapp.com/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://codeclasschat.herokuapp.com/helpers.js"></script>

    <script> jQuery(document).ready(function(){
      $('.btn').click(function(){
        var textarea_message = $('.new-message').val();
        helpers.sendMessage(textarea_message);
        $('.new-message').val('');
      });
      setInterval(function(){
        helpers.fetchNewMessages(function(messages){
          $.each(messages, function (i, message){
            helpers.renderMessage(message);
          });
        //helpers.renderMessage()
      });
      }, 2000);

    });
    </script>


  </head>
  <body>
    <textarea class="new-message"></textarea>
    <input class="btn" type="submit"></input>

  </body>
</html>