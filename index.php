<?php
include_once "php-markdown/markdown.php";
echo Markdown(file_get_contents("index.md"));
?>