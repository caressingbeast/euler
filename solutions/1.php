<?php
  $page_title = '#1: Multiples of 3 and 5';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      If we list all the natural numbers below 10 that are multiples of 3 or 5,
      we get 3, 5, 6 and 9. The sum of these multiples is 23.
    </p>
    <p>
      Find the sum of all the multiples of 3 or 5 below 1000.
    </p>

    <?php
      $correct_answer = '233168';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var sum = 0;

        for (var i = 0; i < 1000; i++) {
          if (i % 3 === 0 || i % 5 === 0) {
            sum += i;
          }
        }

        document.getElementById('answer').innerText = sum;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;        
      })();
    </script>
<?php include('../includes/footer.php'); ?>
