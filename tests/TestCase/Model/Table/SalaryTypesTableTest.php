<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaryTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaryTypesTable Test Case
 */
class SalaryTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaryTypesTable
     */
    protected $SalaryTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SalaryTypes',
        'app.Companies',
        'app.Employees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SalaryTypes') ? [] : ['className' => SalaryTypesTable::class];
        $this->SalaryTypes = $this->getTableLocator()->get('SalaryTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SalaryTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SalaryTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SalaryTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
