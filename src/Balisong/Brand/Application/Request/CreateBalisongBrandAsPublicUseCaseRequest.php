<?php

declare (strict_types=1);

namespace Src\Balisong\Brand\Application\Request;

class CreateBalisongBrandAsPublicUseCaseRequest
{
    public function __construct(
        private string $brandName,
        private ?int $brandYearCreation,
        private ?string $brandLogo,
        private string $brandCountryCreation,
        private bool $brandIsCloneMaker,
    ) {
    }

    public function brandName(): string
    {
        return $this->brandName;
    }

    public function brandYearCreation(): ?int
    {
        return $this->brandYearCreation;
    }
    
    public function brandLogo(): ?string
    {
        return $this->brandLogo;
    }

    public function brandCountryCreation(): string
    {
        return $this->brandCountryCreation;
    }

    public function brandIsCloneMaker(): bool
    {
        return $this->brandIsCloneMaker;
    }
}
