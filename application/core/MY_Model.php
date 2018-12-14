<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    public $tableName;

    public function __construct($tableName) {
        $this->tableName = $tableName;
        parent::__construct();
    }

    public function select($whereData = array(), $limit = 10, $offset = 0) {
        if (!empty($whereData)) {
            $this->db->where($whereData);
        }
        return $this->db->get($this->tableName, $whereData, $limit, $offset);
    }

    public function insert($tableObj) {
        return $this->db->insert($this->tableName, $tableObj);
    }

    public function update($tableObj, $whereData) {
        return $this->db->update($this->tableName, $tableObj, $whereData);
    }

    public function delete($whereData) {
        return $this->db->delete($this->tableName, $whereData);
    }

    public function query($sql) {
        return $this->db->query($this->tableName, $sql);
    }
}