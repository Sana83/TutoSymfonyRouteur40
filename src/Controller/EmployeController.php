<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/employe/", name="employe_")
 */
class EmployeController extends AbstractController
{
    /**
     * @Route(
     *      path= "employe/{id}",
     *      name="employe_voir",
     *      defaults={"id":99},
     *      requirements = {"id":"\d+"}     *
     *          )       *
     * 
     */
    public function voir(int $id){
        return $this->render('employe/voir.html.twig', [
                    'id'=> $id,
        ]);
    }
    
    /**
     * @Route(
     * "employeV2/{id}",
     * name="voirV2"    *
     *      )
     * @Template("employe/voirEmploye.html.twig")
     */
    public function voirEmployeV2($id){
        return array(
            'id'=>$id
        );
    }
    
    /**
     * @Route("employe/{nom}", requirements={"nom":"[B][a-zA-ZÀ-ŠÞ-í]+"}, options={"utf8": true})
     */
    public function voirNom(string $nom){
        return $this->render('employe/voirNom.html.twig', [
                    'nom'=> $nom,
        ]);
    }
}
