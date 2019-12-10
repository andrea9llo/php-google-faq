<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google faq</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <?php

      include "data.php";

     ?>

  </head>
  <body>

    <div class="container">
      <?php

        foreach ($faqs as  $faq) {
          ?>
           <h2><?php echo $faq["question"] ?></h2>
           <p><?php echo $faq["answer"] ?></p>
          <?php
        }


       ?>

    </div>

  </body>
</html>
