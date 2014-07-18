<!DOCTYPE html>
<head>
    <title>Test Code</title>
</head>
<body>
<div id="wrapper">

    <?php

    $path = dirname(__FILE__);
    $dir = new DirectoryIterator($path);

    $files = array();
    foreach ($dir as $fileinfo) {
        $filename = $fileinfo->getFilename();
        if ($fileinfo->isDot() || $filename == basename(__FILE__) || substr($filename,0,1) == "_") { continue; }
        $files[] = $fileinfo->getFilename();

    }

    sort($files);

    print '<ul>';
    foreach ($files as $file) {
        printf ('<li><a href="%s">%s</a></li>', $file, $file);
    }
    print '</ul>';
    ?>
</div>
</body>
</html>

