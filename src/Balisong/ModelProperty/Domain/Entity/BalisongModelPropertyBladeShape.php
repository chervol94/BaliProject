<?php

declare (strict_types=1);

namespace Src\Balisong\ModelProperty\Domain\Entity;

use Src\Balisong\ModelProperty\Domain\Entity\BalisongModelProperty;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BalisongModelPropertyBladeShape extends Model
{
    protected $table = 'balisong_model_property_blade_shape';
    protected $primaryKey = 'balisong_model_property_blade_shape_id';

    //start relations

    public function balisongModelProperty(): HasOne
    {
        return $this->hasOne(BalisongModelProperty::class, 'blade_shape', 'balisong_model_property_blade_shape_id');
    }

    public function balisongModelPropertyObj(): BalisongModelProperty
    {
        return $this->getRelationValue('balisongModelProperty');
    }

    public function balisongModelPropertyExtraBlade(): HasOne
    {
        return $this->hasOne(BalisongModelProperty::class, 'extra_blade_shape', 'balisong_model_property_blade_shape_id');
    }

    public function balisongModelPropertyExtraBladeObj(): ?BalisongModelProperty
    {
        return $this->getRelationValue('balisongModelPropertyExtraBlade');
    }

    //end relations

    //start getters & setters

    public function id(): ?int
    {
        return $this->getAttributeValue('balisong_model_property_blade_shape_id');
    }

    public function setId(int $id): self
    {
        return $this->setAttribute('balisong_model_property_blade_shape_id', $id);
    }

    public function name(): string
    {
        return $this->getAttributeValue('name');
    }

    public function setName(string $bladeName): self
    {
        return $this->setAttribute('name', $bladeName);
    }

    public function bladeType(): string
    {
        return $this->getAttributeValue('blade_type');
    }

    public function setBladeType(string $bladeType): self
    {
        return $this->setAttribute('blade_type', $bladeType);
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
