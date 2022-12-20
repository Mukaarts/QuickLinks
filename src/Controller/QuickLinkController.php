<?php

namespace App\Controller;

use App\Entity\QuickLink;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

final class QuickLinkController extends AbstractController
{
    #[Route('{slug}', name: 'app_quick_link')]
    public function index(QuickLink $quickLink): RedirectResponse
    {
        return $this->redirect($quickLink->getUrl());
    }
}
