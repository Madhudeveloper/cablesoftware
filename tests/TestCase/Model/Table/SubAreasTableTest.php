<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubAreasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubAreasTable Test Case
 */
class SubAreasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubAreasTable
     */
    protected $SubAreas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SubAreas',
        'app.MainAreas',
        'app.Companies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SubAreas') ? [] : ['className' => SubAreasTable::class];
        $this->SubAreas = $this->getTableLocator()->get('SubAreas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SubAreas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubAreasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubAreasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
