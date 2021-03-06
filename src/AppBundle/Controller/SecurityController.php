<?php
/**
 * Created by PhpStorm.
 * User: 302567762
 * Date: 28-11-2018
 * Time: 10:01
 */

namespace AppBundle\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils, LoggerInterface $logger) {
        $logger = $this->get('monolog.logger.inloggen');
        $logger->info('dit is info!');
        $logger->error('rip');
        $logger->critical('oooooh noooooo');
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('page/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
}