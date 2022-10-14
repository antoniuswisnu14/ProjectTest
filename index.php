<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="username" id="username">
        <input type="text" name="password" id="password">
        <input type="button" value="login" id="submit">
    </form>
    <form>
        <input type="text" name="username" id="r_username">
        <input type="text" name="password" id="r_password">
        <input type="button" value="register" id="r_submit">
    </form>
    <script>
        var submit = document.getElementById("submit");
        var r_submit = document.getElementById("r_submit");
        var username = document.getElementById("username");
        var r_username = document.getElementById("r_username");
        var r_password = document.getElementById("r_password");
        console.log(username.value);
        function httpGetAsync(theUrl, callback, str1, str2) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', theUrl, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                callback(this.responseText);
            };
            xhr.send('username=' + str1.value + '&password=' + str2.value);
        };
        submit.addEventListener("click", function() {
            httpGetAsync("./login.php", console.log, username, password);
        });

        r_submit.addEventListener("click", function() {
            httpGetAsync("./register.php", console.log, r_username, r_password);
        });
    </script>
</body>
</html>