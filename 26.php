<?php
  $page_title = '#26: Reciprocal cycles';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      A unit fraction contains 1 in the numerator. The decimal representation of
      the unit fractions with denominators 2 to 10 are given:
    </p>
    <p>
      1/2 &nbsp; = 0.5<br />
      1/3	&nbsp; = 0.(3)<br />
      1/4	&nbsp; = 0.25<br />
      1/5	&nbsp; = 0.2<br />
      1/6	&nbsp; = 0.1(6)<br />
      1/7	&nbsp; = 0.(142857)<br />
      1/8	&nbsp; = 0.125<br />
      1/9	&nbsp; = 0.(1)<br />
      1/10 = 0.1
    </p>
    <p>
      Where 0.1(6) means 0.166666..., and has a 1-digit recurring cycle. It can
      be seen that 1/7 has a 6-digit recurring cycle.
    </p>
    <p>
      Find the value of d < 1000 for which 1/d contains the longest recurring
      cycle in its decimal fraction part.
    </p>

    <?php
      $correct_answer = '983';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var sequence = [];

        for (var i = 0; i < 1000; i++) {
          sequence.push(1 / i);
        }

        console.log(sequence);

        document.getElementById('answer').innerText = '';
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
  </body>
<?php include('includes/footer.php'); ?>
