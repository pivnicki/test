<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Topic
 *
 * @author Pc
 */
class Topic {
    private $db;
    
    public function __construct() {
        $this->db=new Database;
    }
    
    public function getAll(){
        $query="SELECT topics.id,topics.category_id,topics.user_id,topics.title,"
                . "topics.body,topics.last_activity,topics.create_date, "
                . "users.username, users.avatar, categories.name "
                . "FROM topics INNER JOIN "
                . "users ON topics.user_id=users.id "
                . "INNER JOIN categories ON "
                . "topics.category_id=categories.id "
                . "ORDER BY create_date DESC ";
        $this->db->query($query);
        
        $results=  $this->db->resultset();
        
        return $results;
    }
}
