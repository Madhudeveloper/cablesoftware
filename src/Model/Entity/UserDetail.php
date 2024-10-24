<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserDetail Entity
 *
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property string $address1
 * @property string|null $address2
 * @property string|null $landmark
 * @property string $pincode
 * @property int $state_id
 * @property int $city_id
 * @property int $main_areaid
 * @property int $sub_areaid
 * @property bool $user_status
 * @property string|null $emailaddress
 * @property string|null $aadharno
 * @property string|null $smartcardno
 * @property string|null $rationno
 * @property string|null $drivinglicenseno
 * @property string|null $landline
 * @property string|null $remarks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Employee[] $employees
 */
class UserDetail extends Entity
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
        'user_id' => true,
        'address1' => true,
        'address2' => true,
        'landmark' => true,
        'pincode' => true,
        'state_id' => true,
        'city_id' => true,
        'main_areaid' => true,
        'sub_areaid' => true,
        'user_status' => true,
        'emailaddress' => true,
        'aadharno' => true,
        'smartcardno' => true,
        'rationno' => true,
        'drivinglicenseno' => true,
        'landline' => true,
        'remarks' => true,
        'created' => true,
        'modified' => true,
        'company' => true,
        'user' => true,
        'state' => true,
        'city' => true,
        'customers' => true,
        'employees' => true,
    ];
}
