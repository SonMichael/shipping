# Home test

###

### Our story:
*  There is a shipping service. It helps Vietnamese buy products on Amazon website.
After a client provides items urls on Amazon, we will have: Amazon price, product
weight, width, height, depth
*  We need to calculate a gross price for an order (contains many items) follow
formulas:
* gross price = item price 1 + item price 2 + ...
*  item price = amazon price + shipping fee
*  shipping fee = max (fee by weight, fee by dimensions)
*  fee by weight = product weight x weight coefficient
* fee by dimension = width x height x depth x dimension coefficient

Example coefficients:

*  weight coefficient: $11/kg
*  dimension coefficient: $11/m3

What do you need to do?
1. Create the necessary and flexible structure of classes to calculate the gross price for
an order.
2. Write unit tests for classes

Requirements:
1. No need to implement UI

2. Don't use any framework. We are implementing business logic which should be
separated from framework (clean architecture)
3. Code must be executable without any exceptions
4. Code must satisfy PSR-12
5. Classes must satisfy S.O.L.I.D principles and should be auto loaded with autoloading
standard PSR-4
6. Coefficients are configurable
7. Use PHP7 if possible
8. Shipping fee must be flexible. For example, shipping fee for a smartphone (300g) must
be less than a diamond ring (10g) so we need be add fee by product type someday
* shipping fee = max (fee by weight, fee by dimensions, fee by product type)
* How do we add fee by product type without changing shipping fee code?
* No need to implement fee by product type

### Install
Use PHP 7.4 and PHPUnit tess

* composer install

From root to run example: 
* php src/index.php

## Tests

From root

* ./vendor/bin/phpunit tests