<?php
namespace App\Classes;

use App\Models\Transaction;
use Termwind\Components\Li;
use App\Models\Wallet as WalletModel;

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

        return $this->model;
    }

    public function deductFromWallet($user, $amount, $why)
    {
        $this->model = WalletModel::where('user_id', $user)->first();

        $this->model->cash_balance = $this->model->cash_balance -= $amount;
        $this->model->save();
        $ref ='RIMACX'.time() . rand(10*45, 100*98);
        $transaction = Transaction::create([
                'user_id' => $user,
                'amount' => $amount,
                'type' => 'debit',
                'reference_no' => $ref,
                'description' => 'Debit due to '.$why,
        ]);

        return $this->model;
    }

    public function updateLienBalance($user, $amount)
    {
        $this->model = WalletModel::where('user_id', $user)->first();

        $this->model->lien_balance = $this->model->lien_balance += $amount;
        $this->model->save();

        return $this->model;
    }

    public function moveFromLienToWallet($user, $why)
    {
        $this->model = WalletModel::where('user_id', $user)->first();

        $this->model->cash_balance = $this->model->cash_balance += $this->model->lien_balance;
        $amount = $this->model->lien_balance;
        $this->model->lien_balance = 0;
        $this->model->save();

        $ref ='RIMACX'.time() . rand(10*45, 100*98);
        $transaction = Transaction::create([
                'user_id' => $user,
                'amount' => $amount,
                'type' => 'credit',
                'reference_no' => $ref,
                'description' => 'Debit due to '.$why,
        ]);
        return $this->model;
    }
}
