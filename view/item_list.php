<?php
include 'view/header.php';
?>
<h1>Tasks List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
            <?php foreach ($categories as $category) : ?>
            <li><a href=".?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>          
    </aside>
    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($todoitems as $todoitem) : ?>
            <tr>
                <td><?php echo $todoitem['ItemNum']; ?></td>
                <td><?php echo $todoitem['Title']; ?></td>
                <td><?php echo $todoitem['Description']; ?></td>
                <td><form action="delete_item.php" method="post">
                    <input type="hidden" name="item_num"
                           value="<?php echo $todoitem['item_num']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $todoitem['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="view/add_list_form.php">Add Item</a></p>
        <p><a href="view/category_list.php">List Categories</a></p>  
    </section>
    <?php
include 'view/footer.php';
?>