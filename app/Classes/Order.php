<?php

namespace App\Classes;

use App\Classes\Commodity;
use App\Exceptions\GeneralException;
use App\Models\Order as OrderModel;


class Order
{

    protected $commodity, $model, $security, $wallet;


    public function create(array $data)
    {
        $this->commodity = new Commodity();
        $this->wallet = new Wallet();
        $this->security = new Security();

        if ($data['order_type'] == 'buy') {

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
        if ($data['order_type'] == 'sell') {
            if ($this->security->securitiesQty(auth()->user()->id, $data['commodity_id']) >= 1) {
                $this->model = OrderModel::create(array_merge($data, ['user_id' => auth()->user()->id]));
                $this->commodity->setSells($data['commodity_id']);
                $this->commodity->setDeals($data['commodity_id']);

                $this->wallet->updateLienBalance(auth()->user()->id, $data['qty'] * $this->commodity->getCurrentPrice($data['commodity_id']));
                $this->security->deductFromSecurities(auth()->user()->id, $data['commodity_id'], $data['qty']);
            } else {
                throw new  GeneralException('Insufficient Security Quantity');
            }
        }


        return $this->model;
    }

    public function approveOrder($id)
    {
        $this->model = OrderModel::findOrFail($id);
        // dd($this->model);
        if($this->model->order_type == 'buy'){
            $this->wallet = new Wallet();
            $this->commodity = new Commodity();

            $amount = $this->commodity->getCurrentPrice($this->model->commodity_id) * $this->model->qty;

            $this->wallet->deductFromWallet($this->model->user_id, $amount);
            
        }elseif($this->model->order_type == 'sell'){

            $this->wallet = new Wallet();
            $this->wallet->moveFromLienToWallet($this->model->user_id);
        }
       

        return $this->model;
    }
}
