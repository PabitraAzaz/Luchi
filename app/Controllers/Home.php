<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {

        $session = session();
        if ($this->request->getMethod() === 'get') {
            return view('web/login', ['menu' => 'dashboard']);
        } elseif ($this->request->getMethod() === 'post') {



            if ($this->validate(
                [
                    'email' => 'required|valid_email|max_length[254]',
                    'password' => 'required|max_length[254]'
                ],
                [
                    'email' => [
                        'required' => 'Please provide an email',
                        'valid_email' => 'Please provide a valid email',
                        'max_length' => 'Email is too long',
                    ],
                    'password' => [
                        'required' => 'Please provide a password',
                        'max_length' => 'Password is too long',
                    ]
                ]
            )) {


                $userModel = new UserModel();
                $result = $userModel->checklogindata(
                    $this->request->getPost('email'),
                    md5($this->request->getPost('password')),
                );

                if ($result) {
                    // $settingModel = new Settings();
                    // $website_name = $settingModel->select()->first();

                    $user = [
                        'id' => $result['id'],
                        'name' => $result['name'],
                        'email' => $result['email'],

                        // 'f_name' => $result['f_name'],
                        // 'website' => $website_name['website_name']
                    ];
                    
                    $session->set('admin_auth', $user);

                    return redirect()->to(base_url('/admin/dashboard'));
                } else {
                    $session->setFlashdata('error_msg', ["msg" => 'Invalid Credentials', "type" => "danger"]);
                    return redirect()->to(base_url('/'));
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->to(base_url('/'));
            }
        } else {
            $session->setFlashdata('error_msg', ["msg" => 'Something went wrong', "type" => "danger"]);
            return view('web/login', ['menu' => 'dashboard']);
        }
    }
}
