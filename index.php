<?php
require('model/database.php');
require('model/item_db.php');
require('model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL) {
        $action = 'list_items';
    }
}
if($action == 'list_items') {
    $category_id = filter_input(INPUT_GET, 'category_id',FILTER_VALIDATE_INT);
    if($category_id == NULL || $category_id == False) {
        $category_id = 1;
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $todoitems = get_items_by_category($category_id);
    include('view/item_list.php');
}
else if($action == 'delete_item'){
    $item_num = filter_input(INPUT_POST, 'item_num', FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    if($category_id == NULL || $product_id == FALSE || $item_num == NULL || $item_num == FALSE) {
        $error = "Missing or incorrect product id or category_id";
        include('view/error.php');
    }
    else {
        delete_item($item_num);
        header("Location: .?category_id=$category_id");
    }

}
else if ($action == 'add_item'){
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $title = filter_input(INPUT_POST, 'title');
    $description = filter_input(INPUT_POST, 'description');
    if($category_id == NULL || $category_id == FALSE || $title == NULL || $description == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('view/error.php');
    }
    else {
        add_item($category_id, $title, $description);
        header("Location: .?category_id=$category_id");
    }
}

else if($action == 'delete_category'){
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    if($category_id == NULL || $product_id == FALSE) {
        $error = "Missing or incorrect category_id";
    }
    else {
        delete_category($category_id);
        header("Location: .?category_id=$category_id");
    }

}
else if ($action == 'add_category'){
    $name = filter_input(INPUT_POST, 'name');
    if($name == NULL || $name == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('view/error.php');
    }
    else {
        add_category($name);
        header("Location: .?category_id=$category_id");
    }
}

?>
