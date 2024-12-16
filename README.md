# PHP Foreach Pass-by-Reference Gotcha

This example demonstrates a potential issue with PHP's foreach loops when using pass-by-reference.  Improper handling of references within a foreach can unintentionally modify the original array, leading to unexpected results.  The solution showcases a safe method to avoid this problem.

The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a corrected version.