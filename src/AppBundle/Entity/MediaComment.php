<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class MediaComment
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class MediaComment extends Comment
{
    /**
     * @var Media
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Media", inversedBy="comments")
     * @ORM\JoinColumn(name="model_id", referencedColumnName="id", nullable=false)
     */
    private $media;

    /**
     * @return Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param Media $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }
}
