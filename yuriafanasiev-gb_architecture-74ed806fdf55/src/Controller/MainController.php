<?php

declare(strict_types = 1);

namespace Controller;

use Framework\Render;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
    use Render;

    /**
     * Главная страница
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        $header = new HeaderView;
        $header->add(new LogoView);
        $header->add(new ContactView);
        $header->drawHeader();
        return $this->render('main/index.html.php', ['header' => $header]);
    }
}
