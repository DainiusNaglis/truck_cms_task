<?php

namespace App\Forms;

use App\Rules\NameCheck;
use Kris\LaravelFormBuilder\Form;

class TruckForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('brand', 'select', [
                'label' => 'Markė',
                'choices' => ['1' => 'Volvo', '2' => 'VAZ', '3' => 'Mercedes', '4' => 'GAZ'],
                'rules' => 'required'

            ])
            ->add('manufyear', 'number' , [
                'label' => 'Gamybos metai',
                'rules' => 'required|numeric|min:1900|max:2020',
            ])
            ->add('name', 'text' , [
                'rules' => 'required',
                'label' => 'Savininko vardas, pavardė'

            ])
            ->add('owners', 'number', [
                'label' => 'Savininkų skaičius',
                'rules' => 'min:0'
            ])
            ->add('comments', 'textarea', [
                'label' => 'Komentarai'
            ])
            ->add('Pateikti', 'submit')
        ;
    }
}
