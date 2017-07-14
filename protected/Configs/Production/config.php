<?php

$config['is_coming_soon'] = false;
$config['is_maintanance'] = false;

$config['language'] = 'Id';
$config['charset'] = 'utf-8';
$config['allowed_characters'] = 'a-z 0-9~%.:_\-';

$config['log_roll_method'] = "Daily";
$config['log_max_roll'] = 10;
$config['log_max_roll_size'] = "1KB";

$config['security_key'] = 'ce43t5vetrh8dt4y';
$config['security_salt'] = 'd8h8x3yeu27';

$config['cookie_prefix'] = '';
$config['cookie_expire_time'] = 3600;
$config['cookie_path'] = '/';
$config['cookie_domain'] = '';
$config['cookie_secure'] = false;
$config['cookie_http_only'] = true;

$config['csrf_enabled'] = true;
$config['csrf_name'] = "auth_token";
$config['csrf_length'] = 64;

$config['image_quality'] = 90;
$config['image_imagick_binary'] = "\"C:\Program Files\ImageMagick-6.9.0-Q16\convert.exe\"";
$config['image_netpbm_path'] = "";

$config['image_watermark_quality'] = "90";
$config['image_watermark_padding'] = "";
$config['image_watermark_vertical_alignment'] = "bottom";
$config['image_watermark_horizontal_alignment'] = "center";
$config['image_watermark_vertical_offset'] = "";
$config['image_watermark_horizontal_offset'] = "";

$config['image_watermark_font_path'] = "C:\Windows\Fonts\Arial.ttf";
$config['image_watermark_font_size'] = 80;
$config['image_watermark_font_color'] = "fffff";
$config['image_watermark_shadow_color'] = "666666";
$config['image_watermark_shadow_distance'] = "3";

$config['image_watermark_overlay_path'] = "";
$config['image_watermark_opacity'] = "50";
$config['image_watermark_x_transp'] = "4";
$config['image_watermark_y_transp'] = "4";

$config['file_upload'] = array(
    'upload_path' => PUBLIC_DIR . 'uploads' . DS . date("Y") . DS . date("m") . DS . date("d") . DS,
    'allowed_types' => 'gif|jpg|png',
    'filename' => null,
    'overwrite' => true,
    'max_size' => '1024',
    'max_width' => '1024',
    'max_height' => '768',
    'max_filename' => 125,
    'encrypt_name' => true,
    'encrypt_unique' => false,
    'remove_space' => true
);

$config['months'] = array(
    'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
);