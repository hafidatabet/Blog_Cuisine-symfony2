<?php
/**
 * Created by PhpStorm.
 * User: mimi
 * Date: 17/11/2015
 * Time: 11:23
 */
// src/Esiea/BlogBundle/Controller/AdvertController.php

namespace Esiea\BlogBundle\Controller;

use Esiea\BlogBundle\Entity\Advert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


class AdvertController extends Controller
{
    public function indexAction($page)
    {

        if ($page < 1) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        // Pour récupérer la liste de toutes les annonces : on utilise findAll()
        $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('EsieaBlogBundle:Advert')
            ->findAll()
        ;

        // L'appel de la vue ne change pas
        return $this->render('EsieaBlogBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts
        ));


    }


    public function viewAction($id)
    {



        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Pour récupérer une annonce unique : on utilise find()
        $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);

        // On vérifie que l'annonce avec cet id existe bien
        if ($advert === null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
        return $this->render('EsieaBlogBundle:Advert:view.html.twig', array(
            'advert'           => $advert,
        ));


    }

    public function addAction(Request $request)
    {

        
     

        // On crée un objet Advert
    $advert= new Advert;
    /**$advert ->setTitre("Couscous");
    $advert ->setAuteur("Myriam");
    $advert->setPreparation("Préparation qui dure 2h30 environ");
    $advert ->setIngredients("des légumes");
    $advert ->setImage("http://jonoandjules.files.wordpress.com/2012/01/the-ultimate-winter-couscous-1.jpg");

 // On récupère l'EntityManager
   $em = $this->getDoctrine()->getEntityManager();
   $advertRepository = $em->getRepository('EsieaBlogBundle:Advert');
// Étape 1 : On « persiste » l'entité
    $em->persist($advert);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();**/

// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        /**if ($request->isMethod('POST')) {
            // Ici, on s'occupera de la création et de la gestion du formulaire

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // Puis on redirige vers la page de visualisation de cettte annonce
            return $this->redirect($this->generateUrl('esiea_blog_view', array('id' => $advert->getId())));
        }**/

    $advert->setDate(new \Datetime());
    // Et on construit le formBuilder avec cette instance d'annonce
$formBuilder = $this->get('form.factory')->createBuilder('form', $advert);

    $form = $this->get('form.factory')->createBuilder('form', $advert)
        ->add('date',      'datetime')
        ->add('titre',     'text')
        ->add('auteur',    'text')
        ->add('ingredients', 'textarea')
        ->add('preparation',   'textarea')
        ->add('save', 'submit')
        ->getForm()
        
    ;

  // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->isValid()) {
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();
  

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');


      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('esiea_blog_view', array('id' => $advert->getId())));
    }

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('EsieaBlogBundle:Advert:add.html.twig', array(
        'form' => $form->createView(),
      
    ));


    }

    public function editAction($id, Request $request)
    {

   $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);


        // Si l'annonce n'existe pas, on affiche une erreur 404
        if ($advert == null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

    $advert->setDate(new \Datetime());
    // Et on construit le formBuilder avec cette instance d'annonce
    $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);

    $form = $this->get('form.factory')->createBuilder('form', $advert)
        ->add('date',      'datetime')
        ->add('titre',     'text')
        ->add('auteur',    'text')
        ->add('ingredients', 'textarea')
        ->add('preparation',   'textarea')
        ->add('save', 'submit')
        ->getForm()
        
    ;


    if ($form->handleRequest($request)->isValid()) {
      // Inutile de persister ici, Doctrine connait déjà notre annonce
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      return $this->redirect($this->generateUrl('esiea_blog_view', array('id' => $advert->getId())));

    }

        // Ici, on s'occupera de la création et de la gestion du formulaire

        return $this->render('EsieaBlogBundle:Advert:edit.html.twig', array(
            'form'   => $form->createView(),
            'advert' => $advert // Je passe également l'annonce à la vue si jamais elle veut l'afficher
        ));


    }

    public function deleteAction($id, Request $request)
    {

        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // On récupère l'entité correspondant à l'id $id
        $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);

        // Si l'annonce n'existe pas, on affiche une erreur 404
        if ($advert == null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

         // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->createFormBuilder()->getForm();

    if ($form->handleRequest($request)->isValid()) {
      $em->remove($advert);
      $em->flush();

       $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirect($this->generateUrl('esiea_blog_home'));
    }


        // Si la requête est en GET, on affiche une page de confirmation avant de delete
        return $this->render('EsieaBlogBundle:Advert:delete.html.twig', array(
            'advert' => $advert,
            'form'   => $form->createView()
        ));


    }

    public function menuAction($limit = 4)
    {

        $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('EsieaBlogBundle:Advert')
            ->findBy(
                array(),                 // Pas de critère
                array('date' => 'desc'), // On trie par date décroissante
                $limit,                  // On sélectionne $limit annonces
                0                        // À partir du premier
            );

        return $this->render('EsieaBlogBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));

    }

}

