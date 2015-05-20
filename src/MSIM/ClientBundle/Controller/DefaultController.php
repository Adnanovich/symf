<?php

namespace MSIM\ClientBundle\Controller;

use MSIM\ClientBundle\Entity\Chose;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\BrowserKit\Request;



class DefaultController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction($name)
    { 
		return array ('name' => $name);
    }
	/**
     * @Route("/acc ")
     * @Template()
     */
    public function acceuilAction()
    { 
	return array('<html><body>Hello!</body></html>');
    }


    /**
     * @Route("/ajout/{chose}/{description}/{date}")
     * @Template()
     */
    public function ajoutAction($chose,$description,$date)
    {
        $p= new Chose();
        $p->setChose($chose);
         $p->setDescription($description);
          $p->setDate($date);
         $em=$this->getDoctrine()->getManager();
        $em->persist($p);
        $em->flush($p);
        return array('Chose' => $p );
    }

/**
 * @Route("/affiche ", name="affiche")
 * @Template()
 */
public function FormPrAction(\Symfony\Component\HttpFoundation\Request $request)
{
    $p=new chose();


    $form=$this->createFormBuilder($p)
         ->add('chose','text')
       
        ->add('description','textarea')
            ->add('date','datetime')
        ->add('valider','submit')
        ->getForm();
    $form->handleRequest($request);if($form->isValid())
{
    $em=$this->getDoctrine()->getManager();
    $em->persist($p);
    $em->flush($p);
    return $this->redirect($this->generateUrl("affiche"));
}


    return array('f' => $form->createView() );
}


  

    /**
     * @Route("/consult " , name="consult")
     * @Template()
     */
    public function afficheAction()
    {

        $chose=$this->getDoctrine()->getRepository("MSIMClientBundle:Chose")->findAll();

        return array('Chose' => $chose );
    }


}
