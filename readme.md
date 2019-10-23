# Requirements
* PHP >= 7.0
* Git
* Composer
# Preparation
Run `Composer install`
# Console commands
`bin/phing test:unit` - run all unit tests

`bin/phing test:unit:coverage` -  run all unit test and create coverage report
#Examples
1. `App\Tests\Example\Example1Test.php` - Show differences between "equal" and "same" assertions   
2. `App\Tests\Example\Example2Test.php` - Show instanceOf assertion and basics of mocking objects
3. `App\Tests\Example\Example3Test.php` - Sample use of setUp method
4. `App\Tests\Example\Example4Test.php` - Samples of testing exceptions
5. `App\Tests\Example\Example5Test.php` - How to use data providers
#Reports
The coverage report is available in the file `/report/coverage/index.html`