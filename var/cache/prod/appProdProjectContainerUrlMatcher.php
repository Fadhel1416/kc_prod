<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // gincident_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GincidentBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gincident_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gincident_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gincident_homepage'));
            }

            return $ret;
        }
        not_gincident_homepage:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // gincident_admin_deluser
                if (0 === strpos($pathinfo, '/admin/supprimer') && preg_match('#^/admin/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_deluser']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::deleteuserAction',));
                }

                // gincident_admin_statistique
                if ('/admin/statistique' === $pathinfo) {
                    return array (  '_controller' => 'GincidentBundle\\Controller\\adminController::StatAction',  '_route' => 'gincident_admin_statistique',);
                }

                // gincident_admin_userliste
                if ('/admin/users' === $pathinfo) {
                    return array (  '_controller' => 'GincidentBundle\\Controller\\adminController::UserlistAction',  '_route' => 'gincident_admin_userliste',);
                }

                // gincident_admin_daschboard
                if ('/admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'GincidentBundle\\Controller\\adminController::daschboardAction',  '_route' => 'gincident_admin_daschboard',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_gincident_admin_daschboard;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gincident_admin_daschboard'));
                    }

                    return $ret;
                }
                not_gincident_admin_daschboard:

            }

            // gincident_admin_ticket_ajouter
            if ('/ajouter' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\ticketController::ajouterAction',  '_route' => 'gincident_admin_ticket_ajouter',);
            }

            // gincident_admin_listart_ajouter
            if ('/article/aff/info' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\adminController::ajouter_listartAction',  '_route' => 'gincident_admin_listart_ajouter',);
            }

            // gincident_active
            if (0 === strpos($pathinfo, '/activeruser') && preg_match('#^/activeruser/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_active']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::activeuserAction',));
            }

        }

        // gincident_admin_ticket
        if ('/produits' === $pathinfo) {
            return array (  '_controller' => 'GincidentBundle\\Controller\\ticketController::ListAction',  '_route' => 'gincident_admin_ticket',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/device')) {
            // gincident_admin_article_ajouter
            if (0 === strpos($pathinfo, '/device/ajouter') && preg_match('#^/device/ajouter/(?P<id>[^/]++)/(?P<idfact>[^/]++)/\\#\\#/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_article_ajouter']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::ajouter_artAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_gincident_admin_article_ajouter;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gincident_admin_article_ajouter'));
                }

                return $ret;
            }
            not_gincident_admin_article_ajouter:

            // gincident_admin_article_insert
            if (0 === strpos($pathinfo, '/device/search') && preg_match('#^/device/search/(?P<id>[^/]++)/(?P<idfact>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_article_insert']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::search_deviceAction',));
            }

            // gincident_admin_article_inseration
            if (0 === strpos($pathinfo, '/device/insert') && preg_match('#^/device/insert/(?P<id>[^/]++)/\\#\\#\\*/(?P<idfact>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_article_inseration']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::insert_deviceAction',));
            }

            // gincident_admin_list_device
            if (0 === strpos($pathinfo, '/device/list') && preg_match('#^/device/list/(?P<id>[^/]++)/\\#\\#\\*$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_list_device']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::list_deviceAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            // gincident_admin_device_supprimer
            if (0 === strpos($pathinfo, '/supp#device') && preg_match('#^/supp\\#device/(?P<id>[^/]++)/(?P<idc>[^/]++)/\\#\\#/(?P<idfact>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_device_supprimer']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::supprimer_deviAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_gincident_admin_device_supprimer;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gincident_admin_device_supprimer'));
                }

                return $ret;
            }
            not_gincident_admin_device_supprimer:

            // gincident_admin_ticket_supprimer
            if (0 === strpos($pathinfo, '/supp#produit') && preg_match('#^/supp\\#produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_ticket_supprimer']), array (  '_controller' => 'GincidentBundle\\Controller\\ticketController::supprimerAction',));
            }

            // gincident_admin_show_ticket
            if (0 === strpos($pathinfo, '/show_produit') && preg_match('#^/show_produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_show_ticket']), array (  '_controller' => 'GincidentBundle\\Controller\\ticketController::showticketAction',));
            }

            // gincident_notification
            if ('/sendnotification' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\DefaultController::sendNotificationAction',  '_route' => 'gincident_notification',);
            }

            if (0 === strpos($pathinfo, '/solutions')) {
                // gincident_admin_solutions
                if ('/solutions' === $pathinfo) {
                    return array (  '_controller' => 'GincidentBundle\\Controller\\solutionsController::sollisteAction',  '_route' => 'gincident_admin_solutions',);
                }

                // gincident_admin_solutions_ajouter
                if ('/solutions/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'GincidentBundle\\Controller\\solutionsController::ajouter_solAction',  '_route' => 'gincident_admin_solutions_ajouter',);
                }

                // gincident_admin_solutions_affiche
                if ('/solutions/affiche' === $pathinfo) {
                    return array (  '_controller' => 'GincidentBundle\\Controller\\solutionsController::affiche_solAction',  '_route' => 'gincident_admin_solutions_affiche',);
                }

                // gincident_admin_solutions_modifier
                if (0 === strpos($pathinfo, '/solutions/modifier') && preg_match('#^/solutions/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_solutions_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\solutionsController::modifier_solAction',));
                }

                // gincident_admin_solutions_supprimer
                if (0 === strpos($pathinfo, '/solutions/supprimer') && preg_match('#^/solutions/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_solutions_supprimer']), array (  '_controller' => 'GincidentBundle\\Controller\\solutionsController::supprimer_solAction',));
                }

                // gincident_admin_solutions_show
                if (0 === strpos($pathinfo, '/solutions/show') && preg_match('#^/solutions/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_solutions_show']), array (  '_controller' => 'GincidentBundle\\Controller\\solutionsController::show_solAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/modifi')) {
                // gincident_admin_device_modifier
                if (0 === strpos($pathinfo, '/modification#device') && preg_match('#^/modification\\#device/(?P<id>[^/]++)/(?P<idfact>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_device_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::modifier_deviAction',));
                }

                // gincident_admin_device_modification
                if (0 === strpos($pathinfo, '/modifi#device') && preg_match('#^/modifi\\#device/(?P<id>[^/]++)/(?P<idc>[^/]++)/(?P<idfact>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_device_modification']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::modifi_deviAction',));
                }

                // gincident_admin_ticket_modifier
                if (0 === strpos($pathinfo, '/modifier#produit') && preg_match('#^/modifier\\#produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_ticket_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\ticketController::modifierAction',));
                }

                // gincident_admin_user_modifier
                if (0 === strpos($pathinfo, '/modifierUser') && preg_match('#^/modifierUser/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_user_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::modifier_userAction',));
                }

            }

            // gincident_admin_profil
            if ('/mon_profil' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\DefaultController::profilAction',  '_route' => 'gincident_admin_profil',);
            }

            if (0 === strpos($pathinfo, '/message')) {
                // fos_message_inbox
                if ('/message' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_message_inbox;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_message_inbox'));
                    }

                    return $ret;
                }
                not_fos_message_inbox:

                // fos_message_binbox
                if ('/message/binbox' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::binboxAction',  '_route' => 'fos_message_binbox',);
                }

                // fos_message_sent
                if ('/message/sent' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
                }

                // fos_message_search
                if ('/message/search' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
                }

                // fos_message_deleted
                if ('/message/deleted' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
                }

                // fos_message_thread_new
                if ('/message/new' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
                }

                // fos_message_thread_delete
                if (preg_match('#^/message/(?P<threadId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_delete']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
                    if (!in_array($requestMethod, ['POST', 'DELETE'])) {
                        $allow = array_merge($allow, ['POST', 'DELETE']);
                        goto not_fos_message_thread_delete;
                    }

                    return $ret;
                }
                not_fos_message_thread_delete:

                // fos_message_thread_undelete
                if (preg_match('#^/message/(?P<threadId>[^/]++)/undelete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_undelete']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_message_thread_undelete;
                    }

                    return $ret;
                }
                not_fos_message_thread_undelete:

                // fos_message_thread_view
                if (preg_match('#^/message/(?P<threadId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_view']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/client')) {
            if (0 === strpos($pathinfo, '/client/affiche')) {
                // gincident_admin_client
                if ('/client/afficher' === $pathinfo) {
                    return array (  '_controller' => 'GincidentBundle\\Controller\\adminController::afficher_clAction',  '_route' => 'gincident_admin_client',);
                }

                // gincident_admin_client_afficher
                if (preg_match('#^/client/affiche/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_client_afficher']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::aff_clAction',));
                }

                // gincident_admin_client_facture
                if (0 === strpos($pathinfo, '/client/afficher') && preg_match('#^/client/afficher/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_client_facture']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::ListeFactureAction',));
                }

            }

            // gincident_admin_client_ajouter
            if ('/client/ajouter' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\adminController::ajouter_clAction',  '_route' => 'gincident_admin_client_ajouter',);
            }

            // gincident_admin_client_modifier
            if (0 === strpos($pathinfo, '/client/modifier') && preg_match('#^/client/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_client_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::modifier_clAction',));
            }

            // gincident_admin_client_supprimer
            if (0 === strpos($pathinfo, '/client/supprimer') && preg_match('#^/client/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_client_supprimer']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::supprimer_clAction',));
            }

            if (0 === strpos($pathinfo, '/client/facture')) {
                // gincident_admin_facture_ajouter
                if (0 === strpos($pathinfo, '/client/facture/ajouter') && preg_match('#^/client/facture/ajouter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_facture_ajouter']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::AjouterFactureAction',));
                }

                // gincident_admin_facture_afficher
                if (0 === strpos($pathinfo, '/client/facture/afficher') && preg_match('#^/client/facture/afficher/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_facture_afficher']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::AfficherFactureAction',));
                }

                // gincident_admin_facture_modifier
                if (0 === strpos($pathinfo, '/client/facture/modifier') && preg_match('#^/client/facture/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_facture_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::ModifierFactureAction',));
                }

                // gincident_admin_facture_supprimer
                if (0 === strpos($pathinfo, '/client/facture/supprimer') && preg_match('#^/client/facture/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_facture_supprimer']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::SupprimerFactureAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/fournisseur')) {
            // gincident_admin_fournisseur_affiche
            if ('/fournisseur/list' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\adminController::list_frAction',  '_route' => 'gincident_admin_fournisseur_affiche',);
            }

            // gincident_admin_fournisseur_ajouter
            if ('/fournisseur/ajouter' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\adminController::ajouter_frAction',  '_route' => 'gincident_admin_fournisseur_ajouter',);
            }

            // gincident_admin_fournisseur_show
            if (0 === strpos($pathinfo, '/fournisseur/affiche') && preg_match('#^/fournisseur/affiche/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_fournisseur_show']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::aff_frAction',));
            }

            // gincident_admin_fournisseur_modifier
            if (0 === strpos($pathinfo, '/fournisseur/modifier') && preg_match('#^/fournisseur/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_fournisseur_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::modifier_frAction',));
            }

            // gincident_admin_fournisseur_supprimer
            if (0 === strpos($pathinfo, '/fournisseur/supprimer') && preg_match('#^/fournisseur/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_fournisseur_supprimer']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::supprimer_frAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/famille')) {
            // gincident_admin_incident
            if ('/familles' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\incidentController::incident_listAction',  '_route' => 'gincident_admin_incident',);
            }

            // gincident_admin_incident_ajouter
            if ('/famille/ajouter_categorie' === $pathinfo) {
                return array (  '_controller' => 'GincidentBundle\\Controller\\incidentController::ajouter_incAction',  '_route' => 'gincident_admin_incident_ajouter',);
            }

            // gincident_admin_incident_supprimer
            if (0 === strpos($pathinfo, '/famille/supprimer_categorie') && preg_match('#^/famille/supprimer_categorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_incident_supprimer']), array (  '_controller' => 'GincidentBundle\\Controller\\incidentController::supprimer_incAction',));
            }

            // gincident_admin_incident_modifier
            if (0 === strpos($pathinfo, '/famille/modifier_categorie') && preg_match('#^/famille/modifier_categorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_incident_modifier']), array (  '_controller' => 'GincidentBundle\\Controller\\incidentController::modifier_incAction',));
            }

        }

        // gincident_admin_ListIntervenant
        if (0 === strpos($pathinfo, '/ticket/Listintervenant') && preg_match('#^/ticket/Listintervenant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_ListIntervenant']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::list_intervenantAction',));
        }

        // gincident_admin_user_associer
        if (0 === strpos($pathinfo, '/ticket/associer') && preg_match('#^/ticket/associer/(?P<id>[^/]++)/(?P<idt>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_user_associer']), array (  '_controller' => 'GincidentBundle\\Controller\\adminController::associerAction',));
        }

        // gincident_admin_incident_afficher
        if (0 === strpos($pathinfo, '/incident/afficher_inc') && preg_match('#^/incident/afficher_inc/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'gincident_admin_incident_afficher']), array (  '_controller' => 'GincidentBundle\\Controller\\incidentController::afficher_incAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_list']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_notification_list;
                }

                return $ret;
            }
            not_notification_list:

            // notificationbyuser
            if (0 === strpos($pathinfo, '/notifications/polo') && preg_match('#^/notifications/polo/(?P<identifier>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'notificationbyuser']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listbyuserAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_notificationbyuser;
                }

                return $ret;
            }
            not_notificationbyuser:

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_notification_mark_as_seen;
                }

                return $ret;
            }
            not_notification_mark_as_seen:

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_unseen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_notification_mark_as_unseen;
                }

                return $ret;
            }
            not_notification_mark_as_unseen:

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_all_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_notification_mark_all_as_seen;
                }

                return $ret;
            }
            not_notification_mark_all_as_seen:

            if (0 === strpos($pathinfo, '/notifications/ab')) {
                // seen_list
                if (0 === strpos($pathinfo, '/notifications/abs') && preg_match('#^/notifications/abs/(?P<lu>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'seen_list']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::luAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_seen_list;
                    }

                    return $ret;
                }
                not_seen_list:

                // seen_listNot
                if (preg_match('#^/notifications/ab/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'seen_listNot']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::seenAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_seen_listNot;
                    }

                    return $ret;
                }
                not_seen_listNot:

            }

            // seen_Not
            if ('/notifications/noti' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::notiAction',  '_route' => 'seen_Not',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_seen_Not;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'seen_Not'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_seen_Not;
                }

                return $ret;
            }
            not_seen_Not:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
