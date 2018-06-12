<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    header{
      text-align:center;
      background-color:grey;
      padding:2em;
    }
  </style>
</head>
<body>

<nav>
  <ul>
    <li><a href="/">home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
</nav>

  <?php foreach ($tasks as $task): ?>
    <li>
      <?php if (!$task->completed): ?>
        <strike> <?=$task->description;?> </strike>
      <?php else: ?>
        <?=$task->description;?>
      <?php endif;?>
    </li>

  <?endforeach;?>


</body>
</html>