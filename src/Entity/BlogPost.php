<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class BlogPost
{
    /**
     * @Assert\Length(min=15)
     */
    private $title;

    /**
     * @Assert\NotBlank
     */
    private $slug;

    /**
     * @Assert\NotBlank
     * @Assert\Length(max=2000)
     */

    /**
     * @Assert\NotBlank
     */
    private $abstract;

    /**
     * @Assert\Email(mode="html5")
     */
    private $author;

    private $content;

    /**
     * @Assert\NotBlank
     */
    private $category;
}