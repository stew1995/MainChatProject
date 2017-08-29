<?php
/**
 * Created by IntelliJ IDEA.
 * User: stewart
 * Date: 22/08/2017
 * Time: 12:20
 */

/*$dirname = "img/UserFiles/";
$images = glob($dirname."*.jpg");

foreach($images as $image) {
    echo '<img src="'.$image.'" /><br />';
}*/

/*$files = glob("img/*.*");
for ($i = 0; $i < count($files); $i++) {
    $image = $files[$i];
    echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
    echo '<img src="' . $image . '" alt="Random image" />' . "<br /><br />";

}*/

///Library/WebServer/Documents/Github/MainChatProject/img
$dir          = '/Users/stewart/Desktop/';

$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);

if (file_exists($dir) == false) {
    echo 'Directory \''. $dir. '\' not found!';
} else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
        $file_type = strtolower(end(explode('.', $file)));

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
            echo '<img src="'. $dir. '/'. $file. '" alt="', $file, '" height="100" width="100" />';
        }
    }
}

