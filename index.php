<!doctype html>

<html>

<head>
  <title>Ch 04 - Exercises</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='./css/style.css' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
</head>

<?php include('./includes/inc_header.php'); ?>

<body>
  <nav>
    <?php include('./includes/inc_buttonnav.php'); ?>
  </nav>
  <section class='exercise'>
    <?php
      if (isset($_GET['content'])) {
        switch ($_GET['content']) {
          case 'Exercise 1 Form':
            include('./includes/inc_exercise01form.php');
            break;
          case 'Exercise 1 Results':
            include('./includes/display_errors.php');
            break;
          case 'Exercise 2 Form':
            include('./includes/inc_exercise02errors.php');
            break;
          case 'Exercise 3 Form':
            include('./includes/inc_home.php');
            break;
          case 'Exercise 3 Results':
            include('./includes/inc_home.php');
            break;
          case 'Exercise 4 Form':
            include('./includes/inc_home.php');
            break;
          case 'Exercise 4 Results':
            include('./includes/inc_home.php');
            break;
          default:
            include('./includes/inc_home.php');
            break;
        }
      } else {
        include('./includes/inc_home.php');
      }
    ?>
  </section>
</body>

<?php include('./includes/inc_footer.php'); ?>

</html>
