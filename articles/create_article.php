<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#editor1',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script>
  <title>Document</title>
</head>
<body>
  <header>
    <div>
      <h2>Напишите вашу статью</h2>
      <form action="request/set_article.php" method="POST">
        <label>Название статьи</label>
        <input type="text"name="name" size="100" style="display: flex;" >
        <label >Текст статьи</label>
        <textarea id="editor1" name="text" cols="100" rows="20" style="display: flex;"></textarea>

        <input type="submit">
      </form>
    </div>
  </header>
</body>
</html>

