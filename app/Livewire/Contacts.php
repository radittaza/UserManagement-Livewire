<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Models\Contact;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Lazy]
class Contacts extends Component
{     
    public function placeholder()
    {
        return <<<'HTML'
        <div class="isolate bg-white px-6 py-12 animate-pulse">
            <div class="mx-auto max-w-2xl text-center space-y-4">
                <div class="h-10 bg-gray-200 rounded w-1/2 mx-auto"></div>
                <div class="h-4 bg-gray-200 rounded w-3/4 mx-auto"></div>
            </div>
        </div>
        HTML;
    }
      
    public ContactForm $form;

    public function createNewMessage(){
        sleep(1);
        $this->validate();

        Contact::create($this->form->all());

        $this->reset();

        session()->flash('message', 'Message sent!');
    }
    public function render()
    {
        sleep(1);
        return view('livewire.contacts');
    }
}
