<?php
namespace SemanticUi\View\Helper;

use Cake\View\Helper;
use Cake\View\Helper\HtmlHelper;
use Cake\View\Helper\UrlHelper;
use Cake\View\StringTemplateTrait;

/**
 * Class UiHelper
 * @package SemanticUi\View\Helper
 * @property HtmlHelper $Html
 * @property UrlHelper $Url
 */
class UiHelper extends Helper
{
    use StringTemplateTrait;

    public $helpers = ['Html', 'Url'];

    /**
     * Default config for this class
     *
     * @var array
     */
    protected $_defaultConfig = [
        'templates' => [
            'iconBefore' => '<i class="{{icon}} icon"></i>{{content}}',
        ]
    ];

    public function link($title, $url = null, array $options = [])
    {
        if (isset($options['icon'])) {
            $title = $this->templater()->format('iconBefore', [
                'icon' => $options['icon'],
                'content' => $title
            ]);
            $options['escape'] = false;
            unset($options['icon']);
        }
        return $this->Html->link($title, $url, $options);
    }

}
