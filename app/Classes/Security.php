<?php

namespace App\Classes;

use App\Models\Security as SecurityModel;

class Security 
{
    protected $model;
    public function addToSecurities($user, $commodity, $qty)
    {
        if ($this->model = SecurityModel::where('user_id', $user)->where('commodity_id', $commodity)->first())
        {
            $this->model->security_qty = $this->model->security_qty + $qty;
            $this->model->save();
        }
        else 
        {
            $this->model = SecurityModel::create([
                'commodity_id' => $commodity,
                'user_id' => $user,
                'security_qty' => $qty
            ]);
        }

        return $this->model;

    }


    public function deductFromSecurities($user, $commodity, $qty)
    {
        $this->model = SecurityModel::where('user_id', $user)->where('commodity_id', $commodity)->first();

        $this->model->security_qty = $this->model->security_qty - $qty;

        $this->model->save();

        return $this->model;
    }

    public function securitiesQty($user, $commodity)
    {
        $this->model = SecurityModel::where('user_id', $user)->where('commodity_id', $commodity)->first();

        return $this->model->security_qty;
    }
}