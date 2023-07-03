<?php

class NewsSimple
{
    public function __construct()
    {
    }

    public function build($title, $subtitle, $description, $image, $imageDescription, $date)
    {
        return "
        <article class='box page-content'>
            <header>
                <h2>{$title}</h2>
                <p>{$subtitle}</p>
                <ul class='meta'>
                    <li class='icon fa-clock'>{$date}</li>
                </ul>
            </header>
        
            <section>
                <span class='image featured'><img src='{$image}' alt='' /></span>
                <p>
                {$imageDescription}
                </p>
            </section>
        
            {$description}
        
        </article>
        ";
    }
}
