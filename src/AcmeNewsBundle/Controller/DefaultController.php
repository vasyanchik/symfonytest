<?php

namespace AcmeNewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AcmeNewsBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/news/", name="newslist")
     */
    public function indexAction(Request $request)
    {
        $currentPage = $request->query->get('page', 1);
        $news = $this->getDoctrine()->getRepository('AcmeNewsBundle:News')->getAllNews($currentPage);

        $limit = News::NUM_ITEMS;
        $maxPages = ceil($news->count() / $limit);

        return $this->render('AcmeNewsBundle:Default:list.html.twig', compact('news', 'limit', 'maxPages', 'currentPage'));
    }

    /**
     * @Route("/news.xml")
     */
    public function indexXmlAction(Request $request)
    {
        $currentPage = $request->query->get('page', 1);
        $news = $this->getDoctrine()->getRepository('AcmeNewsBundle:News')->getAllNews($currentPage);

        $limit = News::NUM_ITEMS;
        $maxPages = ceil($news->count() / $limit);

        $response = $this->render('AcmeNewsBundle:Default:list.xml.twig', compact('news', 'limit', 'maxPages', 'currentPage'));
        $response->headers->set('Content-Type', 'application/xml');
        return $response;
    }

    /**
     * @Route("/news/{id}")
     * @ParamConverter("news", class="AcmeNewsBundle:News")
     */
    public function showAction(News $news)
    {
        $lastNews = $this->getDoctrine()->getRepository('AcmeNewsBundle:News')->getLastNews(News::NUM_ITEMS, $news->getId());
        return $this->render('AcmeNewsBundle:Default:text.html.twig', compact('news', 'lastNews'));
    }
}
