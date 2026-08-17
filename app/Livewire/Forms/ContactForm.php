<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required|min:3')]
    public $name = '';
    #[Validate('required|email:dns')]
    public $email = '';
    #[Validate('required|min:10')]
    public $subject = '';
    #[Validate('required|min:20')]
    public $message = '';
}
