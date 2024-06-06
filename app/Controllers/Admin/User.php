<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{

    public function index()
    {
        if (session('id_user')) {
            return redirect()->to(site_url('/admin/home_admin'));
        }

        return view('mimin/login');
    }
    public function login()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('acl_user')->getWhere(['user_nama' => $post['user_nama']]);
        $user = $query->getRow();
        if ($user) {
            if (password_verify($post['user_pass'], $user->user_pass)) {
                $params = [
                    'id_user' => $user->id_user,
                    'user_nama' => $user->user_nama
                ];
                session()->set($params);

                return redirect()->to(site_url('/admin/home_admin'));
            } else {

                return redirect()->back()->with('Error', 'salah pass');
            }
        } else {
            return redirect()->back()->with('Error', 'tidak ada');
        }
    }
    public function logout()
    {
        session()->destroy('id_user');
        return redirect()->to(site_url('admin'));
    }
}
