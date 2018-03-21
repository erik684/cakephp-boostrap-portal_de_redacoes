<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Redacoes Model
 *
 * @method \App\Model\Entity\Redacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Redacao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Redacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Redacao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Redacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Redacao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Redacao findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RedacoesTable extends Table
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

        $this->setTable('redacoes');
        $this->setDisplayField('id_redacao');
        $this->setPrimaryKey('id_redacao');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Usuarios', ['foreignKey' => 'id_usuario']);
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
            ->integer('id_redacao')
            ->allowEmpty('id_redacao', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 50)
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->scalar('texto')
            ->maxLength('texto', 500)
            ->requirePresence('texto', 'create')
            ->notEmpty('texto');

        $validator
            ->scalar('nota')
            ->maxLength('nota', 500)
            ->allowEmpty('nota');

        $validator
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmpty('id_usuario');

        return $validator;
    }
}
