<?php
namespace App\Classes;

use App\Models\Wallet as WalletModel;
use Termwind\Components\Li;

class Wallet 
{
    protected $model;

    public function getWalletBalance($user)
    {
        $this->model = WalletModel::where('user_id', $user)->first();
        return $this->model->cash_balance;
    }

    
    public function addToWallet($user, $amount)
    {
        $this->model = WalletModel::where('user_id', $user)->first();

        $this->model->cash_balance = $this->model->cash_balance + $amount;

        return $this;
    }

    public function deductFromWallet($user, $amount)
    {
        $this->model = WalletModel::where('user_id', $user)->first();

        $this->model->cash_balance = $this->model->cash_balance -= $amount;
        $this->model->save();

        return $this->model;
    }

    public function updateLienBalance($user, $amount)
    {
        $this->model = WalletModel::where('user_id', $user)->first();

        $this->model->lien_balance = $this->model->lien_balance += $amount;
        $this->model->save();

        return $this->model;
    }

    public function moveFromLienToWallet($user)
    {
        $this->model = WalletModel::where('user_id', $user)->first();

        $this->model->cash_balance = $this->model->cash_balance += $this->model->lien_balance;
        $this->model->lien_balance = 0;
        $this->model->save();

        return $this->model;
    }
}
