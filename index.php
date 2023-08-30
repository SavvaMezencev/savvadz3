<?php
if (isset($_GET['query']) && $_GET['query'] == 'test') {
    phpinfo();
} else {
    echo 'Hello';
}