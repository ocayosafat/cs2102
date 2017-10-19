<!DOCTYPE html>
<html>
<head>
<style>
* {
	margin: 0;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
	<li><a href="index.php">NAVY</a></li>
	<li style="float:right"><a href="Sign_in.php">Sign in</a></li>
	<li style="float:right"><a href="Sign_up.php">Sign up</a></li>
</ul>
</body>
</html>