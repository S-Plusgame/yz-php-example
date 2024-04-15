<?php
/**
 * 加解密範例
 *
 */

# 加密
$jwt = jwtEncode();
echo "------------ JWT ------------";
print($jwt);

function jwtEncode():string
{
    $header = [
        "alg" => "HS256",
        "typ" => "JWT"
    ];
    $jsonHeader= json_encode($header);
    // 內容
    $payload = [
        "Request" =>[
            "username" => "siteName",
            "password" => "sitePassword"
        ],
        "Action" => "AGLogin"
    ];
    $jsonPayload = json_encode($payload);
    // 密鑰
    $jwtSecret = 'ABCDEFG';

    $hmac_sha256_str = base64url_encode(hash_hmac("sha256", base64url_encode($jsonHeader).'.'.base64url_encode($jsonPayload), $jwtSecret,true));
    
    return base64url_encode($jsonHeader).'.'.base64url_encode($jsonPayload).'.'.$hmac_sha256_str;
}


function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
}