<!DOCTYPE html>

<html lang="eng">

<head>

  <meta charset="UTF-8">
  <title>PHP</title>

</head>

<body>

<nav>
  <ul>
    <li><a href="/about.php">About</a></li>
    <li><a href="/contact.php">Contact</a></li>
  </ul>
</nav>

  <ul>
    <?php foreach ($tasks as $task) : ?>

      <li>
        <?php if ($task->completed) : ?>
          <strike>
            <?= $task->description; ?>
          </strike>
        <?php else: ?>
          <?= $task->description; ?>
        <?php endif; ?>
      </li>

    <?php endforeach; ?>
  </ul>

</body>

</html>
