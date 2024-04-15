# yz-php-example

index.php演示jwt加密範例.

後續請透過API拿到accessToken,並做JWT Verify Signature驗證

```bash
PHP 8.0.26 (cli) (built: Dec  3 2022 19:20:51) ( NTS )
Copyright (c) The PHP Group
Zend Engine v4.0.26, Copyright (c) Zend Technologies
    with Zend OPcache v8.0.26, Copyright (c), by Zend Technologies
```
index.php
```php
------------ JWT ------------
eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJSZXF1ZXN0Ijp7InVzZXJuYW1lIjoic2l0ZU5hbWUiLCJwYXNzd29yZCI6InNpdGVQYXNzd29yZCJ9LCJBY3Rpb24iOiJBR0xvZ2luIn0.o-6vne3DPe6rxRZnP38ORMJzCr_PkUqrwjPL_fDglkE
```



測試
```bash
curl --location --max-time 10 --request POST '$(URL)' \
--header 'Content-Type: text/plain' \
--data-raw '$(JWT)'
```
