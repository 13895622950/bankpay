<?php
namespace Majiru\Bankpay;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Bankpay
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Bankpay constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

}
