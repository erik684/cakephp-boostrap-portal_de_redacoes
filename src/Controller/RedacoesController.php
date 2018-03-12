<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Redacoes Controller
 *
 * @property \App\Model\Table\RedacoesTable $Redacoes
 *
 * @method \App\Model\Entity\Redaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
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
     * @param string|null $id Redaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $redaco = $this->Redacoes->get($id, [
            'contain' => []
        ]);

        $this->set('redaco', $redaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $redaco = $this->Redacoes->newEntity();
        if ($this->request->is('post')) {
            $redaco = $this->Redacoes->patchEntity($redaco, $this->request->getData());
            if ($this->Redacoes->save($redaco)) {
                $this->Flash->success(__('The redaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The redaco could not be saved. Please, try again.'));
        }
        $this->set(compact('redaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Redaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $redaco = $this->Redacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $redaco = $this->Redacoes->patchEntity($redaco, $this->request->getData());
            if ($this->Redacoes->save($redaco)) {
                $this->Flash->success(__('The redaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The redaco could not be saved. Please, try again.'));
        }
        $this->set(compact('redaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Redaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $redaco = $this->Redacoes->get($id);
        if ($this->Redacoes->delete($redaco)) {
            $this->Flash->success(__('The redaco has been deleted.'));
        } else {
            $this->Flash->error(__('The redaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
