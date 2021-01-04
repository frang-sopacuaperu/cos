<?php

// NOTES*
// group_hak_akses = user_role
// hak_akses_form = user_access_menu
//---------------------------------------------------------------------------//

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('NAMA')) {
        redirect('auth/login');
    } else {
        $GROUP_HAK_AKSES_ID = $ci->session->userdata('GROUP_HAK_AKSES_ID');
        $menu2 = $ci->uri->segment(1);

        $queryMenu2 = $ci->db->get_where('menu_level2', ['MENU_CAPTION' => $menu2])->row_array();

        $menu2_id = $queryMenu2['MENU_ID_LEVEL2'];

        $userAccess = $ci->db->get_where('hak_akses_form', [
            'ID' => $GROUP_HAK_AKSES_ID,
            'AKSES' => $menu2_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
