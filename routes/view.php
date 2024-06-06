<?php
    use Illuminate\Support\Facades\View;
    
    return View::first(['custom.admin', 'admin'], $data);
    if (View::exists('emails.customer')) {
        // ...
    }

    return view('greeting', ['name' => 'Ariel']);

    return view('greeting')
            ->with('name', 'Victoria')
            ->with('occupation', 'Astronaut');
?>