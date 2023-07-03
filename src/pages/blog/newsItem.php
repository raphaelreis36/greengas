<?php

class NewsItem
{
    // private $title;
    // private $subtitle;
    // private $description;
    // private $image;
    // private $date;

    function __construct(private $title, private $subtitle, private $description, private $image, private $imageDescription, private $date)
    {
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function setImageDescription($imageDescription)
    {
        $this->imageDescription = $imageDescription;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getSubtitle()
    {
        return $this->subtitle;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getImageDescription()
    {
        return $this->imageDescription;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function render()
    {
        return "
        <article class='box page-content'>
            <header>
                <h2>{$this->title}</h2>
                <p>{$this->subtitle}</p>
                <ul class='meta'>
                    <li class='icon fa-clock'>{$this->date}</li>
                </ul>
            </header>
        
            <section>
                <span class='image featured'><img src='{$this->image}' alt='' /></span>
                <p>
                {$this->imageDescription}
                </p>
            </section>
        
            {$this->description}
        
        </article>
        ";
    }
}
