<?php
  $page_title = '#3: Largest prime factors';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      The prime factors of 13195 are 5, 7, 13 and 29.
    </p>
    <p>
      What is the largest prime factor of the number 600851475143?
    </p>

    <?php
      $correct_answer = '6857';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var factors = [];
        var product = 1;

        function factor (number) {
          for (var i = 2; i < number; i++) {
            if (number % i === 0) {
              if (i % 2 !== 0) {
                if (product < number) {
                  factors.push(i);
                  product *= i;
                } else {
                  break;
                }
              }
            }
          }
        }

        factor(600851475143);

        document.getElementById('answer').innerText = factors[factors.length - 1];
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('../includes/footer.php'); ?>
