<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property int $user_detail_id
 * @property int $company_id
 * @property int $user_id
 * @property string $scnumber
 * @property string $dateofservice
 * @property string $erection_charges
 * @property bool $connection_status
 * @property bool $wire_status
 * @property bool $connection_type
 * @property string $no_analogtv
 * @property string $rent_permonth
 * @property bool $node_service
 * @property string $customer_advance
 * @property string|null $reconnection_fees
 * @property string|null $disconnection_date
 * @property string|null $customer_remarks
 * @property string|null $disconnection_remarks
 * @property string|null $fix_othercharges
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserDetail $user_detail
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 */
class Customer extends Entity
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
        'scnumber' => true,
        'dateofservice' => true,
        'erection_charges' => true,
        'connection_status' => true,
        'wire_status' => true,
        'connection_type' => true,
        'no_analogtv' => true,
        'rent_permonth' => true,
        'node_service' => true,
        'customer_advance' => true,
        'reconnection_fees' => true,
        'disconnection_date' => true,
        'customer_remarks' => true,
        'disconnection_remarks' => true,
        'fix_othercharges' => true,
        'created' => true,
        'modified' => true,
        'user_detail' => true,
        'company' => true,
        'user' => true,
    ];
}
