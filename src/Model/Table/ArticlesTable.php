<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 * @method \App\Model\Entity\Article get($primaryKey, $options = [])
 * @method \App\Model\Entity\Article newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Article[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Article|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Article[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Article findOrCreate($search, callable $callback = null, $options = [])
 */
class ArticlesTable extends Table
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

        $this->setTable('articles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('lower', 'create')
            ->notEmpty('lower');

        $validator
            ->requirePresence('upper', 'create')
            ->notEmpty('upper');

        $validator
            ->requirePresence('preamble', 'create')
            ->notEmpty('preamble');

        $validator
            ->requirePresence('text', 'create')
            ->notEmpty('text');

        $validator
            ->requirePresence('extra1', 'create')
            ->notEmpty('extra1');

        $validator
            ->requirePresence('extra2', 'create')
            ->notEmpty('extra2');

        $validator
            ->requirePresence('extra3', 'create')
            ->notEmpty('extra3');

        $validator
            ->requirePresence('extra4', 'create')
            ->notEmpty('extra4');

        $validator
            ->requirePresence('extra5', 'create')
            ->notEmpty('extra5');

        $validator
            ->requirePresence('extra6', 'create')
            ->notEmpty('extra6');

        $validator
            ->integer('inversenumber')
            ->requirePresence('inversenumber', 'create')
            ->notEmpty('inversenumber');

        return $validator;
    }
}
