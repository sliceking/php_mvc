  <?php require 'partials/head.php';?>

  <?php foreach ($tasks as $task): ?>

    <li>
      <?php if (!$task->completed): ?>

        <strike> <?=$task->description;?> </strike>

      <?php else: ?>

        <?=$task->description;?>

      <?php endif;?>
    </li>

  <?endforeach;?>

<?php require 'partials/footer.php';?>