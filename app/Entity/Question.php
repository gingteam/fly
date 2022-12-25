<?php

namespace App\Entity;

class Question
{
    /**
     * @param array<Answer> $array_answer
     */
    public function __construct(
        public readonly string $question,
        public readonly string $image,
        public readonly array $array_answer
    ) {
    }
}
