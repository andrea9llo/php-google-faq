<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google faq</title>

    <?php

      include "data.php";

     ?>

  </head>
  <body>

    <div class="container">
      <?php

        foreach ($faqs as  $faq) {
          ?>
           <h1><?php echo $faq["question"] ?></h1>
           <p><?php echo $faq["answer"] ?></p>
          <?php
        }


       ?>

    </div>

  </body>
</html>
