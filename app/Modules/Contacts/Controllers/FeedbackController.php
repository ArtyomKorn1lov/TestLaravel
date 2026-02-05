<?php

namespace App\Modules\Contacts\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Success;
use App\Modules\Contacts\Repositories\FeedbackRepositoryInterface;
use App\Modules\Contacts\Requests\FeedbackRequest;
use App\Core\Models\ErrorMessage;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Throwable;
use Closure;

class FeedbackController extends Controller implements HasMiddleware
{
    /**
     * @param FeedbackRepositoryInterface $feedbackRepository
     */
    public function __construct(
        public FeedbackRepositoryInterface $feedbackRepository,
    )
    {
    }

    /**
     * @todo set your middleware
     * @return array|Closure[]|Middleware[]|string[]
     */
    public static function middleware(): array
    {
        return [
            //new Middleware('test', only: ['__invoke'])
        ];
    }

    /**
     * @param FeedbackRequest $request
     * @return JsonResponse
     */
    public function __invoke(FeedbackRequest $request): JsonResponse
    {
        try {
            $this->feedbackRepository->create($request->toModel());
            return response()->json(new Success(
                message: 'Your application has been accepted.'
            ));
        } catch (ValidationException $exception) {
            return response()->json(new ErrorMessage($exception->getMessage()), HttpResponse::HTTP_UNPROCESSABLE_ENTITY);
        } catch (Throwable $exception) {
            Log::error($exception->getMessage(), compact('exception'));
            return response()->json(new ErrorMessage('An internal error occurred.'), HttpResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
