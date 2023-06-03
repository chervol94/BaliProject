<?php

declare (strict_types=1);

namespace Src\Balisong\Brand\Application\UseCase;

use Src\Balisong\Brand\Domain\Service\CreateBalisongBrandService;
use Src\Balisong\Brand\Application\Request\CreateBalisongBrandAsPublicUseCaseRequest;
use Src\Balisong\Brand\Application\Request\CreateBalisongBrandServiceRequest;

class CreateBalisongBrandAsPublicUseCase
{
    public function __construct(
        private CreateBalisongBrandService $createBalisongBrandService,
    ) {
    }

    public function execute(CreateBalisongBrandAsPublicUseCaseRequest $request): void
    {
        $serviceRequest = $this->mapServiceDto($request);

        $this->createBalisongBrandService->execute($serviceRequest);
    }

    private function mapServiceDto(CreateBalisongBrandAsPublicUseCaseRequest $request): CreateBalisongBrandServiceRequest
    {
        $serviceRequest = new CreateBalisongBrandServiceRequest();
        $serviceRequest->setBrandName($request->brandName());
        $serviceRequest->setBrandYearCreation($request->brandYearCreation());
        $serviceRequest->setBrandLogo($request->brandLogo());
        $serviceRequest->setBrandCountryCreation($request->brandCountryCreation());
        $serviceRequest->setBrandIsCloneMaker($request->brandIsCloneMaker());

        return $serviceRequest;
    }
}
