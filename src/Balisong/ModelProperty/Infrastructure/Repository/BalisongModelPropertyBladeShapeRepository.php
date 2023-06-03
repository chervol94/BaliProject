<?php 

declare(strict_types=1);

namespace Src\Balisong\ModelProperty\Infrastructure\Repository;

use Src\Shared\Domain\Exception\DataNotFoundException;
use Src\Balisong\ModelProperty\Domain\Entity\BalisongModelPropertyBladeShape;

class BalisongModelPropertyBladeShapeRepository
{

    public function __construct()
    {}

    public function find(int $id, array $relations = []): ?BalisongModelPropertyBladeShape
    {
        return BalisongModelPropertyBladeShape::query()
        ->with($relations)
        ->whereKey($id)
        ->first();
    }

    public function findOrfail(int $id): BalisongModelPropertyBladeShape
    {
        $balisongModelPropertyBladeShape = BalisongModelPropertyBladeShape::query()
        ->where('balisong_model_property_blade_shape_id', '=', $id)
        //->get()
        ->first();

        if ($balisongModelPropertyBladeShape == null){
            throw new DataNotFoundException('Balisong Blade Shape not Found');
        }

        return $balisongModelPropertyBladeShape;
    }

    public function save(BalisongModelPropertyBladeShape $balisongModelPropertyBladeShape): BalisongModelPropertyBladeShape
    {
        $balisongModelPropertyBladeShape->save();

        //disptach events that notify the creation or update of a new Balisong Model entity

        return $balisongModelPropertyBladeShape;
    } 

}