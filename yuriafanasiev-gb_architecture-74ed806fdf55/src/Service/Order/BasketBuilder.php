<?php

namespace Service\Order;

use Model;
use Service\Billing\Card;
use Service\Billing\IBilling;
use Service\Communication\Email;
use Service\Communication\ICommunication;
use Service\Discount\IDiscount;
use Service\Discount\NullObject;
use Service\User\ISecurity;
use Service\User\Security;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BasketBuilder
{
    private $billing;
    private $discount;
    private $communication;
    private $security;



    public function setBilling (): void
    {
        $this->billing = new Card();
    }

    public function setDiscount (): void
    {
        $this->discount = new NullObject();
    }
    public function setCommunication (): void
    {
        $this->communication = new Email();
    }
    public function setSecurity (): void
    {
        $this->security = new Security($this->session);
    }
  
}