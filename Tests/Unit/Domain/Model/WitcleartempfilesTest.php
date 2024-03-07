<?php

declare(strict_types=1);

namespace WOIT\WitCleartempfiles\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class WitcleartempfilesTest extends UnitTestCase
{
    /**
     * @var \WOIT\WitCleartempfiles\Domain\Model\Witcleartempfiles|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \WOIT\WitCleartempfiles\Domain\Model\Witcleartempfiles::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCleartempfilesReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getCleartempfiles()
        );
    }

    /**
     * @test
     */
    public function setCleartempfilesForStringSetsCleartempfiles(): void
    {
        $this->subject->setCleartempfiles('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('cleartempfiles'));
    }
}
