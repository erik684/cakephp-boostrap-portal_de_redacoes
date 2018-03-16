<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Redacoes Controller
 *
 * @property \App\Model\Table\RedacoesTable $Redacoes
 *
 * @method \App\Model\Entity\Redacao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RedacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $redacoes = $this->paginate($this->Redacoes);

        $this->set(compact('redacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Redacao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $redacao = $this->Redacoes->get($id, [
            'contain' => []
        ]);

        $this->set('redacao', $redacao);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $redacao = $this->Redacoes->newEntity();
        if ($this->request->is('post')) {
            $redacao = $this->Redacoes->patchEntity($redacao, $this->request->getData());
            if ($this->Redacoes->save($redacao)) {
                $this->Flash->success(__('The redacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The redacao could not be saved. Please, try again.'));
        }
        $this->set(compact('redacao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Redacao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $redacao = $this->Redacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $redacao = $this->Redacoes->patchEntity($redacao, $this->request->getData());
            if ($this->Redacoes->save($redacao)) {
                $this->Flash->success(__('The redacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The redacao could not be saved. Please, try again.'));
        }
        $this->set(compact('redacao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Redacao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $redacao = $this->Redacoes->get($id);
        if ($this->Redacoes->delete($redacao)) {
            $this->Flash->success(__('The redacao has been deleted.'));
        } else {
            $this->Flash->error(__('The redacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
