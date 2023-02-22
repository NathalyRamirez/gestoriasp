<?php
namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SecurityBundle\Security;

use App\Entity\User;
use Symfony\Component\Security\Http\Attribute\CurrentUser;


class LoginController extends AbstractController
{
    #[Route('/api/login', name: 'app_login')]     
    public function index(Request $request, UserRepository $userRepository,LoggerInterface $logger ): Response {

        $data = json_decode($request->getContent(), true);

        $result = $userRepository->login($data);

        // $logger->info($result);


        if($result){
            return $this->json([
                'token'=>"cosasghmbbhj28"
            ]);

        }
        return $this->json([
            'result'=>"Usuario o contraseña incorrectos"
        ]);



    //     $user->setUsername($request->get($data["username"])) ;
    //     $user->setPassword($request->get($data['password'])) ;

    //     // print_r($user);

    //     // // $security->login($user);
    //     // if (null === $user) {
    //     //     return $this->json([
    //     //         'message' => 'missing credentials',
    //     //     ], Response::HTTP_UNAUTHORIZED);
    //     // }

    //     $token = "AACSIDWAND"; // somehow create an API token for $user
    
    //     return $this->json([
    //         'user'  => $user->getUserIdentifier(),
    //         'token' => $token,
    //     ]);
    }
}