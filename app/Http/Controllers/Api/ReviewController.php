<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Store a new review from the given review request.
     *
     * @param ReviewRequest $reviewRequest The review request object
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ReviewRequest $reviewRequest)
    {
        Review::create([
            'product_id' => $reviewRequest->product_id,
            'user_id' => $reviewRequest->user_id,
            'review_text' => $reviewRequest->review_text
        ]);
        return response()->json(['message' => 'Review submitted successfully'], 201);
    }
}
