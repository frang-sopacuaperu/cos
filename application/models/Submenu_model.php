<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Submenu_model extends CI_Model
{

    public function getSubMenu()
    {
        // $query = "SELECT `menu_level2` . * , `menu_level1` . `MENU_NAME`
        //         FROM `menu_level2` JOIN `menu_level1`
        //         ON `menu_level2`.`MENU_ID_LEVEL1` = `menu_level1`.`MENU_ID_LEVEL1`        
        // ";

        // return $this->db->query($query)->result_array();

        return $this->db->get('menu_level2')->result_array();
    }

    public function addSubMenu()
    {
        $data = [
            'MENU_NAME' => $this->input->post('MENU_NAME', true),
            'MENU_ID_LEVEL1' => $this->input->post('MENU_ID_LEVEL1', true),
            'MENU_CAPTION' => $this->input->post('MENU_CAPTION', true),
            'STATUS' => $this->input->post('STATUS', true),
        ];

        $this->db->insert('menu_level2', $data);
    }

    public function getSubMenuById($id)
    {
        return $this->db->get_where('menu_level2', ['MENU_ID_LEVEL2' => $id])->row_array();
    }

    public function editSubMenu()
    {
        $data = [
            'MENU_NAME' => $this->input->post('MENU_NAME', true),
            'MENU_ID_LEVEL1' => $this->input->post('MENU_ID_LEVEL1', true),
            'STATUS' => $this->input->post('STATUS', true),
        ];

        $this->db->set('MENU_ID_LEVEL1', $data);
        $this->db->where('MENU_ID_LEVEL2', $this->input->post('MENU_ID_LEVEL2'));
        $this->db->update('menu_level2', $data);
    }

    public function deleteSubMenu($id)
    {
        $this->db->delete('menu_level2', ['MENU_ID_LEVEL2' => $id]);
    }
}

/* End of file Menu_model.php */
