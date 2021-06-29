# HTTP Events
SIKessEm HTTP events in PHP


## Installation

Use Composer to install the library with this command:

`composer require sikessem/http-events`

Or [click here to download it directly in ZIP format ](https://github.com/SIKessEm/HTTPEvents.php/archive/refs/heads/main.zip)


## Usage

If you are using Composer, include the Composer autoload file.
Otherwise, you can use the example below in all cases:

1. Go to your working directory with the command `cd my_working_directory` where **_my_working_directory_** is your working directory
2. Create the **_boot.php_** file (you can use the command `touch boot.php`)
3. Open the new file (**_boot.php_**) in your code editor
4. Copy and paste the code below:
```php
<?php
/**
 * @var string The real path of program directory
 */
$working_directory = __DIR__ . DIRECTORY_SEPARATOT;

$sys = require_once $working_directory . 'init.php';

$sys->import('main');

main($sys);
```
6. Run `php boot.php`


## Requirements

PHP 8.0.0 or above (at least 8.0.7 recommended to avoid potential bugs)


## Author

SIGUI Kessé Emmanuel | [GitHub](https://github.com/SIKessEm) | [npm](https://npmjs.org/~sikessem) | [Twitter](https://twitter.com/FullDotSIKessEm) | [sikessem@omninf.com](mailto:sikessem@omninf.com) | [sikessem.omninf.com](https://sikessem.omninf.com)


## Security Reports

Please send any sensitive issue to [sikessem@omninf.com](mailto:sikessem@omninf.com). Thanks!


## License
HTTPEvents is licensed under the Apache 2.0 License - see the [LICENSE](./LICENSE) file for details.


## Contribution

For any contribution, please follow these steps:

1. Clone the repository with `git clone https://github.com/SIKessEm/HTTPEvents.php` or `git remote add origin https://github.com/SIKessEm/HTTPEvents.php` then `git branch -M main`
2. Create a new branch. Example: `git checkout -b my_contribution`
3. Make your changes and send them with `git push -u origin main`

You will be informed of the rest.
