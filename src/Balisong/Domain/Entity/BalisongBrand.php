<?php

declare (strict_types=1);

namespace Src\Balisong\Domain\Entity;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BalisongBrand extends Model
{
    protected $table = 'balisong_brand';
    protected $primaryKey = 'brand_id';

    //start relations

    public function balisongModel(): HasMany
    {
        return $this->hasMany(BalisongModel::class, 'brand_id', 'brand_id');
    }

    public function balisongModelObj(): ?BalisongModel
    {
        return $this->getRelationValue('balisongModel');
    }

    //end relations

    //start getters & setters

    public function id(): ?int
    {
        return $this->getAttributeValue('brand_id');
    }

    public function setId(int $brandId): self
    {
        return $this->setAttribute('brand_id', $brandId);
    }

    public function name(): ?string
    {
        return $this->getAttributeValue('name');
    }

    public function setName(string $balisongName): self
    {
        return $this->setAttribute('name', $balisongName);
    }

    public function yearCreation(): ?int
    {
        return $this->getAttributeValue('year_creation');
    }

    public function setYearCreation(int $year): self
    {
        return $this->setAttribute('year_creation', $year);
    }

    public function logo(): ?string
    {
        return $this->getAttributeValue('logo');
    }

    public function setLogo(string $logo): self
    {
        return $this->setAttribute('logo', $logo);
    }

    public function country(): ?string
    {
        return $this->getAttributeValue('country');
    }

    public function setCountry(string $country): self
    {
        return $this->setAttribute('name', $country);
    }

    public function isCloneMaker(): ?bool
    {
        return $this->getAttributeValue('is_clone_maker');
    }

    public function setIsCloneMaker(bool $isCloneMaker): self
    {
        return $this->setAttribute('is_clone_maker', $isCloneMaker);
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