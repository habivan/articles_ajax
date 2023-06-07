<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script>
    function funcBefore(){
      $("#infor").text("Ожидание данных...");
    }

    function funcSuccess(data){
      $("#infor").text(data);
    }

    function b(){
            $("#infor").text("Ожидание данных...");
          };

    function s(data) {
      if(data == 'n'){
        alert("Имя занято");
      }else{
        $("#infor").text(data);
      }
      };
    
    $(document).ready(function(){
      $("#load").bind("click", function(){
        var admin = "Admin";
        $.ajax({
          url: "content.php",
          type: "POST",
          data: ({name: admin, number: 5}),
          dataType: "html",
          beforeSend: funcBefore,
          success: funcSuccess
        });
      });

      $("#done").bind("click", function(){
        var admin = "Admin";
        $.ajax({
          url: "check.php",
          type: "POST",
          data: ({name: $("#name").val()}),
          dataType: "html",
          beforeSend: function(){
            $("#infor").text("Ожидание данных...");
          },
          success: function(data) {
            if(data == 'n'){
              alert("Имя занято");
            }else{
              $("#infor").text(data);
            }
            }
        });
      });
    });
  </script>
  <title>Document</title>
</head>
<body>
  <h1>Hello</h1>
  <input type="text" id="name" placeholder="Введите имя">
  <input type="button" id="done" value="Проверить">
  <p id="load" style="cursor: pointer;">загрузка данных</p>
  <div id="infor"></div>


</body>
</html>