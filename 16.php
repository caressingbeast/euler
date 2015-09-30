<?php
  $page_title = '#16: Power digit sum';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      2<sup>15</sup> = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
    </p>
    <p>
      What is the sum of the digits of the number 2<sup>1000</sup>?
    </p>

    <?php
      $correct_answer = '1366';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var digits = getDigits(2, 1000);
        var sum = 0;       

        for (var i = 0; i < digits.length; i++) {
          sum += digits[i];
        }

        document.getElementById('answer').innerText = sum;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('includes/footer.php'); ?>
