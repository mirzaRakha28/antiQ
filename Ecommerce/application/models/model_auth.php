<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Model_auth extends CI_Model{

    public function getSubMenu()
    {
        $role_id = $this->session->userdata('role_id');
        $queryMenu = " SELECT `user_menu`.*`id`, `menu`
                FROM `user_menu` 
                        JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
            ";
            return $this->db->query($queryMenu)->result_array();
    }

}