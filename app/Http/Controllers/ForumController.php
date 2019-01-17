<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Propel\Runtime\ActiveQuery\Criteria;


class ForumController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['addReply']]);
    }

    public function index(){
        $o = \TopicsQuery::create()->find()->toArray();
        $f = \ForumsQuery::create('a')
                ->useUsersQuery('b')
                ->endUse()
                ->useTopicsQuery('c')
                ->endUse()
            ->select(array('a.Id','a.CreatedAt','a.Description','a.Title','a.IdUser','a.IdTopic','b.Name','c.Title'))
            ->find();
        return view('foro.index')
        ->with('topics', $o)
        ->with('forums', $f);
    }

    public function show($id){
        $f = \ForumsQuery::create('a')
                ->useUsersQuery('b')
                ->endUse()
                ->useTopicsQuery('c')
                ->endUse()
            ->select(array('a.Id','a.CreatedAt','a.Description','a.Title','a.IdUser','a.IdTopic','b.Name','c.Title'))
            ->findPK($id);

        // Contar numero respuestas
        $nr = \RepliesQuery::create()
             ->filterByIdForum($id)
             ->count();

        //Obtener respuestas de un foro
        $re = \RepliesQuery::create()
              ->filterByIdForum($id)
              ->find()->toArray();


        return view('foro.detalle')
        ->with('topics' , \TopicsQuery::create()->find()->toArray())
        ->with('foro', $f)
        ->with('numR', $nr)
        ->with('replies', $re);

    }

    public function createForum(Request $rq){
        $foro = new \Forums();
        $hoy = Carbon::now();
    	$foro->setTitle($rq->title)
    			 ->setDescription($rq->descrip)
    			 ->setIdUser($rq->iduser)
    			 ->setIdTopic($rq->idtopic)
    			 ->setCreatedAt($hoy)
    			 ->setUpdatedAt($hoy)
    			 ->save();

    	return response(json_encode(["success" => true, "errorMsg" => 'Registro éxitoso']),200);
    }

    public function addReply(Request $rq){
        $reply = new \Replies();
        $hoy = Carbon::now();

        $dc = \RepliesQuery::create()
                    ->filterByNombre($rq->name)
                    ->filterByContent($rq->message)
                    ->count();
        if ($dc > 0){

            return response(json_encode(["success"=>false,"errorMsg"=>"Ya has comentado esto previamente"]));

        }else{

            $reply->setIdForum($rq->idf)
                  ->setContent($rq->message)
                  ->setNombre($rq->name)
                  ->setApellidos($rq->apps)
                  ->setCorreo($rq->mail)
                  ->setIdUser($rq->iduser)
                  ->setCreatedAt($hoy)
                  ->setUpdatedAt($hoy)
                  ->save();
            $idRegistro = $reply->getId();

            // return response(json_encode(["errorMsg"=>'Registro almacenado en la base de datos con folio interno:'.$idRegistro.'',"success"=>true]),200);
            return response(json_encode(["success" => true, "errorMsg" => 'Respuesta enviada se recargará página']),200);
        }
    }

    public static function showForum($id){
        return $foro = \ForumsQuery::create()
                ->filterByIdTopic($id)
                ->find()->toArray();
    }
    
}
