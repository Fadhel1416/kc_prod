<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_message.message_reader' shared service.

return $this->services['fos_message.message_reader'] = new \FOS\MessageBundle\Reader\Reader(${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.message_manager']) ? $this->services['fos_message.message_manager'] : $this->getFosMessage_MessageManagerService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});