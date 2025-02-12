<?php

use App\Livewire\Invoices;
use App\Livewire\CreateInvoice;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', Invoices::class)->name('invoices.index');

Route::get('/invoices/create', CreateInvoice::class)->name('invoices.create');

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/Laravel-Livewire-Test/public/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/Laravel-Livewire-Test/public/livewire/update', $handle);
});
