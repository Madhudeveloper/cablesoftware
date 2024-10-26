<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;


/**
 * MainAreas Controller
 *
 * @property \App\Model\Table\MainAreasTable $MainAreas
 * @method \App\Model\Entity\MainArea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MainAreasController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('MainAreas'); 
        $this->viewBuilder()->setLayout('design');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies'],
            'order' => ['id' => 'DESC'],
        ];
        $mainAreas = $this->paginate($this->MainAreas);

        $this->set(compact('mainAreas'));
    }

    /**
     * View method
     *
     * @param string|null $id Main Area id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mainArea = $this->MainAreas->get($id, [
            'contain' => ['Companies', 'SubAreas'],
        ]);

        $this->set(compact('mainArea'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mainArea = $this->MainAreas->newEmptyEntity();
        if ($this->request->is('post')) {
            $mainArea = $this->MainAreas->patchEntity($mainArea, $this->request->getData());
            // Check Existing Name Or Company Name
            $checkExistingArea = $this->MainAreas->find('all')->where(['name' => $mainArea['name']])->andWhere(['company_id' => $mainArea['company_id']])->first();
            if ($checkExistingArea) {
                $this->Flash->error(__('The main area name already exists for this company. Please choose a different name.'));
            } else {
                if ($this->MainAreas->save($mainArea)) {
                    $this->Flash->success(__('The main area has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The main area could not be saved. Please, try again.'));
            }
        }
        $companies = $this->MainAreas->Companies->find('list', ['limit' => 200])->all();
        $this->set(compact('mainArea', 'companies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Main Area id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) 
    {
        $mainArea = $this->MainAreas->get($id);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mainArea = $this->MainAreas->patchEntity($mainArea, $this->request->getData());
            if ($this->MainAreas->save($mainArea)) {
                $this->Flash->success(__('The main area has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main area could not be saved. Please, try again.'));
        }
        
        $this->set(compact('mainArea'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Main Area id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mainArea = $this->MainAreas->get($id);
        
        if ($this->MainAreas->delete($mainArea)) {
            $this->Flash->success(__('The main area has been deleted.'));
        } else {
            $this->Flash->error(__('The main area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
