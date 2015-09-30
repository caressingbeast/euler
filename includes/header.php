<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <style>
      b {
        color: red;
      }

      code, pre {
        color: #999;
      }

      .break {
        white-space: pre-wrap;
        word-wrap: break-word;
      }

      .center {
        text-align: center;
      }
    </style>
    <script>
      function getDigits (n, exp) {
        var counter = 1;
        var limit = exp * (Math.log(n) / Math.log(10));
        var digits = [n];

        while (counter < exp) {
          var remainder = 0;

          counter++;

          for (var i = 0; i < limit; i++) {
            var number = n * (digits[i] || 0) + remainder;
            digits[i] = number % 10;
            remainder = Math.floor(number / 10);
          }
        }

        return digits;
      }

      function getPrimes (n) {
        var a = [];
        var o = [];

        // create array of integers
        for (var i = 0; i < n; i++) {
          a.push(true);
        }

        // false out the composites
        for (var i = 2, limit = Math.sqrt(n); i <= limit; i++) {
          if (a[i]) {
            for (var ind = i * i; ind < n; ind += i) {
              a[ind] = false;
            }
          }
        }

        // remaining are primes
        for (var i = 2; i < n; i++) {
          if (a[i]) {
            o.push(i);
          }
        }

        return o;
      }
    </script>
  </head>
  <body>
