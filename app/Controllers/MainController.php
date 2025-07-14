<?php
namespace App\Controllers;

use App\Models\Link;

class MainController
{
    public function index()
    {
        return view('main');
    }

    public function getLilUrl()
    {
        $link = new Link();
        $link->loadData();
        if ($link->validate()){
            $link->storeLink();
            echo json_encode([
                'answer'=>'success',
                'lilUrl'=>$link->shortLink,
                'history'=> view()->renderPartial("incs/history", [
                    'history'=>db()->query('SELECT * FROM urls ORDER BY id DESC limit 10')->get(),
                ])
            ]);
        } else {
            echo json_encode([
                'answer'=>'error',
                'lilUrl'=>'something went wrong'
            ]);
        }
        die;
    }

    public function getOriginUrl():void
    {
        $shorty = get_route_param('shortLink');
        $res = db()->findOne('urls', $shorty, 'shorty');

        if ($res){
            try {
                response()->redirect($res['originlink']);
            } catch (\Exception $e) {
                die($e->getMessage());
            }
        }
    }

    public function getHistory()
    {
        $data = db()->query('SELECT * FROM urls ORDER BY id DESC limit 10')->get();

        echo json_encode([
            'answer'=>'success',
            'history'=> view()->renderPartial("incs/history", [
                'history'=>$data,
            ])
        ]);
    }


}