<?php

namespace App\Controller\Api;

use App\Controller\Api\AppController;


class UsersController extends AppController
{   

    // Dashboard
    public function dashboard()
    {
        echo "api"; die;
        // $this->viewBuilder()->setLayout('design');
    }

    // Login 
    public function login()
    {
        $this->setCorsHeaders();

        if ($this->request->is('options')) {
            return $this->response;
        }

        $this->viewBuilder()->setLayout('login_design');
        $redirect = $this->request->getQuery('redirect', '');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $combinedata = $this->Users->find('all')
                    ->contain(['Companies' => ['UserDetails', 'Customers']])
                    ->where(['Users.id' => $user['id']])
                    ->first();

                $user['subscriberdata'] = $combinedata;

                if ($user['user_role_id'] == 1) {
                    $this->Auth->setUser($user);
                    return $this->sendJsonResponse(1, 'Logged in successfully', $user);
                } else {
                    $this->Auth->logout();
                    return $this->sendJsonResponse(0, 'Oops! It looks like you\'re not authorized to access this area.', []);
                }
            } else {
                return $this->sendJsonResponse(0, 'Invalid User Name and Password', []);
            }
        }
    }

    private function setCorsHeaders()
    {
        $this->response = $this->response
            ->withHeader('Access-Control-Allow-Origin', '*') 
            ->withHeader('Access-Control-Allow-Methods', 'POST, GET, OPTIONS') 
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Authorization') 
            ->withHeader('Access-Control-Allow-Credentials', 'true'); 
    }

    private function sendJsonResponse($status, $message, $data)
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];

        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }




    // Logout 
    public function logout()
    {
         return $this->redirect($this->Auth->logout());
    }

    // /**
    //  * Index method
    //  *
    //  * @return \Cake\Http\Response|null|void Renders view
    //  */
    // public function index()
    // {
    //     $users = $this->paginate($this->Users);

    //     $this->set(compact('users'));
    // }

    // /**
    //  * View method
    //  *
    //  * @param string|null $id User id.
    //  * @return \Cake\Http\Response|null|void Renders view
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function view($id = null)
    // {
    //     $user = $this->Users->get($id, [
    //         'contain' => [],
    //     ]);

    //     $this->set(compact('user'));
    // }

    // /**
    //  * Add method
    //  *
    //  * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
    //  */
    // public function add()
    // {
    //     $user = $this->Users->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $user = $this->Users->patchEntity($user, $this->request->getData());
    //         if ($this->Users->save($user)) {
    //             $this->Flash->success(__('The user has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The user could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('user'));
    // }

    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id User id.
    //  * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $user = $this->Users->get($id, [
    //         'contain' => [],
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $user = $this->Users->patchEntity($user, $this->request->getData());
    //         if ($this->Users->save($user)) {
    //             $this->Flash->success(__('The user has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The user could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('user'));
    // }

    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id User id.
    //  * @return \Cake\Http\Response|null|void Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $user = $this->Users->get($id);
    //     if ($this->Users->delete($user)) {
    //         $this->Flash->success(__('The user has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
