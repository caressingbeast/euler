<?php
  $page_title = '#7: 10001st prime';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see
      that the 6th prime is 13.
    </p>
    <p>
      What is the 10001st prime number?
    </p>

    <?php
      $correct_answer = '104743';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var primes = getPrimes(125000);

        document.getElementById('answer').innerText = primes[10000];
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('includes/footer.php'); ?>
