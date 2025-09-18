<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Angel Benitez',

            'title' => 'IT Student & Aspiring Web Developer',

            'phone' => '+639638703842',

            'location' => 'PH, Manila',

            'bio' => 'an IT student passionate about web development and programming',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocJWRFo9rigs8rfVMJcJ873JcDZ7Nq6tqf1bGTcwsTS3yh4uXHs=s360-c-no',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => ['E-commerce Website', 'description'], // Project data

            'experience' => ['Student Assistant - IT Department' => 'Provided technical support, troubleshooting, and basic system maintenance while developing skills in IT operations.'], // Experience data

            'education' => ['Bachelor of Science in Information Technology' => 'Currently pursuing with a focus on web development and programming.'], // Education data

            'social_links' => [
    'GitHub' => 'https://github.com/user050507280221',
    'Instagram' => 'https://www.instagram.com/vn5e1.hygge/',
    'Facebook' => 'https://facebook.com/angel.benitezayado',
    ] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}