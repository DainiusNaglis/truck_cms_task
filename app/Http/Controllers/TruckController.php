<?php

namespace App\Http\Controllers;

use App\Rules\NameCheck;
use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Forms\TruckForm;

class TruckController extends BaseController
{
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\TruckForm::class, [
            'method' => 'POST',
            'url' => route('truckslist')
        ]);

        return view('create', compact('form'));
    }

    use FormBuilderTrait;

//    public function store(Request $request)
//    {
//        $form = $this->form(TruckForm::class);
//
//        $form->validate(['name' => new NameCheck()]);
//        $form->validate(['manufyear' => 'required']);
//
//        if (!$form->isValid()) {
//            return redirect()->back()->withErrors($form->getErrors())->withInput();
//        }
//
//    }


    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\TruckForm::class);

        $form->validate(['name' => new NameCheck()]);

        $brand = $_POST['brand'];
        $manufyear = $_POST['manufyear'];
        $name = $_POST['name'];
        $owners = $_POST['owners'];
        $comments = $_POST['comments'];

        DB::table('trucks_lists') -> insert(
            [
                'marke_id' => $brand,
                'gamybos_metai' => $manufyear,
                'vardas_pavarde' => $name,
                'savinink_sk' => $owners,
                'komentaras' => $comments
            ]
        );

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        else{
            return redirect()->route('truckslist');
        }


        // Do saving and other things...
    }
}
