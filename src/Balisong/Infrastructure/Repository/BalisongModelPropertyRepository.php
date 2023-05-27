<?php 

declare(strict_types=1);

namespace Src\Infrastructure\Repository;

use Src\Balisong\Domain\Entity\BalisongBrand;
use Src\Balisong\Domain\Entity\BalisongModelProperty;
use Src\Balisong\Domain\Exception\DataNotFoundException;

class BalisongModelPropertyRepository
{

    public function __construct()
    {}

    public function find(int $id, array $relations = []): ?BalisongModelProperty
    {
        return BalisongModelProperty::query()
        ->with($relations)
        ->whereKey($id)
        ->first();
    }

    public function findOrfail(int $id): BalisongModelProperty
    {
        $balisongModelProperty = BalisongModelProperty::query()
        ->where('balisong_model_property_id', '=', $id)
        //->get()
        ->first();

        if ($balisongModelProperty == null){
            throw new DataNotFoundException('Balisong Brand not Found');
        }

        return $balisongModelProperty;
    }

    public function save(BalisongModelProperty $balisongModelProperty): BalisongModelProperty
    {
        $balisongModelProperty->save();

        //disptach events that notify the creation or update of a new Balisong Model entity

        return $balisongModelProperty;
    } 

}