#!/bin/bash
cat /dev/null > /var/www/html/file.txt

sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*110*10%23&port=9&'
sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*110*10%23&port=10&'
sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*101%23&port=11&'
sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*111%23&port=12&'
sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*111%23&port=17&'
sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*111%23&port=18&'
sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*111%23&port=19&'
sleep 2
curl 'http://192.168.0.157/sendussd?username=ussduser&password=ussdpwd&message=*111%23&port=20&'



