# PHP Notice: Undefined index - Silent Array Access Errors

This repository demonstrates a common, yet subtle, error in PHP: the 'Undefined index' notice.  When accessing an array element that doesn't exist, PHP issues a notice instead of throwing an error.  This can make debugging more challenging, as notices don't halt script execution.

The `bug.php` file shows the problematic code. The `bugSolution.php` file presents a solution using `isset()` or `array_key_exists()` to check for the index's existence before access.

## How to reproduce

1. Clone the repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the notice in the output.
4. Run `bugSolution.php` and see that the notice is avoided.