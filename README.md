# Citco Postcode : Simple UK postcode validator

Citco Postcode is developed by [CIT Ltd.](http://cit.limited).

## About

Simple UK postcode validation and parsing.

## Installation

### Composer

From the Command Line:

```
composer require citco/postcode:dev-master
```

In your `composer.json`:

``` json
{
    "require": {
        "citco/postcode": "dev-master"
    }
}
```
After updating composer, add the MailerServiceProvider to the providers array in app/config/app.php
```php
    'Citco\Mailer\PostcodeServiceProvider',
```

## Basic Usage


## License

Citco Mailer is open source software licensed under [the MIT license](http://opensource.org/licenses/MIT)

Copyright [Creative Investments Technologies](http://creativeinvestments.co.uk)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


