<?php

declare (strict_types=1);

namespace Src\Balisong\Brand\Domain\Service;

use Src\Balisong\Brand\Application\Request\CreateBalisongBrandServiceRequest;
use Src\Balisong\Brand\Domain\Entity\BalisongBrand;
use Src\Balisong\Brand\Domain\Interface\BalisongBrandInterface;

class CreateBalisongBrandService
{
    public function __construct(
        private BalisongBrandInterface $balisongBrandRepository
    ) {
    }

    public function execute(CreateBalisongBrandServiceRequest $createBalisongServicerequest): ?BalisongBrand
    {
        $brandExists = $this->assertBrandIsNew($createBalisongServicerequest->brandName());

        if ($brandExists === true) {
            return null;
        }

        $balisongBrand = $this->mapBalisongBrandEntityFromServiceRequest($createBalisongServicerequest);

        return $this->balisongBrandRepository->save($balisongBrand);
    }

    private function assertBrandIsNew(string $name): bool
    {
        $brand = $this->balisongBrandRepository->findByName($name, []);

        if ($brand instanceof BalisongBrand) {
            return false;
        }

        return true;
    }

    private function mapBalisongBrandEntityFromServiceRequest(CreateBalisongBrandServiceRequest $request): BalisongBrand
    {
        return (new BalisongBrand())
            ->setName($request->brandName())
            ->setYearCreation($request->brandYearCreation())
            ->setLogo($request->brandLogo())
            ->setCountry($request->brandCountryCreation())
            ->setIsCloneMaker($request->brandIsCloneMaker());
    }
}
