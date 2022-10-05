<html>
    <body>
        Please choose products:<br>
        <form action="index.php", method="post">
            <input type="checkbox" name="cart[]" value="pencil">Pencil<br>
            <input type="checkbox" name="cart[]" value="eraser">Eraser<br>
            <input type="checkbox" name="cart[]" value="brush pen">Brush Pen<br>
            <input type="checkbox" name="cart[]" value="pen">Pen<br>
            <input type="submit" value="Purchase">
            <input  type="button" value="Return" onclick="location='index.php';">
        </form>
    </body>
</html>