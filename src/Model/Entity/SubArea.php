<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubArea Entity
 *
 * @property int $id
 * @property int $main_area_id
 * @property string $name
 * @property bool $status
 * @property int $company_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\MainArea $main_area
 * @property \App\Model\Entity\Company $company
 */
class SubArea extends Entity
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
        'main_area_id' => true,
        'name' => true,
        'status' => true,
        'company_id' => true,
        'created' => true,
        'modified' => true,
        'main_area' => true,
        'company' => true,
    ];
}
