<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SubAreas Controller
 *
 * @property \App\Model\Table\SubAreasTable $SubAreas
 * @method \App\Model\Entity\SubArea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubAreasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MainAreas', 'Companies'],
        ];
        $subAreas = $this->paginate($this->SubAreas);

        $this->set(compact('subAreas'));
    }

    /**
     * View method
     *
     * @param string|null $id Sub Area id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subArea = $this->SubAreas->get($id, [
            'contain' => ['MainAreas', 'Companies'],
        ]);

        $this->set(compact('subArea'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subArea = $this->SubAreas->newEmptyEntity();
        if ($this->request->is('post')) {
            $subArea = $this->SubAreas->patchEntity($subArea, $this->request->getData());
            if ($this->SubAreas->save($subArea)) {
                $this->Flash->success(__('The sub area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub area could not be saved. Please, try again.'));
        }
        $mainAreas = $this->SubAreas->MainAreas->find('list', ['limit' => 200])->all();
        $companies = $this->SubAreas->Companies->find('list', ['limit' => 200])->all();
        $this->set(compact('subArea', 'mainAreas', 'companies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sub Area id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subArea = $this->SubAreas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subArea = $this->SubAreas->patchEntity($subArea, $this->request->getData());
            if ($this->SubAreas->save($subArea)) {
                $this->Flash->success(__('The sub area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub area could not be saved. Please, try again.'));
        }
        $mainAreas = $this->SubAreas->MainAreas->find('list', ['limit' => 200])->all();
        $companies = $this->SubAreas->Companies->find('list', ['limit' => 200])->all();
        $this->set(compact('subArea', 'mainAreas', 'companies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sub Area id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subArea = $this->SubAreas->get($id);
        if ($this->SubAreas->delete($subArea)) {
            $this->Flash->success(__('The sub area has been deleted.'));
        } else {
            $this->Flash->error(__('The sub area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
