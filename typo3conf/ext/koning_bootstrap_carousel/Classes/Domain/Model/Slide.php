<?php
namespace Keizer\KoningBootstrapCarousel\Domain\Model;

/**
 * Slide model
 *
 * @package Keizer\KoningBootstrapCarousel\Domain\Model
 */
class Slide extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $linkText;

    /**
     * @var string
     */
    protected $link;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @lazy
     */
    protected $visual;

    /**
     * @var string
     */
    protected $visualSize;

    /**
     * @var string
     */
    protected $visualPosition;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getLinkText()
    {
        return $this->linkText;
    }

    /**
     * @param string $linkText
     * @return void
     */
    public function setLinkText($linkText)
    {
        $this->linkText = $linkText;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getVisual()
    {
        return $this->visual;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $visual
     * @return void
     */
    public function setVisual(\TYPO3\CMS\Extbase\Domain\Model\FileReference $visual)
    {
        $this->visual = $visual;
    }

    /**
     * @return string
     */
    public function getVisualSize()
    {
        return $this->visualSize;
    }

    /**
     * @param string $visualSize
     * @return void
     */
    public function setVisualSize($visualSize)
    {
        $this->visualSize = $visualSize;
    }

    /**
     * @return string
     */
    public function getVisualPosition()
    {
        return $this->visualPosition;
    }

    /**
     * @param string $visualPosition
     * @return void
     */
    public function setVisualPosition($visualPosition)
    {
        $this->visualPosition = $visualPosition;
    }
}
