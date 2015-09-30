<?php
  $page_title = '#18: Maximum path sum I';
  include('../includes/header.php');
  include('../includes/solution_header.php');
?>

    <p>
      By starting at the top of the triangle below and moving to adjacent numbers
      on the row below, the maximum total from top to bottom is 23.
    </p>
    <p class="center">
      <code>
        <b>3</b><br />
        <b>7</b> 4<br />
        2 <b>4</b> 6<br />
        8 5 <b>9</b> 3<br />
      </code>
    </p>
    <p>
      That is, 3 + 7 + 4 + 9 = 23.
    </p>
    <p>
      Find the maximum total from top to bottom of the triangle below:
    </p>
    <p class="center">
      <code>
        75<br />
        95 64<br />
        17 47 82<br />
        18 35 87 10<br />
        20 04 82 47 65<br />
        19 01 23 75 03 34<br />
        88 02 77 73 07 63 67<br />
        99 65 04 28 06 16 70 92<br />
        41 41 26 56 83 40 80 70 33<br />
        41 48 72 33 47 32 37 16 94 29<br />
        53 71 44 65 25 43 91 52 97 51 14<br />
        70 11 33 28 77 73 17 78 39 68 17 57<br />
        91 71 52 38 17 14 91 43 58 50 27 29 48<br />
        63 66 04 68 89 53 67 30 73 16 69 87 40 31<br />
        04 62 98 27 23 09 70 98 73 93 38 53 60 04 23
      </code>
    </p>

    <?php
      $correct_answer = '1074';
      include('../includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var path = 0;
        var pyramid = [
          [75],
          [95, 64],
          [17, 47, 82],
          [18, 35, 87, 10],
          [20, 4, 82, 47, 65],
          [19, 1, 23, 75, 3, 34],
          [88, 2, 77, 73, 7, 63, 67],
          [99, 65, 4, 28, 6, 16, 70, 92],
          [41, 41, 26, 56, 83, 40, 80, 70, 33],
          [41, 48, 72, 33, 47, 32, 37, 16, 94, 29],
          [53, 71, 44, 65, 25, 43, 91, 52, 97, 51, 14],
          [70, 11, 33, 28, 77, 73, 17, 78, 39, 68, 17, 57],
          [91, 71, 52, 38, 17, 14, 91, 43, 58, 50, 27, 29, 48],
          [63, 66, 4, 68, 89, 53, 67, 30, 73, 16, 69, 87, 40, 31],
          [4, 62, 98, 27, 23, 9, 70, 98, 73, 93, 38, 53, 60, 4, 23]
        ];

        for (var r = pyramid.length - 1; r; r--) {
          for (var i = 0, len = pyramid[r].length - 1; i < len; i++) {
            pyramid[r - 1][i] = pyramid[r - 1][i] + Math.max(pyramid[r][i], pyramid[r][i + 1]);
          }

          path = pyramid[0][0];
        }

        document.getElementById('answer').innerText = path;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('../includes/footer.php'); ?>
