<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends DefaultController
{

    /**
     * @Route("/", name="search")
     */
    public function searchAction(Request $request){
        $fuel = $request->get('fuel');
        $wheels = $request->get('wheels');
        $doors = $request->get('doors');
        $price = explode(",",$request->get('price'));
        $speed = explode(",",$request->get('speed'));
        $em = $this->getDoctrine()->getManager();

        $cars = $em->getRepository('AppBundle:Car')->search($fuel,$wheels,$price,$doors,$speed);
        return $this->render("default/search.html.twig",array(
            'fuel'=>$fuel,
            'wheels'=>$wheels,
            'price'=>$price,
            'speed'=>$speed,
            'doors'=>$doors,
            'cars'=>$cars
        ));
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request){
        return $this->redirectToRoute('product_list');
    }





}
