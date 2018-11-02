<?php
if (function_exists('exif_read_data')) {
    echo "Fungsi exif_read_data() ada di PHP.<br />\n";
} else {
    echo "Fungsi exif_read_data() tidak ada di PHP.<br />\n";
}
php artisan make:migration add_role_to_users 