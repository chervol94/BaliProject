<?php

declare (strict_types=1);

namespace Src\Balisong\Brand\Domain\Interface;

use Src\Balisong\Brand\Domain\Entity\BalisongBrand;

interface BalisongBrandInterface
{
    public function find(int $id, array $relations): ?BalisongBrand;

    public function findByName(string $name, array $relations): ?BalisongBrand;

    public function findOrFail(int $id): BalisongBrand;

    public function save(BalisongBrand $balisongBrand): BalisongBrand;
}
