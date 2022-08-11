<?php

namespace App\Classes;
use App\Classes\Commodity;
use App\Exceptions\GeneralException;
use App\Models\Order As OrderModel;


class Order {

   protected $commodity, $model, $security, $wallet;


    public function create(array $data)
    {
        $this->commodity = new Commodity();
        $this->wallet = new Wallet();
        $this->security = new Security();

        if($data['order_type'] == 'buy') {

            if ($this->wallet->getWalletBalance(auth()->user()->id) == 0) {
                throw new  GeneralException('You have no money in your wallet');
            } elseif ($this->wallet->getWalletBalance(auth()->user()->id) < ($data['qty'] * $this->commodity->getCurrentPrice($data['commodity_id']))) {
                throw new  GeneralException('Insufficient funds in your wallet');
            }

                $this->model = OrderModel::create(array_merge($data, ['user_id' => auth()->user()->id]));
                $this->commodity->setBuys($data['commodity_id']);
                $this->commodity->setDeals($data['commodity_id']);

                $this->security->addToSecurities(auth()->user()->id, $data['commodity_id'], $data['qty']);
          
        } 
        if($data['order_type'] == 'sell') {
            $this->model = OrderModel::create(array_merge($data, ['user_id' => auth()->user()->id]));
            $this->commodity->setSells($data['commodity_id']);
            $this->commodity->setDeals($data['commodity_id']);
            
            $this->wallet->updateLienBalance(auth()->user()->id, $data['qty'] * $this->commodity->getCurrentPrice($data['commodity_id']));
            $this->security->deductFromSecurities(auth()->user()->id, $data['commodity_id'], $data['qty']);
        }

       
        return $this->model;
    }

}