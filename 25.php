<?php
  $page_title = '#25: 1000-digit Fibonacci number';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      The Fibonacci sequence is defined by the recurrence relation:
    </p>
    <p>
      F<sub>n</sub> = F<sub>n</sub>−1 + F<sub>n</sub>−2, where F<sub>1</sub> = 1
      and F<sub>2</sub> = 1. Hence the first 12 terms will be:
    </p>
    <p>
      F<sub>1</sub> = 1<br />
      F<sub>2</sub> = 1<br />
      F<sub>3</sub> = 2<br />
      F<sub>4</sub> = 3<br />
      F<sub>5</sub> = 5<br />
      F<sub>6</sub> = 8<br />
      F<sub>7</sub> = 13<br />
      F<sub>8</sub> = 21<br />
      F<sub>9</sub> = 34<br />
      F<sub>10</sub> = 55<br />
      F<sub>11</sub> = 89<br />
      F<sub>12</sub> = 144
    </p>
    <p>
      The 12th term, F<sub>12</sub>, is the first term to contain three digits.
    </p>
    <p>
      What is the index of the first term in the Fibonacci sequence to contain
      1000 digits?
    </p>

    <?php
      $correct_answer = '4782';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();

        document.getElementById('answer').innerText = '';
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
  </body>
<?php include('includes/footer.php'); ?>
