<?php
  $page_title = '#17: Number letter counts';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      If the numbers 1 to 5 are written out in words: one, two, three, four,
      five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
    </p>
    <p>
      If all the numbers from 1 to 1000 (one thousand) inclusive were written out
      in words, how many letters would be used?
    </p>
    <p>
      <small>
        <strong>NOTE</strong>: Do not count spaces or hyphens. For example, 342
        (three hundred and forty-two) contains 23 letters and 115 (one hundred
        and fifteen) contains 20 letters. The use of "and" when writing out
        numbers is in compliance with British usage.
      </small>
    </p>

    <?php
      $correct_answer = '21124';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var counts = {
          a: 3 + 3 + 5 + 4 + 4 + 3 + 5 + 5 + 4, // 1 - 9
          b: 3 + 6 + 6 + 8 + 8 + 7 + 7 + 9 + 8 + 8, // 10 - 19
        };

        // 20 - 99
        counts.c = ((10 * (6 + 6 + 5 + 5 + 5 + 7 + 6 + 6)) + // prefixes
                   (8 * counts.a)); // 1 - 9 within each prefix

        // sum 1 - 99
        counts.d = counts.a + counts.b + counts.c;

        // 100 - 999
        counts.e = (counts.a * 100) + (counts.d * 9) + (9 * 7) + (9 * 99 * 10);

        // 1000
        counts.f = 11;

        document.getElementById('answer').innerText = counts.d + counts.e + counts.f;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('../includes/footer.php'); ?>
