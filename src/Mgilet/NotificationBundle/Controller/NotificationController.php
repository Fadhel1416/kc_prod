<?php

namespace Mgilet\NotificationBundle\Controller;

use Mgilet\NotificationBundle\Entity\Notification;
use Mgilet\NotificationBundle\NotifiableInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class NotificationController
 * the base controller for notifications
 */
class NotificationController extends Controller
{

    /**
     * List of all notifications
     *
     * @Route("/{notifiable}", name="notification_list")
     * @Method("GET")
     * @param NotifiableInterface $notifiable
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction($notifiable)
    {
        $notifiableRepo = $this->get('doctrine.orm.entity_manager')->getRepository('MgiletNotificationBundle:NotifiableNotification');
        return $this->render('MgiletNotificationBundle::notifications.html.twig', array(
            'notifiableNotifications' => $notifiableRepo->findAllForNotifiableId($notifiable)
        ));
    }
    
     /**
     * List of all notifications
     *
     * @Route("/polo/{identifier}", name="notificationbyuser")
     * @Method("GET")
     * @param NotifiableInterface $identifier
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listbyuserAction($identifier)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository("MgiletNotificationBundle:NotifiableEntity")->findOneByIdentifier($identifier);
                 if($entity==null)
        {
           $this->get('session')->getFlashBag()->add(
    'not',
    array(
        'message' => 'User ne possed pas des notifications.'
    )
); 
           return $this->render('GincidentBundle:Default:index.html.twig');
           
        }
        else{
        
        
        
        
        $notifiable = $entity->getId();
   
        $notifiableRepo = $this->get('doctrine.orm.entity_manager')->getRepository('MgiletNotificationBundle:NotifiableNotification');
        $notif=$notifiableRepo->findAllForNotifiableId($notifiable);
    
        return $this->render('MgiletNotificationBundle::notificationsbyuser.html.twig', array(
            'notifiableNotifications' =>$notif     ));
    }
    }
    
    

    /**
     * Set a Notification as seen
     *
     * @Route("/{notifiable}/mark_as_seen/{notification}", name="notification_mark_as_seen")
     * @Method("POST")
     * @param int           $notifiable
     * @param Notification  $notification
     *
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Doctrine\ORM\EntityNotFoundException
     * @throws \LogicException
     */
    public function markAsSeenAction($notifiable, $notification)
    {
        $manager = $this->get('mgilet.notification');
        $manager->markAsSeen(
            $manager->getNotifiableInterface($manager->getNotifiableEntityById($notifiable)),
            $manager->getNotification($notification),
            true
        );

        return new JsonResponse(true);
    }

    /**
     * Set a Notification as unseen
     *
     * @Route("/{notifiable}/mark_as_unseen/{notification}", name="notification_mark_as_unseen")
     * @Method("POST")
     * @param $notifiable
     * @param $notification
     */
    public function markAsUnSeenAction($notifiable, $notification)
    {
        $manager = $this->get('mgilet.notification');
        $manager->markAsUnseen(
            $manager->getNotifiableInterface($manager->getNotifiableEntityById($notifiable)),
            $manager->getNotification($notification),
            true
        );

        return new JsonResponse(true);
    }

    /**
     * Set all Notifications for a User as seen
     *
     * @Route("/{notifiable}/markAllAsSeen", name="notification_mark_all_as_seen")
     * @Method("POST")
     * @param $notifiable
     *
     * @return \Symfony\Component\HttpFoundation\Response

     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function markAllAsSeenAction($notifiable)
    {
        $manager = $this->get('mgilet.notification');
        $manager->markAllAsSeen(
            $manager->getNotifiableInterface($manager->getNotifiableEntityById($notifiable)),
            true
        );

        return new JsonResponse(true);
    }
    
     /**
     * List of all notifications
     *
     * @Route("/abs/{lu}", name="seen_list")
     * @Method("GET")
     * @param int   $lu
     * @param Notification $tt
     * @return \Symfony\Component\HttpFoundation\Response
     */
   public function luAction($lu)
           
           {
    
    
    $em = $this->getDoctrine()->getManager();
    $tt=$em->getRepository("MgiletNotificationBundle:Notification")->findById($lu);
    $en = $em->getRepository("MgiletNotificationBundle:NotifiableNotification")->findOneByNotification($tt);
    if($en->isSeen()==TRUE){
     $en->setSeen(TRUE);
     $em->flush();
    }
    else {
     
     $en->setSeen(TRUE);
     $em->flush();
    }
    return new JsonResponse(true);
   }
     /**
     * List of all notifications
     * 
     * @Route("/ab/{notification}", name="seen_listNot")
     * @Method("GET")
     * @param int $notification
     * @return \Symfony\Component\HttpFoundation\Response
     */
   public function seenAction($notification)
           
     {
    
    
        $em = $this->getDoctrine()->getManager();
    
    $entity = $em->getRepository("MgiletNotificationBundle:NotifiableNotification")->findOneByNotification($notification);
    if($entity->isSeen()==TRUE){
     $entity->setSeen(TRUE);
     $em->flush();
    }
    else{
     $entity->setSeen(TRUE);
     $em->flush();}
 return new JsonResponse(true);
   }
    
    
    
   /**
     * List of notifications
     * 
     * @Route("/noti/", name="seen_Not")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
   public function notiAction()
           
     {
    
    
        $em = $this->getDoctrine()->getManager();
    
    $entity = $em->getRepository("MgiletNotificationBundle:NotifiableNotification")->findAll();
    
    foreach ($entity as $value) {
          if($value->isSeen()==TRUE){
     $value->setSeen(TRUE);
     $em->flush();
 }
 else {
     
     $value->setSeen(TRUE);
     $em->flush();
 }
    
        
    }


    
    
        return new JsonResponse(true);
   }   
}

