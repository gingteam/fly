<?php

namespace App\Providers;

use App\Entity\Question;
use EventSauce\ObjectHydrator\ObjectMapperUsingReflection;
use Nette\Utils\FileSystem;
use Nette\Utils\Json;

class QuestionProvider
{
    /**
     * @var Question[]
     */
    private array $questions;

    public function __construct(string $appDir)
    {
        $rawContent = FileSystem::read($appDir.DIRECTORY_SEPARATOR.'quiz.json');
        $data = Json::decode($rawContent, Json::FORCE_ARRAY);

        $this->questions = (new ObjectMapperUsingReflection())
            ->hydrateObjects(Question::class, $data)
            ->toArray();
    }

    /**
     * @return Question[]
     */
    public function getQuestions()
    {
        return $this->questions;
    }
}
