<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        $order = Order::find(5);
        echo $order->status . "item <b>" . $order->item->nama . "</b> selesai.";

        $allOrders = Order::all();
        foreach ($allOrders as $order){
            echo "Item " . $order->item->nama . " selesai<br>";
        }
    }

    public function insert(){

        $order = new Order();
        $order->status = 'Selesai';
        $order->save();

        $newItem = new Item();
        $newItem->nama = 'Kale';
        $newItem->harga = 10000;
        $newItem->stok = 10;
        newItem->save();

        $newOrder = new Order();
        $newOrder->status = 'Selesai';
        $newOrder->item()->associated($newItem);
        $newOrder->save();
    }

    public function delete(){
        $order = Order::find(4);
        $order->delete();
        $selling->book()->delete();
    }
}
