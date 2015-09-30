<?php
  $page_title = '#6: Sum square difference';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      The sum of the squares of the first ten natural numbers is,
    </p>
    <p>
      1^2 + 2^2 + ... + 10^2 = 385
    </p>
    <p>
      The square of the sum of the first ten natural numbers is,
    </p>
    <p>
      (1 + 2 + ... + 10) = 55^2 = 3025
    </p>
    <p>
      Hence the difference between the sum of the squares of the first ten natural
      numbers and the square of the sum is 3025 − 385 = 2640.
    </p>
    <p>
      Find the difference between the sum of the squares of the first one hundred
      natural numbers and the square of the sum.
    </p>

    <?php
      $correct_answer = '25164150';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var n = 100;
        var sum = (n * (n + 1)) / 2; // n(n + 1) / 2
        var sumOfSquares = ((n * (n + 1)) * ((2 * n) + 1)) / 6; // n(n + 1)(2n + 1) / 6

        var squareOfSum = (sum * sum) - sumOfSquares;

        document.getElementById('answer').innerText = squareOfSum;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('includes/footer.php'); ?>
