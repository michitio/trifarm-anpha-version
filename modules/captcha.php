<?php

session_start();
// $permitted_chars = 'aaAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789';
$permitted_chars = '0123456789';

function generate_string($input, $strength = 10)
{
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

// tạo mảng hình true color
$image = imagecreatetruecolor(200, 50);

// khử răng cưa
imageantialias($image, true);

// tạo bộ màu random

$colors = [];

$red = rand(125, 175);
$green = rand(155, 225);
$blue = rand(155, 225);

for ($i = 0; $i < 5; $i++) {
    $colors[] = imagecolorallocate($image, $red - 20 * $i, $green - 20 * $i, $blue - 20 * $i);
}

// tạo màu background

imagefill($image, 0, 0, $colors[0]);

// tạo đường vạch rối loạn

for ($i = 0; $i < 10; $i++) {
    imagesetthickness($image, rand(2, 10));
    $line_color = $colors[rand(1, 4)];
    imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $line_color);
}

// lấy màu cho text captcha

$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$textcolors = [$black, $white];

// lấy font

$fonts = [
    dirname(__FILE__) . '\fonts_captcha\Roboto-Black.ttf',
    dirname(__FILE__) . '\fonts_captcha\Roboto-BoldItalic.ttf',
    dirname(__FILE__) . '\fonts_captcha\Roboto-Medium.ttf',
    dirname(__FILE__) . '\fonts_captcha\Roboto-Regular.ttf'
];

// tạo chuỗi captcha raw
$string_length = 6;
$captcha_string = generate_string($permitted_chars, $string_length);

// lưu vào session
$_SESSION['captcha_text'] = $captcha_string;

// tạo định dạng captcha
for ($i = 0; $i < $string_length; $i++) {
    $letter_space = 170 / $string_length;
    $initial = 15;

    imagettftext($image, 24, rand(-15, 15), $initial + $i * $letter_space, rand(25, 45), $textcolors[rand(0, 1)], $fonts[array_rand($fonts)], $captcha_string[$i]);
}

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

$url = $index . '/modules/captcha.php';
$img = $index . '/assets/img/login/captcha_img.png';
file_put_contents($img, file_get_contents($url));
