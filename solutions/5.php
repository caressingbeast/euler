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
        var number;

        number_counter:
        for (var i = 2520; i <= 999999999; i++) {

          divisor_counter:
          for (var ind = 1; ind <= 20; ind++) {
            if (i % ind !== 0) {
              break divisor_counter;
            }

            if (ind === 20) {
              number = i;
              break number_counter;
            }
          }
        }

        document.getElementById('answer').innerText = number;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
  </body>
<?php include('../includes/footer.php'); ?>
