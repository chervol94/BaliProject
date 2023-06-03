<?php

declare (strict_types=1);

namespace Src\Balisong\Model\Domain\Entity;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Src\Balisong\Brand\Domain\Entity\BalisongBrand;

class BalisongModel extends Model
{
    protected $table = 'balisong_model';
    protected $primaryKey = 'balisong_model_id';

    //start relations

    public function balisongBrand(): HasOne
    {
        return $this->hasOne(BalisongBrand::class, 'brand_id', 'brand_id');
    }

    public function balisongBrandObj(): ?BalisongBrand
    {
        return $this->getRelationValue('balisongBrand');
    }

    public function balisongModelClones(): HasOne
    {
        return $this->hasOne(self::class, 'balisong_model_id', 'balisong_model_id');
    }

    public function balisongModelProperty(): HasOne
    {
        return $this->hasOne(BalisongModelProperty::class, 'balisong_model_property_id', 'balisong_model_property_id');
    }

    //end relations

    //start getters & setters

    public function id(): ?int
    {
        return $this->getAttributeValue('balisong_id');
    }

    public function setId(int $balisongId): self
    {
        return $this->setAttribute('balisong_id', $balisongId);
    }

    public function name(): ?string
    {
        return $this->getAttributeValue('name');
    }

    public function setName(string $balisongName): self
    {
        return $this->setAttribute('name', $$balisongName);
    }

    public function yearRelease(): ?int
    {
        return $this->getAttributeValue('year_release');
    }

    public function setYearRelease(int $year): self
    {
        return $this->setAttribute('year_release', $year);
    }

    public function isTrainer(): ?bool
    {
        return $this->getAttributeValue('is_trainer');
    }

    public function setIsTrainer(bool $isTrainer): self
    {
        return $this->setAttribute('is_trainer', $isTrainer);
    }

    public function isLive(): ?bool
    {
        return $this->getAttributeValue('is_live');
    }

    public function setIsLive(bool $isLive): self
    {
        return $this->setAttribute('is_live', $isLive);
    }

    public function isLatchless(): ?bool
    {
        return $this->getAttributeValue('is_latchless');
    }

    public function setIsLatchless(bool $isLatchless): self
    {
        return $this->setAttribute('is_latchless', $isLatchless);
    }

    public function isDiscontinued(): ?bool
    {
        return $this->getAttributeValue('is_discontinued');
    }

    public function setIsDiscontinued(bool $isDiscontinued): self
    {
        return $this->setAttribute('is_trainer', $isDiscontinued);
    }

    public function images(): ?string
    {
        return $this->getAttributeValue('images');
    }

    public function setImages(string $images): self
    {
        return $this->setAttribute('images', $images);
    }

    public function brandId(): ?int
    {
        return $this->getAttributeValue('brand_id');
    }

    public function setBrandId(int $brandId): self
    {
        return $this->setAttribute('brand_id', $brandId);
    }

    public function clonesBalisongId(): ?int
    {
        return $this->getAttributeValue('clones_balisong_model_id');
    }

    public function setClonesBalisongId(int $clonesBalisongId): self
    {
        return $this->setAttribute('clones_balisong_model_id', $clonesBalisongId);
    }

    public function balisongModelPropertyId(): ?int
    {
        return $this->getAttributeValue('balisong_model_property_id');
    }

    public function setBalisongModelPropertyId(int $balisongModelId): self
    {
        return $this->setAttribute('balisong_model_property_id', $balisongModelId);
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