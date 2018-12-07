<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('home/index.html.twig', array(


        ));
    }



	 /**
     * @Route("/weather-basic-large", name="weatherBasicLsrge")
     */
	
	
    public function weatherBasicLargeAction(Request $request)
    {
        $myCity =  $_GET['myCity'];
        $openWeather = $this->get('dwr_open_weather');
        $weather = $openWeather->setType('Weather')->getByCityName($myCity);
        return $this->render('home/weather-basic-large.html.twig', array(
            'weather' => $weather,
        ));
    }
	
	

}