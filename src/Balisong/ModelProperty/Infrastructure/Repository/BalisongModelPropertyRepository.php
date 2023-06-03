<?php 

declare(strict_types=1);

namespace Src\Balisong\ModelProperty\Infrastructure\Repository;

use Src\Shared\Domain\Exception\DataNotFoundException;
use Src\Balisong\ModelProperty\Domain\Entity\BalisongModelProperty;

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