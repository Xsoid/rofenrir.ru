<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\ext\widgets;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs as BreadcrumbsExt;

class Breadcrumbs extends BreadcrumbsExt
{
    public $linkClass = '';
    public $activeLinkClass = 'active';
    public $activeLinkTag = '';

    /**
     * @inheritdoc
     */
    protected function renderItem($link, $template)
    {
        $encodeLabel = ArrayHelper::remove($link, 'encode', $this->encodeLabels);
        if (array_key_exists('label', $link)) {
            $label = $encodeLabel ? Html::encode($link['label']) : $link['label'];
        } else {
            throw new InvalidConfigException('The "label" element is required for each link.');
        }
        if (isset($link['template'])) {
            $template = $link['template'];
        }
        if (isset($link['url'])) {
            $options = $link;
            unset($options['template'], $options['label'], $options['url']);
            if ($this->linkClass) {
                if (isset($options['class'])) {
                    $options['class'] .= ' ';
                } else {
                    $options['class'] = '';
                }
                $options['class'] .= $this->linkClass;
            }
            $link = Html::a($label, $link['url'], $options);
        } elseif ($this->activeLinkTag) {
            $options = [];
            if ($this->activeLinkClass) {
                if (isset($options['class'])) {
                    $options['class'] .= ' ';
                } else {
                    $options['class'] = '';
                }
                $options['class'] .= $this->activeLinkClass;
            }
            $link = Html::tag($this->activeLinkTag, $label, $options);
        } else {
            $link = $label;
        }
        return strtr($template, ['{link}' => $link]);
    }
}
