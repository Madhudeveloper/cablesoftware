<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;

class AppController extends Controller
{

    public function initialize(): void 
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'username', 'password' => 'password'], 
                ]
            ],
            'authError' => 'Access Denied! Authorization Failed.',
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Admin',  
            ],
        ]);
    }

    public function isAuthorized($user): bool 
    { 
        if (isset($user['status']) && $user['status'] != 1 && isset($user['user_role_id']) && $user['user_role_id'] != 1) {
            return false;
        }
        return true;            
    }
}
