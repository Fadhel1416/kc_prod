<?php

namespace GincidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GincidentBundle\Entity\User;
class DefaultController extends Controller
{
    public function indexAction()
    {
    return $this->render('@Gincident/Default/index.html.twig');}
    
    
   

    
       public function UserlistAction()
    {
            $em = $this->getDoctrine()->getManager();
 
           $user = $em->getRepository("GincidentBundle:User")->findAll();
   
    return $this->render('@Gincident/admin/users.html.twig',array('user'=>$user));
    
    }
    
     public function profilAction()
    {
         $profil=$this->getUser() ;
            $em = $this->getDoctrine()->getManager();
 
           $user = $em->getRepository("GincidentBundle:User")->find($profil->getId());
   
    return $this->render('@Gincident/admin/profil.html.twig',array('profil'=>$user));
    
    }
    
    
    
    
    
    
    
    
    
    
    
    

    public function sendNotificationAction(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $name = $this->getUser()->getUsername();
        $polo = $this->getUser()->getId();
        $notif = $manager->createNotification("hello");
        $notif->setMessage('hello word');
        $notif->setLink('http://symfony.com/');
        // or the one-line method :
        // $manager->createNotification('Notification subject','Some random text','http://google.fr');

        // you can add a notification to a list of entities
        // the third parameter ``$flush`` allows you to directly flush the entities
        $manager->addNotification(array($this->getUser()), $notif, true);

        return $this->redirectToRoute('gincident_homepage');
    }
    
   
    
    
    
    
    
    
    
    
    
    
   
}
