<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{   
    public function initialize(): void {
        parent::initialize();
    
        $this->Auth->allow(['login', 'logout']);
        $this->viewBuilder()->setLayout('design');
    }

    // Dashboard
    public function dashboard()
    {
        
    }

    // Login 
    public function login()
    {
      $this->viewBuilder()->setLayout('login_design');
      $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : '';
        if ($this->request->is('post')) {
            
            $user = $this->Auth->identify();
            if($user) {
                $combinedata = $this->Users->find('all')->contain(['Companies' => ['UserDetails', 'Customers']])->where(['Users.id' => $user['id']])->first();
                $user['combinedata'] = $combinedata;
                if($user['user_role_id'] == 1){
                    $this->Auth->setUser($user);
                    $this->Flash->success(__('Logged in successfully'));
                    if($redirect){
                        return $this->redirect($redirect);
                    }
                    return $this->redirect($this->Auth->redirectUrl());
                }else{
                    $this->Flash->error(__('Oops! It looks like you\'re not authorized to access this area.'));
                    return $this->redirect($this->Auth->logout());
                }
            }else{
                $this->Flash->error(__('Invalid User Name and Password'));
            }
          
        }

        $this->set(compact('redirect'));
    }

    // Logout 
    public function logout()
    {
         return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
