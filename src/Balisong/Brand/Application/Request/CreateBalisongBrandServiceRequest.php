<?php

declare (strict_types=1);

namespace Src\Balisong\Brand\Application\Request;

class CreateBalisongBrandServiceRequest
{
    private string $brandName;
    private ?int $brandYearCreation;
    private ?string $brandLogo;
    private string $brandCountryCreation;
    private bool $brandIsCloneMaker;

    public function brandName(): string
    {
        return $this->brandName;
    }

    public function setBrandName(string $name): void
    {
        $this->brandName = $name;
    }

    public function brandYearCreation(): ?int
    {
        return $this->brandYearCreation;
    }

    public function setBrandYearCreation(?int $year): void
    {
        $this->brandYearCreation = $year;
    }

    public function brandLogo(): ?string
    {
        return $this->brandLogo;
    }

    public function setBrandLogo(?string $logo): void
    {
        $this->brandLogo = $logo;
    }

    public function brandCountryCreation(): string
    {
        return $this->brandCountryCreation;
    }

    public function setBrandCountryCreation(string $country): void
    {
        $this->brandCountryCreation = $country;
    }

    public function brandIsCloneMaker(): bool
    {
        return $this->brandIsCloneMaker;
    }

    public function setBrandIsCloneMaker(bool $isCloneMaker): void
    {
        $this->brandIsCloneMaker = $isCloneMaker;
    }
}
