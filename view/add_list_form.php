<?php
include 'view/header.php';
?>
<h1>Add Task</h1>
        <form action="index.php" method="post"
              id="add_product_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Title:</label>
            <input type="text" name="title"><br>

            <label>Description:</label>
            <input type="text" name="description"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item"><br>
        </form>
        <p><a href="view/item_list.php">View To do list</a></p>
<?php
include 'view/footer.php';
?>