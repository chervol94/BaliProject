<?php 

declare(strict_types=1);

namespace Src\Balisong\ModelProperty\Infrastructure\Repository;

use Src\Shared\Domain\Exception\DataNotFoundException;
use Src\Balisong\ModelProperty\Domain\Entity\BalisongModelPropertyConstruction;


class BalisongModelPropertyConstructionRepository
{

    public function __construct()
    {}

    public function find(int $id, array $relations = []): ?BalisongModelPropertyConstruction
    {
        return BalisongModelPropertyConstruction::query()
        ->with($relations)
        ->whereKey($id)
        ->first();
    }

    public function findOrfail(int $id): BalisongModelPropertyConstruction
    {
        $balisongModelPropertyConstruction = BalisongModelPropertyConstruction::query()
        ->where('balisong_model_property_construction_id', '=', $id)
        //->get()
        ->first();

        if ($balisongModelPropertyConstruction == null){
            throw new DataNotFoundException('Balisong Construction not Found');
        }

        return $balisongModelPropertyConstruction;
    }

    public function save(BalisongModelPropertyConstruction $balisongModelPropertyConstruction): BalisongModelPropertyConstruction
    {
        $balisongModelPropertyConstruction->save();

        //disptach events that notify the creation or update of a new Balisong Model entity

        return $balisongModelPropertyConstruction;
    } 

}