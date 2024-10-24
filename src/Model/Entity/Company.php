<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $company_name
 * @property string $mobile
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string|null $country
 * @property string $postal_code
 * @property string $company_logo
 * @property string|null $razorpay_apikey
 * @property string|null $razorpay_secretkey
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\AdditionalChannel[] $additional_channels
 * @property \App\Model\Entity\City[] $cities
 * @property \App\Model\Entity\CommonSetting[] $common_setting
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Employee[] $employees
 * @property \App\Model\Entity\LogsHistory[] $logs_history
 * @property \App\Model\Entity\MainArea[] $main_areas
 * @property \App\Model\Entity\Package[] $packages
 * @property \App\Model\Entity\SalaryType[] $salary_types
 * @property \App\Model\Entity\State[] $states
 * @property \App\Model\Entity\SubArea[] $sub_areas
 * @property \App\Model\Entity\UserDetail[] $user_details
 * @property \App\Model\Entity\User[] $users
 */
class Company extends Entity
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
        'company_name' => true,
        'mobile' => true,
        'email' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'postal_code' => true,
        'company_logo' => true,
        'razorpay_apikey' => true,
        'razorpay_secretkey' => true,
        'created' => true,
        'modified' => true,
        'additional_channels' => true,
        'cities' => true,
        'common_setting' => true,
        'customers' => true,
        'employees' => true,
        'logs_history' => true,
        'main_areas' => true,
        'packages' => true,
        'salary_types' => true,
        'states' => true,
        'sub_areas' => true,
        'user_details' => true,
        'users' => true,
    ];
}
