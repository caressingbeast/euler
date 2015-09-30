<?php
  $page_title = '#21: Amicable numbers';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      Let d(n) be defined as the sum of proper divisors of n (numbers less than
      n which divide evenly into n).
    </p>
    <p>
      If d(a) = b and d(b) = a, where a ≠ b, then a and b are an amicable pair
      and each of a and b are called amicable numbers.
    </p>
    <p>
      For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22,
      44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1,
      2, 4, 71 and 142; so d(284) = 220.
    </p>
    <p>
      Evaluate the sum of all the amicable numbers under 10000.
    </p>

    <?php
      $correct_answer = '31626';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var counter = 0;
        var numbers = {};
        var sum = 0;

        function getFactors (n) {
          var factors = [];

          for (var i = 1, limit = Math.sqrt(n); i <= limit; i++) {
            if (n % i === 0) {
              factors.push(i);

              if ((i * i) < n) {
                var d = n / i;

                if (d < n) {
                  factors.push(d);
                }
              }
            }
          }

          return factors;
        }

        for (var i = 0; i < 1000; i++) {
          numbers[i] = getFactors(i);
        }

        console.log(numbers);

        document.getElementById('answer').innerText = '';
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
  </body>
<?php include('includes/footer.php'); ?>
