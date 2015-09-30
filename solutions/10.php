<?php
  $page_title = '#10: Summation of primes';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
    </p>
    <p>
      Find the sum of all the primes below two million.
    </p>

    <?php
      $correct_answer = '142913828922';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var primes = getPrimes(2000000);
        var sum = 0;

        for (var i = 0; i < primes.length; i++) {
          sum += primes[i];
        }

        document.getElementById('answer').innerText = sum;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('../includes/footer.php'); ?>
