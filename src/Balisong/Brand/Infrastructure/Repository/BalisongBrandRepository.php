<?php

declare(strict_types=1);

namespace Src\Balisong\Brand\Infrastructure\Repository;

use Src\Balisong\Brand\Domain\Entity\BalisongBrand;
use Src\Shared\Domain\Exception\DataNotFoundException;
use Src\Balisong\Brand\Domain\Interface\BalisongBrandInterface;

class BalisongBrandRepository implements BalisongBrandInterface
{

    public function __construct()
    {
    }

    public function find(int $id, array $relations = []): ?BalisongBrand
    {
        return BalisongBrand::query()
            ->with($relations)
            ->whereKey($id)
            ->first();
    }

    public function findByName(string $name, array $relations = []): ?BalisongBrand
    {
        return BalisongBrand::query()
            ->with($relations)
            ->where($name, '=', 'name')
            ->first();
    }

    public function findOrfail(int $id): BalisongBrand
    {
        $balisongBrand = BalisongBrand::query()
            ->where('brand_id', '=', $id)
            // ->get()
            ->first();

        if ($balisongBrand == null) {
            throw new DataNotFoundException('Balisong Brand not Found');
        }

        return $balisongBrand;
    }

    public function save(BalisongBrand $balisongBrand): BalisongBrand
    {
        $balisongBrand->save();

        //disptach events that notify the creation or update of a new Balisong Model entity

        return $balisongBrand;
    }
}
