<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DenunciaController extends Controller
{
    public function altaDenuncia(Request $rq){
    	

    	$dc = \TbldenunciaQuery::create()
    				->filterByTitulo($rq->title)
    				->filterByIdUser($rq->iduser)
    				->count();
    	if ($dc > 0){

    		return response(json_encode(["success"=>false,"errorMsg"=>"Ya has dado de alta esta denuncia previamente"]));

    	}else{
            $hoy = Carbon::now();
             $d = new \Tbldenuncia();
	    	  $d->setTitulo($rq->title)
	    		->setContext($rq->descrip)
	    		->setIdUser($rq->iduser)
	    		->setStatus(1)
                ->setIdTopic($rq->idtopic)
	    		->setResponsable(1)
	    		->setCreatedAt($hoy)
	    		->setUpdatedAt($hoy)
	    	    ->save();

    	  return response(json_encode(["success"=>true,"errorMsg"=>"Alta Éxitosa"]));
    	}
    }

    public static function viewDetail($id){
        return  $denuncia = \TbldenunciaQuery::create('a')
                ->useUsersQuery('b')
                ->endUse()
                ->useTopicsQuery('c')
                ->endUse()
                ->select(array('a.Id','a.Titulo','a.Context','b.Name','c.Title','a.CreatedAt'))
                ->filterByIdUser($id)->find()->toArray();

    }

    public function show(){
        
    }
}
