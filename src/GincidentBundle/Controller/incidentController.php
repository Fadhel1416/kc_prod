<?php

namespace GincidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GincidentBundle\Entity\incident;
use GincidentBundle\Entity\User;

class incidentController extends Controller
{
    
     public function incident_listAction()
    {                                                                                                                                                     
        
    if($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
         {
     $em = $this->getDoctrine()->getManager();
 
    $incident =$em->getRepository("GincidentBundle:incident")->findAll();

       }
 else 
     {
     $em=$this->getDoctrine()->getManager();
     $use = $this->getUser();
     $value = $use->getUsername();
    $incident =$em->getRepository("GincidentBundle:incident")->findByCreatedby($value); 

     
     
 }
        return $this->render('@Gincident/admin/incident.html.twig',array('incidents'=>$incident));
   }


    public function  ajouter_incAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $incident = new incident();
        $form = $this->createForm('GincidentBundle\Form\incidentType',$incident);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
           
            $em = $this->getDoctrine()->getManager();
           $incident->setCreatedby($user);
            $nomfrs=$em->getRepository("GincidentBundle:fournisseur")->findOneById($incident->getFrs());
			$incident->setNomfrs($nomfrs->getName());
             $date = new \DateTime('now');
            $incident->setDateinc($date);
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("categorie ajouté par    ".$user->getUsername());
        $notif->setMessage('');
        $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }    
      
            $em->persist($incident);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
    'inc',
    array(
       
        'message' => 'famille du categorie ajouter avec sucess.'
    )
);
            return $this->redirectToRoute('gincident_admin_incident');
        }

        return $this->render('GincidentBundle:admin:ajouter_inc.html.twig', array(
           
            'form' => $form->createView(),
        ));
        
    }
   
    
  
    
    public function  modifier_incAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $incident = $em->getRepository('GincidentBundle:incident')->find($id);
        $form = $this->createForm('GincidentBundle\Form\incidentType',$incident);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $nomfrs=$em->getRepository("GincidentBundle:fournisseur")->findOneById($incident->getFrs());
			$incident->setNomfrs($nomfrs->getName());
              $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("famille du categorie modifier par    ".$user->getUsername());
        $notif->setMessage('');
     $admin=$em->getRepository("GincidentBundle:user")->findOneByUsername($incident->getCreatedby());
  $tt=$em->getRepository("GincidentBundle:user")->findAll();
             foreach ($tt as $value) {
              if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true);}
       }
        
            $em->flush();
                        $this->get('session')->getFlashBag()->add(
    'inc',
    array(
      
        'message' => 'famille du categorie modifier avec sucess.'
    )
);
            return $this->redirectToRoute('gincident_admin_incident');
        }
        
       
        return $this->render('GincidentBundle:admin:modifier_inc.html.twig', array(
            'form' => $form->createView(),
          
        ));
            
            
       
        
		}   
       public function  supprimer_incAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser() ;
           $em = $this->getDoctrine()->getEntityManager();
   
            $incident = $em->getRepository('GincidentBundle:incident')->find($id);
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("categorie supprimer par    ".$user->getUsername());
        $notif->setMessage('');
      $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }   
            $em->remove($incident);
            $em->flush();
              $session = $request->getSession();
     $session->getFlashBag()->add('info', 'Nouvelle famille du categorie  bien supprimée.');
 
           return $this->redirect($this->generateUrl('gincident_admin_incident'));
   
       
           
    }
         public function afficher_incAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         
          $incident = $em->getRepository("GincidentBundle:incident")->find($id);
         
 
      
            
    
        return $this->render('@Gincident/admin/afficherIncident.html.twig',array('incident'=>$incident));

  }   
  
    
}
