<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'Angel Benitez',
            'title' => 'IT Student & Aspiring Web Developer',
            'phone' => '+639638703842',
            'location' => 'Taguig & Caloocan, PH',
            'bio' => 'An IT student passionate about web development and programming.',
            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocJWRFo9rigs8rfVMJcJ873JcDZ7Nq6tqf1bGTcwsTS3yh4uXHs=s360-c-no',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [
                'Portfolio Website (HTML & CSS)' => [
                    'details' => 'My first-year project that introduced me to web development. Built with HTML and CSS, focusing on layout, design, and responsive structure.',
                    'link' => 'https://user050507280221.github.io/vn5e1_portfolio/index.html'
                ],
                'Photoshop Design Project' => [
                    'details' => 'Created layouts, posters, and digital designs during activities and practice sessions, learning how to use Photoshop tools for web and graphic design.',
                    'link' => 'https://lh3.googleusercontent.com/drive-storage/AJQWtBMp0t0srT0WKyL3G4ZFT0YRvo9S5ESJ8H1TBqMhINd00BB4QM9Bbz76-dbxvLqGQcUMeXsNmmTx98p9g2dqG4X0L2Zbwt-IbC1qSxXrlDoc66E=w1920-h912?auditContext=forDisplay'
                ]
            ],

            'experience' => [
                'Student Assistant - IT Department' => 'Provided technical support, troubleshooting, and basic system maintenance while developing skills in IT operations.'
            ],

            'education' => [
                'Bachelor of Science in Information Technology' => 'Currently pursuing, with a focus on web development and programming.',
                'Science, Technology, Engineering, and Mathematics (STEM)' => 'Completed senior high school under the STEM strand.'
            ],

            'social_links' => [
                'GitHub' => 'https://github.com/user050507280221',
                'Instagram' => 'https://www.instagram.com/vn5e1.hygge/',
                'Facebook' => 'https://facebook.com/angel.benitezayado',
                'Email' => 'angelbenitezayado477@gmail.com'
            ],

            'about' => [
                'An IT student who loves exploring web development and programming. 
                I enjoy learning new things, being creative, and taking on challenges that help me grow. 
                Beyond coding, I love exploring new ideas, journaling, and finding creative ways to learn. 
                I also enjoy reading, watching, and stepping out of my comfort zone to face new challenges. 
                I am also a student assistant in the IT department, and by God’s grace, I have gained some technical knowledge along the way.
                I know that I still have much to learn, but I am willing and eager to grow in this field.'
            ]
        ];

        return view('portfolio.index', compact('portfolio'));
    }
    
}
