<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_detail_id' => 1,
                'company_id' => 1,
                'user_id' => 1,
                'salary' => 'Lorem ipsum dolor sit amet',
                'salary_type_id' => 1,
                'dateofbirth' => 'Lorem ipsum dolor sit amet',
                'dateofjoining' => 'Lorem ipsum dolor sit amet',
                'proof' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2024-10-24 15:45:08',
                'modified' => '2024-10-24 15:45:08',
            ],
        ];
        parent::init();
    }
}
