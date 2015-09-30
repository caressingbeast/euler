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

        function getSmallestFactor (n) {
          for (var i = 2, limit = Math.sqrt(n); i < limit; i++) {
            if (n % i === 0) {
              return i;
            }
          }

          return n;
        }

        function factor (n) {
          while (true) {
            var f = getSmallestFactor(n);

            if (f < n) {
              n /= f;
            } else {
              return n;
            }
          }
        }

        document.getElementById('answer').innerText = factor(600851475143);
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('../includes/footer.php'); ?>
