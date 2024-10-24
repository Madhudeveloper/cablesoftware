<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UserRolesTable extends Table
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

        $this->setTable('user_roles');
        $this->setDisplayField('role_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'user_role_id',
        ]);
    }


    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('role_name')
            ->maxLength('role_name', 255)
            ->requirePresence('role_name', 'create')
            ->notEmptyString('role_name');

        return $validator;
    }
}
