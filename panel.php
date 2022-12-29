<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form method = "POST" action="route.php">
    <div class="title">New User</div>
    <div class="input-box">
        <input type = "text" placeholder="Username" name = "username" required>
        <div class = "underline"></div>
    </div>
    <div class="input-box">
        <input type = "text" placeholder="Displayname" name = "displayname" required>
        <div class = "underline"></div>
    </div>
    <div class="input-box">
        <input type = "number" placeholder="Phone" name = "phone" required>
        <div class = "underline"></div>
    </div>
    <div class="input-box">
        <input type = "email" placeholder="Email" name = "email" required>
        <div class = "underline"></div>
    </div>
    <div class="input-box" select>
    <select name="roles" id="roles">
        <option value="">Please Select your Role</option>
        <option value="Guest">Guest</option>
        <option value="Admin">Admin</option>
        <option value="SuperAdmin">SuperAdmin</option>
    </select>
    </div>
    <div class="input-box" label>
    <label for="able"> Enable:</label>
        <input type='hidden'  name="able"  value='0'>
        <input type="checkbox"  name="able" value="1">
    </div>

    <div class="input-box" button>
        <input type = "submit" value = "Save User">
    </div>
</form>

</div>
    
 </body>
 </html>