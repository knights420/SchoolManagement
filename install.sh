#! /bin/bash

for VARIABLE in 1 2 3 4 5 6 7 8 9 10
do
	composer require teacoders/module-generator
    composer remove teacoders/module-generator
done