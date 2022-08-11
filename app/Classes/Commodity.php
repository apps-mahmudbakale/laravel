<?php
namespace  App\Classes;

use App\Models\Commodity AS CommodityModel;

class Commodity
{
    public function setDeals($commodity)
    {
        $model = CommodityModel::findOrfail($commodity);
        $model->no_of_deals += 1;
        $model->save();
        return $model;
    }

    public function setBuys($commodity)
    {
        $model = CommodityModel::findOrfail($commodity);
        $model->no_of_buys += 1;
        $model->save();
        return $model;
    }

    public function setSells($commodity)
    {
        $model = CommodityModel::findOrfail($commodity);
        $model->no_of_sells += 1;
        $model->save();
        return $model;
    }

    public function getCurrentPrice($commodity)
    {
        $model = CommodityModel::findOrfail($commodity);
        return $model->current_price;
    }
}
