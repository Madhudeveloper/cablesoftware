<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Log Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $company_id
 * @property string|null $action
 * @property string|null $details
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Company $company
 */
class Log extends Entity
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
        'user_id' => true,
        'company_id' => true,
        'action' => true,
        'details' => true,
        'ip_address' => true,
        'user_agent' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'company' => true,
    ];
}
