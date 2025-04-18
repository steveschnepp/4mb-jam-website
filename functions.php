<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}


function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }

    return false;
}

function make_static_path($pathname) {
    $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    return $root . $pathname;
}

function render_sprite_icon($name, $label = "", $aria_hidden = true) {
    $spritemap_path = make_static_path("assets/icons/spritemap.svg#sprite-$name");
    echo "<svg " . ($aria_hidden ? "aria-hidden='true' " : '') . ($label ? "aria-label='$label' ": '') . "class='$name icon'>";
    echo "<use href='$spritemap_path'></use>";
    echo '</svg>';
}
