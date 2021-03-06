<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Address;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;

class ApiUserController extends AbstractController
{
    public function index()
    {
        return new JsonResponse(['status' => 'ok']);
    }

    public function list()
    {
        $users = $this->getDoctrine()->getRepository('App\Entity\User')
            ->findAll();
        
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($users, 'json');

        return new Response($jsonContent);
    }

    public function show(User $user)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
       
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($user, 'json');

        return new Response($jsonContent);
    }

    public function new(Request $request)
    {
        $address = new Address();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $user = new User();
        $user->setUserName($request->get('userName'));
        $user->setEmail($request->get('email'));
        $user->setAddress($address);
        
        $form = $this->createForm(UserType::class, $user);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        
        return new JsonResponse(['msg' => 'User created whit success!'], Response::HTTP_OK);
    }
    
    public function edit(Request $request, $user)
    {
        if (empty($user)) {
            return new JsonResponse(['msg' => 'User not found!'], Response::HTTP_NOT_FOUND);
        }
        
        $address = $user->getAddress();
        $address->setStreet($request->get('street'));
        $address->setNumber($request->get('number'));
        $address->setCity($request->get('city'));
        
        $user->setUserName($request->get('userName'));
        $user->setEmail($request->get('email'));
        $user->setAddress($address);

        if (!empty($user->getUserName())) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return new JsonResponse(['msg' => 'User edited whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'Check the empty fields'], Response::HTTP_NOT_ACCEPTABLE);
    }

    public function delete($user)
    {
        if (empty($user)) {
            return new JsonResponse(['msg' => 'User not found!'], Response::HTTP_NOT_FOUND);
        }
        
        if (!empty($user)) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();

            return new JsonResponse(['msg' => 'User deleted whit success!'], Response::HTTP_OK);
        }

        return new JsonResponse(['msg' => 'We could not find'], Response::HTTP_NOT_ACCEPTABLE);
    }
}
