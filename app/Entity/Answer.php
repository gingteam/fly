<?php

namespace App\Entity;

use EventSauce\ObjectHydrator\PropertyCasters\CastToType;

class Answer
{
    public function __construct(
        public readonly string $answer,
        #[CastToType('boolean')]
        public readonly bool $correct,
    ) {
    }
}
