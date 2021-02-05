<?php

// NOTES*
// group_hak_akses = user_role
// hak_akses_form = user_access_menu
//---------------------------------------------------------------------------//


//lanjut ke video ke 9 access management

function is_logged_in()
{
    return true;
    /*
    $ci = get_instance();
    if (!$ci->session->userdata('NAMA')) {
        redirect('auth/login');
    } else {
        $GROUP_HAK_AKSES_ID = $ci->session->userdata('GROUP_HAK_AKSES_ID');
        $menu1 = $ci->uri->segment(1);

        $queryMenu1 = $ci->db->get_where('menu_level1', ['MENU_CAPTION' => $menu1])->row_array();

        $menu1_id = $queryMenu1['MENU_ID_LEVEL1'];

        $userAccess = $ci->db->get_where('hak_akses_form', [
            'ID' => $GROUP_HAK_AKSES_ID,
            'AKSES' => $menu1_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
    */
}
