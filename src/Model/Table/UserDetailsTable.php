<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserDetails Model
 *
 * @property \App\Model\Table\CompaniesTable&\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\StatesTable&\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\CitiesTable&\Cake\ORM\Association\BelongsTo $Cities
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\HasMany $Customers
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\UserDetail newEmptyEntity()
 * @method \App\Model\Entity\UserDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UserDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UserDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UserDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserDetailsTable extends Table
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

        $this->setTable('user_details');
        $this->setDisplayField('pincode');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'user_detail_id',
        ]);
        $this->hasMany('Employees', [
            'foreignKey' => 'user_detail_id',
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
            ->integer('company_id')
            ->notEmptyString('company_id');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('address1')
            ->requirePresence('address1', 'create')
            ->notEmptyString('address1');

        $validator
            ->scalar('address2')
            ->allowEmptyString('address2');

        $validator
            ->scalar('landmark')
            ->maxLength('landmark', 255)
            ->allowEmptyString('landmark');

        $validator
            ->scalar('pincode')
            ->maxLength('pincode', 255)
            ->requirePresence('pincode', 'create')
            ->notEmptyString('pincode');

        $validator
            ->integer('state_id')
            ->notEmptyString('state_id');

        $validator
            ->integer('city_id')
            ->notEmptyString('city_id');

        $validator
            ->integer('main_areaid')
            ->requirePresence('main_areaid', 'create')
            ->notEmptyString('main_areaid');

        $validator
            ->integer('sub_areaid')
            ->requirePresence('sub_areaid', 'create')
            ->notEmptyString('sub_areaid');

        $validator
            ->boolean('user_status')
            ->notEmptyString('user_status');

        $validator
            ->scalar('emailaddress')
            ->maxLength('emailaddress', 11)
            ->allowEmptyString('emailaddress');

        $validator
            ->scalar('aadharno')
            ->maxLength('aadharno', 255)
            ->allowEmptyString('aadharno');

        $validator
            ->scalar('smartcardno')
            ->maxLength('smartcardno', 255)
            ->allowEmptyString('smartcardno');

        $validator
            ->scalar('rationno')
            ->maxLength('rationno', 255)
            ->allowEmptyString('rationno');

        $validator
            ->scalar('drivinglicenseno')
            ->maxLength('drivinglicenseno', 255)
            ->allowEmptyString('drivinglicenseno');

        $validator
            ->scalar('landline')
            ->maxLength('landline', 255)
            ->allowEmptyString('landline');

        $validator
            ->scalar('remarks')
            ->allowEmptyString('remarks');

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
        $rules->add($rules->existsIn('company_id', 'Companies'), ['errorField' => 'company_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('state_id', 'States'), ['errorField' => 'state_id']);
        $rules->add($rules->existsIn('city_id', 'Cities'), ['errorField' => 'city_id']);

        return $rules;
    }
}
