<?php

namespace App\Controller;

use App\View;
use App\Model\User;

class IndexController
{

    public function index()
    {
        $all = new User();
        $users = $all->all();

        View::view('home.index', compact('users'));
    }

    public function csv()
    {
        $save_csv = new User();
        $save_csv->saveCSV();

        header('location: http://localhost/elofy-food/');

    }

    public function store()
    {
        $store = new User();
        $store->store();

        header('location: http://localhost/elofy-food/');
    }

    public function update()
    {
        $update = new User();
        $update->update();

        header('location: http://localhost/elofy-food/');
    }

    public function delete()
    {
        $delete = new User();
        $delete->delete();

        header('location: http://localhost/elofy-food/');
    }
}
