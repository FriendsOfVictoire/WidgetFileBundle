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
     * @var text
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="file_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $file;

    /**
     * @var string
     *
     * @ORM\Column(name="linkLabel", type="string", length=255)
     */
    protected $linkLabel;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     *
     * @return String
     */
    public function __toString()
    {
        return 'File #'.$this->id;
    }

    /**
     * Set file
     *
     * @param string $file
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

    /**
     * Set linkLabel
     *
     * @param string $linkLabel
     */
    public function setLinklabel($linkLabel)
    {
        $this->linkLabel = $linkLabel;

        return $this;
    }

    /**
     * Get linkLabel
     *
     * @return string
     */
    public function getLinklabel()
    {
        return $this->linkLabel;
    }

}
