<?php
namespace App\Observers;

use App\Notifications\NewItem;
use App\order;
use App\User;

class ItemObserver
{
    public function created(order $product)
    {
        $author = $product->user;
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new NewItem($product,$author));
        }
    }
}