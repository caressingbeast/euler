<?php
  $page_title = '#5: Smallest multiple';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      2520 is the smallest number that can be divided by each of the numbers from
      1 to 10 without any remainder.
    </p>
    <p>
      What is the smallest positive number that is evenly divisible by all of
      the numbers from 1 to 20?
    </p>

    <?php
      $correct_answer = '232792560';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var INTERVAL = 2520; // smallest number evently divisible by 1-10
        var result;

        number_counter:
        for (var i = INTERVAL; i <= 500000000; i += INTERVAL) {

          divisor_counter:
          for (var j = 11; j <= 20; j++) { // divisible by 11-20 = divisible by 1-10
            if (i % j !== 0) {
              break divisor_counter;
            }

            if (j === 20) {
              result = i;
              break number_counter;
            }
          }
        }

        document.getElementById('answer').innerText = result;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
  </body>
<?php include('../includes/footer.php'); ?>
