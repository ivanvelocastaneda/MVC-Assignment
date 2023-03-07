<?php
include 'view/header.php';
?>
<table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['categoryName']; ?></td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>    
    </table>

    <h2 class="margin_top_increase">Add Category</h2>
    <form action="index.php" method="post"
          id="add_category_form">

        <label>Name:</label>
        <input type="text" name="name" />
        <input id="add_category_button" type="submit" value="Add"/>
    </form>
    
    <p><a href="view/item_list.php">List Tasks</a></p>
<?php
include 'view/footer.php';
?>