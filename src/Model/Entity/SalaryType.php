<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalaryType Entity
 *
 * @property int $id
 * @property string $name
 * @property int $company_id
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Employee[] $employees
 */
class SalaryType extends Entity
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
        'name' => true,
        'company_id' => true,
        'modified' => true,
        'created' => true,
        'company' => true,
        'employees' => true,
    ];
}
