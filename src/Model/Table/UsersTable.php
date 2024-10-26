<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('AdditionalChannels', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Cities', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('CommonSetting', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Employees', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('LogsHistory', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Packages', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('States', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('UserDetails', [
            'foreignKey' => 'user_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('company_id')
            ->maxLength('company_id', 11)
            ->notEmptyString('company_id');

        $validator
            ->integer('user_role_id')
            ->notEmptyString('user_role_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 255)
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->boolean('is_deleted')
            ->notEmptyString('is_deleted');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        $validator
            ->scalar('last_login')
            ->maxLength('last_login', 255)
            ->allowEmptyString('last_login');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->existsIn('company_id', 'Companies'), ['errorField' => 'company_id']);
        $rules->add($rules->existsIn('user_role_id', 'UserRoles'), ['errorField' => 'user_role_id']);

        return $rules;
    }
    
    // Form Validation
    public function validationPassword(Validator $validator )
    {
        $validator
            ->add('username', 'validFormat', [
                'rule' => 'email',
                'message' => 'Please enter a valid email address',
            ])
            ->notEmptyString('password', 'Password is required');
            
        return $validator;
    }
}
