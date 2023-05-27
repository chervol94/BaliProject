<?php 

declare(strict_types=1);

namespace Src\Infrastructure\Repository;

use Src\Balisong\Domain\Entity\BalisongModel;
use Src\Balisong\Domain\Exception\DataNotFoundException;

class BalisongModelRepository
{

    public function __construct()
    {}

    public function find(int $balisongId, array $relations = []): ?BalisongModel
    {
        return BalisongModel::query()
        ->with($relations)
        ->whereKey($balisongId)
        ->first();
    }

    public function findOrfail(int $balisongId): BalisongModel
    {
        $balisong = BalisongModel::query()
        ->where('balisong_model_id', '=', $balisongId)
        //->get()
        ->first();

        if ($balisong == null){
            throw new DataNotFoundException('Balisong not Found');
        }

        return $balisong;
    }

    public function save(BalisongModel $balisong): BalisongModel
    {
        $balisong->save();

        //disptach events that notify the creation or update of a new Balisong Model entity

        return $balisong;
    } 

}