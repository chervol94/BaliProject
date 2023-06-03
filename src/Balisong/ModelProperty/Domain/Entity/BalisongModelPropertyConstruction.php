<?php

declare (strict_types=1);

namespace Src\Balisong\ModelProperty\Domain\Entity;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Src\Balisong\ModelProperty\Domain\Entity\BalisongModelProperty;


class BalisongModelPropertyConstruction extends Model
{
    protected $table = 'balisong_model_property_construction';
    protected $primaryKey = 'balisong_model_property_construction_id';

    //start relations

    public function balisongModelProperty(): HasOne
    {
        return $this->hasOne(BalisongModelProperty::class, 'construction_system', 'balisong_model_property_construction_id');
    }

    public function balisongModelPropertyObj(): BalisongModelProperty
    {
        return $this->getRelationValue('balisongModelProperty');
    }

    //end relations

    //start getters & setters

    public function id(): ?int
    {
        return $this->getAttributeValue('balisong_model_property_construction_id');
    }

    public function setId(int $id): self
    {
        return $this->setAttribute('balisong_model_property_construction_id', $id);
    }

    public function name(): string
    {
        return $this->getAttributeValue('name');
    }

    public function setName(string $constructionName): self
    {
        return $this->setAttribute('name', $constructionName);
    }

    public function createdAt(): Carbon
    {
        return Carbon::parse($this->getAttribute('created_at'));
    }

    public function updatedAt(): Carbon
    {
        return Carbon::parse($this->getAttribute('updated_at'));
    }

    //end getters & setters
}