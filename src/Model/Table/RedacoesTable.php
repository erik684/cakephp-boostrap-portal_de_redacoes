<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Redacoes Model
 *
 * @method \App\Model\Entity\Redaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Redaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Redaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Redaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Redaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Redaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Redaco findOrCreate($search, callable $callback = null, $options = [])
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
            ->scalar('texto')
            ->maxLength('texto', 500)
            ->requirePresence('texto', 'create')
            ->notEmpty('texto');

        $validator
            ->scalar('palavras_chaves')
            ->maxLength('palavras_chaves', 40)
            ->allowEmpty('palavras_chaves');

        $validator
            ->integer('nota')
            ->requirePresence('nota', 'create')
            ->notEmpty('nota');

        $validator
            ->integer('id_usuario')
            ->allowEmpty('id_usuario');

        return $validator;
    }
}
