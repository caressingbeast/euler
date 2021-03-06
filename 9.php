<?php
  $page_title = '#9: Special Pythagorean triplet';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
    </p>
    <p>
      a2 + b2 = c2
    </p>
    <p>
      For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
    </p>
    <p>
      There exists exactly one Pythagorean triplet for which a + b + c = 1000.
      Find the product abc.
    </p>

    <?php
      $correct_answer = '31875000';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var SUM = 1000;
        var product;

        a_loop:
        for (var a = 1; a < (SUM / 3); a++) {

          b_loop:
          for (var b = a + 1; b < (SUM / 2); b++) {
            var c = SUM - a - b;

            if (((a * a) + (b * b)) === (c * c)) {
              product = a * b * c;
            }
          }
        }

        document.getElementById('answer').innerText = product;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('includes/footer.php'); ?>
