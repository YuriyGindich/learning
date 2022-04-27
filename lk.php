<?php session_start() ?>
<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Личный кабинет</title>
  <style>
    body {
			font-size: 1.5rem;
		}
    .edit-btn {
      color: tomato;
      cursor: pointer;
    }

    .edit-btn:hover {
      color: red;
    }
    .cancel-btn {
      color: cornflowerblue;
      cursor: pointer;
    }
    .cancel-btn:hover {
      color: blue;
    }
    .save-btn {
      color: cornflowerblue;
      cursor: pointer;
    }
    .save-btn:hover{
      color: blue;
    }
  </style>
</head>

<body>

  <div class="container">
    <p>Имя: <span><?php echo $_SESSION['name'] ?></span>
      <span class="edit-btn">[Изменить]</span>
      <span class="save-btn" hidden>[Сохранить]</span>
      <span class="cancel-btn" hidden>[Отменить]</span>
    </p>

    <p>Фамилия: <span><?php echo $_SESSION['lastname'] ?></span>
      <span class="edit-btn">[Изменить]</span>
      <span class="save-btn" hidden>[Сохранить]</span>
      <span class="cancel-btn" hidden>[Отменить]</span>
    </p>

    <p>E-mail: <?php echo $_SESSION['email'] ?></p>
    <p>Id: <?php echo $_SESSION['id'] ?></p>
  </div>

  <script>
    let edit_buttons = document.querySelectorAll(".edit-btn");
    let save_buttons = document.querySelectorAll(".save-btn");
    let cancel_buttons = document.querySelectorAll(".cancel-btn");

    for (let i = 0; i < edit_buttons.length; i++) {

      let inputValue = edit_buttons[i].previousElementSibling.innerText;

      edit_buttons[i].addEventListener(click, function() {
        edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value = "${inputValue}">`;
        save_buttons[i].hidden = false;
        cancel_buttons[i].hidden = false;
        edit_buttons[i].hidden = true;
      });
      save_buttons[i].addEventListener("click", function() {

      })
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>