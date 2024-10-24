<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @property \App\Model\Table\AdditionalChannelsTable&\Cake\ORM\Association\HasMany $AdditionalChannels
 * @property \App\Model\Table\CitiesTable&\Cake\ORM\Association\HasMany $Cities
 * @property \App\Model\Table\CommonSettingTable&\Cake\ORM\Association\HasMany $CommonSetting
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\HasMany $Customers
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 * @property \App\Model\Table\LogsHistoryTable&\Cake\ORM\Association\HasMany $LogsHistory
 * @property \App\Model\Table\MainAreasTable&\Cake\ORM\Association\HasMany $MainAreas
 * @property \App\Model\Table\PackagesTable&\Cake\ORM\Association\HasMany $Packages
 * @property \App\Model\Table\SalaryTypesTable&\Cake\ORM\Association\HasMany $SalaryTypes
 * @property \App\Model\Table\StatesTable&\Cake\ORM\Association\HasMany $States
 * @property \App\Model\Table\SubAreasTable&\Cake\ORM\Association\HasMany $SubAreas
 * @property \App\Model\Table\UserDetailsTable&\Cake\ORM\Association\HasMany $UserDetails
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Company newEmptyEntity()
 * @method \App\Model\Entity\Company newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompaniesTable extends Table
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

        $this->setTable('companies');
        $this->setDisplayField('company_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('AdditionalChannels', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('Cities', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('CommonSetting', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('Employees', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('LogsHistory', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('MainAreas', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('Packages', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('SalaryTypes', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('States', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('SubAreas', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('UserDetails', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'company_id',
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
            ->scalar('company_name')
            ->maxLength('company_name', 255)
            ->requirePresence('company_name', 'create')
            ->notEmptyString('company_name');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 255)
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('country')
            ->maxLength('country', 255)
            ->allowEmptyString('country');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 255)
            ->requirePresence('postal_code', 'create')
            ->notEmptyString('postal_code');

        $validator
            ->scalar('company_logo')
            ->maxLength('company_logo', 255)
            ->requirePresence('company_logo', 'create')
            ->notEmptyString('company_logo');

        $validator
            ->scalar('razorpay_apikey')
            ->maxLength('razorpay_apikey', 255)
            ->allowEmptyString('razorpay_apikey');

        $validator
            ->scalar('razorpay_secretkey')
            ->maxLength('razorpay_secretkey', 255)
            ->allowEmptyString('razorpay_secretkey');

        return $validator;
    }
}
