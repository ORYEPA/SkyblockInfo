<?php


namespace App\Controller;

use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class PageController extends AbstractController
{
    #[Route('/')]
    public function index(Request $request)
    {
        return $this->render('index.html.twig',[

        ]);
    }

    #[Route('/login', name:"login")]
    public function login(Request $request): Response
    {
        return $this->render('user/login.html.twig',[

        ]);
    }
    #[Route('/register', name: "register")]
    public function register(Request $request): Response
    {






        return $this->render('user/register.html.twig',[
            "error" => false
        ]);
    }


    #[Route('/homepage', name: "homepage")]
    public function home(Request $request): Response
    {


        return $this->render('user/homepage.html.twig',[

        ]);
    }
    #[Route('/userSettings')]
    public function userinfo(Request $request): Response
    {

        return $this->render('user/userinfo.html.twig',[

        ]);
    }
    #[Route('/favorites/{movieId}')]
    public function userbookmark(Request $request, $movieId): Response
    {

        return $this->render('user/favorites.html.twig',[
            "movieId" => $movieId

        ]);
    }


    #[Route('/movie/{movieId}')]
    public function movieInfo(Request $request, $movieId): Response
    {

        return $this->render('user/movieinfo.html.twig',[
            "movieId" => $movieId
        ]);
    }


    

    

}
