@extends('layouts.app')

<?php

    use SweetAlert2\Laravel\Swal;

     Swal::fire([
            'title' => 'Laravel + SweetAlert2 = <3',
            'text' => 'This is a simple alert using SweetAlert2',
            'icon' => 'success',
            'confirmButtonText' => 'Cool'
        ]);

        ?>