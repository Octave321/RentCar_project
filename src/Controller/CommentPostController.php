<?php

namespace App\Controller;

use App\Entity\CommentPost;
use App\Form\CommentPostType;
use App\Repository\CommentPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comment/post")
 */
class CommentPostController extends AbstractController
{
    /**
     * @Route("/", name="comment_post_index", methods={"GET"})
     */
    public function index(CommentPostRepository $commentPostRepository): Response
    {
        return $this->render('comment_post/index.html.twig', [
            'comment_posts' => $commentPostRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="comment_post_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $commentPost = new CommentPost();
        $form = $this->createForm(CommentPostType::class, $commentPost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $commentPost->setAuthor($this->getUser()->getName());
            $entityManager->persist($commentPost);
            $entityManager->flush();

            return $this->redirectToRoute('comment_post_index');
        }

        return $this->render('comment_post/new.html.twig', [
            'comment_post' => $commentPost,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="comment_post_show", methods={"GET"})
     */
    public function show(CommentPost $commentPost): Response
    {
        return $this->render('comment_post/show.html.twig', [
            'comment_post' => $commentPost,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="comment_post_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CommentPost $commentPost): Response
    {
        $form = $this->createForm(CommentPostType::class, $commentPost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comment_post_index');
        }

        return $this->render('comment_post/edit.html.twig', [
            'comment_post' => $commentPost,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="comment_post_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CommentPost $commentPost): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentPost->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commentPost);
            $entityManager->flush();
        }

        return $this->redirectToRoute('comment_post_index');
    }
}
