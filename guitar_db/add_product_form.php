
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Guitar Database</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Guitars</h1></header>

    <main>
        <h1>Add Guitar</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">
            



            <label>Code:</label>
            <input type="text" name="code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>List Price:</label>
            <input type="text" name="price"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Guitar"><br>
        </form>
        <p><a href="index.php">View Guitar List</a></p>
    </main>

    <footer>
        
    </footer>
</body>
</html>