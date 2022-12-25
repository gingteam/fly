<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Providers\QuestionProvider;
use Nette;

final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    public function __construct(private QuestionProvider $quiz)
    {
    }

    public function renderDefault()
    {
        $this->template->questions = $this->quiz->getQuestions();
    }
}
