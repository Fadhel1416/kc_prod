<?php

namespace GincidentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GincidentBundle\Entity\User;
use GincidentBundle\Entity\listintervenant;

use GincidentBundle\Entity\ticket;
use GincidentBundle\Entity\client;
use GincidentBundle\Entity\Facture;
use GincidentBundle\Entity\fournisseur;
use GincidentBundle\Entity\intervenant;
use GincidentBundle\Entity\Article;
use GincidentBundle\Entity\incident;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;



class adminController extends Controller
{
    public function daschboardAction(){
        
        return $this->render('@Gincident/admin/admindaschbord.html.twig');
    }

  
    
        public function UserlistAction(){
    
     $em = $this->getDoctrine()->getManager();
 
    $user = $em->getRepository("GincidentBundle:User")->findAll();
    
     
    return $this->render('@Gincident/admin/userlist.html.twig',array('user'=>$user));
  
    
    }
   public function afficher_clAction(){
    
     $em = $this->getDoctrine()->getManager();
 
    $client = $em->getRepository("GincidentBundle:client")->findAll();
    
     
    return $this->render('@Gincident/admin/affiche_cl.html.twig',array('client'=>$client));
  
    
    }
	 public function list_frAction(){
    
     $em = $this->getDoctrine()->getManager();
 
    $fournisseur = $em->getRepository("GincidentBundle:fournisseur")->findAll();
    
     
    return $this->render('@Gincident/admin/list_fr.html.twig',array('fournisseur'=>$fournisseur));
  
    
    }
    
        public function StatAction(){
    
 
 
   
    return $this->render('@Gincident/admin/statistique.html.twig');
    
    }
    public  function list_intervenantAction($id)
    {
  $em = $this->getDoctrine()->getManager();
 
    $user = $em->getRepository("GincidentBundle:User")->findByRole("ROLE_INTERVENANT");
    foreach ($user as $value)
    {
       $value->setIdt($id); 
       $em->flush();
    }
     //$user->setIdt($id);
    return $this->render('@Gincident/admin/ListIntervenant.html.twig',array('user'=>$user));

    /*$listintervenant = new listintervenant();
        $form = $this->createForm('GincidentBundle\Form\listintervenantType',$listintervenant );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         
           
            $em = $this->getDoctrine()->getManager();
            
            
            
            $ticket=$em->getRepository("GincidentBundle:ticket")->findOneById($id);
                          $ticket->setEtat('en cours');

            $ticket->setIntervenante($listintervenant->getListe());
             
      
            
            $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("une nouvelle ticket pour traiter    ".$listintervenant->getListe());
        $notif->setMessage('');
            
      
    $intervenant=$em->getRepository("GincidentBundle:intervenant")->findOneById($listintervenant->getListe());
    $user=$em->getRepository("GincidentBundle:user")->findOneByUsername($intervenant->getName());

            
       $manager->addNotification(array($user), $notif, true);  

    
            
            $em->persist($listintervenant);
            $em->flush();
            
      
            
            return $this->redirectToRoute('gincident_admin_ticket');
        }
        else
        {

        return $this->render('GincidentBundle:admin:ListIntervenant.html.twig', array(
           
            'form' => $form->createView(),
            
        ));}
            
      */  
       
    }

    public function associerAction($id,$idt)
    {
          $em = $this->getDoctrine()->getManager();

         $ticket=$em->getRepository("GincidentBundle:ticket")->findOneById($idt);
          $ticket->setEtat('en cours'); 
              $intervenant = $em->getRepository("GincidentBundle:User")->findOneById($id);
              
            $ticket->setIntervenante($intervenant->getUsername());
            
  $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("une nouvelle ticket appeler ". $ticket->getName()   ." pour traiter    ".$intervenant->getUsername());
        $notif->setMessage('');
          
               $manager->addNotification(array($intervenant), $notif, true);  
$this->get('session')->getFlashBag()->add(
    'tic',
    array(
        'message' => 'ticket associer.'
    )
);
         return $this->redirectToRoute('gincident_admin_ticket');

    }
    
    
    
    
    

    public function  deleteuserAction($id)
    {
        
         $em = $this->getDoctrine()->getManager();
         $user = $em->getRepository('GincidentBundle:User')->find($id);
         $intervenant=$em->getRepository('GincidentBundle:intervenant')->findOneByName($user->getUsername());
         if($intervenant!=null)
         {
         $em->remove($intervenant);
          $em->flush();
         }
        
    $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("user supprimer  par    ".$user->getUsername());
        $notif->setMessage('');
  $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRoles()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }   
       
             $em->remove($user);
         $em->flush();
   
 return $this->redirectToRoute('gincident_admin_userliste');
 
 
 
  }   
    
    
   public function  modifier_userAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
  
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('GincidentBundle:User')->find($id);
      $intervenant=$em->getRepository('GincidentBundle:intervenant')->findOneByName($user->getUsername());

            
       

        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         if($intervenant!=null)
         {
             $intervenant->setName($user->getUsername());
             $em->persist($intervenant);
          $em->flush();
         }
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');
               // $file stores the uploaded PDF file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $user->getPhoto();
        

                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()) . '.' . $file->guessExtension(); 
                $imageDir = $this->container->getParameter('kernel.root_dir') . '/../web/uploads/img/experts';
                 // Generate a unique name for the file before saving it
                $file->move($imageDir, $fileName);
                $user->setPhotoname($fileName);
                $user->setPhoto($fileName);

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('gincident_admin_profil');
                $response = new RedirectResponse($url);
            }


            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('@Gincident/admin/modifier_user.html.twig', array(
            'form' => $form->createView(),
			'user'=> $user,
        ));
    
            
 
  
  
}
public function ajouter_clAction(\Symfony\Component\HttpFoundation\Request $request)
{
    $client = new client();
        $form = $this->createForm('GincidentBundle\Form\clientType',$client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
           
            $em = $this->getDoctrine()->getManager();
           
            
             $date = new \DateTime('now');
			 $client->setDateCreation($date);
           
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("client ajouté par    ".$user->getUsername());
        $notif->setMessage('');
        $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }    
      
            $em->persist($client);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
    'cl',
    array(
       
        'message' => 'client ajouter.'
    )
);
            return $this->redirectToRoute('gincident_admin_client');
        }

        return $this->render('GincidentBundle:admin:ajouter_cl.html.twig', array(
           
            'form' => $form->createView(),
));}
        
  public function ajouter_frAction(\Symfony\Component\HttpFoundation\Request $request)
{
    $fournisseur = new fournisseur();
        $form = $this->createForm('GincidentBundle\Form\fournisseurType',$fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
           
            $em = $this->getDoctrine()->getManager();
           
            
             $date = new \DateTime('now');
			 $fournisseur->setCreatedAt($date);
           
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("fournisseur ajouté par    ".$user->getUsername());
        $notif->setMessage('');
        $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }    
      
            $em->persist($fournisseur);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
    'cl',
    array(
       
        'message' => 'fournisseur ajouter.'
    )
);
            return $this->redirectToRoute('gincident_admin_fournisseur_affiche');
        }

        return $this->render('GincidentBundle:admin:ajouter_fr.html.twig', array(
           
            'form' => $form->createView(),
        ));  
}
public function ajouter_artAction(\Symfony\Component\HttpFoundation\Request $request,$id,$idfact)
{
    $article = new Article();
	$rr=null;
$info1=null;
$zz=null;
$idd=$id;
        $form = $this->createForm('GincidentBundle\Form\ArticleType',$article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
           
            $em = $this->getDoctrine()->getManager();
           
            
            // $date = new \DateTime('now');
           
       
      
            //$em->persist($article);
            //$em->flush();
		//$tt= $em->getRepository('GincidentBundle:fournisseur')->findOneByArticle($article->getArtFrs());

	   $info1 = $em->getRepository('GincidentBundle:incident')->findByFrs($article->getArtFrs());

			$rr=$article->getArtfrs();
			//$zz=$article->getArtfrs();
			
			
			
			
			
			
			
   return $this->render('GincidentBundle:admin:ajouter_art.html.twig', array(
           
            'info1' =>$info1,
	    'cat' =>$rr,
		'zz' =>$zz,
		'idd' =>$idd,
		'idfact'=>$idfact,
		

       ));

        }

        return $this->render('GincidentBundle:admin:ajouter_art.html.twig', array(
           
            'form' => $form->createView(),
			'cat' =>$rr,
           
            
        ));
        
    
}
public function ajouter_listartAction(\Symfony\Component\HttpFoundation\Request $request)
{
    $article = new Article();
        $form = $this->createForm('GincidentBundle\Form\ArticleType',$article);
        $form->handleRequest($request);
$rr=null;
$info=null;
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
           
            $em = $this->getDoctrine()->getManager();
           



      
    $em->persist($article);
     $em->flush();
            
            // $date = new \DateTime('now');
			$rr=$article->getArtInc();
	$info = $em->getRepository('GincidentBundle:ticket')->findByIncidents($article->getArtInc());


	 return $this->render('GincidentBundle:admin:ajouter_listart.html.twig', array(
           
            'info' =>$info,
	    'cat' =>$rr,

       ));
        }
		return $this->render('GincidentBundle:admin:ajouter_listart.html.twig', array(
           
            'info' =>$info,
));
}
public function insert_deviceAction(\Symfony\Component\HttpFoundation\Request $request,$id,$idfact)
{
    $article = new Article();
        // $user = $this->getUser();
     
            $em = $this->getDoctrine()->getManager();
        $famille=$_POST['t'];
        $sous_famille =	$_POST['k'];
		$niveau=$_POST['a'];
		$plaque=$_POST['c'];
		$decor=$_POST['b'];
		$ref=$_POST['r'];
$bro=$em->getRepository('GincidentBundle:ticket')->findOneByDescription($sous_famille);	
$fr=$em->getRepository('GincidentBundle:incident')->findOneByName($famille);
//$frs=$em->getRepository('GincidentBundle:incident')->findOneByFrs($fr->getFrs());	
$article->setArtFrs($fr->getFrs());
$article->setFamille($famille);
$article->setSousFamille($sous_famille);
$article->setCodeFacture($idfact);
$article->setNiveau($niveau);
$article->setPlaque($plaque);
$article->setDecor($decor);
$article->setRef($ref);
$article->setIdclient($id);
$article->setQte(0);
$article->setPrxuni($bro->getPrixuni());
$article->setTotalprix(0);
$article->setDim(0);
$article->setBrochureFile($bro->getBrochureFilename());
$article->setFich_Tic($bro->getFiche_Tic());
      
    $em->persist($article);
     $em->flush();
	 $calcul = $em->getRepository('GincidentBundle:Article')->findByCodefacture($idfact);
		 $cal= $em->getRepository('GincidentBundle:calcul')->findOneById(1);
	$soustotal=0;

	 foreach($calcul as $value )
	 {
	 $soustotal=$soustotal+$value->getTotalprix();}
	 $total=$soustotal+$cal->getFraisport();
	 $tva=( $total*$cal->getTva())/100;
	 $ttc= $total+$tva;
           $device = $em->getRepository("GincidentBundle:Article")->findByCodefacture($idfact);
          $client = $em->getRepository("GincidentBundle:client")->find($id);
		return $this->render('GincidentBundle:admin:afficher_cl.html.twig', array(
           
   'id'=>$id,'facture'=>$idfact,'client'=>$client,'device'=>$device,'soustotal'=>$soustotal,'tva'=>$tva,'ttc'=>$ttc,'total'=>$total,'fraisport'=>$cal->getFraisport())        
);		  



}
public function search_deviceAction(\Symfony\Component\HttpFoundation\Request $request,$id,$idfact)
{
  
       // $form = $this->createForm('GincidentBundle\Form\ArticleType',$article);
        //$form->handleRequest($request);
$rr=null;
$info2=null;
$zz=null;
$idd=$id;

        
            //$user = $this->getUser();
           
            $em = $this->getDoctrine()->getManager();
           

		$tt=$_POST['q'];

      $res = $em->getRepository('GincidentBundle:incident')->findOneByName($tt);

           // $em->persist($article);
            //$em->flush();
            
            // $date = new \DateTime('now');
			$rr=$res->getId();
		$info2 = $em->getRepository('GincidentBundle:ticket')->findByIncidents($res->getId());
        $zz=$res->getId();    
         
	 return $this->render('GincidentBundle:admin:ajouter_art.html.twig', array(
           
            'info2' =>$info2,
	    'cat' =>$rr,
		'res'=>$res,
		'zz'=>$zz,
		'idd'=>$idd,
		'idfact'=>$idfact,

       ));

}
public function  modifier_clAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('GincidentBundle:client')->find($id);
        $form = $this->createForm('GincidentBundle\Form\clientType',$client);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
              $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("client modifier par    ".$user->getUsername());
        $notif->setMessage('');
   $tt=$em->getRepository("GincidentBundle:user")->findAll();
    foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
    $manager->addNotification(array($value), $notif, true);}}
        
            $em->flush();
                        $this->get('session')->getFlashBag()->add(
    'cl',
    array(
      
        'message' => 'client Modifier.'
    )
);
            return $this->redirectToRoute('gincident_admin_client');
        }
        
       
        return $this->render('GincidentBundle:admin:modifier_cl.html.twig', array(
            'form' => $form->createView(),
          
        ));
            
            
       
        
    }
	public function  modifier_frAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $fournisseur = $em->getRepository('GincidentBundle:fournisseur')->find($id);
        $form = $this->createForm('GincidentBundle\Form\fournisseurType',$fournisseur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
              $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("fournisseur modifier par    ".$user->getUsername());
        $notif->setMessage('');
   $tt=$em->getRepository("GincidentBundle:user")->findAll();
    foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
    $manager->addNotification(array($value), $notif, true);}}
        
            $em->flush();
                        $this->get('session')->getFlashBag()->add(
    'fr',
    array(
      
        'message' => 'fournisseur  Modifier.'
    )
);
            return $this->redirectToRoute('gincident_admin_fournisseur_affiche');
        }
        
       
        return $this->render('GincidentBundle:admin:modifier_fr.html.twig', array(
            'form' => $form->createView(),
          
        ));
            
            
       
        
    }
      public function  supprimer_clAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser() ;
           $em = $this->getDoctrine()->getEntityManager();
   
            $client = $em->getRepository('GincidentBundle:client')->find($id);
			    $article = $em->getRepository('GincidentBundle:article')->findOneByIdclient($client->getId());
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("client supprimer par    ".$user->getUsername());
        $notif->setMessage('');
      $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }   
            $em->remove($client);
			 $em->remove($article);
            $em->flush();
              $session = $request->getSession();
     $session->getFlashBag()->add('info', 'Nouvelle client  bien supprimée.');
 
           return $this->redirect($this->generateUrl('gincident_admin_client'));
   
    }
	      public function  supprimer_frAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser() ;
           $em = $this->getDoctrine()->getEntityManager();
   
            $fournisseur = $em->getRepository('GincidentBundle:fournisseur')->find($id);
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("fournisseur supprimer par    ".$user->getUsername());
        $notif->setMessage('');
      $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }   
            $em->remove($fournisseur);
            $em->flush();
              $session = $request->getSession();
     $session->getFlashBag()->add('info', 'Nouvelle fournisseur  bien supprimée.');
 
           return $this->redirect($this->generateUrl('gincident_admin_fournisseur_affiche'));
   
    }
      public function aff_clAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         
          $client = $em->getRepository("GincidentBundle:client")->find($id);
         
           $device = $em->getRepository("GincidentBundle:Article")->findByIdclient($id);
//$calcul = $em->getRepository('GincidentBundle:Article')->findByIdclient();
 $calcul = $em->getRepository('GincidentBundle:Article')->findByIdclient($id);
		 $cal= $em->getRepository('GincidentBundle:calcul')->findOneById(1);
	$soustotal=0;

	 foreach($calcul as $value )
	 {
	 $soustotal=$soustotal+$value->getTotalprix();}
	 $total=$soustotal+$cal->getFraisport();
	 $tva=( $total*$cal->getTva())/100;
	 $ttc= $total+$tva;
           $device = $em->getRepository("GincidentBundle:Article")->findByIdclient($id);
          $client = $em->getRepository("GincidentBundle:client")->find($id); 
	
      
            
    
        return $this->render('@Gincident/admin/afficher_cl.html.twig',array('client'=>$client,'device'=>$device,'soustotal'=>$soustotal,'tva'=>$tva,'ttc'=>$ttc,'total'=>$total,'fraisport'=>$cal->getFraisport()));

  } 
    public function aff_frAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         
          $fournisseur = $em->getRepository("GincidentBundle:fournisseur")->find($id);
         
 
      
            
    
        return $this->render('@Gincident/admin/afficher_fr.html.twig',array('frs'=>$fournisseur));

  } 
   public function list_deviceAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         
          $device = $em->getRepository("GincidentBundle:Article")->findByIdclient($id);
          $client = $em->getRepository("GincidentBundle:client")->find($id);

 
      
            
    
        return $this->render('@Gincident/admin/afficher_cl.html.twig',array('device'=>$device,'client'=>$client));

  } 
   public function ListeFactureAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         
          $facture = $em->getRepository("GincidentBundle:Facture")->findByCodeclient($id);
 
      
            
    
        return $this->render('@Gincident/admin/Liste_Facture_Client.html.twig',array('facture'=>$facture,'codeclient'=>$id));

  } 
  public function ListFamilleAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         
          $famillel = $em->getRepository("GincidentBundle:incident")->findAll();
 
      $famille  = $this->get('knp_paginator')->paginate(
        $famillel,
        $request->query->get('page', 1),6);
            
    
        return $this->render('@Gincident/admin/ListFamille.html.twig',array('idfacture'=>$id,'ListFamille'=>$famille));

  } 
  public function ListProductAction($id,$idfact,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         $famille = $em->getRepository("GincidentBundle:incident")->find($id);
          $productL = $em->getRepository("GincidentBundle:ticket")->findByIncidents($famille->getId());
 
      $product  = $this->get('knp_paginator')->paginate(
        $productL,
        $request->query->get('page', 1),6);
            
    
        return $this->render('@Gincident/admin/ListProduct.html.twig',array('idfacture'=>$idfact,'ListProduct'=>$product));

  }
  
  public function AjouterProductAction($id,$idfact,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         $produit = $em->getRepository("GincidentBundle:ticket")->find($id);
          $famille = $em->getRepository("GincidentBundle:incident")->findOneById($produit->getIncidents());
 $ListProduct=$em->getRepository("GincidentBundle:ticket")->findByIncidents($famille->getId());
 $facture = $em->getRepository("GincidentBundle:Facture")->find($idfact);
 $article=new Article();
 $article->setArtFrs($famille->getFrs());
$article->setFamille($famille->getName());
$article->setSousFamille($produit->getDescription());
$article->setCodeFacture($idfact);
$article->setNiveau('0');
$article->setPlaque('0');
$article->setDecor('0');
$article->setRef($produit->getReference());
$article->setIdclient($facture->getCodeClient());
$article->setQte(0);
$article->setPrxuni($produit->getPrixuni());
$article->setTotalprix(0);
$article->setDim(0);
$article->setBrochureFile($produit->getBrochureFilename());
$article->setFich_Tic($produit->getFiche_Tic());
    $em->persist($article);
     $em->flush();
          $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("produit ajouté a votre devise    ");
        $notif->setMessage('');
        $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }    
     $this->get('session')->getFlashBag()->add(
    'cl',
    array(
      
        'message' => 'produit ajouter aux devis avec succes.'
    )
);
 $product  = $this->get('knp_paginator')->paginate(
        $ListProduct,
        $request->query->get('page', 1),6);
            
    
        return $this->render('@Gincident/admin/ListProduct.html.twig',array('idfacture'=>$idfact,'ListProduct'=>$product));

  }
  
   public function  AjouterFactureAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
        $Facture = new Facture();
        $form = $this->createForm('GincidentBundle\Form\FactureType',$Facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
           
            $em = $this->getDoctrine()->getManager();
           $Facture->setCodeClient($id);
           
             $date = new \DateTime('now');
            $Facture->setDateCreation($date);
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("Facture ajouté par    ".$user->getUsername());
        $notif->setMessage('');
        $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }    
      
            $em->persist($Facture);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
    'fact',
    array(
       
        'message' => 'Facture ajouter avec sucess.'
    )
);
return $this->ListeFactureAction($id,$request);
           //return $this->render('@Gincident/admin/Liste_Facture_Client.html.twig',array('codeclient'=>$id));
        }

        return $this->render('GincidentBundle:admin:ajouter_facture.html.twig', array(
           
            'form' => $form->createView(),
        ));
        
    }
public function activeuserAction($id)
    {
         
    
    
     $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('GincidentBundle:User')->find($id);
 if($user->isEnabled()==TRUE){
     
     $user->setEnabled(false);
     $em->flush();
 }
 else {
     
     $user->setEnabled(TRUE);
     $em->flush();
 }
    
 
       
      
    
    
     
    return $this->UserlistAction();

  }
  public function supprimer_deviAction($id,$idc,$idfact)
  {
	  
	  $em = $this->getDoctrine()->getManager();
        $devi = $em->getRepository('GincidentBundle:Article')->find($id);
		 $produit = $em->getRepository('GincidentBundle:ticket')->findOneByDescription($devi->getSousFamille());
		
	  $em->remove($devi);
            $em->flush();
		$calcul = $em->getRepository('GincidentBundle:Article')->findByCodefacture($idfact);
		$client = $em->getRepository('GincidentBundle:client')->findOneById($idc);
		 $cal= $em->getRepository('GincidentBundle:calcul')->findOneById(1);
	$soustotal=0;

	 foreach($calcul as $value )
	 {
	 $soustotal=$soustotal+$value->getTotalprix();}
	 $total=$soustotal+$cal->getFraisport();
	 $tva=( $total*$cal->getTva())/100;
	 $ttc= $total+$tva;
  $device = $em->getRepository('GincidentBundle:Article')->findByCodefacture($idfact);
return $this->render('GincidentBundle:admin:afficher_cl.html.twig', array(
           
   'idc'=>$idc,'facture'=>$idfact,'device'=>$device,'client'=>$client,'soustotal'=>$soustotal,'tva'=>$tva,'ttc'=>$ttc,'total'=>$total,'fraisport'=>$cal->getFraisport()));        
	
      	
	//  return $this->redirectToRoute('gincident_admin__afficher',array('id'=>$idc,'soustotal'=>$soustotal,'tva'=>$tva,'ttc'=>$ttc,'total'=>$total,'fraisport'=>$cal->getFraisport()));
  
  }
    public function modifier_deviAction($id,$idfact)
  {
	  
	  $em = $this->getDoctrine()->getManager();
      $devi = $em->getRepository('GincidentBundle:Article')->find($id);
       
			
 return $this->render('@Gincident/admin/modifier_devi.html.twig',array('devi'=>$devi,'idfact'=>$idfact));
 
  }
  public function modifi_deviAction($id,$idc,$idfact)
  {
	  
	  $em = $this->getDoctrine()->getManager();
      $devi = $em->getRepository('GincidentBundle:Article')->find($id);
	 $produit = $em->getRepository('GincidentBundle:ticket')->findOneByDescription($_POST['a2']);



//$devi->setBrochureFilename($produit->getBrochureFilename());

       $devi->setArtFrs($devi->getArtFrs());
$devi->setFamille($_POST['a1']);
$devi->setCodeFacture($idfact);
$devi->setSousFamille($_POST['a2']);
$devi->setNiveau($_POST['a']);
$devi->setPlaque($_POST['c']);
$devi->setDecor($_POST['b']);
$devi->setRef($_POST['a3']);
$devi->setIdclient($idc);
$devi->setDim($_POST['a5']);
$devi->setQte($_POST['a4']);
$devi->setPrxuni($produit->getPrixuni());
$devi->setTotalprix($_POST['a4'] * $produit->getPrixuni());
$devi->setBrochureFile($produit->getBrochureFilename());
$devi->setFich_Tic($produit->getFiche_Tic());
	$em->flush();
	$calcul = $em->getRepository('GincidentBundle:Article')->findByCodefacture($idfact);
		 $cal= $em->getRepository('GincidentBundle:calcul')->findOneById(1);
	$soustotal=0;

	 foreach($calcul as $value )
	 {
	 $soustotal=$soustotal+$value->getTotalprix();}
	 $total=$soustotal+$cal->getFraisport();
	 $tva=( $total*$cal->getTva())/100;
	 $ttc= $total+$tva;

	      $client = $em->getRepository('GincidentBundle:client')->find($idc);
           $device = $em->getRepository('GincidentBundle:Article')->findByCodefacture($idfact);
 return $this->render('@Gincident/admin/afficher_cl.html.twig',array('facture'=>$idfact,'device'=>$device,'client'=>$client,'soustotal'=>$soustotal,'tva'=>$tva,'ttc'=>$ttc,'total'=>$total,'fraisport'=>$cal->getFraisport()));
 
  }




 public function  SupprimerFactureAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
   $user=$this->getUser() ;
           $em = $this->getDoctrine()->getEntityManager();
   
            $Facture = $em->getRepository('GincidentBundle:Facture')->find($id);
			$client=$em->getRepository('GincidentBundle:client')->findOneById($Facture->getCodeClient());
             $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("Facture supprimer par    ".$user->getUsername());
        $notif->setMessage('');
      $tt=$em->getRepository("GincidentBundle:user")->findAll();
        foreach ($tt as $value) {
            if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true); }  
        }   
		       $session = $request->getSession();
     $session->getFlashBag()->add('fact', 'Facture  bien supprimée.');
            $em->remove($Facture);
            $em->flush();
       
 
           return $this->ListeFactureAction($client->getId(),$request);
   
       
           
    }
	public function  ModifierFactureAction(\Symfony\Component\HttpFoundation\Request $request,$id)
    {
    $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $Facture = $em->getRepository('GincidentBundle:Facture')->find($id);
        $form = $this->createForm('GincidentBundle\Form\FactureType',$Facture);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
             $client = $em->getRepository('GincidentBundle:client')->findOneById($Facture->getCodeClient());
              $manager = $this->get('mgilet.notification');
       
       
        $notif = $manager->createNotification("facture modifier par    ".$user->getUsername());
        $notif->setMessage('');
    
  $tt=$em->getRepository("GincidentBundle:user")->findAll();
             foreach ($tt as $value) {
              if($value->getRole()=='ROLE_ADMIN')
            {
            $manager->addNotification(array($value), $notif, true);}
       }
        
            $em->flush();
                        $this->get('session')->getFlashBag()->add(
    'fact',
    array(
      
        'message' => 'Facture modifier avec sucess.'
    )
);
            return $this->ListeFactureAction($client->getId(),$request);
        }
        
       
        return $this->render('GincidentBundle:admin:modifier_facture.html.twig', array(
            'form' => $form->createView(),
          
        ));
            
            
           
    }
      public function AfficherFactureAction($id,\Symfony\Component\HttpFoundation\Request $request)
    {
         
         $em = $this->getDoctrine()->getEntityManager();
         $Facture = $em->getRepository("GincidentBundle:Facture")->find($id);
         
           $device = $em->getRepository("GincidentBundle:Article")->findByCodefacture($Facture->getId());
		  
//$calcul = $em->getRepository('GincidentBundle:Article')->findByIdclient();
 $calcul = $em->getRepository('GincidentBundle:Article')->findByCodefacture($id);
		 $cal= $em->getRepository('GincidentBundle:calcul')->findOneById(1);
	$soustotal=0;

	 foreach($calcul as $value )
	 {
	 $soustotal=$soustotal+$value->getTotalprix();}
	 $total=$soustotal+$cal->getFraisport();
	 $tva=( $total*$cal->getTva())/100;
	 $ttc= $total+$tva;
           //$device = $em->getRepository("GincidentBundle:Article")->findByIdclient($id);
          $client = $em->getRepository("GincidentBundle:client")->findOneById($Facture->getCodeClient()); 
	
      
            
    
        return $this->render('@Gincident/admin/afficher_cl.html.twig',array('client'=>$client,'facture'=>$id,'device'=>$device,'soustotal'=>$soustotal,'tva'=>$tva,'ttc'=>$ttc,'total'=>$total,'fraisport'=>$cal->getFraisport()));

  } 
  public function modifierprodAction($id,$idfact,\Symfony\Component\HttpFoundation\Request $request)
  {
	  $user=$this->getUser();
	 $em = $this->getDoctrine()->getEntityManager();
         $article = $em->getRepository("GincidentBundle:Article")->find($id);
		 $produit = $em->getRepository("GincidentBundle:ticket")->findOneByDescription($article->getSousFamille());
		  $form = $this->createForm('GincidentBundle\Form\ticketType',$produit);
        $form->handleRequest($request);
		  $Facture = $em->getRepository("GincidentBundle:Facture")->find($idfact);
        
           $device = $em->getRepository("GincidentBundle:Article")->findByCodefacture($Facture->getId());
//$calcul = $em->getRepository('GincidentBundle:Article')->findByIdclient();
 //$calcul = $em->getRepository('GincidentBundle:Article')->findByIdclient($Facture->getCodeClient());

		 if ($form->isSubmitted() && $form->isValid()) {
           
              $manager = $this->get('mgilet.notification');
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
                $produit->setBrochureFilename($newFilename);
				$article->setBrochureFile($newFilename);
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
               // $produit->setFicheTic($newFileename);
				$article->setFichTic($newFileename);
			}
        $notif = $manager->createNotification("produit modifier par    ".$user->getUsername());
        $notif->setMessage('');
   
   $tt=$em->getRepository("GincidentBundle:user")->findAll();
             foreach ($tt as $value) {
              if($value->getRole()=='ROLE_ADMIN')
            {
			 $manager->addNotification(array($value), $notif, true);}};
        
       
	 
		  foreach($device as $value )
	 {
		  $value->setPrxuni($produit->getPrixuni());
	 $value->setTotalprix($produit->getPrixuni()*$value->getQte()); }
		 
	  
            $em->flush();
			 $calcul = $em->getRepository('GincidentBundle:Article')->findByCodefacture($idfact);
		 $cal= $em->getRepository('GincidentBundle:calcul')->findOneById(1);
	$soustotal=0;

	 foreach($calcul as $value )
	 {
	 $soustotal=$soustotal+$value->getTotalprix();}
	 $total=$soustotal+$cal->getFraisport();
	 $tva=( $total*$cal->getTva())/100;
	 $ttc= $total+$tva;
           //$device = $em->getRepository("GincidentBundle:Article")->findByIdclient($id);
          $client = $em->getRepository("GincidentBundle:client")->findOneById($Facture->getCodeClient());
            $this->get('session')->getFlashBag()->add(
    'noti',
    array(
        'message' => 'produit modifier.'
    )
);  
            
            return $this->render('@Gincident/admin/afficher_cl.html.twig',array('client'=>$client,'idfact'=>$idfact,'facture'=>$idfact,'device'=>$device,'soustotal'=>$soustotal,'tva'=>$tva,'ttc'=>$ttc,'total'=>$total,'fraisport'=>$cal->getFraisport()));
        }
        
        $calcul = $em->getRepository('GincidentBundle:Article')->findByCodefacture($idfact);
		 $cal= $em->getRepository('GincidentBundle:calcul')->findOneById(1);
	$soustotal=0;

	 foreach($calcul as $value )
	 {
	 $soustotal=$soustotal+$value->getTotalprix();}
	 $total=$soustotal+$cal->getFraisport();
	 $tva=( $total*$cal->getTva())/100;
	 $ttc= $total+$tva;
           //$device = $em->getRepository("GincidentBundle:Article")->findByIdclient($id);
          $client = $em->getRepository("GincidentBundle:client")->findOneById($Facture->getCodeClient());
        return $this->render('GincidentBundle:admin:modifierprod.html.twig', array(
            'form' => $form->createView(),
			'client'=>$client,
			'facture'=>$idfact,
			'device'=>$device,
			'soustotal'=>$soustotal,
			'tva'=>$tva,
			'ttc'=>$ttc,
			'total'=>$total,
			'fraisport'=>$cal->getFraisport(),
			'idfact'=>$idfact,
			
          
        ));
            
            
		 
	  
	  
	  
	  
	  
  }
  public function DetailsProductAction($id)
  {
	  
	 $em = $this->getDoctrine()->getEntityManager();
     $produit = $em->getRepository("GincidentBundle:ticket")->find($id);
	 
	  
	  
  }
         
    }














        
