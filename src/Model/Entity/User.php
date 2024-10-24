<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


/**
 * User Entity
 *
 * @property int $id
 * @property string $company_id
 * @property int $user_role_id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $username
 * @property string $password
 * @property bool $is_deleted
 * @property bool $status
 * @property string|null $last_login
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\UserRole $user_role
 * @property \App\Model\Entity\AdditionalChannel[] $additional_channels
 * @property \App\Model\Entity\City[] $cities
 * @property \App\Model\Entity\CommonSetting[] $common_setting
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Employee[] $employees
 * @property \App\Model\Entity\LogsHistory[] $logs_history
 * @property \App\Model\Entity\Package[] $packages
 * @property \App\Model\Entity\State[] $states
 * @property \App\Model\Entity\UserDetail[] $user_details
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'company_id' => true,
        'user_role_id' => true,
        'name' => true,
        'email' => true,
        'mobile' => true,
        'username' => true,
        'password' => true,
        'is_deleted' => true,
        'status' => true,
        'last_login' => true,
        'created' => true,
        'modified' => true,
        'company' => true,
        'user_role' => true,
        'additional_channels' => true,
        'cities' => true,
        'common_setting' => true,
        'customers' => true,
        'employees' => true,
        'logs_history' => true,
        'packages' => true,
        'states' => true,
        'user_details' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }

}
