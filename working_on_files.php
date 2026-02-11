<?php
$file=fopen("madhu.txt","r");
echo "<h3 style='color:blue;font-family:verdana'>file opened successfully</h3>";
echo "<br>";
$content=fread($file,filesize("madhu.txt"));
echo $content;
echo "<br>content displayed using fread()";
fclose($file);
echo "<br>";

echo "<h4>file closed successfully</h4>";

$file=fopen("madhu.txt","a");
echo "<h3 style='color:blue;font-family:verdana'>file opened successfully</h3>";
echo "<br>";
$content=fwrite($file,"<br>".'welcome to php file handling new line added');
echo $content;
echo "<br>content displayed using fwrite()";
fclose($file);
echo "<br>";

$file=fopen("madhu.txt","r");
echo "<h3 style='color:blue;font-family:verdana'>file opened successfully</h3>";
file_put_contents("madhu.txt","\n"."Madhuri is a nice guy",FILE_APPEND);
echo "<br>content displayed using file_put_contents()";
$line=file_get_contents("madhu.txt");
echo $line;
echo "<br>content displayed using file_get_contents()";
fclose($file);
echo "<h4>file closed successfully</h4>";


if(file_exists("index.html")){
    echo "File exists";
}else{
    echo "File not exists";
}

echo filesize("index.html")."bytes";
echo filetype("index.html");
$file = "madhu.txt";
if (file_exists($file)) {
    echo date("Y-m-d H:i:s", fileatime($file));
} else {
    echo "File not found.";
}
echo date("Y-m-d H:i:s",fileatime("madhu.txt"));
echo date("Y-m-d H:i:s",filemtime("madhu.txt"));
echo date("Y-m-d H:i:s",filectime("madhu.txt"));
echo fileperms("madhu.txt")."<br>";
echo fileowner("madhu.txt")."<br>";
echo filegroup("madhu.txt")."<br>";
if(file_exists("index.html")){
    echo "File exists";
}else{
    echo "File not exists";
}

echo filesize("index.html")."bytes";
echo filetype("index.html");

echo date("Y-m-d H:i:s",fileatime("madhu.txt"));
echo date("Y-m-d H:i:s",filemtime("madhu.txt"));
echo date("Y-m-d H:i:s",filectime("madhu.txt"));
echo fileperms("madhu.txt")."<br>";
echo fileowner("madhu.txt")."<br>";
echo filegroup("madhu.txt")."<br>";
echo fileinode("madhu.txt")."<br>";
fileinode("madhu.txt")."<br>";

// file folder management
echo "<h2 style='color:blue;font-family:verdana;text-decoration:underline'>File Folder Management</h2>";
copy("madhu.txt","copied.txt");
echo  "File copied successfully"."<br>";

$frename = rename("copied.txt","madhu3.txt");
echo "copied renamed to madhu3";

unlink("madhu3.txt");
echo "madhu3 deleted";

mkdir("NewFolder");
echo "New folder created"."<br>";
rmdir("NewFolder");
echo "Folder must be empty"."<br>";

if(is_file("madhu.txt")){
    echo "madhu.txt is a file"."<br>";
}else{
    echo "madhu.txt is not a file"."<br>";
}
if(is_dir("NewFolder")){
    echo "NewFolder is a directory"."<br>";
}else{
    echo "NewFolder is not a directory"."<br>";
}

$dfiles = scandir(".");
print_r($dfiles);

$dir = opendir(".");
while(($file = readdir($dir)) !== false){
    echo $file."<br>";
}
closedir($dir);

echo getcwd();

//chdir("uploads");

$file5 =fopen("madhu.txt","a");
if(flock($file5,LOCK_EX)){
    fwrite($file5,"Locked writing");
    flock($file5,LOCK_UN);
}
fclose($file5);

echo "<h2 style='color:blue;font-family:verdana;text-decoration:underline'>File Operation Modes</h2>";

$read = fopen("madhu.txt","r");
echo "file in read mode"."<br>";
fclose($read);
$write = fopen("madhu.txt","w");
fwrite($write,"This will overwrite the file");
echo "file in write mode"."<br>";
fclose($write);
$fa = fopen("madhu.txt","a");
fwrite($fa,"This will append to the file");
echo "file in append mode"."<br>";
fclose($fa);
$fx = fopen("newfile.txt","x");
fwrite($fx,"created using mode-x");
echo "file in exclusive mode"."<br>";
fclose($fx);
$fr = fopen("madhu.txt","r+");
fwrite($fr,"This will started from the beginning");
echo "file in read-write mode"."<br>";
fclose($fr);
$fw = fopen("madhu.txt","w+");
fwrite($fw,"This will overwrite and read the file");
echo "file in write-read mode"."<br>";
fclose($fw);
$fa = fopen("madhu.txt","a+");
fwrite($fa,"This will append and read the file");
echo "file in append-read mode"."<br>";
fclose($fa);



?>