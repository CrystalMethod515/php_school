
<html>
    <head>

    </head>
    <body>
<form action="action.php" method="post">
    <input type="textbox" name="first" required>
        <select name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="^">^</option>
        </select>
    <input type="textbox" name="second" required>
    <input type="submit" name="submit" value="=">
</form>
    </body>
</html>