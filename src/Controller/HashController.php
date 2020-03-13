<?php


namespace App\Controller;


use App\Entity\Hash;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
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

    public function HashAction(Request $request)
    {
        $hash = new Hash();

        $form = $this->createFormBuilder($hash)
            ->add('value', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create user'])
            ->getForm();

        return $this->render('/hash-form.html.twig', [
            'hash_form' => $form->createView(),
        ]);

       echo "dupa";

    }
}