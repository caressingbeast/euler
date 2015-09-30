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
        var primes = [2, 3]; // sneak in the first few that require different logic

        outer_loop:
        for (var i = 4; i < 500000; i++) {
          if (i % 2 === 0) { // continue if it's even
            continue;
          }

          var sqrt = Math.ceil(Math.sqrt(i)); // get the square root (round up)
          var isPrime = false;

          // divide the number by each integer between 2 and the square root
          inner_loop:
          for (var ind = 2; ind <= sqrt; ind++) {
            if (i % ind === 0) { // it's not prime, exit
              isPrime = false;
              break inner_loop;
            }

            isPrime = true;
          }

          if (isPrime) {
            primes.push(i);
          }

          if (primes.length === 10001) {
            break outer_loop;
          }
        }

        document.getElementById('answer').innerText = primes[primes.length - 1];
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('includes/footer.php'); ?>
