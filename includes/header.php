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
      function getPrimes (n) {
        var limit = Math.sqrt(n);
        var a = [];
        var o = [];

        // create array of integers
        for (var i = 0; i < n; i++) {
          a.push(true);
        }

        // false out the non-primes
        for (var i = 2; i <= limit; i++) {
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
