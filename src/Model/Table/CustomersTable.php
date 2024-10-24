<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \App\Model\Table\UserDetailsTable&\Cake\ORM\Association\BelongsTo $UserDetails
 * @property \App\Model\Table\CompaniesTable&\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Customer newEmptyEntity()
 * @method \App\Model\Entity\Customer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomersTable extends Table
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

        $this->setTable('customers');
        $this->setDisplayField('scnumber');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserDetails', [
            'foreignKey' => 'user_detail_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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
            ->integer('user_detail_id')
            ->notEmptyString('user_detail_id');

        $validator
            ->integer('company_id')
            ->notEmptyString('company_id');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('scnumber')
            ->maxLength('scnumber', 255)
            ->requirePresence('scnumber', 'create')
            ->notEmptyString('scnumber');

        $validator
            ->scalar('dateofservice')
            ->maxLength('dateofservice', 255)
            ->requirePresence('dateofservice', 'create')
            ->notEmptyString('dateofservice');

        $validator
            ->decimal('erection_charges')
            ->requirePresence('erection_charges', 'create')
            ->notEmptyString('erection_charges');

        $validator
            ->boolean('connection_status')
            ->notEmptyString('connection_status');

        $validator
            ->boolean('wire_status')
            ->notEmptyString('wire_status');

        $validator
            ->boolean('connection_type')
            ->notEmptyString('connection_type');

        $validator
            ->scalar('no_analogtv')
            ->maxLength('no_analogtv', 100)
            ->requirePresence('no_analogtv', 'create')
            ->notEmptyString('no_analogtv');

        $validator
            ->decimal('rent_permonth')
            ->requirePresence('rent_permonth', 'create')
            ->notEmptyString('rent_permonth');

        $validator
            ->boolean('node_service')
            ->notEmptyString('node_service');

        $validator
            ->decimal('customer_advance')
            ->requirePresence('customer_advance', 'create')
            ->notEmptyString('customer_advance');

        $validator
            ->decimal('reconnection_fees')
            ->allowEmptyString('reconnection_fees');

        $validator
            ->scalar('disconnection_date')
            ->maxLength('disconnection_date', 255)
            ->allowEmptyString('disconnection_date');

        $validator
            ->scalar('customer_remarks')
            ->allowEmptyString('customer_remarks');

        $validator
            ->scalar('disconnection_remarks')
            ->allowEmptyString('disconnection_remarks');

        $validator
            ->decimal('fix_othercharges')
            ->allowEmptyString('fix_othercharges');

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
        $rules->add($rules->existsIn('user_detail_id', 'UserDetails'), ['errorField' => 'user_detail_id']);
        $rules->add($rules->existsIn('company_id', 'Companies'), ['errorField' => 'company_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
