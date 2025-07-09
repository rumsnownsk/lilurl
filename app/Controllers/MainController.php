<?php

//use App\Models\Order;
//use App\Models\User;

namespace App\Controllers;

use App\Models\Link;

class MainController
{
    public function index()
    {
        $test = __METHOD__;
        return view('main',[
            'test' => $test
        ]);

    }

    public function getLilUrl()
    {
        $link = new Link();
        $link->loadData();
        if ($link->validate()){
            $link->storeLink();
            echo json_encode([
                'answer'=>'success',
                'lilUrl'=>$link->shortLink
            ]);
        } else {
            echo json_encode([
                'answer'=>'error',
                'lilUrl'=>'something went wrong'
            ]);
        }

//        echo __METHOD__;
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

}