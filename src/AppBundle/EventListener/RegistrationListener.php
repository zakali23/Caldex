<?php
/**
 * Created by PhpStorm.
 * User: coralie
 * Date: 09/06/18
 * Time: 08:40
 */

namespace AppBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class RegistrationListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        // TODO: Implement getSubscribedEvents() method.

        return array(
          FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'

        );
    }


    public function onRegistrationSuccess(FormEvent $event){
        $roles = array('ROLE_LOCATAIRE');

        $user = $event->getForm()->getData();
        $user->setRoles($roles);

    }
}