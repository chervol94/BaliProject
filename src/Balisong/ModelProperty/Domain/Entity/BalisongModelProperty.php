<?php

declare (strict_types=1);

namespace Src\Balisong\ModelProperty\Domain\Entity;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Src\Balisong\Model\Domain\Entity\BalisongModel;

class BalisongModelProperty extends Model
{
    protected $table = 'balisong_model_property';
    protected $primaryKey = 'balisong_model_property_id';

    //start relations

    public function balisongModel(): HasOne
    {
        return $this->hasOne(BalisongModel::class, 'balisong_model_property_id', 'balisong_model_property_id');
    }

    public function balisongModelObj(): ?BalisongModel
    {
        return $this->getRelationValue('balisongModel');
    }

    public function balisongConstruction(): HasOne
    {
        return $this->hasOne(BalisongModelPropertyConstruction::class, 'balisong_model_property_construction_id', 'construction_system');
    }

    public function balisongBladeShape(): HasOne
    {
        return $this->hasOne(BalisongModelPropertyBladeShape::class, 'balisong_model_property_blade_shape_id', 'blade_shape');
    }

    public function balisongExtraBladeShape(): HasOne
    {
        return $this->hasOne(BalisongModelPropertyBladeShape::class, 'balisong_model_property_blade_shape_id', 'extra_blade_shape');
    }

    public function balisongModelPropertyColor(): HasMany
    {
        return $this->hasMany(BalisongModelPropertyColor::class, 'balisong_model_property_color_id', 'balisong_model_property_id');
    }


    //end relations

    //start getters & setters

    public function id(): ?int
    {
        return $this->getAttributeValue('balisong_model_property_id');
    }

    public function setId(int $id): self
    {
        return $this->setAttribute('balisong_model_property_id', $id);
    }

    public function overallLength(): ?int
    {
        return $this->getAttributeValue('overall_length');
    }

    public function setOverallLength(int $length): self
    {
        return $this->setAttribute('overall_length', $length);
    }

    public function handleLength(): ?int
    {
        return $this->getAttributeValue('handle_length');
    }

    public function setHandlelLength(int $length): self
    {
        return $this->setAttribute('handle_length', $length);
    }

    public function bladeLength(): ?int
    {
        return $this->getAttributeValue('blade_length');
    }

    public function setBladeLength(int $length): self
    {
        return $this->setAttribute('blade_length', $length);
    }
    
    public function extraBladeLength(): ?int
    {
        return $this->getAttributeValue('extra_overall_length');
    }

    public function setExtraBladeLength(int $length): self
    {
        return $this->setAttribute('extra_blade_length', $length);
    }

    public function weight(): ?int
    {
        return $this->getAttributeValue('weight');
    }

    public function setWeight(int $weight): self
    {
        return $this->setAttribute('weight', $$weight);
    }

    public function handleMaterial(): ?string
    {
        return $this->getAttributeValue('handle_material');
    }

    public function setHandleMaterial(int $handleMaterial): self
    {
        return $this->setAttribute('handle_material', $handleMaterial);
    }

    public function handleSecondaryMaterial(): ?string
    {
        return $this->getAttributeValue('handle_secondary_material');
    }

    public function setHandleSecondaryMaterial(int $handleMaterial): self
    {
        return $this->setAttribute('handle_secondary_material', $handleMaterial);
    }

    public function bladeMaterial(): ?string
    {
        return $this->getAttributeValue('blade_material');
    }

    public function setBladeMaterial(int $bladeMaterial): self
    {
        return $this->setAttribute('blade_material', $bladeMaterial);
    }

    public function extrabladeMaterial(): ?string
    {
        return $this->getAttributeValue('extra_blade_material');
    }

    public function setExtraBladeMaterial(int $bladeMaterial): self
    {
        return $this->setAttribute('extra_blade_material', $bladeMaterial);
    }

    public function constructionSystemId(): int
    {
        return $this->getAttributeValue('construction_system');
    }

    public function setConstructionSystemId(int $constructionSystemId): self
    {
        return $this->setAttribute('construction_system', $constructionSystemId);
    }

    public function bladeShapeId(): int
    {
        return $this->getAttributeValue('blade_shape');
    }

    public function setBladeShapeId(int $bladeShapeId): self
    {
        return $this->setAttribute('blade_shape', $bladeShapeId);
    }

    public function extrabladeShapeId(): int
    {
        return $this->getAttributeValue('extra_blade_shape');
    }

    public function setExtraBladeShapeId(int $bladeShapeId): self
    {
        return $this->setAttribute('extra_blade_shape', $bladeShapeId);
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