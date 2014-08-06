<?php
namespace Victoire\Widget\FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetFile
 *
 * @ORM\Table("vic_widget_file")
 * @ORM\Entity
 */
class WidgetFile extends Widget
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="file_id", referencedColumnName="id", onDelete="CASCADE")
     *
     */
    private $file;

    /**
     * Set title
     *
     * @param string $title
     *
     * @return WidgetFile
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return WidgetFile
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

}
