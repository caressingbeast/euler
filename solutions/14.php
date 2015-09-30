<?php
  $page_title = '#14: Longest Collatz sequence';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      The following iterative sequence is defined for the set of positive integers:
    </p>
    <p>
      n → n/2 (n is even)<br />
      n → 3n + 1 (n is odd)
    </p>
    <p>
      Using the rule above and starting with 13, we generate the following sequence:
    </p>
    <p>
      13 → 40 → 20 → 10 → 5 → 16 → 8 → 4 → 2 → 1
    </p>
    <p>
      It can be seen that this sequence (starting at 13 and finishing at 1) contains
      10 terms. Although it has not been proved yet (Collatz Problem), it is
      thought that all starting numbers finish at 1.
    </p>
    <p>
      Which starting number, under one million, produces the longest chain?
    </p>

    <?php
      $correct_answer = '837799';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var LIMIT = 1000000;
        var length = 0;
        var start = 0;
        var cache = {};
        var sequence;

        function initCache () {
          for (var i = 0; i < LIMIT; i++) {
            cache[i] = -1;
          }

          cache[1] = 1;
        }
        initCache();

        for (var i = 1; i < LIMIT; i++) {
          var counter = 0;

          sequence = i;

          while (sequence !== 1 && sequence >= i) {
            counter++;

            if (sequence % 2 === 0) {
              sequence = sequence / 2;
            } else {
              sequence = (sequence * 3) + 1;
            }
          }

          cache[i] = counter + cache[sequence];

          if (cache[i] > length) {
            length = cache[i];
            start = i;
          }
        }

        document.getElementById('answer').innerText = start;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('../includes/footer.php'); ?>
