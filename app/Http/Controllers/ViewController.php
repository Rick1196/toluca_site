<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('home')
            ->with('modules', $this->getAllowedRoutes());
    }
    public static function getAllowedRoutes(){
        $user = Auth::user();
        $user->id;
        $modulos = \RelperrolQuery::create()
            ->select(array('Cveentrol','Cvemodsis'))
            ->useCatmodsisQuery()
            ->orderByOrdmodsis()
            ->endUse()
            ->filterByCveentrol($user->cveentrol)
            ->groupByCveentrol()
            ->groupByCvemodsis()
            ->find();
        $menu = array();
        foreach ($modulos as $index => $modulo){
            $busqueda = \RelperrolQuery::create()->select(array('cvedirsis'))->filterByCveentrol($modulo['Cveentrol'])->filterByCvemodsis($modulo['Cvemodsis'])->find()->toArray();
            $links =\CatdirsisQuery::create()->filterByCvedirsis($busqueda)->find()->toArray();
            array_push($menu, array(
                "dir"=>\CatmodsisQuery::create()->select('Dirmodsis')->findOneByCvemodsis($modulo['Cvemodsis']),
                "nom"=>\CatmodsisQuery::create()->select('Nommodsis')->findOneByCvemodsis($modulo['Cvemodsis']),
                "icn"=>\CatmodsisQuery::create()->select('Icnmodsis')->findOneByCvemodsis($modulo['Cvemodsis']),
                "links"=> $links
            ));

        }
        return $menu;
    }

    public function getView($view, Request $request){
        switch ($view){
            //Administración
            case 'detalles':
                return $this->getViewDetalles();
                break;
            default:
                return $this->getViewNotFound();
                break;

        }
    }

    public function getViewDetalles(){
        return view('foro.detalle');
    }
    public function getViewNotFound(){
        return view('Errors.404');
    }
}
