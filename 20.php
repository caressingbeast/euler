<?php
  $page_title = '#20: Factorial digit sum';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      n! means n × (n − 1) × ... × 3 × 2 × 1
    </p>
    <p>
      For example, 10! = 10 × 9 × ... × 3 × 2 × 1 = 3628800, and the sum of the
      digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
    </p>
    <p>
      Find the sum of the digits in the number 100!
    </p>

    <?php
      $correct_answer = '648';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var i = 100;
        var result = 0;

        function factorial (n) {
          if (n === 0) {
            return 1;
          }

          return n * factorial(n - 1);
        }

        document.getElementById('answer').innerText = '';
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
  </body>
<?php include('includes/footer.php'); ?>
