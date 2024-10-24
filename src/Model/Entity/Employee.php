<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property int $user_detail_id
 * @property int $company_id
 * @property int $user_id
 * @property string $salary
 * @property int $salary_type_id
 * @property string $dateofbirth
 * @property string $dateofjoining
 * @property string $proof
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserDetail $user_detail
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\SalaryType $salary_type
 */
class Employee extends Entity
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
        'user_detail_id' => true,
        'company_id' => true,
        'user_id' => true,
        'salary' => true,
        'salary_type_id' => true,
        'dateofbirth' => true,
        'dateofjoining' => true,
        'proof' => true,
        'created' => true,
        'modified' => true,
        'user_detail' => true,
        'company' => true,
        'user' => true,
        'salary_type' => true,
    ];
}
