<?php

namespace GuillermoandraeTest\Repositories;

use PHPUnit\Framework\TestCase;
use Guillermoandrae\Repositories\ReadOnlyRepositoryTrait;

class ReadOnlyRepositoryTraitTest extends TestCase
{
    /**
     * @var ReadOnlyRepositoryTrait
     */
    private $repository;

    public function testCreate()
    {
        $this->expectExceptionMessage('The create method of this read-only repository is not supported');
        $this->repository->create([]);
    }

    public function testUpdate()
    {
        $this->expectExceptionMessage('The update method of this read-only repository is not supported');
        $this->repository->update('test', []);
    }

    public function testDelete()
    {
        $this->expectExceptionMessage('The delete method of this read-only repository is not supported');
        $this->repository->delete('test');
    }

    protected function setUp()
    {
        $this->repository = $this->getMockForTrait(ReadOnlyRepositoryTrait::class);
    }
}
