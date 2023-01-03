<?php

namespace App\Question\Domain\Repositories;


use App\Question\Domain\Entities\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Passport\Passport;

class CreateQuestionRepository implements CreateQuestionRepositoryInterface
{
    public function create($data): bool
    {
        Log::info($data);
        $question = Question::create([
            'question' => $data['question'],
            'description' => $data['description'],
            'writer' => Auth::user()->user_nickname,
            'isPrivate' => $data['isPrivate'],//Auth::user()->user_nickname
        ]);

        if ($question) {
            return true;
        } else {
            return false;
        }
    }
}

