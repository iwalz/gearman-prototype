#!/bin/bash

wget http://pecl.php.net/get/gearman-1.0.2.tgz
tar -xzf gearman-1.0.2.tgz
sh -c "cd gearman-1.0.2 && phpize && ./configure && sudo make install"
echo "extension=gearman.so" >> `php --ini | grep "Loaded Configuration" | sed -e "s|.*:\s*||"`
