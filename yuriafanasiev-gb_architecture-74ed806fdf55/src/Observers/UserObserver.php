<?php

namespace Observers;

class NewsObserver implements IObserver

{

    public function handle(string $comment)

    {

        echo 'Вы оставили комментарий';

    }

}