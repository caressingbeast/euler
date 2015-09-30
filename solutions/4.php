<?php
  $page_title = '#4: Largest palindrome product';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      A palindromic number reads the same both ways. The largest palindrome made
      from the product of two 2-digit numbers is 9009 = 91 × 99.
    </p>
    <p>
      Find the largest palindrome made from the product of two 3-digit numbers.
    </p>

    <?php
      $correct_answer = '906609';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();

        var palindrome = 0;

        function reverse (s) {
          return s.split('').reverse().join('');
        }

        for (var i = 999; i >= 100; i--) {
          for (var ind = 999; ind >= 100; ind--) {
            var n = i * ind;
            var s = n.toString();

            if (s === reverse(s)) {
              if (n > palindrome) {
                palindrome = n;
              }
            }
          }
        }

        document.getElementById('answer').innerText = palindrome;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('../includes/footer.php'); ?>
