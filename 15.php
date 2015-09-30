<?php
  $page_title = '#15: Lattice paths';
  include('includes/header.php');
  include('includes/solution_header.php');
?>

    <p>
      Starting in the top left corner of a 2×2 grid, and only being able to move
      to the right and down, there are exactly 6 routes to the bottom right corner.
    </p>
    <p>
      How many such routes are there through a 20×20 grid?
    </p>

    <?php
      $correct_answer = '137846528820';
      include('includes/solution_details.php');
    ?>

    <script>
      (function () {
        'use strict';

        var startTime = new Date().getTime();
        var paths = 1;
        var size = 20;

        for (var i = 0; i < size; i++) {
          paths *= (2 * size) - i;
          paths /= i + 1;
        }

        document.getElementById('answer').innerText = paths;
        document.getElementById('elapsed').innerText = new Date().getTime() - startTime;
      })();
    </script>
<?php include('includes/footer.php'); ?>
