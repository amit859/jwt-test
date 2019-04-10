<?php 

	 error_reporting(E_ALL);
	 date_default_timezone_set('Asia/Manila');
	 $issuedAt = time();
	 $notBefore = $issuedAt + 10;
	 $expirationTime = $issuedAt + 72000;

	 $privatekey=
	 <<<EOD
	 -----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: AES-128-CBC,1B3E7BC41E22C8740BF7C0BE65CD0C1F

sGDwV8e1RdiMJv64cuvB0qltP02i+m5Wti2xagl6Kb8uKuVXn/ozA0+58gxZe4uh
59+kFYVkeErxYxorfJWKJvGW5D4UdeU0P/38s/AAmoeqR/trXiJbqdguUPZpWGt/
oA9Fh1YJgBaJvacqv6++CnqDWbbiTWLvqR92ZASCI8pkUt4YPFi6Kl3g2H9fri5e
/xo5fYIkWTDLRSbdyZ9e4x8U+3kLjOcq/ZjWU7nDuW7t9O/a/r1QVj2oRXnr2npW
kWj1+YRITcRT4rWnASEsD2A+rdzR4YhV4/9JQM3fn2+QrIvUeF/RVt5s9HaKWcJO
wmi2G1ohshHlWNFtq8VcKjoOIxLYuaiElNOd8Do56/LigsW5Pp1r/d064k6AyYtU
kbadNwIuZOdYh7P8a+gP1paFZx/zbyL0rfqlXIfBYAMekOpMZRKVZfJB9iutUlvy
svmohWejYifNUViOCwmj7RcvNeh4xWvi1LHZdoz/eQLmQLXKd5jPQROJVtjyT06l
fZdXhmpKfzDp5L0udtFDRQyO1qw8hw1qxM7t+suwnBMK/WerXZs7mLoaVEAucYTm
Idm2QPxwSMaV8fuUBMEAjp7Hou2qXkY1pIOhV86MIBBDbkaVryHL4Jkmb3/1UZCy
dY312fUdlZ08lw5TN8HQpz7VMJ17xg1qHud6CPCKISjddV7KaIT1d4OFtL/fIw5q
+bxACjh5WPtJGd/m1CBAspohw8Fv04gUSnCACEJz9tIFdo8pbOmQeZ4TAibeW6an
0PJ/+NXFDzofonHyFlHytBRrwr/yN4LjBW/NiDTwy+k7ge6ep21Fp86s1yVU0qee
3nKGfp8uP6UJUWznQ6MLjynaO4uaaEhdC1oUC5gLdhwpiCaDKbT4SzsJQHrr/RIc
lK0E86jAWvqWzad11IztvKQQZQihNlgxEFoSMTdia3a4pzfa0fYhC4CcTbhMb8BC
ioAOfSIz2ezES/ZnBXf/fwUr1ImsCQRZr1z6Xn8ytHprlFqfj3v7xrqfao2hwqab
Ij0wiwwj4btgodsPTE5H9ZILdP1cjKK4iZTzMSpBsODS+H9nKj5ixkeHZjGlE8Hk
o47jzzs+2BfOMZrmz5aukzXfSLh03iHxFTg3LM+JKkFfPc9QBdTQat2xSL/hIUbX
68ajs3HxUkwXe3xSBnwofxYB1WT/zkF82Hl2AbcBAVfS0pB5a40cgzmbAmqsIEeo
pX041UHu5Gjdyys5dv/kF/EX26771VfVReinSZAK/3FM54Bs3U7T0HsvsjK3cqYY
PrDE6AoHqfE1ak8dg6H9Rvqx1NKDfthWMk6t6Y4cRaKT5xy+2lLNsJAeM0zt5fRV
DeWxZpsOBHjVL/4LKm94cX1XrJJsGJkyXFQMGcF0gMCAi/lsxxRITw4cDbKxKMTY
cVKwKPfoey5rxBYsk2QKfgeVOpazbo9eK4Mioo+yLY8HrdmA8oiJ7t0CXiAINnZL
SSGltDBFBV2KYjz35yHlsJrosBHjGyITP7dHjgJhQM3c+6tgeppihc8YQvY+qO8+
QvYkHKoXMnTPtVX/rncTgrQhejfR3nCyJIp6Qxto4dNCMMhM7r0sYl+rqxdL8Llr
-----END RSA PRIVATE KEY-----
EOD;

$publicKey = <<<EOD
-----BEGIN RSA PUBLIC KEY-----
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCuPAWOblLBchoBA5yg9uG7RpcN2JB
h0HEvx0cKB+O4/GRHn/JHpC48tj5Phn4NJ6BZcCCqrYzt8Z/KSmqkUIgwAxLjsDgpR+
5Z0GE0iYV8rRkYbBdR0Y8zR7Oqh0LSUnWBEc6uwO29mh0Wnc4SW/nSBLZSbtsxSUWzM
yCw5tSTM/fT4pTqlMpLV86XpKVfQI3YLH78SR8qH4S/Psv7Tvu7TpFIBeVLo2RnGgSb
qFO9ASuSMyZJNzuAHwI134JtHJ99YMrNXIHa5AQTpXh69X4vtrvQEDGdSOpBaJ2VHUq
qWQcgBbeOcpSihtsp55gCcVyHqVR+Z0HcBmEJxPqVKvQt manoj@DESKTOP-6DHQUTU
-----END RSA PUBLIC KEY-----
EOD;

$passphrase = "amitsingh";
$key = openssl_get_privatekey($privatekey, $passphrase);
//$a = openssl_get_publickey($publicKey);
	 $iss = "http://localhost:8181";
	 $aud = "http://localhost:8181";
	 $iat = $issuedAt;
	 $nbf = $notBefore; 	


?>
