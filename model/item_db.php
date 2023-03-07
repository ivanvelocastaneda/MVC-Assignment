<?php

function get_items_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM todoitems
            WHERE todoitems.categoryID = :category_id
            ORDER BY ItemNum';
    $statement3 = $db->prepare($query);
    $statement3->bindValue(':category_id', $category_id);
    $statement3->execute();
    $todoitems = $statement3->fetchAll();
    $statement3->closeCursor();
    return $todoitems;
}

function get_item($item_num) {
    global $db;
    $query = 'SELECT * FROM todoitems
            WHERE ItemNum = :item_num';
    $statement3 = $db->prepare($query);
    $statement3->bindValue(':item_num', $item_num);
    $statement3->execute();
    $todoitems = $statement3->fetchAll();
    $statement3->closeCursor();
    return $todoitem;

}

function delete_item($item_num) {
    global $db;
    $query = 'DELETE * FROM todoitems
                      WHERE ItemNum = :item_num';
    $statement3 = $db->prepare($query);
    $statement3->bindValue(':item_num', $item_num);
    $statement3->execute();
    $todoitems = $statement3->fetchAll();
    $statement3->closeCursor();
}

function add_item($category_id, $title, $description) {
    global $db;
    $query = 'INSERT INTO todoitems (`Title`, `Description`, `categoryID`) VALUES (:title, :description, :category_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->execute();
    $statement->closeCursor();
}















?>