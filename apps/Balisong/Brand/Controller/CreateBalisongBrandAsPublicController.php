<?php

declare (strict_types=1);

namespace Apps\Balisong\Brand\Controller;

use Throwable;
use Illuminate\Http\JsonResponse;
use Apps\Balisong\Brand\Request\CreateBalisongBrandAsPublicControllerRequest;
use Src\Balisong\Brand\Application\UseCase\CreateBalisongBrandAsPublicUseCase;
use Src\Balisong\Brand\Application\Request\CreateBalisongBrandAsPublicUseCaseRequest;

class CreateBalisongBrandAsPublicController
{
    public function __invoke(
        CreateBalisongBrandAsPublicControllerRequest $request,
        CreateBalisongBrandAsPublicUseCase $useCase,
    ): JsonResponse {
        try {
            $useCase->execute(
                new CreateBalisongBrandAsPublicUseCaseRequest(
                    (string) $request->json('name'),
                    (int) $request->json('yearCreation') ?? null,
                    (string) $request->json('logo') ?? null,
                    (string) $request->json('countryCreation'),
                    (bool) $request->json('isCloneMaker'),
                )
            );
            return new JsonResponse();
        } catch (Throwable $e) {
            return $e->getMessage();
        }
    }
}
