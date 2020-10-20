<?php

namespace GincidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GincidentBundle\Entity\solutions;
use GincidentBundle\Entity\ticket;
use Mgilet\NotificationBundle\NotifiableInterface;


class solutionsController extends Controller
{
    
     public function  sollisteAction()
    {                                                                                                                                                     
        
    
     
 }
   
  


    public function  ajouter_solAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $solutions = new solutions();
     

        $form = $this->createForm('GincidentBundle\Form\solutionsType', $solutions);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();
            
          $ticket=$em->getRepository("GincidentBundle:ticket")->findOneById($solutions->getTic());
          if($ticket->getEtat()=='en cours')
          {
          $ticket->setEtat('traité');

          }
      $solutions->setCreateurTic($ticket->getCreatedby());

            $user = $this->getUser();
           
         
           $solutions->setCreatedby($user);
            $date = new \DateTime('now');
            $solutions->setCreateddate_sol($date);
        $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("solutions ajouter a votre ticket par    ".$user->getUsername());
        $notif->setMessage('');
     $agent=$em->getRepository("GincidentBundle:User")->findOneByUsername($ticket->getCreatedby());
      
         
          $manager->addNotification(array($agent), $notif, true);
        $this->get('session')->getFlashBag()->add(
    'sol',
    array(
      
        'message' => 'solution ajouter.'
    )
);  
           
            
        
           $em->persist($solutions);
            $em->flush();
            return $this->redirectToRoute('gincident_admin_solutions_affiche');
            
    }

        return $this->render('GincidentBundle:admin:ajouter_sol.html.twig', array(
           
            'form' => $form->createView(),
        ));
        
    }
   
    
     public function  affiche_solAction()
     {                                                                                                                                                  
             
       if($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')|| ($this->getUser()->getRole()=='ROLE_INTERVENANT') )
       {
     $em = $this->getDoctrine()->getManager();
 
       $sol = $em->getRepository("GincidentBundle:solutions")->findAll();}
       else
       {
           
          $em=$this->getDoctrine()->getManager();
     $use = $this->getUser();
     $value = $use->getUsername();
     $sol = $em->getRepository("GincidentBundle:solutions")->findAll($value); 
           
       }

 
        return $this->render('@Gincident/admin/affichersol.html.twig',array('solutions'=>$sol));    
    
    
     }
     
    
     
    public function  modifier_solAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $sol = $em->getRepository('GincidentBundle:solutions')->find($id);
        $form = $this->createForm('GincidentBundle\Form\solutionsType',$sol);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
              $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("solutions modifier par    ".$user->getUsername());
        $notif->setMessage('');
     $admin=$em->getRepository("GincidentBundle:user")->findOneByUsername($sol->getCreatedby());
          if($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && !$this->getUser()->getRoles()=='ROLE_ADMIN')
          {
          $manager->addNotification(array($admin), $notif, true);}
        
            $em->flush();
            $this->get('session')->getFlashBag()->add(
    'sol',
    array(
        'message' => 'solution Modifier.'
    )
);  
            
            return $this->redirectToRoute('gincident_admin_solutions_affiche');
        }
        
       
        return $this->render('GincidentBundle:admin:modifier_sol.html.twig', array(
            'form' => $form->createView(),
          
        ));
            
            
       
        
    }
       public function  supprimer_solAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser() ;
           $em = $this->getDoctrine()->getEntityManager();
   
            $sol = $em->getRepository('GincidentBundle:solutions')->find($id);
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("solutions supprimer par    ".$user->getUsername());
        $notif->setMessage('');
      $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN'  && !$this->getUser()->getRoles()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }   
            $em->remove($sol);
            $em->flush();
       
           return $this->redirect($this->generateUrl('gincident_admin_solutions_affiche'));
   
       
           
    }
    
    
    public function show_solAction($id) {
        
        $em = $this->getDoctrine()->getEntityManager();
         
          $sol = $em->getRepository("GincidentBundle:solutions")->find($id);

     
     
 
        return $this->render('@Gincident/admin/solutions.html.twig',array('solution'=>$sol));

    }

    
}
