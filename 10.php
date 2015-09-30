<?php
  $page_title = '#10: Summation of primes';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
    </p>
    <p>
      Find the sum of all the primes below two million.
    </p>

    <?php
      $correct_answer = '142913828922';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var sum = 0;

        function getPrimes (n) {
          var limit = Math.sqrt(n);
          var a = [];
          var o = [];

          // create array of integers
          for (var i = 0; i < n; i++) {
            a.push(true);
          }

          // false out the non-primes
          for (var i = 2; i <= limit; i++) {
            if (a[i]) {
              for (var ind = i * i; ind < n; ind += i) {
                a[ind] = false;
              }
            }
          }

          // remaining are primes
          for (var i = 2; i < n; i++) {
            if (a[i]) {
              o.push(i);
            }
          }

          return o;
        }

        var primes = getPrimes(2000000);

        for (var i = 0; i < primes.length; i++) {
          sum += primes[i];
        }

        document.getElementById('answer').innerText = sum;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('includes/footer.php'); ?>
