<?php


namespace App\Controller;


use App\Entity\Hash;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HashController extends AbstractController
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/hash", name="hash")
     */
    public function hashAction(Request $request)
    {
        $hash = new Hash();

        $form = $this->createFormBuilder($hash)
            ->add('value', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Przelicz'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Hash $hash */
            $hash = $form->getData();
            $this->entityManager->persist($hash);
            $this->entityManager->flush();
        }

        return $this->render('form/hash-form.html.twig', [
            'hash_form' => $form->createView(),
        ]);


    }
}