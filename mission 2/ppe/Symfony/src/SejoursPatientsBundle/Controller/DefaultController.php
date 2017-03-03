<?php

namespace SejoursPatientsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SejoursPatientsBundle\Entity\Patient;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SejoursPatientsBundle:Default:index.html.twig');
    }
	
	public function ajout_PatientAction(Request $request)
	{
	 $unPatient=new Patient();
	 $formBuilder=$this->createFormBuilder($unPatient);
	 $formBuilder->add('Nom','text',array('label'=>'Saisir le nom du patient : '));
	 $formBuilder->add('Prenom','text',array('label'=>'saisir le prénom du patient :'));
	 $formBuilder->add('dateDeNaissance','date');
	 $formBuilder->add('dateEntree','date');
	 $formBuilder->add('dateSortie','date');
	 $formBuilder->add('save','submit');
	 $form=$formBuilder->getForm();
        //prise en compte de la saisie de l'utilisateur
        if($request->getMethod()=='post')
        {
             $form->bind($request);
             if($form->isValid())
             {
                //on enregistre dans la BDD par l'intermédiaire de Doctrine
                $em=$this>getDoctrine()->getManager();
                $em->persist($unPatient);
                $em->flush();
             }
        }
	 return $this->render('SejoursPatientsBundle:Default:ajout_Patient.html.twig',array('form'=>$form->createView()));
	}
}
