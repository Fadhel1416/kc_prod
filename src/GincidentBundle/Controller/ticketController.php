<?php

namespace GincidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GincidentBundle\Entity\ticket;
use GincidentBundle\Entity\incident;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ticketController extends Controller
{
    public function  ListAction()
    {                                                                                                                                                     
             
         
     $em = $this->getDoctrine()->getManager();
 
    $ticket = $em->getRepository("GincidentBundle:ticket")->findAll();
   

      
        return $this->render('@Gincident/admin/ticket_admin.html.twig',array('ticket'=>$ticket));
   }

   
   
       public function ajouterAction(\Symfony\Component\HttpFoundation\Request $request)
    {
           
        $ticket = new ticket();
        $form = $this->createForm('GincidentBundle\Form\ticketType', $ticket);
        $form->handleRequest($request);
             $em=$this->getDoctrine()->getManager();
   

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
           $brochureFile = $form->get('brochure')->getData();
		    $FicheTic = $form->get('FicheTic')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $ticket->setBrochureFilename($newFilename);
			}
			if ($FicheTic) {
                $originallFilename = pathinfo($FicheTic->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originallFilename);
                $newFileename = $safeeFilename.'-'.uniqid().'.'.$FicheTic->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFileename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $ticket->setFiche_Tic($newFileename);
			}
            $em = $this->getDoctrine()->getManager();
            $ticket->setCreatedby($user);
            $ticket->setEtat('non traité');
             $ticket->setIntervenante('');
                    
            $date = new \DateTime('now');
            $ticket->setCreatedat($date);
             $tt=$em->getRepository("GincidentBundle:user")->findAll();
             foreach ($tt as $value) {
              if($value->getRole()=='ROLE_ADMIN')
            {
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("produit ajouté par    ".$user->getUsername());
        $notif->setMessage('');
        
       
           
          
            $manager->addNotification(array($value), $notif, true); }  
        }   
$this->get('session')->getFlashBag()->add(
    'notice',
    array(
        'message' => 'produit ajouter.'
    )
);           

           
			 
        $art = $em->getRepository('GincidentBundle:Article')->findBySousfamille($ticket->getDescription());
       foreach($art as $article)
	   {
		   $article->setBrochureFile($ticket->getBrochureFilename());
		   $article->setFich_Tic($ticket->getFiche_Tic());
		   
	   }
	    $em->persist($ticket);
	    $em->flush();
            return $this->redirectToRoute('gincident_admin_ticket');
        }
   

        return $this->render('GincidentBundle:admin:ajouter.html.twig', array(
           
            'form' => $form->createView(),
        ));
           
        
    }

       public function  modifierAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('GincidentBundle:ticket')->find($id);
        $form = $this->createForm('GincidentBundle\Form\ticketType',$ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
              $manager = $this->get('mgilet.notification');
       $brochureFile = $form->get('brochure')->getData();
		    $FicheTic = $form->get('FicheTic')->getData();
$art = $em->getRepository('GincidentBundle:Article')->findOneByRef($ticket->getreference());
            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $ticket->setBrochureFilename($newFilename);
				 
       
	  if($art !=null)
	  {
		  
	  $art->setBrochureFile($newFilename);}
				 
			
			}
			if ($FicheTic) {
                $originallFilename = pathinfo($FicheTic->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originallFilename);
                $newFileename = $safeeFilename.'-'.uniqid().'.'.$FicheTic->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $FicheTic->move(
                        $this->getParameter('brochures_directory'),
                        $newFileename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $ticket->setFiche_Tic($newFileename);
				
       
	  if($art !=null)
	  {
			$art->setFichTic($newFileename);}}
		   
			
        $notif = $manager->createNotification("produit modifier par    ".$user->getUsername());
        $notif->setMessage('');
     $admin=$em->getRepository("GincidentBundle:user")->findOneByUsername($ticket->getCreatedby());
   $tt=$em->getRepository("GincidentBundle:user")->findAll();
             foreach ($tt as $value) {
              if($value->getRole()=='ROLE_ADMIN')
            {
			 $manager->addNotification(array($value), $notif, true);}};
			  
			
		   
		 
	 
       
            $em->flush();
            $this->get('session')->getFlashBag()->add(
    'noti',
    array(
        'message' => 'produit modifier.'
    )
);  
            
            return $this->redirectToRoute('gincident_admin_ticket');
        }
        
       
        return $this->render('GincidentBundle:admin:modifier.html.twig', array(
            'form' => $form->createView(),
          
        ));
            
            
       
        
    }
       public function  supprimerAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser() ;
           $em = $this->getDoctrine()->getEntityManager();
   
            $ticket = $em->getRepository('GincidentBundle:ticket')->find($id);
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("produit supprimer par    ".$user->getUsername());
        $notif->setMessage('');
       $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
                
            $manager->addNotification(array($value), $notif, true); }  
        }   
            $em->remove($ticket);
            $em->flush();
              $session = $request->getSession();
     $session->getFlashBag()->add('info', 'Nouvelle bien supprimée.');
 
           return $this->redirect($this->generateUrl('gincident_admin_ticket'));
   
       
           
    }
     public function showticketAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         
          $ticket = $em->getRepository("GincidentBundle:ticket")->find($id);
         
 
      
            
    
        return $this->render('@Gincident/admin/afficherticket.html.twig',array('ticket'=>$ticket));

  }   
  
    
    
    
    
    
    
    
    
    
    
}
