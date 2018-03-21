<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('usuarios');
        $this->setDisplayField('id_usuario');
        $this->setPrimaryKey('id_usuario');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_usuario')
            ->allowEmpty('id_usuario', 'create');

        $validator
            ->scalar('nome_usuario')
            ->maxLength('nome_usuario', 40)
            ->requirePresence('nome_usuario', 'create')
            ->notEmpty('nome_usuario');

        $validator
            ->scalar('sobrenome_usuario')
            ->maxLength('sobrenome_usuario', 40)
            ->requirePresence('sobrenome_usuario', 'create')
            ->notEmpty('sobrenome_usuario');

        $validator
            ->scalar('apelido_usuario')
            ->maxLength('apelido_usuario', 40)
            ->requirePresence('apelido_usuario', 'create')
            ->notEmpty('apelido_usuario');
        $validator
            ->scalar('senha')
            ->maxLength('senha', 255)
            ->requirePresence('senha', 'create')
            ->notEmpty('senha');
        $validator
            ->sameAs('senha2', 'senha', 'As senhas digitadas são diferentes. Digite novamente.');    

        return $validator;
    }
}
