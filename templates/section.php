<?php
include_once 'functions.php';

function generateSection($payload) {
    $id = $payload['id'];
    $content = $payload['content'];

    echo "<section>
    <header>
        <h2 id='$id'>
            <a href='#$id'>".ucfirst($id).'</a>
        </h2>
    </header>';

    if (strlen($content) > 0)
        echo $content;
    echo '</section>';
}

function generateSections($payload) {
    $items = $payload['items'];

    foreach ($payload['items'] as $item) {
        // dd($item);
        generateSection($item);
    }
}
