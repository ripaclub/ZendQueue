<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Queue
 */

namespace ZendQueue;

use Zend\EventManager\Event;
use Zend\Stdlib\Message;
use ZendQueue\Message\MessageIterator;

class QueueEvent extends Event
{

    /**#@+
     * Queue events triggered by eventmanager
     */
    const EVENT_RECEIVE     = 'receive';
    const EVENT_IDLE        = 'idle';
    /**#@-*/

    /**
     * @var MessageIterator
     */
    protected $messages;

    /**
     * @param MessageIterator $message
     * @return QueueEvent
     */
    public function setMessages(MessageIterator $messages)
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * @return MessageIterator|null
     */
    public function getMessages()
    {
        return $this->messages;
    }







}