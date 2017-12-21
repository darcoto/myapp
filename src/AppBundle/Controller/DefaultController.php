<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Test;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/test")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function testAction(){
        $testList = $this->getDoctrine()->getRepository(Test::class)->findAll();
        return $this->render('default/test.html.twig',[
            'testList' => $testList
        ]);
    }
}
