<?php
/**
 * @copyright Copyright (c) 2015 arunsahlam
 * @license https://github.com/arunsahlam/yii2-bootstrap4-adminlte/blob/master/LICENSE
 * @link https://github.com/arunsahlam
 */

namespace arunsahlam\bs4adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Callout extends Widget
{
    const TYPE_SUCCESS = 'success';
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';

    /**
     * @var array the HTML attributes for the callout tag
     */
    public $options = [];

    /**
     * @var string callout type. It may be one of these constants:
     * TYPE_SUCCESS
     * TYPE_INFO
     * TYPE_WARNING
     * TYPE_DANGER
     */
    public $type;

    /**
     * @var string callout content
     */
    public $body;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        Html::addCssClass($this->options, 'callout' . (!empty($this->type) ? ' callout-' . $this->type : ''));
        echo Html::beginTag('div', $this->options);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->body;
        echo Html::endTag('div');
    }
}
