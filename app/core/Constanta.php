<?php

define('BASEURL', 'http://localhost:8080/uas/public');

//db

define('DB_HOST' , 'localhost');
define('DB_USER' , 'root');
define('DB_PASS' , '');
define('DB_NAME' , 'uas');

//models

define('GENERAL', 'General_model');
define('POST', 'Post_model');
define('USER', 'User_model');

//include template
define('MAIN', '../app/views/template/content.php');
define('MULTI', '../app/views/template/multi-post.php');

//include template (control panel)
define('headerPanel', '../app/views/template/control panel/headerPanel.php');
define('NEWPOST', '../app/views/template/control panel/newPost.php');
define('UPDATEPOST', '../app/views/template/control panel/updatePost.php');
define('USERS', '../app/views/template/control panel/userAccount.php');
define('HOMEPAGE', '../app/views/template/control panel/homepage.php');