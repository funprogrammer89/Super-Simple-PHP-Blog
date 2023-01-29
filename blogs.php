<html>
<body>
<center><h1><center>Ken Elliott's Micro Blog</h1>
----------------------------------------------------<br><br><br>
<table width="75%" align='center' style="border-left: 1px solid #cdd0d4;border-right: 1px solid #cdd0d4;padding-left: 30px;padding-right: 30px;"><tr><td>
<?php

// Set the directory path
$dir = getcwd();
$dir2 = "/blogs/";
$dir3 = $dir.$dir2;


// Open the directory
$dh = opendir($dir3);

// Loop through all files in the directory
while (($file = readdir($dh)) !== false) {
    // Check if the file is a text file
    if (pathinfo($file, PATHINFO_EXTENSION) == 'txt') {
        // Open the text file
        $text = file_get_contents($dir3 . '/' . $file);
        // Display the text as HTML and add some ad hoc HTML tags and flair
		echo "</td></tr><tr><td>";
		//Set the size of your headers from your text file
		echo "<font size='6'>";
		// remove the .txt from the display
		echo rtrim($file, ".txt");
		echo "</font></td><td align=left>";
		// get date and time of the text document and remove time with substring
		echo "<script>x = document.lastModified;
		document.write(x.substring(0,x.length-8));</script></td></tr><tr><td><br>";
        echo nl2br($text);
		// add break so there is spacing between entries
		echo "<br><br>";
    }
}

// Close the directory
closedir($dh);

?>
</td></tr></table>
</body>
</html>
