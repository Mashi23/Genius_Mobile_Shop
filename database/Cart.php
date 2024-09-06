<?php

namespace database;

class Cart
{
    public $db = null;

    public function __construct(ControllerDB $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){

                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));


                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                $result = $this->db->con->query($query_string);
                return $result;

            }
        }
    }

    public  function addToCart($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // delete cart item
    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    public function getCartId($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // wishlist
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";
            echo $query;

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }



}