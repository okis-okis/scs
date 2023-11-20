<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    body {
      margin: 0;
    }

    .wrapper {
      height: 100vh;
      display: flex;
      justify-content: center;
    }

    .error__container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      margin: auto 0px;
      text-align: center;

    }

    .error__container-message {
      color: rgba(20, 63, 131);
      font-size: 20px;
    }

    .error__container-code {
      font-size: 35px;
    }


    .error-btn:link,
    .error-btn:visited {
      width: 300px;
      margin: 10px auto;
      overflow-wrap: break-word;
      background-color: rgba(20, 63, 131);
      color: #fff;
    }

    @media only screen and (max-width: 400px) {

      .error-btn:link,
      .error-btn:visited {
        width: 90%;
        height: auto;
      }
    }
  </style>
  <title>Document</title>
</head>

<body>

</body>

</html>

<div class="wrapper">
  <div class="error__container">
    <p class="error__container-message">Ведуться технические работы</p>
    <p class="error__container-code">Сайт будет доступен в ближайшие время</p>
  </div>
</div>