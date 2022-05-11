
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linking the Frontend and Backend</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="form-container">
        <div class="add_user">
            <h3> Add A New User</h3>
            <form action="scripts/addUser.php">
                <input placeholder="Name & Surname">
                <input placeholder="Age">
                <input placeholder="Occupation">
                <button type="submit">Add User</button>
            </form>
        </div>
        <div class="edit_user">
            <h3> Edit An Existing User</h3>
            <form action="scripts/addUser.php">
                <select>
                    <option>Select A User</option>
                </select>
                <input placeholder="Name & Surname">
                <input placeholder="Age">
                <input placeholder="Occupation">
                <button type="submit">Add User</button>
            </form>
        </div>
        <div class="delete_user">
            <h3> Delete An Existing User</h3>
            <form action="scripts/addUser.php">
                <select>
                    <option>Select A User</option>
                </select>
                <button type="submit">Delete User</button>
            </form>
        </div>
    </div>
    <div class="data-container">
        <h3> Show All Users</h3>
       
        <?php include 'scripts/readAll.php' ?>
    </div>
    
</body>
</html>