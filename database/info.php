<?php

namespace database;

class info
{
    public $db = null;

    public function __construct(ControllerDB $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getData($table = 'info'){
       $result = $this->db->con->query("SELECT * FROM {$table}");

       $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getinfo($item_id = null, $table = 'info'){
        if(isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }


    }
}